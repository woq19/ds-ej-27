<?php

require_once 'modelo/proveedor.php';
require_once 'modelo/producto.php';

$prod = new Producto;
$prod->Id=1;
$prod->Nombre='Shampoo Pantene';
$prod->Codigo='779600485460';
$prod->Precio='$400.00';
$prod->Marca='Pantene';

$p1 = new ListaProveedores;
$p1->Id=1;
$p1->Nombre='Walter';
$p1->Cuil=15324528651;
$p1->Direccion='Callao 4020';
$p1->Telefono=3416355066;

$p2 = new ListaProveedores;
$p2->Id=2;
$p2->Nombre='Nicolar';
$p2->Cuil=6558236565;
$p2->Direccion='Arijon 3720';
$p2->Telefono=3416916524;

$p3 = new ListaProveedores;
$p3->Id=3;
$p3->Nombre='Gonzalo';
$p3->Cuil=1124565457;
$p3->Direccion='Ituzaingo 626';
$p3->Telefono=156916254;

$prod->ListaProveedores [] = $p1;
$prod->ListaProveedores [] = $p2;
$prod->ListaProveedores [] = $p3;

$prod->MostrarDatos();