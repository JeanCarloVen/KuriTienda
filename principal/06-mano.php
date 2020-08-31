<!DOCTYPE html>
<html>
<head>
<style>
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card .btn-group button {
  border: 1px solid #2196F3;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  display: block;
}

.card .btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.card .btn-group button:hover {
  opacity: 0.7;
}

/*Buttons*/

.button {
  background-color: #2196F3; /* blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
    
<div class="topnav">
  <a class="active" href="./inicio.php">Inicio</a>
  <a href="#perfil">Mi perfil</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Buscar..." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
    
<h2 style="text-align:center">Producto</h2>

<div class="card">
    <img src="./imagenes/06-mano.jpg" alt="BY MEXICO Paraguas Tenango pocket" style="width:100%">
  <h1>BY MEXICO Paraguas Tenango pocket</h1>
  <p class="price">$480.00</p>
  <p>“Colorida herencia mexicana” Tenango es un estilo de bordado originario del municipio de Tenango de Doria, 
      en el estado de Hidalgo. Es una versión comercializada del bordado tradicional otomí, los bordados únicos 
      y hechos a mano son tributo a la comunidad otomí-tepehua y a los eventos más importantes de su vida como 
      la siembra, la cosecha, el matrimonio, el nacimiento, etc. Flores, caballos, venados, conejos, aves, peces
      e insectos son algunos de los tantos elementos que podrás encontrar en los tenangos, mosaicos de colores sobre
      telas de algodón con el propósito siempre de conservar las raíces de la cultura otomí. Paraguas de Tenango 
      en color negro y blanco y cuando se moja cambia de color</p>
<p><select id="qty">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
     </select></p>
<div class="btn-group">
  <button class="button" onclick="addQty();">Agregar al carrito</button>
  <button class="button">Comprar ahora</button>
</div>
</div>

<button onclick="goBack()" class="button button2">Atrás</button>

<script>
function goBack() {
  window.history.back();
}
</script>

<script>
	function addQty()
	{
		var e = document.getElementById("qty");
		var qty = e.options[e.selectedIndex].value;
		var s =
		{
			//Reset the cart session  to remove everything added to the cart previously.
			'reset':true,
			//Define the product path(s) and the quantity to add.
			'products' : [
				{
					'path':'phot-io-main-app',
					'quantity': qty
				}
			],
			'checkout': true
		}
		fastspring.builder.push(s);
	}
</script>
</body>

</html>
