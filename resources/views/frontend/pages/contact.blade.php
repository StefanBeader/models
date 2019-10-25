@extends('layouts.frontend')

@section('pageTitle')
    CONTACT US
@endsection

@section('main')
    <div class="container">
        <section>
            <h1 class="text-center">Contact us</h1>
            @if(Session::has('message_success'))
                <p class="text-center mb-3 message-success">{{ Session::get('message_success') }}</p>
            @endif
            <div id="contact">
                <div class="form">
                    <form action="{{ URL::to('/message') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" class="form-control">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
