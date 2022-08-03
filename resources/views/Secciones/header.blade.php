<header class="header d-flex flex-row" style="position: relative; left: 670px; top: 0; width: 100%">
            
    <div class="header_content d-flex flex-row align-items-center">

        <!-- Logo -->
        <div class="logo_container">
            
            <div class="logo">
                <img src="#" alt="">
                <span>Sistema de Restaurante</span>
            </div>
        </div>
        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a  href="{{url('Inicio')}}">Inicio</a></li>
                        <li class="main_nav_item"><a target="_blank" href="{{url('DatosDueño')}}">Usuario</a></li>
                        <li class="main_nav_item"><a target="_blank" href="{{url('DatosLocal')}}">Local</a></li>
                        <li class="main_nav_item"><a target="_blank" href="{{url('Menu')}}">Menu</a></li>
                        <li class="main_nav_item"><a target="_blank" href="{{url('Pedido')}}">Pedido</a></li>
                        <li class="main_nav_item"><a target="_blank" href="{{url('Venta')}}">Venta</a></li>
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