<?php
require_once 'Conexion.php';

class Producto {

    private $id;
    private $nombre;
    private $url_imagen;
    private $descripcion;
    private $ingredientes;
    private $precio;
    private $presentacion;
    private $categoria;
    private $destacado;
    
    
    

    const TABLA = 'productos';
    
  
    
    public function __construct($nombre=null, $url_imagen=null,  $descripcion=null, $ingredientes=null, $precio=null, $presentacion=null, $categoria=null, $destacado=null, $id=null) {
       
        $this->nombre = $nombre;
        $this->url_imagen = $url_imagen;
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

    public function setDestacado($destacado) {
        $this->destacado = $destacado;
    }


  

    public function guardar() {
        $conexion = new Conexion();
        if($this->id)/*UPDATE*/{
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET  nombre = :nombre, url_imagen = :url_imagen,  descripcion = :descripcion, ingredientes = :ingredientes, precio = :precio, presentacion = :presentacion, categoria = :categoria, destacado = :destacado WHERE id = :id');
            $consulta->bindParam(':id', $this->id);
            $consulta->bindParam(':nombre', $this->nombre);         
            $consulta->bindParam(':url_imagen', $this->url_imagen);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':ingredientes', $this->ingredientes);             
            $consulta->bindParam(':precio', $this->precio);   
            $consulta->bindParam(':presentacion', $this->presentacion);  
            $consulta->bindParam(':categoria', $this->categoria);  
            $consulta->bindParam(':destacado', $this->destacado);  
            $consulta->execute();
        }else /*Insert*/{
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, url_imagen, descripcion, ingredientes, precio, presentacion, categoria, destacado) VALUES (:nombre, :url_imagen, :descripcion, :ingredientes, :precio, :presentacion, :categoria, :destacado)');
            $consulta->bindParam(':nombre', $this->nombre);         
            $consulta->bindParam(':url_imagen', $this->url_imagen);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':ingredientes', $this->ingredientes);             
            $consulta->bindParam(':precio', $this->precio);   
            $consulta->bindParam(':presentacion', $this->presentacion);  
            $consulta->bindParam(':categoria', $this->categoria);  
            $consulta->bindParam(':destacado', $this->destacado);  
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
           
            return new self($registro['nombre'], $registro['url_imagen'], $registro['descripcion'],  $registro['ingredientes'], $registro['precio'], $registro['presentacion'], $registro['categoria'], $registro['destacado'], $registro['id']);
            
        } else {
            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY id ASC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarDestacados() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM productos WHERE destacado = "si" ORDER BY id ASC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }


}
