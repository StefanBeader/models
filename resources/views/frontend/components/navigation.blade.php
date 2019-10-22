<nav class="container">
    <div id="desktop-nav">
        <ul>
            <li>
                <a href="{{ URL::to('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ URL::to('/about') }}">About</a>
            </li>
            <li>
                <a href="{{ URL::to('/contact') }}">Contact</a>
            </li>
            <li>
                <a href="{{ URL::to('/sign-up') }}">Sign up</a>
            </li>
        </ul>
        <div class="logo">
            <img src="{{ asset('frontend/img/logo.jpg') }}" alt="">
        </div>
        <ul>
            <li class="dropdown-holder">
                <a class="dropdown-toggle" href="{{ URL::to('/') }}">Commercial</a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ URL::to('/commercial/men') }}">Men</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/commercial/women') }}">Women</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-holder">
                <a class="dropdown-toggle" href="{{ URL::to('/') }}">Fashion</a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ URL::to('/fashion/men') }}">Men</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/fashion/women') }}">Women</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('/timeless') }}">Timeless</a>
            </li>
            <li>
                <a href="{{ URL::to('/curve') }}">Curve</a>
            </li>
            <li>
                <a href="{{ URL::to('/kids') }}">Kids</a>
            </li>
        </ul>
    </div>
    <div id="mobile-nav">
        <div class="top">
            <div class="logo">
                <img src="{{ asset('frontend/img/logo.jpg') }}" alt="">
            </div>
            <div id="menuToggle">
                <span class="btn btn-primary">Menu</span>
            </div>
        </div>
        <div class="links">
            <ul>
                <li>
                    <a href="{{ URL::to('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ URL::to('/about') }}">About</a>
                </li>
                <li>
                    <a href="{{ URL::to('/contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ URL::to('/sign-up') }}">Sign up</a>
                </li>
                <li class="dropdown-holder">
                    <a class="dropdown-toggle" href="{{ URL::to('/') }}">Commercial</a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ URL::to('/commercial/men') }}">Men</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/commercial/women') }}">Women</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-holder">
                    <a class="dropdown-toggle" href="{{ URL::to('/') }}">Fashion</a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ URL::to('/fashion/men') }}">Men</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/fashion/women') }}">Women</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('/timeless') }}">Timeless</a>
                </li>
                <li>
                    <a href="{{ URL::to('/curve') }}">Curve</a>
                </li>
                <li>
                    <a href="{{ URL::to('/kids') }}">Kids</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
