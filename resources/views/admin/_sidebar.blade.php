<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('admin_home') }}"><img src="{{asset('assets')}}/admin/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{ route('admin_home') }}"><img src="{{asset('assets')}}/admin/images/logo2.png" alt="Logo"></a>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{Auth::user()->name }}</a>
                    <a href="{{route('admin_logout')}}" class="d-block">Logout</a>
                @endauth
            </div>

        </div>


        <div id="main-menu" class="main-menu collapse navbar-collapse">

            <ul class="nav navbar-nav" data-widget="treeview" role="menu" data-accordion="false">

                <h3 class="menu-title"></h3><!-- /.menu-title -->

                <li class="nav-item">
                    <<a href="{{ route('admin_home') }}" class="nav-link">
                        <i class="menu-icon fa fa-fort-awesome"></i>

                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_category')}}" class="nav-link">
                        <i class="menu-icon fa fa-fort-awesome"></i>
                        Category
                    </a>
                </li>
                <li class="nav nav-treeview">

                    <a href="maps-vector.html">Cities
                        <i class="menu-icon fa fa-fort-awesome">

                        </i>
                    </a>

                </li>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="maps-vector.html">Hour
                            <i class="menu-icon fa fa-try">

                            </i>
                        </a>

                    </li>
                </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>deneme</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul>
                </li>


                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
