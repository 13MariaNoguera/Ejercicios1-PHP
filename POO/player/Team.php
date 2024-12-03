<?php

    include_once("index.php");

    class Team {

        public $name;
        public $players = [];
        public $matches = 0;
        public $won = 0;
        public $lost = 0;
        public $tie = 0;
        public $scoreGoals = 0;
        public $concededGoals = 0;

        // Constructor
        public function __construct($nombreEquipo) {
            $this->name = $nombreEquipo;
        }

        // Método Render (para mostrar el equipo)
        public function Render() {
            echo "<div class='contenedorPrincipal'>";
            echo    "<div class='contenedorDatos'>";
            echo        "<div class='contenedorInfo'>";
            echo            "<p><span>Equipo: </span>{$this->name}</p>";
            echo            "<p><span>Partidas Jugadas: </span>{$this->matches}</p>";
            echo            "<p><span>Victorias: </span>{$this->won}</p>";
            echo            "<p><span>Derrotas: </span>{$this->lost}</p>";
            echo            "<p><span>Empates: </span>{$this->tie}</p>";
            echo            "<p><span>Goles Marcados: </span>{$this->scoreGoals}</p>";
            echo            "<p><span>Goles Recibidos: </span>{$this->concededGoals}</p>";
            echo            "<p class='pJugadores'><span>Jugadores: </span></p>";
            echo        "</div>";
            echo    "</div>";
            
            echo    "<div class='contenedorTabla'>";
            echo        "<table>
                            <tr>
                                <th>Jugador</th>
                                <th>Edad</th>
                                <th>País</th>
                                <th>Dorsal</th>
                                <th>Posición</th>
                                <th>Objetivos</th>
                                <th>Partidas Jugadas</th>
                                <th>Minutos</th>
                                <th>Tarjetas Amarillas</th>
                                <th>Tarjetas Rojas</th>
                            </tr>";

            foreach ($this->players as $jugador) {
                echo "<tr>";
                echo "<td>{$jugador->name} {$jugador->lastName}</td>";
                echo "<td>{$jugador->Age()}</td>";
                echo "<td>{$jugador->country}</td>";
                echo "<td>{$jugador->dorsal}</td>";
                echo "<td>{$jugador->position}</td>";
                echo "<td>{$jugador->goals}</td>";
                echo "<td>{$jugador->matches}</td>";
                echo "<td>{$jugador->minutes}</td>";
                echo "<td>{$jugador->yellowCard}</td>";
                echo "<td>{$jugador->redCard}</td>";
                echo "</tr>";
            }

            echo        "</table>";
            echo    "</div>";
            echo "</div>";           
        }

        // Método SignPlayer
        public function SignPlayer($player) {
            $this->players[] = $player;
        }
    }

?>