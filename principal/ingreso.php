<?php 
    if(isset($_POST)){
        
        require_once "../include/conexion.php";
        
        session_start();
        
        // Recolecta los valores del formulario
        
        $mail = isset($_POST['email']) ? $_POST['email'] : FALSE;
        
        $password = isset($_POST['password']) ? $_POST['password'] : FALSE;
    
            
        // Array de errores
        $errores = array();
            
        //Validar los datos antes de guardarlos en la base de datos
        //Validacion Nombre
        //Validacion Correo
        if(!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $mail_validado = true;
        }else{
            $mail_validado = false;
            $errores['mail'] = "El mail no es valido";
        }
            
        //Validacion Password
        if(!empty($password)){
            $password_validado = true;
        }else{
            $password_validado = false;
            $errores['password'] = "El password no es valido";
        }
            
        //var_dump($errores);
            
        $guardar_usuario = false;
            
        if(count($errores)==0){
            $guardar_usuario = true;
                
            // Cifrar la contraseña
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
            
            // Verificar la contraseña
            //password_verify($password,  $password_segura);
                                
            
            // INSERTAR USUARO EN LA TABLA DE USUARIOS DE LA BDD    
            $sql = "INSERT INTO usuarios VALUES(NULL, '$mail', '$password_segura', CURDATE());";
            $guardar = mysqli_query($db, $sql);
            
            //var_dump(mysqli_error($db));
            //die();
            
            if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con exito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
            }      
        }else{
            $_SESSION['errores'] = $errores;
        }
    }
    header('../principal/inicio.php');
?>


