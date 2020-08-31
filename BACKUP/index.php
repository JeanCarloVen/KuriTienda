<?php require_once './include/conexion.php'?>;
<!DOCTYPE html>
<html lang="es"> 
<head>
	<title>e-commerce</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2 {
  text-shadow: 2px 2px 5px gray;
}    
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

* {box-sizing: border-box}
.mySlides1, .mySlides2, .mySlides3 {display: none}
img {vertical-align: middle;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: graytext;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>
<body>
	<!--Encabezado-->
<div class="topnav">
    <a class="active" href="index.php">Inicio</a>
  <a href="#perfil">Mi perfil</a>
  <a href="RegistroUsuarios.php">Registrarse</a>
  <a href="login.php">Login</a>
  <a href="login.php">Logout</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
       
<h2 style="text-align:center">Libros</h2>
<div class="slideshow-container">
  <div class="mySlides1">
      <a href="descripcion/01-libros.php">
      <img src="imagenes/01-libros.jpg" style="width:20%">
      </a>
  </div>

  <div class="mySlides1">
      <a href="descripcion/02-libros.php">
      <img src="imagenes/02-libros.jfif" style="width:20%">
      </a>
  </div>

  <div class="mySlides1">
      <a href="descripcion/03-libros.php">
      <img src="imagenes/03-libros.jfif" style="width:20%">
      </a>
  </div>
    
  <div class="mySlides1">
      <a href="descripcion/04-libros.php">
      <img src="imagenes/04-libros.jpg" style="width:20%">
      </a>
  </div>
    
  <div class="mySlides1">
      <a href="descripcion/05-libros.php">
      <img src="imagenes/05-libros.jpg" style="width:20%">
      </a>
  </div>
  
  <div class="mySlides1">
      <a href="descripcion/06-libros.php">
      <img src="imagenes/06-libros.jpg" style="width:20%">
      </a>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<h2 style="text-align:center">Películas</h2>
<div class="slideshow-container">
  <div class="mySlides2">
      <a href="descripcion/01-pelis.php">
      <img src="imagenes/01-pelis.jpg" style="width:20%">
      </a>
  </div>

  <div class="mySlides2">
      <a href="descripcion/02-pelis.php">
      <img src="imagenes/02-pelis.jpg" style="width:20%">
      </a>
  </div>

  <div class="mySlides2">
      <a href="descripcion/03-pelis.php">
      <img src="imagenes/03-pelis.jpg" style="width:20%">
      </a>
  </div>
    
    <div class="mySlides2">
    <a href="descripcion/04-pelis.php">
      <img src="imagenes/04-pelis.jpg" style="width:20%">
      </a>
  </div>
      
  <div class="mySlides2">
      <a href="descripcion/05-pelis.php">
      <img src="imagenes/05-pelis.jpg" style="width:20%">
      </a>
  </div>
  
  <div class="mySlides2">
      <a href="descripcion/06-pelis.php">
      <img src="imagenes/06-pelis.jpg" style="width:20%">
      </a>
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<h2 style="text-align:center">Hecho a mano</h2>
<div class="slideshow-container">
  <div class="mySlides3">
      <a href="descripcion/01-mano.php">
      <img src="imagenes/01-mano.jpg" style="width:20%">
      </a>
  </div>

  <div class="mySlides3">
      <a href="descripcion/02-mano.php">
      <img src="imagenes/02-mano.jpg" style="width:20%">
      </a>
  </div>

  <div class="mySlides3">
      <a href="descripcion/03-mano.php">
      <img src="imagenes/03-mano.jpg" style="width:20%">
      </a>
  </div>
    
  <div class="mySlides3">
      <a href="descripcion/04-mano.php">
      <img src="imagenes/04-mano.jpg" style="width:20%">
      </a>
  </div>
    
  <div class="mySlides3">
      <a href="descripcion/05-mano.php">
      <img src="imagenes/05-mano.jpg" style="width:20%">
      </a>
  </div>
    
  <div class="mySlides3">
      <a href="descripcion/06-mano.php">
      <img src="imagenes/06-mano.jpg" style="width:20%">
      </a>
  </div>

  <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 2) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html>