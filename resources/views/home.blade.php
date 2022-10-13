@extends('layouts.app')

@section('content')
<div class="container">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="main-panel">
            <!-- Navbar -->
           
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                       
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('liceos.index') }}">{{ __('Institución') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('anioescolars.index') }}">{{ __('Año Escolar') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('signatures.index') }}">{{ __('Asignaturas') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('students.index') }}">{{ __('Estudiantes') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('seccions.index') }}">{{ __('Sección') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student_signatures.index') }}">{{ __('Calificar') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Grupo de Interés') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Manual de Usuario') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Acerca de') }}</a>
                                </li>
                            </li>
                            
                        </ul>
                        <p class="copyright text-center">
                           Sistema Automatizado de Gestión Académica (SAGA) Yaracuy.
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
        
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
 
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black">h</span>
                        <span class="badge filter badge-azure" data-color="azure">o</span>
                        <span class="badge filter badge-green" data-color="green">l</span>
                        <span class="badge filter badge-orange" data-color="orange">a</span>
                        <span class="badge filter badge-red" data-color="red">s</span>
                        <span class="badge filter badge-purple active" data-color="purple">t</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="#" target="_blank" class="btn btn-info btn-block btn-fill">hola mundo</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">lorem</li>

            <li class="button-container">
                <div class="">
                    <a href="#" target="_blank" class="btn btn-warning btn-block btn-fill">Lorem ipsum</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">lorem!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('liceos.index') }}">{{ __('Institución') }}</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('anioescolars.index') }}">{{ __('Año Escolar') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students.index') }}">{{ __('Estudiantes') }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('seccions.index') }}">{{ __('Sección') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student_signatures.index') }}">{{ __('Calificar') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Grupo de Interés') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Manual de Usuario') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('crps.index') }}">{{ __('Acerca de') }}</a>
                                </li>
                            </li>
        </ul>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>

  
            </div>
        </div>
    </div>
</div>
@endsection
