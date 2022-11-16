<header class="header-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="logo-wrapper">
                @if($SiteSettings['company'] && $SiteSettings['company']->companylogo )
                <a href="/">
                    <img class="logo-img" src="{{ $SiteSettings['company']->companylogo->getUrl() }}" alt=" {{$SiteSettings['company']->company_name}} Logo">
                </a>
                @endif

            </div>
            <div class="menu-wrapper">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        @foreach($TopMenu as $menuItem)

                        <li class="nav-item {{ request()->is(ltrim( $menuItem->page_link->slug , "/")."*") ? "active" : "" }} ">
                            <a class="nav-link" href=" @if(!empty($menuItem->link_to)) {{url($menuItem->link_to)}} @else {{ url($menuItem->page_link->slug) }} @endif">{{$menuItem->name}}</a>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
