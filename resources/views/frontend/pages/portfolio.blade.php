@extends('layouts.frontend')

@section('pageTitle')
    {{ $model->getName() }}
@endsection

@section('scripts')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
@endsection

@section('main')
    <div class="container">
        <section>
            <h1 class="text-center">{{ $model->getName() }}</h1>

            <div id="model">
                <div class="photos grid" id="container" data-masonry='
                                    { "itemSelector": ".grid-item",
                                    "columnWidth": ".grid-item",
                                    "percentPosition": true,
                                     "gutter": 16 }'>
                    @foreach($model->photos as $photo)
                        @if($photo->type === 'book')
                            <div class="photo grid-item">
                                <img src="{{ asset('frontend/img/' . $photo->path) }}" alt="{{ $model->getName() }}">
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="info">
                    @php
                        $categories = $model->categories()->get()->pluck('id')->toArray();
                    @endphp
                    <ul>
                        <li>
                            <span>Height</span>
                            <span>{{ $model->height }}cm</span>
                        </li>
                        @if(!in_array(\App\Models\Category::KIDS, $categories))
                        <li>
                            <span>Waist</span>
                            <span>{{ $model->waist }}cm</span>
                        </li>
                        <li>
                            <span>Bust</span>
                            <span>{{ $model->bust }}cm</span>
                        </li>
                        <li>
                            <span>Hips</span>
                            <span>{{ $model->hips }}cm</span>
                        </li>
                        @else
                            <li>
                                <span>Age</span>
                                <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $model->birthday)->diffInYears() }}</span>
                            </li>
                        @endif
                        <li>
                            <span>Shoes</span>
                            <span>{{ $model->shoe_size }}eu</span>
                        </li>
                        <li>
                            <span>Hair Color</span>
                            <span>{{ $model->hair_color }}</span>
                        </li>
                        <li>
                            <span>Eyes Color</span>
                            <span>{{ $model->eyes_color }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
