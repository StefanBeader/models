<nav class="container">
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
            <a href="{{ URL::to('/') }}">Timeless</a>
        </li>
        <li>
            <a href="{{ URL::to('/about') }}">Curve</a>
        </li>
        <li>
            <a href="{{ URL::to('/contact') }}">Kids</a>
        </li>
    </ul>
</nav>