
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>

<header class="header-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="logo-wrapper">

                <a href="/">
                        <div id="logocontainer" class="logo-img"  style="width:auto; height: 55px;"></div>
                </a>

                <script>
                        var animation = bodymovin.loadAnimation({
                    // animationData: { / ... / },
                    container: document.getElementById('logocontainer'), // required
                    path:'{{ asset('Test2.json') }}', // required
                    renderer: 'svg', // required
                    loop: true, // optional
                    autoplay: true, // optional
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
                                        @if($menuItem->name == 'What we do')
                                        <li><a class="dropdown-item" href="{{ route('whatwedo.show',$sub_menu->link_to ?? '#') }}">{{ $sub_menu->name}}</a>
                                        </li>
                                        @endif
                                        @if($menuItem->name == 'About us')
                                        <li><a class="dropdown-item" href="{{ $sub_menu->link_to ?? ''}}">{{ $sub_menu->name}}</a>
                                        </li>
                                        @endif
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

