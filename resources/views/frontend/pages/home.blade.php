@extends('layouts.frontend')

@section('main')
    <div class="container-full">
        <div id="slider">
            <div id="moveLeft">&#8249;</div>
            <div class="slides">
                <div class="slide" style="background-image: url('../../../../frontend/img/slide1.jpg'); background-position: center top;"></div>
                <div class="slide" style="background-image: url('../../../../frontend/img/slide2.jpg'); background-position: center top;"></div>
                <div class="slide" style="background-image: url('../../../../frontend/img/slide3.jpg'); background-position: center top;"></div>
                <div class="slide" style="background-image: url('../../../../frontend/img/slide4.jpg'); background-position: center top;"></div>
                <div class="slide" style="background-image: url('../../../../frontend/img/slide5.jpg'); background-position: center top;"></div>
            </div>
            <div id="moveRight">&#8250;</div>
        </div>
    </div>
@endsection