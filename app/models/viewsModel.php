<?php

namespace app\models;
class viewsModel
{
    protected function obtenerVistaModelo($vista)
    {
        $listaBlanca = ["dashboard"];

        if (is_array($vista, $listaBlanca)) {
            if (is_file("./app/views/" . $vista . "-view.php")) {
                $contenido = "./app/views/" . $vista . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }

}

