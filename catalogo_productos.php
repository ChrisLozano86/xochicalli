<?php
    include_once("template/header.php");
?>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Catálogo de prouctos</h1>
                        <p>Conoce nuestro catálogo de productos</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todos</button>
                            <button data-filter=".top-featured">Productos estrella</button>
                            <button data-filter=".best-seller">Más vendidos</button>
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
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            
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
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            
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
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                           
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
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                           
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