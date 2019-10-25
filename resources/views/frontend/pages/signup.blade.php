@extends('layouts.frontend')

@section('pageTitle')
    BECOME A MODEL
@endsection

@section('main')

    <div class="container">
        <section class="pb-5">
            <h1 class="text-center">Become a Model</h1>
            <div id="signUpForm">
                <form enctype="multipart/form-data" action="{{ URL::to('/models') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="card">
                        <h4 class="text-center mb-3">Step 1: Basic Information</h4>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" name="first_name" type="text" class="form-control">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" name="last_name" type="text" class="form-control">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" type="text" class="form-control">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" name="city" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input id="instagram" name="instagram" type="text" class="form-control">
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <div class="custom-select">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="men">Male</option>
                                        <option value="women">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birth">Date of Birth</label>
                                <div class="birthDate">
                                    <div class="custom-select">
                                        <select class="form-control" name="day" id="birth">
                                            @for($i = 1; $i <= 31; $i++)
                                                @if($i < 10)
                                                    <option value="{{ $i }}">0{{ $i }}</option>
                                                @else
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="custom-select">
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
                                    </div>
                                    <div class="custom-select">
                                        <select class="form-control" name="year" id="birth">
                                            @php
                                                $thisYear = intval(date('Y'));
                                                $endYear = $thisYear - 60;
                                            @endphp
                                            @for($i = $thisYear; $i >= $endYear; $i--)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="school">Are you in the school?</label>
                                <div class="custom-select">
                                    <select name="school" id="school">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hide">
                                <label for="school_type">Which one</label>
                                <div class="custom-select">
                                    <select name="school_type" id="school_type">
                                        <option value="elementary">Elementary</option>
                                        <option value="high">High School</option>
                                        <option value="college">College</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h4 class="text-center mb-3">Step 2: Measurements</h4>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input id="height" name="height" type="number" class="form-control">
                                @error('height')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="waist">Waist</label>
                                <input id="waist" name="waist" type="number" class="form-control">
                                @error('waist')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="bust">Bust</label>
                                <input id="bust" name="bust" type="number" class="form-control">
                                @error('bust')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hips">Hips</label>
                                <input id="hips" name="hips" type="number" class="form-control">
                                @error('hips')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="hair">Hair Color</label>
                                <input id="hair" name="hair_color" type="text" class="form-control">
                                @error('hair_color')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="eye">Eyes Color</label>
                                <input id="eye" name="eyes_color" type="text" class="form-control">
                                @error('eyes_color')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="shoe">Shoe Size</label>
                                <input id="shoe" name="shoe_size" type="number" class="form-control">
                                @error('shoe_size')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h4 class="text-center mb-3">Step 3: Photos</h4>
                        <p class="mb-3">Please submit four photos of yourself: full-length, waist-up, close-up, and profile.
                            Do your best to replicate the sample images below. These don't need to be professionally done,
                            but there are some guidelines: Shoot your photos outdoors in natural daylight but not direct
                            sunlight. Remember, we're looking for natural so no makeup, wear your hair down, and no smiles,
                            please. This is like a passport photo to document your look for us.</p>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="full_length">Full Length</label>
                                @error('full_length')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="preview img-1">
                                    <input type="file" name="full_length" id="full_length" style="display:none;">
                                    <input type="button" value="Upload" onclick="document.getElementById('full_length').click();" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="waist_up">Waist Up</label>
                                @error('waist_up')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="preview img-2">
                                    <input type="file" name="waist_up" id="waist_up" style="display:none;">
                                    <input type="button" value="Upload" onclick="document.getElementById('waist_up').click();" />
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="close_up">Close Up</label>
                                @error('close_up')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="preview img-3">
                                    <input type="file" name="close_up" id="close_up" style="display:none;">
                                    <input type="button" value="Upload" onclick="document.getElementById('close_up').click();" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profile">Profile</label>
                                @error('profile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="preview img-4">
                                    <input type="file" name="profile" id="profile" style="display:none;">
                                    <input type="button" value="Upload" onclick="document.getElementById('profile').click();" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accept">
                            <label for="accept">
                                <input name="accept" id="accept" type="checkbox"> I have read and accept the
                                Application Process and Rules and the Privacy Policy.
                            </label>
                        </div>
                        @error('accept')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </section>
    </div>

@endsection
