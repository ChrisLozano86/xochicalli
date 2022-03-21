<?php
require_once '../../class/Producto.php';
$id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;

    if($id){        
        $producto = Producto::buscarPorId($id);   
          
    }else{
        $producto = new Producto(); 
       
    }

   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
      $url_imagen = (isset($_REQUEST['url_imagen'])) ? $_REQUEST['url_imagen'] : null;     
      $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : null;
      $ingredientes = (isset($_REQUEST['ingredientes'])) ? $_REQUEST['ingredientes'] : null;
      $precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;
      $presentacion = (isset($_POST['presentacion'])) ? $_POST['presentacion'] : null;
      $categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : null;
      $destacado = (isset($_POST['destacado'])) ? $_POST['destacado'] : null;
     
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setIngredientes($ingredientes);
            $producto->setPrecio($precio);
            $producto->setPresentacion($presentacion);
            $producto->setCategoria($categoria);
            $producto->setDestacado($destacado);
           
             
             $rutaServidor = 'uploads/images';
             $rutaServidorFiles = 'uploads/files';
            
             
            if ($_FILES['url_img']['name']!=null) {
    
                    if (!is_dir('uploads/images')) {
                      mkdir('uploads/images', 0777, true); 
                    }
                   
                    $rutaTemporal = $_FILES['url_img']['tmp_name'];
                    $extension = pathinfo($_FILES['url_img']['name'], PATHINFO_EXTENSION);
                    $nombreImagen = 'producto_'.date('YmdHis').'.'.$extension;
                    $rutaDestino = $rutaServidor.'/'.$nombreImagen;
                    unlink($url_imagen);
                    move_uploaded_file($rutaTemporal, $rutaDestino); 
                    $producto->setUrlImagen($rutaDestino); 
                  
              } else{
              $producto->setUrlImagen($url_imagen);    
            } 

            
              $producto->guardar();
              header('Location: index.php');
              
            
    }
      
    include_once '../../assets/template/header.php';
?>


<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <a href="index.php" class="btn btn-warning">Regresar</a><br>
          
          <?php 
          if (isset($_REQUEST['id'])){
            
            $title = 'Editar producto ';
          }else{
            $title = 'Crear nuevo producto';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="Producto_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $producto->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen" id="url_imagen" value="<?php echo $producto->getUrlImagen(); ?>">
            </div>


            <div class="form-group">
            <label for="titulo">Nombre del producto</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $producto->getNombre(); ?>">
            </div>

            <div class="form-group">
            <label for="url_img">Imagen 
               </label>
            <?php    if(isset($_REQUEST['id'])): ?>
              </br>
            <img src="<?= $producto->getUrlImagen(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_img" id="url_img" <?php if($producto->getId()==""){ echo 'required'; }?> >
            </div>

            <div class="form-group">
            <label for="contenido">Descripción</label>
           <textarea class="form-control" name="descripcion" id="descripcion" rows="3" ><?php echo $producto->getDescripcion(); ?></textarea>
            </div>  

            <div class="form-group">
            <label for="contenido">Elaborado con</label>
           <textarea class="form-control" name="ingredientes" id="ingredientes" rows="3" ><?php echo $producto->getIngredientes(); ?></textarea>
            </div>  

            <div class="form-group">
            <label for="precio">Precio $</label>
            <input class="form-control" type="number" min="0" max="9999" name="precio" id="precio" placeholder="0" value="<?php echo $producto->getPrecio(); ?>" style="width: 10%;">
            </div>

            
            <div class="form-group">
            <label for="precio">Presentación</label>
            <input class="form-control" type="text" name="presentacion" id="presentacion" placeholder="Ejemplo Botella de 1L" value="<?php echo $producto->getPresentacion(); ?>">
            </div>

            <div class="form-group">
              <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control" style="width: 50%;">
              <option value="shampoos" <?php if($producto->getCategoria()=='shampoos'){echo 'selected';}?>>Shampoos</option>
              <option value="jabones" <?php if($producto->getCategoria()=='jabones'){echo 'selected';}?>>Jabones</option>
              <option value="pomadas" <?php if($producto->getCategoria()=='pomadas'){echo 'selected';}?>>Pomadas</option>
              <option value="otros" <?php if($producto->getCategoria()=='otros'){echo 'selected';}?>>Otros</option>
            </select> 
            </div>

            <div class="form-group">
              <label for="destacado">Destacado</label>
            <select name="destacado" id="destacado" class="form-control" style="width: 50%;">
              <option value="no" <?php if($producto->getDestacado()=='no'){echo 'selected';}?>>No</option>
              <option value="si" <?php if($producto->getDestacado()=='si'){echo 'selected';}?>>Sí</option>
            </select> 
            </div>

            <div class="form-group">
              <label for="publicado">Publicado</label>
            <select name="publicado" id="publicado" class="form-control" style="width: 50%;">
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select> 
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar productos">
            </div>  
           
            </form>
           
          
          </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <?php
    
    include_once '../../assets/template/footer.php';
?>