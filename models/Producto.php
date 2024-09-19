<?php
class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function obtenerPrecio(){
        return $this->precio;
    }

    // Método que simula obtener un producto de una base de datos
    public static function obtenerProductoId($id){
        // Simulación de datos de la base de datos
        $productos = [
            1 => new Producto("Producto 1", 100),
            2 => new Producto("Producto 2", 200)
        ];

        return $productos[$id] ?? null; // Devolver producto por ID o null si no existe
    }
}
?>