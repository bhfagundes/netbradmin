@extends('site.app')
@section('content')
<!--Start breadcrumb area-->     
<!--End breadcrumb area-->   

<!--Start Contact Info area-->
<section class="contact-info-area" style="background-color:rgba(43,40,58,0.5);">
    <div class="container">
        <div class="row">
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>Solicite ajuda</span>
                        <h3>Um de nossos consultores entrará em contato</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-doctor"></span></li>
                    </ul>
                    <ul class="text">
                        <li>Envie-nos uma mensagem</li>
                        
                    </ul>
                </div>
            </div>
            <!--End single info box-->
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>Faça uma visita</span>
                        <h3>Nosso endereço</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-fast clr2"></span></li>
                    </ul>
                    <ul class="text">
                        <li>Agende sua visita!</li>
                        <li>Vespasiano, MG</li>
                    </ul>
                </div>
            </div>
            <!--End single info box-->
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>Ligue ou Escreva</span>
                        <h3>Telefone e Email</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-call clr3"></span></li>
                        <li><span class="flaticon-message"></span></li>
                    </ul>
                    <ul class="text">
                        <li>31 99658-3176</li>
                        <li>comercialnetcombo.br@gmail.com</li>
                    </ul>
                </div>
            </div>
            <!--End single info box-->
        </div>
    </div>
</section>
<!--End Contact Info Area-->

<!--Start Contact Form Area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <h6>Contate-nos via site</h6>
            <div class="title">Envie sua mensagem</div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form text-center">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://mehedi.asiandevelopers.com/demo/woteen/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">   
                                    <input type="text" name="form_name" value="" placeholder="Nome" required="">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                    <div class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="text" name="form_phone" value="" placeholder="Telefone">
                                    <div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="text" name="form_subject" value="" placeholder="Assunto"> 
                                    <div class="icon">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">    
                                    <textarea name="form_message" placeholder="Mensagem" required=""></textarea> 
                                    <div class="icon">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">Enviar</button>    
                                </div>     
                            </div>
                        </div>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</section>
<!--End Contact Form Area-->

<!--Start Google Map Area-->
<section class="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="google-map-box">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="40.584160" 
                        data-map-lng="-74.415543" 
                        data-icon-path="images/resources/map-marker.png" 
                        data-map-title="Brooklyn, New York, United Kingdom" 
                        data-map-zoom="12" 
                        data-markers='{
                            "marker-1": [40.584160, -74.415543, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
                            "marker-3": [35.616959, -87.838852, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"]

                        }'>
                    </div>   
                </div> 
            </div>
        </div>
    </div>
</section>
@endsection