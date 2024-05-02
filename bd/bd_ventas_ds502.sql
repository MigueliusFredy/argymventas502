create database bd_ventas_ds502;

use bd_ventas_ds502;

create table tb_marca (
	codigo_marca char(5) not null primary key,
    marca varchar(30) not null);

create table tb_categoria (
	codigo_categoria char(5) not null primary key,
    categoria varchar(30) not null);

create table tb_producto (
	codigo_producto char(5) not null primary key,
    producto varchar(40) not null,
    stock_disponible int,
    costo float,
    ganancia float,
    producto_codigo_marca char(5) not null,
    producto_codigo_categoria char(5) not null,
    foreign key (producto_codigo_marca) references tb_marca (codigo_marca),
    foreign key (producto_codigo_categoria) references tb_categoria (codigo_categoria));

create table tb_departamento (
	codigo_departamento char(5) not null primary key,
	departamento varchar(25) not null);

create table tb_provincia (
	codigo_provincia char(5) not null primary key,
	provincia varchar(50) not null,
	provincia_codigo_departamento char(5) not null,
	foreign key (provincia_codigo_departamento) references tb_departamento (codigo_departamento));

create table tb_distrito (
	codigo_distrito char(5) not null primary key,
	distrito varchar(50) not null,
	distrito_codigo_provincia char(5) not null,
    foreign key (distrito_codigo_provincia) references tb_provincia (codigo_provincia));

create table tb_cliente (
	codigo_cliente char(5) not null primary key,
	nombre varchar(20) not null,
	ap_paterno varchar(20) not null,
	ap_materno varchar(20) not null,
	fecha_nacimiento date,
	direccion varchar(50),
	correo_electronico varchar(50),
	cliente_codigo_distrito char(5) not null,
    foreign key (cliente_codigo_distrito) references tb_distrito (codigo_distrito));

-- Completar 5 registros
insert into tb_marca values
('M0001', 'Sony'),
('M0002', 'LG'),
('M0003', 'Acer');

select * from tb_marca;

-- Completar 5 registros
insert into tb_categoria values
('C0001', 'Electrodoméstico'),
('C0002', 'Equipo de cómputo'),
('C0003', 'Smartphone');

select * from tb_categoria;

-- Completar 4 registros
insert into tb_producto values
('P0001', 'Lavadora 13Kg', 100, 1420, 0.2, 'M0002', 'C0001'),
('P0002', 'Laptop Core i3 8GB SSD 250 GB', 54, 1762.45, 0.1635, 'M0003', 'C0002');

select * from tb_producto;

-- Completar 10 registros
insert into tb_departamento values
('DP001','Lima'),
('DP002','Arequipa'),
('DP003','Ica'),
('DP004','Cajamarca'),
('DP005','Lambayeque');

select * from tb_departamento;

-- Completar 15 registros
insert into tb_provincia values
('PR001','Lima', 'DP001'),
('PR002','Callao', 'DP001'),
('PR003','Huaral', 'DP001'),
('PR004','Cañete', 'DP001'),
('PR005','Arequipa', 'DP002'),
('PR006','Camaná', 'DP002'),
('PR007','Ica', 'DP003'),
('PR008','Chincha', 'DP003'),
('PR009','Pisco', 'DP003');

select * from tb_provincia;

-- Completar 12 registros
insert into tb_distrito values
('D0001','Lima', 'PR001'),
('D0002','Callao', 'PR002'),
('D0003','San Martín de Porres', 'PR001'),
('D0004','Los Olivos', 'PR001'),
('D0005','Arequipa', 'PR005'),
('D0006','Cayma', 'PR005'),
('D0007','Ica', 'PR007');

select * from tb_distrito;

-- Completar 5 registros
insert into tb_cliente values
('C0001', 'Carlos', 'Ramos', 'Vera', '1999-04-12', 'Av. Sauces 253', 'carlos.ramos258@gmail.com', 'D0003'),
('C0002', 'Rosa', 'Collantes', 'Flores', '2000-05-31', 'Jr. Álamos 354', null, 'D0001'),
('C0003', 'Felipe', 'Montes', 'Salas', '2001-09-22', 'Av. Flores 2541', 'fmontes.salas@gmail.com', 'D0003'),
('C0004', 'Viviana', 'Gonzáles', 'Roca', '2000-07-17', 'Calle Lomas 251', 'viviana.gr20@gmail.com', 'D0006');

-- Elaborado por Apellidos y Nombre

select * from tb_cliente;

select * from tb_cliente
where codigo_cliente = 'C0003';

select * from tb_cliente
where ap_paterno like '%es';
