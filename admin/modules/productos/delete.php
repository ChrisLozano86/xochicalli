<?php
    
     require_once '../../class/Producto.php';
  
    
    $id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;
    if($id){
        $producto = Producto::buscarPorId($id);        
        $producto->eliminar();
        unlink($producto->getUrlImagen()); 
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
    
?>