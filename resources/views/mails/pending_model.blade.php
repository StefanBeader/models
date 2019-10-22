@extends('layouts.mail')

@section('main')
    <div class="container">
       <section>
           <h1 class="text-center">New Model Request</h1>
           <h4 class="text-center">{{ $mannequinName }}</h4>

           <a href="{{ URL::to('/models/review/' . $mannequinId) }}" class="btn btn-primary">Review</a>
       </section>
    </div>
@endsection
