use tienda_kuri;

CREATE TABLE tarjetas (
    id INT(10) AUTO_INCREMENT NOT NULL,
    tarjetaCredito VARCHAR(50) NOT NULL,
    tarjetaDebito VARCHAR(50) NOT NULL,
    CONSTRAINT pk_tarjetas PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE pedidos (
    id INT(10) AUTO_INCREMENT NOT NULL,
    cantidad_productos INT(10) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    precio_unitario FLOAT(10,2) NOT NULL,
    subtotal FLOAT(10,2) NOT NULL,
    impuestos FLOAT(10,2) NOT NULL,
    total FLOAT(10,2) NOT NULL,
    status VARCHAR (30) NOT NULL,
    fecha DATE,
    producto_id INT(10),
    CONSTRAINT pk_pedidos PRIMARY KEY (id),
    CONSTRAINT fk_pedidos_productos FOREIGN KEY (producto_id) REFERENCES productos(id)
)ENGINE=INNODB;

CREATE TABLE categoriaProductos (
    id INT(10) AUTO_INCREMENT NOT NULL,
    libros VARCHAR(30) NOT NULL,
    electronicos VARCHAR(30) NOT NULL,
    deportes VARCHAR(30) NOT NULL,
    juguetes VARCHAR(30) NOT NULL,
    peliculas VARCHAR(30) NOT NULL,
    hecho_a_mano VARCHAR(30) NOT NULL,
    CONSTRAINT pk_categoriaProductos PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE proveedores (
    id INT(10) AUTO_INCREMENT NOT NULL,
    proveedor_id INT(10) NOT NULL,
    razon_Social VARCHAR(50) NOT NULL,
    calle VARCHAR(50),
    numero INT,
    telefono INT,
    fecha DATE,
    CONSTRAINT pk_proveedores PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE clientes (
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellidoPaterno VARCHAR(30) NOT NULL,
    apellidoMaterno VARCHAR(30) NOT NULL,
    edad INT(3) NOT NULL,
    calle VARCHAR(49),
    numero INT,
    fecha DATE,
    tarjeta_id INT(30),
    pedido_id INT(30),
    usuario_id INT(30),
    CONSTRAINT pk_clientes PRIMARY KEY (id),
    CONSTRAINT fk_clientes_tarjetas FOREIGN KEY (tarjeta_id) REFERENCES tarjetas(id),
    CONSTRAINT fk_clientes_pedidos FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_clientes_usuarios FOREIGN KEY (usuario_id) REFERENCES usuarios(id)    
)ENGINE=INNODB;

CREATE TABLE usuarios (
    id INT(10) AUTO_INCREMENT NOT NULL,
    correo VARCHAR(30) NOT NULL,
    password VARCHAR(60) NOT NULL,
    fecha DATE,
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE productos (
    id INT(10) AUTO_INCREMENT NOT NULL,
    producto_id INT(10) NOT NULL,
    proveedor_id INT(10) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    precio VARCHAR(50) NOT NULL,
    existencia INT NOT NULL,
    CONSTRAINT pk_productos PRIMARY KEY (id),
    CONSTRAINT fk_productos_categoriaProd FOREIGN KEY (producto_id) REFERENCES categoriaProductos(id),
    CONSTRAINT fk_productos_proveedores FOREIGN KEY (proveedor_id) REFERENCES proveedores(id)
)ENGINE=INNODB;


//MODIFICACIONES DE TABLA
// Agregar campo:
ALTER TABLE clientes MODIFY usuario_id INT(10) NOT NULL, 
ADD CONSTRAINT fk_clientes_usuarios FOREIGN KEY (usuario_id) REFERENCES usuarios(id)


INSERT INTO usuarios (id) VALUES()";