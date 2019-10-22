<div class="container">
    <div class="logo">
        <img src="{{ asset('frontend/img/logo.jpg') }}" alt="">
    </div>
    <div class="social-icons">
        <a class="icon" href="https://facebook.com">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                 x="0px" y="0px" viewBox="0 0 96.124 96.123"
                 style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                    <g>
                        <path
                        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
                    </g>
            </svg>
        </a>
        <a class="icon" href="https://facebook.com">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
<g>
    <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
    <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
    <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z"/>
</g>
</svg>
        </a>
        <a class="icon" href="https://facebook.com">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
<g id="XMLID_822_">
    <path id="XMLID_823_" d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938   C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527   C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991   c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764   c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861   C204.394,157.263,202.325,160.684,199.021,162.41z"/>
</g>
</svg>
        </a>
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
    <div class="copyright">
        <span>All rights reserved &copy; {{ date('Y') }}</span>
    </div>
</div>
