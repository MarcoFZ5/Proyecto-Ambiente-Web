<?php 
    require_once(__DIR__ . '/../Model/conexionModel.php');

    class loginModel {

        public static function validarUsuario($data) {
            try {
                
                $sql = "'" . $data['username'] . "'" . ",'" . $data['clave'] . "'";
                $resultado = conexionModel::get_data("call pr_get_validarUsuario($sql);");

                return $resultado;

            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    
    }

?>