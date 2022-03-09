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
     
     
            $producto->setNombre($titulo);
            $producto->setDescripcion($descripcion);
            $producto->setIngredientes($ingredientes);
            $producto->setPrecio($precio);
           
             
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
            
            $title = 'Editar Producto ';
          }else{
            $title = 'Crear nuevo Producto';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="Producto_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $Producto->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen" id="url_imagen" value="<?php echo $Producto->getUrlImagen(); ?>">
            </div>


            <div class="form-group">
            <label for="titulo">Título</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $Producto->getTitulo(); ?>">
            </div>

            <div class="form-group">
            <label for="url_img">Imagen del Producto </label>
            <?php    if(isset($_REQUEST['id'])): ?>
              </br>
            <img src="<?= $Producto->getUrlImagen(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_img" id="url_img" <?php if($producto->getId()==""){ echo 'required'; }?> >
            </div>

            <div class="form-group">
            <label for="contenido">Descripción</label>
           <textarea class="form-control" name="descripcion" id="descripcion" rows="3" ><?php echo $Producto->getDescripcion(); ?></textarea>
            </div>  

            <div class="form-group">
            <label for="contenido">Elaborado con</label>
           <textarea class="form-control" name="ingredientes" id="ingredientes" rows="3" ><?php echo $Producto->getIngredientes(); ?></textarea>
            </div>  

            <div class="form-group">
              <label for="destacado">Destacado</label>
            <select name="destacado" id="destacado" class="form-control" style="width: 50%;">
              <option value="no" <?php if($Producto->getDestacado()=='no'){echo 'selected';}?>>No</option>
              <option value="si" <?php if($Producto->getDestacado()=='si'){echo 'selected';}?>>Sí</option>
            </select> 
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar">
            </div>  
           
            </form>
           
          
          </div>
          </div>
          <!-- /.col -->
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