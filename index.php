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
                            <p class="m-b-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor tempore ipsam distinctio est! Incidunt maiores <br> neque facere accusamus asperiores itaque magnam saepe molestias animi ipsam amet ab, officia tenetur quae.</p>
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
                            <h1 class="m-b-20"><strong>Una descripción</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="catalogo_productos.php">Ver Catálogo de productos</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Star Products  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1> <img src="images/star.png" width="30" height="30" style="margin-top: -10px;"> Productos estrella <img src="images/star.png" width="30" height="30" style="margin-top: -10px;;"></h1>
                        <p>Conoce nuestros productos estrella</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                   
                <div class="shop-cat-box">
               
                     <img class="img-fluid" src="images/productos/shampoo_negro.jpg"/> 

                        <br><br><br><br><br>
                        <a class="btn hvr-hover" href="#" data-toggle="modal" data-target="#1"> <span class="star-product-title"> Shampoo Negro </span>   <br> Ver más detalles &nbsp; <i class="fas fa-search-plus"></i></i></a> 
                        
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/sin_imagen.png" alt="" />
                        <a class="btn hvr-hover" href="#" data-toggle="modal" data-target="#2">Producto 2 <br> Ver más detalles &nbsp; <i class="fas fa-search-plus"></i></i></a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/sin_imagen.png" alt="" />
                        <a class="btn hvr-hover" href="#" data-toggle="modal" data-target="#3">Producto 3 <br> Ver más detalles &nbsp; <i class="fas fa-search-plus"></i></i></a>  
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal Star Products -->

        <?php
        
        include_once("partials/modal_star_products.php");
        ?>



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
                            <button  data-filter=".shampoo">Shampoos</button>
                            <button data-filter=".jabon">Jabones</button>
                            <button data-filter=".pomadas">Pomadas</button>
                            <button data-filter=".otros">Otros</button>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">

            


                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Título del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Descripción</h4>
                            <h5>Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Título del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Descripción</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Título del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripción</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Titulo del producto</p>
                            </div>
                            <img src="images/sin_imagen.png" class="img-fluid" alt="Image">
                           
                        </div>
                        <div class="why-text">
                            <h4>Descripcion</h4>
                            <h5> Ver detalles</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        
        
    </div>
    <!-- End Products  -->

    

<?php
    include_once("template/footer.php");

?>