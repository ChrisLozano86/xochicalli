<?php
    include_once("template/header.php");
?>

               
            

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/slider4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenidos a Xochicalli <br> Casa de las flores</strong></h1>
                           
                            <p class="m-b-40" style="font-size:1.5em;"><strong>Productos Artesanales Naturales</strong></p>
                            <p class="m-b-40" style="font-size:1.5em;"><strong>Hecho orgullosamente en Comonfort, Guanauato, México</strong></p>
                            <p><a class="btn hvr-hover" href="catalogo_productos.php">Ver Catálogo de productos</a></p>
                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Conoce Xochicalli <br> Casa de las flores</strong></h1>
                            <p class="m-b-40">Somos una empresa Mexicana dedicada a la creación y distribución de productos 100% naturales y artesanales para el cuidado de tu salud.</p>
                            <p><a class="btn hvr-hover" href="catalogo_productos.php">Ver Catálogo de productos</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <!-- <li class="text-center">
                <img src="images/slider4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Una descripción</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="catalogo_productos.php">Ver Catálogo de productos</a></p>
                        </div>
                    </div>
                </div>
            </li> -->
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Best Seller Products  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1> <img src="images/star.png" width="30" height="30" style="margin-top: -10px;"> Productos estrella <img src="images/star.png" width="30" height="30" style="margin-top: -10px;;"></h1>
                        <p>Conoce nuestros productos estrella</p>
                    </div>
                </div>
                <?php 
                    if(count($best_seller)){
                    foreach($best_seller as $product){
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                     <img class="img-fluid" src="admin/modules/productos/<?php echo $product['url_imagen'];?>"/> 

                        <br><br><br><br><br>
                        <a class="btn hvr-hover" href="#" data-toggle="modal" data-target="#product_<?php echo $product["id"]?>"> <span class="star-product-title"> <?php echo $product['nombre'];?> </span>   <br> Ver más detalles &nbsp; <i class="fas fa-search-plus"></i></i></a> 
                        
                    </div>
                </div>
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

        <!-- Modal Star Products -->



    <!-- End Star Products -->
	
	

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

                <?php
                 include_once("partials/modal_products.php");
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