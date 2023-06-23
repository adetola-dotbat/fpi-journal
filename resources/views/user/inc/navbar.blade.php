<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="inline-block">
                <img class="mt-4 w-14" src="{{ asset('user/assets/images/federalPolyLogo.png') }}" class="l-dark"
                    alt="" />
                {{-- <img src="{{ asset('user/assets/images/federalPolyLogo.png') }}" class="l-light" alt="" /> --}}
            </span>
            {{-- <img src="{{ asset('user/assets/images/federalPolyLogo.png') }}" class="hidden" alt="" /> --}}
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        @if (auth()->user())
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="#">

                        <span class="login-btn-light">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <span
                                    class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700">

                                    <button
                                        class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"
                                        type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50%"
                                            id="signout">
                                            <path fill="#6563FF"
                                                d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z">
                                            </path>
                                        </svg>
                                    </button>

                                </span>
                            </form>
                        </span>
                    </a>
                </li>
            </ul>
        @endif
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>
                <li><a href="{{ route('about') }}" class="sub-menu-item">About</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Authors</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('article.template') }}" class="sub-menu-item">Template</a>
                        </li>
                        <li>
                            <a href="{{ route('guideline') }}" class="sub-menu-item">Guidelines</a>
                        </li>
                        <li><a href="" class="sub-menu-item">Widget</a></li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Articles</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="" class="sub-menu-item">Template</a>
                        </li>
                        <li>
                            <a href="" class="sub-menu-item">Guidelines</a>
                        </li>
                        <li><a href="" class="sub-menu-item">Widget</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('editor') }}" class="sub-menu-item">Editorial Board</a></li>
                <li>
                    <a href="" class="sub-menu-item">Contact</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
