<?php
require_once 'Conexion.php';

class Producto {

    private $id;
    private $url_imagen;
    private $nombre;
    private $descripcion;
    private $ingredientes;
    private $precio;
    private $presentacion;
    private $categoria;
    private $destacado;
    
    
    

    const TABLA = 'slider';
    
  
    
    public function __construct( $url_imagen=null, $nombre=null, $descripcion=null, $ingredientes=null, $precio=null, $presentacion=null, $categoria=null, $destacado=null, $id=null) {
       
        
        $this->url_imagen = $url_imagen;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->ingredientes = $ingredientes;
        $this->precio = $precio;
        $this->presentacion = $presentacion;
        $this->categoria = $categoria;
        $this->destacado = $destacado;
        $this->id = $id;
        

    }

    //Getters
    
    public function getId() {
        return $this->id;
    }

    public function getUrlImagen() {
        return $this->url_imagen;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getPresentacion() {
        return $this->presentacion;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }


    public function getDestacado() {
        return $this->destacado;
    }

    //Setters

    public function setUrlImagen($url_imagen) {
        $this->url_imagen = $url_imagen;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }

    public function setprecio($precio) {
        $this->precio = $precio;
    }

    public function setPresentacion($presentacion) {
        $this->presentacion = $presentacion;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


  

    public function guardar() {
        $conexion = new Conexion();
        if($this->id)/*UPDATE*/{
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET  url_imagen = :url_imagen, nombre = :nombre, descripcion = :descripcion, ingredientes = :ingredientes, precio = :precio WHERE id = :id');
            $consulta->bindParam(':id', $this->id);         
            $consulta->bindParam(':url_imagen', $this->url_imagen);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':ingredientes', $this->ingredientes);             
            $consulta->bindParam(':precio', $this->precio);   
            $consulta->execute();
        }else /*Insert*/{
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (url_imagen, nombre, descripcion, ingredientes, precio) VALUES (:url_imagen, :nombre,  :descripcion, :ingredientes, :precio)');
            $consulta->bindParam(':url_imagen', $this->url_imagen);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':ingredientes', $this->ingredientes);             
            $consulta->bindParam(':precio', $this->precio);   
            //var_dump($consulta);
            if($consulta->execute()){
                $this->id = $conexion->lastInsertId();
                
                return true;
            }else{       
                return false;
                
            }
        }
           
            $conexion = null;
    }


    
    public function eliminar(){
        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $this->id);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['url_imagen'], $registro['nombre'], $registro['descripcion'],  $registro['ingredientes'], $registro['precio'], $registro['id']);
            
        } else {
            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY id DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarPublicados() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM slider WHERE precio = 1 ORDER BY id DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }


}
