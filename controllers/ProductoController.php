<?php
require_once 'models/Producto.php';

class ProductoController {
    public function mostrarProducto($id) {
        // Obtener el producto del modelo
        $producto = Producto::obtenerProductoId($id);

        if($producto) {
            // Incluir la vista y pasarle el producto
            require 'views/producto.php';
        } else {
            echo "Producto no encontrado";
        }
    }
}
?>