
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>

<header class="header-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="logo-wrapper">

                <a href="/">
                        <div id="logocontainer"></div>
                </a>

                <script>
                    $( document ).ready(function() {
                        var animation = bodymovin.loadAnimation({
                    // animationData: { / ... / },
                    container: document.getElementById('logocontainer'), // required
                    path:"  /public/file/{{ $SiteSettings['company']->companies_logo }}", // required
                    renderer: 'svg', // required
                    loop: true, // optional
                    autoplay: true, // optional
                    });
                    });

                </script>

            </div>
            <div class="menu-wrapper">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        @foreach($TopMenu as $menuItem)
                            @if(!empty($menuItem->page_link->slug))
                            <li class="nav-item {{ request()->is(ltrim( $menuItem->page_link->slug , "/")."*") ? "active" : "" }} ">
                                @if(empty($menuItem->parent))
                                <a class="nav-link" href=" @if(!empty($menuItem->link_to)) {{url($menuItem->link_to)}} @else {{ url($menuItem->page_link->slug ?? '') }} @endif">{{$menuItem->name}}</a>
                                @endif
                                @if(!empty($menuItem->child))
                                <ul class="dropdown-menu">

                                @foreach($menuItem->child as $sub_menu)

                                        <li><a class="dropdown-item" href=" @if(!empty( $sub_menu->link_to)) {{url( $sub_menu->link_to)}} @else {{ url( $sub_menu->page_link->slug ?? '') }} @endif">{{ $sub_menu->name}}</a>
                                            </li>

                                @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

