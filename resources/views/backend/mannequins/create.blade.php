@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Add Model</h1>
            </div>
        </div>
        <form enctype="multipart/form-data" action="{{ URL::to('/addModel') }}" method="POST">
            <div class="row">
                <div class="col">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header font-weight-bold">Basic Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col form-group">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
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
                            <div class="row">
                                <div class="col form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="city">City</label>
                                    <input id="city" name="city" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" name="instagram" type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="men">Male</option>
                                        <option value="women">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-8 form-group">
                                    <label for="birth">Date of Birth</label>
                                    <div class="row">
                                        <div class="col-3">
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
                                        <div class="col-5">
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
                                        <div class="col-4">
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
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="school">Model is in the school?</label>
                                    <select class="form-control" name="school" id="school">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group hide">
                                    <label for="school_type">Which one</label>
                                    <select class="form-control" name="school_type" id="school_type">
                                        <option value="elementary">Elementary</option>
                                        <option value="high">High School</option>
                                        <option value="college">College</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header font-weight-bold">Measurements</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="height">Height</label>
                                        <input id="height" name="height" type="number" class="form-control">
                                        @error('height')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
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
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="bust">Bust</label>
                                        <input id="bust" name="bust" type="number" class="form-control">
                                        @error('bust')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
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
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hair">Hair Color</label>
                                        <input id="hair" name="hair_color" type="text" class="form-control">
                                        @error('hair_color')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
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
                            </div>
                            <div class="row">
                                <div class="col-6">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-3">
                    <input class="btn btn-primary" type="submit" value="Add Model">
                </div>
            </div>
        </form>
    </div>
@endsection
