<?php
    include_once("template/header.php");
?>

   <!-- Start Contact Us  -->
   <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>CONTACTANOS</h2>
                        <div style="color:black">
                        <p>¿Tienes alguna duda o te interesa alguno de nuestros productos? </p>
                       
                        <p>Puedes enviarnos un mensaje directo a nuestro Whatsapp, donde con gusto te antenderemos a la brevedad posible solo haz clic en el ícono <a href="https://api.whatsapp.com/send?phone=524121185143"><img src="images/whatsapp.png" width="50" height="50"></a></p>
                        
                        <hr>
                        <p>También puedes enviarnos un mensaje a traves del siguiente formulario donde uno de nuestros representates lo revisará a la brevedad posible. </p>
                    </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required data-error="Ingresa tu nombre">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Tu correo electrónico" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Asunto" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Tu mensaje" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Enviar mensaje</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                        <h2>UBICANOS</h2>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.8084373563183!2d-100.76561048512191!3d20.718002086167534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca8516bcc9c6b%3A0xeea8a704072d8752!2sMercado%20Chamacuero!5e0!3m2!1ses!2smx!4v1645979913107!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2 style="color:white;">INFORMACIÓN DE CONTACTO</h2>
                        <p>A continuación te proporcionamos la dirección de nuestro negocio si deseas visitarnos. </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Mercado Chamacuero, Local 38<br> 
                                Morelos 14, Zona Centro, CP 38200 <br> Comonfort, Guanajuato</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Cel:412 118 5143</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Correo electrónico: xochicalli.gms@gmail.com </p>
                            </li>
                        </ul>

                        <h3 style="color:white;">Horario</h3>

                        <ul>
                                    <li>  Lunes - Viernes: 10:00am to 3:00pm</li> 
                                    <li> Sábado: Cerrado</li> 
                                    <li>  Domingo: <span>10:00am to 3:00pm</span></li>
                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

<?php
    include_once("template/footer.php");

?>