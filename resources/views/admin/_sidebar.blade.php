<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ asset('assets')}}/admin/assets/images/faces/face8.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">Feride Karpınar</p>
                        <p class="designation">Premium user</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Home</li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_home')}}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">About us</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Vehicles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="menu-icon typcn typcn-shopping-bag"></i>
                    <span class="menu-title">Cities</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="menu-icon typcn typcn-th-large-outline"></i>
                    <span class="menu-title">Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/icons/font-awesome.html">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/login.html"> Login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/register.html"> Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin_login')}}"> Logout </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
