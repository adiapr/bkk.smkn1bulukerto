<header id="header" style="background: #00008B">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Start Logo -->
                <div class="logo-nav">
                    <a href="{{ route('index') }}">
                        <img src="images/logo.png" height="50" alt="Company logo" />
                    </a>
                </div>
                <!--End Logo -->
                <div class="clear-toggle"></div>
                <div id="main-menu" class="collapse scroll navbar-right">
                    <ul class="nav">

                        <li class="active"> <a href="{{ route('index') }}#home"  style="text-transform: Capitalize">Home</a> </li>
                        <li> <a href="{{ route('index') }}#clients" style="text-transform: Capitalize">Kerjasama</a> </li>
                        <li> <a href="{{ route('index') }}#why-choose" style="text-transform: Capitalize">Lowongan</a> </li>
                        <li> <a href="{{ route('index') }}#berita" style="text-transform: Capitalize">Berita</a> </li>
                        <li> <a href="{{ route('index') }}#about" style="text-transform: Capitalize">Tentang</a> </li>
                        <li>
                            <a href="{{ route('angket') }}" style="color:yellow">Angket</a>
                        </li>

                    </ul>
                </div>
                <!-- end main-menu -->
            </div>
        </div>
    </div>
</header>
