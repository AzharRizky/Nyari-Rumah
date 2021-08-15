<header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-styles">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Nyari Rumah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about"><i class="fa fa-fw fa-folder"></i> About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team"><i class="fa fa-fw fa-user"></i> Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex" name="search" action="search?search=<?php echo $_GET['search'];?>" method="GET">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>