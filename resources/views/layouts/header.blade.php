<header>
            
            @section('sidebar')
                <nav class="navbar bg-body-tertiary fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">LaraMaps</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LaraMaps</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/map">Route Simple Map</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/mapbootstrap">Route Bootstrap Map</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact me
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://www.linkedin.com/in/claudio-mecenas/">Linkedin</a></li>
                                <li><a class="dropdown-item" href="https://github.com/claudiomecenas">Github</a></li>
                                <li><a class="dropdown-item" href="https://www.youtube.com/@devsolto/videos">Youtube</a></li>
                                <li><a class="dropdown-item" href="https://www.instagram.com/claudiomecenas/">Instagram</a></li>                                <li>
                                <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="mailto:claudio@penseon.com.br">claudio@penseon.com.br</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
            </nav>
            @show

</header>

<main>

            <div class="container">
