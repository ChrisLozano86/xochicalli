<?php
require_once '../../class/Producto.php';
$productos = Producto::recuperarTodos(); 
include_once '../../assets/template/header.php';
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3 class="text-center"> Administrar Productos </h3>
            
              <a href="save.php" class="btn btn-default btn-custom" > <i class="fas fa-plus"></i> Agregar nuevo producto </a><br><br>

              <br>

              <?php  
              $slider = [];
              if (count($productos) > 0): ?>

              <hr>

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
    <th scope="col">Imagen</th>
      <th scope="col">Título</th>
      <th scope="col">Fecha de Publicación</th>
      <th scope="col">Visible</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($productos as $item): ?>

 
    <tr>  
      <td> <img src="<?php echo $item['url_imagen']; ?>" class="article-image-thumbnail"></td>
      <td><?php echo $item['nombre']; ?></td>
      <td><?php  ?></td>
      <td class="text-center"><?php if($item['visible']==1){ echo '<a href="#" class="btn btn-success fas fa-check-circle lock" alt="Visible"></a>'; }else{ echo '<a href="#" class="btn btn-warning fas fa-pause-circle lock" alt="No Visible"></a>'; } ?></td>
     
     
      <td class="text-center"><a href="save.php?id=<?php echo $item[0];?>" class="btn btn-warning far fa-edit"></a></td>
      <td class="text-center"><a href="delete.php?id=<?php echo $item[0];?>" onclick="return confirm('¿Está seguro que desea eliminar este registro?')" class="btn btn-danger far fa-trash-alt"></a></td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php else: ?>
            <p class="alert alert-info"> No se encontraron productos para mostrar </p>
        <?php endif; ?>
          
            
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