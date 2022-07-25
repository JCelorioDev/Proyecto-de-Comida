<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @livewireStyles
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <style type="text/css">
            body{
                overflow-x: hidden;
            }    
        </style>
        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
        <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
            <x-slot name="header">
                <h2 style="position: relative; left: 20px;" class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('CEO: José Arroyo Paredes.') }}
                </h2>
            </x-slot>
            <header class="header d-flex flex-row" style="position: relative; left: 670px; top: 0; width: 100%">
            
                <div class="header_content d-flex flex-row align-items-center">
        
                    <!-- Logo -->
                    <div class="logo_container">
                        
                        <div class="logo">
                            <img src="#" alt="">
                            <span>Rincón del Manaba</span>
                        </div>
                    </div>
                    <!-- Main Navigation -->
                    <nav class="main_nav_container">
                        <div class="main_nav">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="{{url('Inicio')}}">Inicio</a></li>
                                    <li class="main_nav_item"><a target="_blank" href="{{url('DatosDueño')}}">Usuario</a></li>
                                    <li class="main_nav_item"><a href="{{url('DatosLocal')}}">Local</a></li>
                                    <li class="main_nav_item"><a href="{{url('Menu')}}">Menu</a></li>
                                    <li class="main_nav_item"><a href="{{url('Pedido')}}">Pedido</a></li>
                                </ul>
                        </div>
                    </nav>
                </div>
                <div class="header_side d-flex flex-row justify-content-center align-items-center">
                    <img src="{{asset('images/phone-call.svg')}}" alt="">
                    <span>+593 0993854928</span>
                </div>
        
                <!-- Hamburger -->
                <div class="hamburger_container">
                    <i class="fas fa-bars trans_200"></i>
                </div>
        
            </header>
        <main>
            @livewire('menu')
        </main>
        <br> <br>
        <footer class="footer">
            <div class="container">
                
                <!-- Newsletter -->
    
                <div class="newsletter">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>Deja tu Duda, Recomendación o Queja.</h1>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col text-center">
                            <div class="newsletter_form_container mx-auto">
                                <form action="post">
                                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                        <textarea cols="35" rows="5" style="position: relative; left: 100px;"></textarea>
                                        <!--<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">-->
                                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" style="position: relative; left: 105px;" value="Submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                <!-- Footer Content -->
    
                <div class="footer_content" style="position: relative; left: -30px;">
                    <div class="row">
    
                        <!-- Footer Column - About -->
                        <div class="col-lg-3 footer_col">
    
                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <span>Rincón del Manaba</span>
                                </div>
                            </div>
    
                            <p class="footer_about_text">Será un Placer Atenderles con el Buen Ambiente de Nuestro Equipo de Trabajos y con las Mejores Ofertas para Ustedes.</p>
    
                        </div>
    
                        <!-- Footer Column - Menu -->
    
                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Menu</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="main_nav_item"><a target="_blank" href="{{url('DatosDueño')}}">Usuario</a></li>
                                    <li class="main_nav_item"><a href="{{url('DatosLocal')}}">Local</a></li>
                                    <li class="main_nav_item"><a href="{{url('Pedido')}}">Pedido</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <!-- Footer Column - Usefull Links -->
    
                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Ayuda</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                    <li class="footer_list_item"><a href="#">FAQ</a></li>
                                    <li class="footer_list_item"><a href="#">Community</a></li>
                                    <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                    <li class="footer_list_item"><a href="#">Tuitions</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <!-- Footer Column - Contact -->
    
                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Contact</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{asset('images/placeholder.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        Manta, San Miguel 
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{asset('images/smartphone.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        +593 0993854928
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{asset('images/envelope.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>mr1@outlook.hotmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
                </div>
    
                <!-- Footer Copyright -->
    
                <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                    <div class="footer_copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rincón del Manaba <i class="fa fa-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="footer_social ml-sm-auto">
                        <ul class="menu_social">
                            <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        @livewireScripts
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
        <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
        <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
        <script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('plugins/easing/easing.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>
    </html>
    </x-app-layout>