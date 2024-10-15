<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');

        .centrar {
            display: flex;
            justify-content: center;
            height: 15vh;
            padding-top: 40px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #f8f9fa;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        table th {
            background-color: #0d6efd;
            color: white;
            padding: 12px;
            font-weight: bold;
            text-align: center;
        }

        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        table tr:nth-child(even) {
            background-color: #f0f0f4;
        }

        body {
            font-family: 'Gotu', sans-serif;
            margin-bottom: 50px;
        }
    </style>

</head>
<body>
    
    <div class="centrar">
        <h1>Información Personal</h1>
    </div>

    <div>
        <?php
            echo 
            "<table>

                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Url</th>
                    <th>Sexo</th>
                    <th>Número Convivientes</th>
                    <th>Aficiones</th>
                    <th>Menú Favorito</th>
                </tr>
                <tr>
                    <td>".$nombre."</td>
                    <td>".$apellidos."</td>
                    <td>".$email."</td>
                    <td>".$url."</td>
                    <td>".$sexo."</td>
                    <td>".$numConvivientes."</td>
                    <td>".$aficiones."</td>
                    <td>".$menuFav."</td>
                </tr>

            </table>";
        ?>
    </div>

</body>
</html>
