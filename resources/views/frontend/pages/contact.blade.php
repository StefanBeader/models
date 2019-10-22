@extends('layouts.frontend')

@section('pageTitle')
    CONTACT US
@endsection

@section('main')
    <div class="container">
        <section>
            <h1 class="text-center">Contact us</h1>
            <div id="contact">
                <div class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mail">E-mail</label>
                        <input id="mail" name="mail" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
