@extends('layouts.frontend')

@section('main')

    <div class="container">
        <section>
            <h1 class="text-center">Sign up</h1>
            <div id="signUpForm">
                <div class="card">
                    <h4 class="text-center mb-3">Step 1: Basic Information</h4>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">City</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Instagram</label>
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birth">Date of Birth</label>
                            <div class="birthDate">
                                <select class="form-control" name="day" id="birth">
                                    @for($i = 1; $i <= 31; $i++)
                                        @if($i < 10)
                                            <option value="{{ $i }}">0{{ $i }}</option>
                                        @else
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endif
                                    @endfor
                                </select>
                                <select class="form-control" name="month" id="birth">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select class="form-control" name="year" id="birth">
                                    @php
                                        $thisYear = intval(date('Y'));
                                        $startYear = $thisYear - 60;
                                    @endphp
                                    @for($i = $startYear; $i <= $thisYear; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">City</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="card">

                </div>
            </div>
        </section>
    </div>

@endsection