<?php
    include_once("template/header.php");
?>

 <!-- Start Products  -->
 <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>  <img src="images/hoja_laurel.png" width="50" height="50"> Catálogo de productos </h1>
                        <p>Conoce nuestro catálogo de productos naturales</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button  class="active" data-filter="*">Todos</button>
                            <button  data-filter=".shampoos">Shampoos</button>
                            <button data-filter=".jabones">Jabones</button>
                            <button data-filter=".pomadas">Pomadas</button>
                            <button data-filter=".otros">Otros</button>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">

            <?php 
                    if(count($products)>0){
                    foreach($products as $product){
                ?>


                <div class="col-lg-3 col-md-6 special-grid <?php echo $product['categoria']; ?>">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"><?php echo $product['nombre']; ?></p>
                            </div>
                            <img src="admin/modules/productos/<?php echo $product['url_imagen'];?>" class="img-fluid" alt="<?php ?>">
                            
                        </div>
                        <div class="why-text" style="width:100%;">
                            
                            <h5 data-toggle="modal" data-target="#product_<?php echo $product["id"] ?>" class="btn-detail">  Ver detalles</h5>
                            
                        </div>
                    </div>
                </div>

                <!-- Modal -->
<div class="modal fade" id="product_<?php echo $product["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title font-weight-bold" id="exampleModalLongTitle"><?php echo $product['nombre']; ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
      <img class="img-fluid product-image" src="admin/modules/productos/<?php echo $product['url_imagen'];?>" alt="<?php echo $product['nombre']; ?>" />
      <br>
      <br>
      <h2 class="font-weight-bold">Descripción del producto</h2>
     
      <p><?php echo $product["descripcion"]?> </p>
      <br>
      <h3>Elaborado con </h3>
      <p> <?php echo $product["ingredientes"]?>   </p> 
</p>
<br>
      <h3>Precio</h3>
        
       <p class="font-weight-bold">$<?php echo $product["precio"]?> <br><?php echo $product["presentacion"]?> </p>

        <hr>
       <small class="font-weight-bold">Opiniones de los clientes</small>
      <br>
      <img src="images/stars.png" width="130" height="50"> 
       
        
    </div>
      <div class="modal-footer">
      <a  class="btn btn-default btn-whats" href="https://api.whatsapp.com/send?phone=524121185143&text=Hola,%20me%20interesa%20un%20un%20producto"> <i class="fab fa-whatsapp" aria-hidden="true"></i> &nbsp;  ¡Me interesa este producto!</a>
      <!-- <button type="button" class="btn btn-default" style="background-color: #730666; color: white;">Me interesa este producto</button> -->
      <a  class="btn btn-primary "  data-dismiss="modal" href="#"> <i class="fas fa-chevron-left"></i> &nbsp;  Regresar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  
      
    
        
      </div>
    </div>
  </div>
</div>
 <!-- End Modal -->
                <?php
                    }
                }else{
                    echo '<div class="col-12">';
                    echo '<p class="alert alert-info">No hay productos para mostrar </p>';
                    echo '</div>';
                }
               ?>
                
            </div>
        </div>
        
    </div>
    <!-- End Products  -->

    

<?php
    include_once("template/footer.php");

?>