<header class="header-1 main-menu">
    <div class="container-fluid">
        <div
            class="d-flex align-items-center justify-content-between flex-wrap wv-gap-10">
            
            <!-- logo -->
            <livewire:frontend.theme.logo />
            <!-- logo -->

            <nav class="header-nav navbar-nav" id="navbarNav">
                <ul>
                    <li><a href="{{ route('frontend.index') }}" wire:navigate>Home</a></li>

                    <li class="dropdown-nav">
                        <a href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="services-details.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-nav">
                        <a href="#">Projects</a>
                        <ul class="submenu">
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="projects-details.html">Projects Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-nav">
                        <a href="#">Pages</a>
                        <ul class="submenu">
                            <li><a href="about.html">About Us</a></li>
                            <li>
                                <a href="#">Team</a>
                                <ul class="submenu">
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-nav">
                        <a href="#">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="header-social d-none d-xxl-block">
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
            <a href="#" class="toggle-sidebar">
                <div class="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
</header>