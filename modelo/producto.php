<?php

class Producto{
    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores = array();

    public function MostrarDatos(){
        echo 'Id producto: '. $this->Id.'<br>';
        echo 'Nombre producto: '. $this->Nombre.'<br>';
        echo 'Codigo producto: '. $this->Codigo.'<br>';
        echo 'Precio producto: '. $this->Precio.'<br>';
        echo 'Marca producto: '. $this->Marca.'<br>';
        echo '<hr>';
        echo 'Datos de los proveedores: '.'<br>';
        echo '<hr>';
        foreach ($this->ListaProveedores as $Lp) {
            echo 'Id: '.$Lp->Id.'<br>';
            echo 'Nombre: '.$Lp->Nombre.'<br>';
            echo 'Cuil: '.$Lp->Cuil.'<br>';
            echo 'Direccion: '.$Lp->Direccion.'<br>';
            echo 'Telefono: '.$Lp->Telefono.'<br>';
            echo '<hr>';
        }
    }

}