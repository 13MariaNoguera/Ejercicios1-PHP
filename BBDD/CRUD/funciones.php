
<?php

    require_once("conexionBD.php");

    function mostrarTabla() {
        $tabla = "";
        include("datos.php");
        if (count($dato) > 0) {
            $tabla .=  "<table>".
                            "<thead>".
                                "<tr class='encabezado'>".
                                    "<th>Título</th>".
                                    "<th>Descripción</th>".
                                    "<th>Creación</th>".
                                    "<th>Acción</th>".
                                "</tr>".
                            "</thead>";

            foreach ($dato as $registro) {
                $tabla .= "<tbody>".
                                "<tr>".
                                    "<td>".$registro['title']."</td>".
                                    "<td>".$registro['description']."</td>".
                                    "<td>".$registro['created_at']."</td>".
                                    "<td class='btnContainer'>".
                                        "<a href='delete.php?id=".$registro['id']."'><i class='fa-solid fa-trash'></i></a>".
                                        "<a href='updatePage.php?id=".$registro['id']."'><i class='fa-solid fa-pen-to-square'></i></a>".
                                    "</td>".
                                "</tr>".
                            "</tbody>";
            }

            $tabla .= "</table>";

            return $tabla;

        } else {
            return "<p class='noHayDatos'>No se ha subido nigún Título todavía.</p>";
        }
    }
?>