<?php	
    
    session_start(); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $_SESSION['partidoA'] = $_POST["partidoA"];
        $_SESSION['partidoB'] = $_POST["partidoB"];
        $_SESSION['partidoC'] = $_POST["partidoC"];
        $_SESSION['partidoD'] = $_POST["partidoD"];

        $_SESSION['votosA'] = $_POST["votosA"];
        $_SESSION['votosB'] = $_POST["votosB"];
        $_SESSION['votosC'] = $_POST["votosC"];
        $_SESSION['votosD'] = $_POST["votosD"];

        $_SESSION['escanyos'] = $_POST["escanyos"];


        function sacarVotos($votos) {

            $listadoVotos = [];
            $contador = 0;

            for ($i = 1; $i <= $_SESSION['escanyos']; $i++) {
                $listadoVotos[$contador] = round($votos / $i, 2);
                $contador++;
            }
            
            return $listadoVotos;
        }


        function sacarMayoresVotos() {
            $votosA = sacarVotos($_SESSION['votosA']);
            $votosB = sacarVotos($_SESSION['votosB']);
            $votosC = sacarVotos($_SESSION['votosC']);
            $votosD = sacarVotos($_SESSION['votosD']);
    
            $todosLosVotos = array_merge($votosA, $votosB, $votosC, $votosD);
    
            rsort($todosLosVotos);
    
            return array_slice($todosLosVotos, 0, 7);
        }

        $_SESSION['mayoresVotos'] = sacarMayoresVotos();

        include("hont.view.php");
    
    } else {
        header("Refresh:3; url=hont.html");
        echo "Completa correctamente el formulario.";
    }
    
?>