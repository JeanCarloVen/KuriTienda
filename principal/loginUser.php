<?php
    require_once '../include/conexion.php';
    //Recoger datos del formulario
    if(isset($_POST)){   
        
            //Borrar error Antiguo
            if(isset($_SESSION['error_login'])){
                session_unset($_SESSION['error-login']);
            }
        
            $mail = trim($_POST['mail']);
            $password = $_POST['password'];
            
            //Consulta para comprobar las credenciales del usuario
            $consulta = "SELECT * FROM usuarios WHERE correo = '$mail'";
            $login = mysqli_query($db, $consulta);
            
            //var_dump($consulta);
            //die();
            
            if($login && mysqli_num_rows($login)==1){
                $usuario = mysqli_fetch_assoc($login); // Todo lo que esta incluido en la variable login lo guarda en usuario
                //var_dump($usuario);
                //die();
                //Comprobar la contraseña
                $verify = password_verify($password, $usuario['password']); //devuelve un true o false
                
                //var_dump($verify);
                //die();
                
                if($verify){
                    //Utilizar una sesion para guardar los datos del usuario logeado
                    $_SESSION['usuario'] = $usuario;
                    
                    if(isset($_SESSION['error-login'])){
                        session_unset($_SESSION['error-login']);
                    }
                    
                }else{
                    //Si algo falla enviar una sesión con el fallo
                    $_SESSION['error-login'] = "Login incorrecto";
                }
            }else{
                //Si algo falla enviar una sesión con el fallo
                $_SESSION['error-login'] = "Login incorrecto";
            }

    }
    
    if(isset($_SESSION['error-login'])){
        //echo "ERROR USUARIO NO LOGEADO";
        header('Location:login.php');
    }else{
        // Redirigir al index.php con usuario Logeado
        //echo "USUARIO LOGEADO";
        header('Location:inicio.php');

    }
    
    
    

?>
