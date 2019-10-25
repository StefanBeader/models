@extends('layouts.mail')

@section('main')
    <div class="container">
       <section>
           <h1 class="text-center">New Message {{ $data->name !== '' ? 'from ' . $data->name : '' }}</h1>
           <h4 class="text-center">{{ $data->email }}</h4>
           <p>{{ $data->message }}</p>
       </section>
    </div>
@endsection
