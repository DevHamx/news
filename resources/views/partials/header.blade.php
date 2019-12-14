<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center" data-nav="brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="/"><img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">
                        <h3 class="brand-text">News</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                        <span class="user-name text-bold-600">{{session('user')->name}}</span>
                            <i style="font-size: 1.5em;" class="la la-user">
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/profil/{{session('user')->email}}"><i class="la la-user"></i> Mon Profil</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }} "
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="ft-power"></i> Se déconnecter</a>
                            {{ Form::open(['id'=>'logout-form','action' => 'Auth\LoginController@logout','methode' => 'POST', 'style' => 'display: none;']) }}
                            {{ Form::close() }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>