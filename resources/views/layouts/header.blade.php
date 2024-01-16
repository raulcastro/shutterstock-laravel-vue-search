<header class="header-area">
    <div class="main-navbar">
        <div class="container">
            <div class="row">
                <div class="col-5 order-xs-1 col-sm-3 col-md-3 col-lg-3">
                    <a class="navbar-brand" href="/">
                        <img class="img-fluid" src="assets/images/Logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-sm-5 order-xs-2 col-md-6 col-lg-6">
                    <form action="{{ route('searchImages') }}" method="GET" class="searchbox">
                        <input type="search" placeholder="Search Products ...." name="search" class="searchbox-input" required value="{{ isset($searchQuery) ? $searchQuery : '' }}">
                        <button class="searchbox-submit" type="submit"><i class="bx bx-search-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
