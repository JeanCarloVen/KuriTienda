<?php require_once '../include/header.php'; ?>
<?php require_once '../include/helpers.php'; ?>
    <body>
        <br>
        <h1 align="center">CREAR UNA CUENTA</h1><br><br>
        <div id="register" class="register-box"><br>
            <img src="../images/logo.png" class="avatar" alt="Avatar Image">
            <!-- Mostrar errores -->
            <?php if(isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                    <?=$_SESSION['completado']?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])):?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['errores']['general']?>
                </div>
            <?php endif;?>
            
            <form id="formulario" action="ingreso.php" method="POST">

                    <label for="email">Tu correo</label> <br>
                    <input type="email" id="mail" name="email" size="35" required/> <br><br>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mail') : '' ?> 
                    
                    <label for="password">Contraseña</label> <br>
                    <input type="password" id="password" name="password" size="35"
                            placeholder="Debe de tener al menos 6 carácteres" 
                            required/> <br><br>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>
                    
                    <label for="Valpassword">Vuelve a escribir la contraseña</label> <br>
                    <input type="password" id="confirmPassword" name="Valpassword" size="35"
                            placeholder="Debe de tener al menos 6 carácteres" 
                            required/> <br><br>
                    
                    <input type="submit" value="Crear tu cuenta" name="submit" onclick="return Validate()"/><br><br>
            </form>
            <?php borrarErrores(); ?>
         </div>  
        
        <script type="text/javascript">
            function Validate() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
                if (password !== confirmPassword) {
                    alert("Passwords do not match.");
                return false;
                }
            return true;
            }
        </script>
        
       </body>
</html>




