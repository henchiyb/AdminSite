<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('users.index') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">User Management</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="{{ route('users.index') }}">List users</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{ route('users.show', ['id' => 1]) }}">First user</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="{{ route('products.index') }}">List products</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Charts</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Account</a>
                        <ul class="sub-menu children dropdown-menu">
                            @guest
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{ route('login') }}">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{ route('register') }}">Register</a></li>
                            @else
                            <li><i class="menu-icon fa fa-sign-in"></i><a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                            @endguest

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
