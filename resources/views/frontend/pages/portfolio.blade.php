@extends('layouts.frontend')

@section('pageTitle')
    {{ $model->getName() }}
@endsection

@section('main')
    <div class="container">
        <section>
            <h1 class="text-center">{{ $model->getName() }}</h1>

            <div id="model">
                <div class="photos">
                    @foreach($model->photos as $photo)
                        <div class="photo">
                            <img src="{{ asset('frontend/img/' . $photo->path) }}" alt="{{ $model->getName() }}">
                        </div>
                    @endforeach
                </div>
                <div class="info">
                    <ul>
                        <li>
                            <span>Height</span>
                            <span>{{ $model->height }}cm</span>
                        </li>
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
