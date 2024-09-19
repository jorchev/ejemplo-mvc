<?php
class Producto {
    private $nombre;
    private $precio;
    private $descripcion;

    public function __construct($nombre, $precio, $descripcion){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function obtenerPrecio(){
        return $this->precio;
    }

    public function obtenerDescripcion(){
        return $this->descripcion;
    }

    // Método que simula obtener un producto de una base de datos
    public static function obtenerProductoId($id){
        // Simulación de datos de la base de datos
        $productos = [
            1 => new Producto("Bicicleta electrica", 1900, "Bicicleta electrica de pedaleo asistido, con 3 velocidad y vateria de litio"),
            2 => new Producto("Scooter electrico", 850, "Scooter electrico con autonomia de 50km"),
            3 => new Producto("Bicicleta del montaña", 1100, "Bicicleta de montaña de 26\" con 18 velocidades y freno de disco")
        ];

        return $productos[$id] ?? null; // Devolver producto por ID o null si no existe
    }
}
?>