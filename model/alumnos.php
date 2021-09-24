<?php
    include ('conectadb.php');
    class alumnos {
        public $id;
        public $alumno;
        public $nombre;
        public $sexo;
        public function __construct($id, $alumno, $nombre, $sexo) {
            $this->id = $id;
            $this->alumno = $alumno;
            $this->nombre = $nombre;
            $this->sexo = $sexo;
        }
        public static function consultar() {
            $mysqli = conectadb::dbmysql();
            $consulta = "select * from alumnos";
            echo ('<br>');

            // echo ($consulta);
            $resultado = mysqli_query($mysqli, $consulta);
            if (!$resultado) {
                echo 'No pudo Realizar la consulta a la base de datos';
                exit;
            }
            echo '<h1>Hola</h1>';
            $listaAlumnos = [];
            while ($alumno = mysqli_fetch_array($resultado)) {
                $listaAlumnos[] = new alumnos($alumno['id'],$alumno['alumno'], $alumno['nombre'], $alumno['sexo']);
            }
            $mysqli->close();
            return $listaAlumnos;
        }
        
        public static function login($_user, $_password) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('SELECT nombre, contrasenia FROM login WHERE nombre = ? and contrasenia = ?');
            $stmt->bind_param('ss', $_user, $_password);
            $stmt->execute();
            $resultado = $stmt->get_result();

            while ($filasql = mysqli_fetch_array($resultado)) {
                // Imprimir por Arreglo Asociado
                //echo $filasql['nombre'] . ' ';
                //echo $filasql['contrasenia'] . ' ';
                // initialize session variables
                session_start();
                // $_SESSION['loggedDataTime'] = datatime();
                $_SESSION['loggedUserName'] = $filasql['nombre'] ;
                
                $acceso = false;
                if ($stmt->affected_rows == 1) {
                    $acceso = true;
                }
                $mysqli->close();
                return $acceso;
            }
        }
    }