@extends('layouts.frontend')

@section('pageTitle')
    {{ \Illuminate\Support\Str::upper($category) }}
@endsection

@section('main')
    <div class="container">
        <section>
            <h1 class="text-center">{{ ucfirst($category) }}</h1>

            <div id="models">
                @if($models)
                    @forelse($models as $model)
                        @php
                            $url = url('/') . '/' . 'frontend/img/';
                            $url .= $model->photos->first()->path;
                        @endphp
                        <a class="model" href="{{ URL::to('/model/' . base64_encode($model->id) . '/' . \Illuminate\Support\Str::slug($model->getName())) }}">
                            <div class="image" style="background-image: url('{{ $url }}')"></div>
                            <h3>{{ $model->getName() }}</h3>
                        </a>
                    @empty
            </div>
            <div class="text-center">
                        <p>There are no models in this category.</p>
                    @endforelse
                @endif
            </div>
        </section>
    </div>
@endsection
