

<!-- Section 1 -->
<section class="section-1">
        <div class="navbar-wrapper">
                    <nav class="navbar">
                        <div class="menu">
                            <div class="menu-icon">
                                <div class="line line-1"></div>
                                <div class="line line-2"></div>
                                <div class="line line-3"></div>
                            </div>
                            <span>Menu</span>
                        </div>
                        <a href="{{ url('/') }}"><div class="navbar-logo logo">       
                            LoadMax
                        </div> </a>
                        <ul class="nav-list">                  
                            <li class="nav-list-item">
                                <a href="{{ url('/') }}" class="nav-list-link">Home</a>
                            </li>

                            <li class="nav-list-item dropdown-hover">
                                <a href="#" class="nav-list-link show-dropdown">About <i class="fas fa-chevron-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-personal">
                                    <li class="nav-dropdown-item dropdown-heading">
                                        <a href="#" class="dropdown-heading-link">
                                            <i class="fas fa-chevron-down"></i> About
                                        </a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Our Mission</a>
                                        <a href="#" class="nav-dropdown-link-2">Mission long-term into a productive future</a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Blog</a>
                                        <a href="#" class="nav-dropdown-link-2">All you need to know</a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Contact</a>
                                        <a href="#" class="nav-dropdown-link-2">We would love to hear from you</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nav-list-item dropdown-hover">
                                <a href="#" class="nav-list-link show-dropdown">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-personal">
                                    <li class="nav-dropdown-item dropdown-heading">
                                        <a href="#" class="dropdown-heading-link">
                                            <i class="fas fa-chevron-down"></i>Service
                                        </a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="{{ url('/broker') }}" class="nav-dropdown-link-1">Freight Brokers</a>
                                        <a href="{{ url('/broker') }}" class="nav-dropdown-link-2">intermediary between a shipper and a carrier</a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="{{ url('/carrier') }}" class="nav-dropdown-link-1">Carriers</a>
                                        <a href="{{ url('/carrier') }}" class="nav-dropdown-link-2">sends or transports goods by sea, land, or air</a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="{{ url('/shipper') }}" class="nav-dropdown-link-1">Shippers</a>
                                        <a href="{{ url('/shipper') }}" class="nav-dropdown-link-2">vessels or vehicles for transporting things</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-list-item dropdown-hover">
                                <a href="#" class="nav-list-link show-dropdown">Legal Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-business">
                                    <li class="nav-dropdown-item dropdown-heading">
                                        <a href="#" class="dropdown-heading-link">
                                            <i class="fas fa-chevron-down"></i> Legal Pages
                                        </a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Privacy Policies</a>
                                        
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Terms & Conditions</a>
                                        
                                    </li>
                                
                                </ul>
                            </li>
                            
                        </ul>

                        <div class="navbar-buttons">

                        @if (Auth::guest())
                        <a href="{{ url('/login') }}"><button class="navbar-btn login-btn login">Login</button>
                        <a href="{{ url('/register') }}"><button class="navbar-btn signup-btn signup">Signup</button></a>

                        
                        
                            @else
                            <a href="/profile"><button class="navbar-btn login-btn login">Admin</button>
                            <a class="navbar-btn signup-btn login" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                        
                        
                    @endif
                        
                        </div>
                    </nav>
                </div>
</section>


