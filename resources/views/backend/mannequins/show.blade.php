@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>View Model</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="status">Model Status</label>
                    <select class="form-control" name="status" id="status">
                        @foreach($statuses as $key => $status)
                            <option value="{{ $key }}">{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="categories">Model Categories</label>
                    <select class="form-control selectpicker" multiple name="categories[]" id="categories">
                        @foreach($categories as $key => $category)
                            <option value="{{ $key }}">{{ ucfirst($category) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <form enctype="multipart/form-data" action="{{ URL::to('/models/' . $mannequin->id) }}" method="POST">
            <input disabled name="_method" type="hidden" value="PUT">
            <div class="row">
                <div class="col">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header font-weight-bold">Basic Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col form-group">
                                    <label for="first_name">First Name</label>
                                    <input disabled value="{{ $mannequin->first_name }}" id="first_name" name="first_name" type="text" class="form-control">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="last_name">Last Name</label>
                                    <input disabled value="{{ $mannequin->last_name }}" id="last_name" name="last_name" type="text" class="form-control">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input disabled value="{{ $mannequin->email }}" id="email" name="email" type="email" class="form-control">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <label for="phone">Phone</label>
                                    <input disabled value="{{ $mannequin->phone }}" id="phone" name="phone" type="text" class="form-control">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="city">City</label>
                                    <input disabled value="{{ $mannequin->city }}" id="city" name="city" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input disabled value="{{ $mannequin->instagram }}" id="instagram" name="instagram" type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label for="gender">Gender</label>
                                    <select disabled class="form-control" name="gender" id="gender">
                                        <option @if ($mannequin->gender == 'men') selected @endif value="men">Male</option>
                                        <option @if ($mannequin->gender == 'women') selected @endif value="women">Female</option>
                                        <option @if ($mannequin->gender == 'other') selected @endif value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-8 form-group">
                                    <label for="birth">Date of Birth</label>
                                    @php
                                        list($year, $month, $day) = explode('-', $mannequin->birthday)
                                    @endphp
                                    <div class="row">
                                        <div class="col-3">
                                            <select disabled class="form-control" name="day" id="birth">
                                                @for($i = 1; $i <= 31; $i++)
                                                    @if($i < 10)
                                                        <option @if ($day == '0'.$i) selected @endif value="{{ $i }}">0{{ $i }}</option>
                                                    @else
                                                        <option @if ($day == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                                    @endif
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <select disabled class="form-control" name="month" id="birth">
                                                <option @if ($month == '01') selected @endif value="1">January</option>
                                                <option @if ($month == '02') selected @endif value="2">February</option>
                                                <option @if ($month == '03') selected @endif value="3">March</option>
                                                <option @if ($month == '04') selected @endif value="4">April</option>
                                                <option @if ($month == '05') selected @endif value="5">May</option>
                                                <option @if ($month == '06') selected @endif value="6">Jun</option>
                                                <option @if ($month == '07') selected @endif value="7">Jul</option>
                                                <option @if ($month == '08') selected @endif value="8">August</option>
                                                <option @if ($month == '09') selected @endif value="9">September</option>
                                                <option @if ($month == '10') selected @endif value="10">October</option>
                                                <option @if ($month == '11') selected @endif value="11">November</option>
                                                <option @if ($month == '12') selected @endif value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select disabled class="form-control" name="year" id="birth">
                                                @php
                                                    $thisYear = intval(date('Y'));
                                                    $endYear = $thisYear - 60;
                                                @endphp
                                                @for($i = $thisYear; $i >= $endYear; $i--)
                                                    <option @if ($year == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="school">Model is in the school?</label>
                                    <select disabled class="form-control" name="school" id="school">
                                        <option @if ($mannequin->school == 0) selected @endif value="no">No</option>
                                        <option @if ($mannequin->school == 1) selected @endif value="yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group @if ($mannequin->school == 0) hide @endif">
                                    <label for="school_type">Which one</label>
                                    <select disabled class="form-control" name="school_type" id="school_type">
                                        <option @if ($mannequin->school_type == 'elementary') selected @endif value="elementary">Elementary</option>
                                        <option @if ($mannequin->school_type == 'high') selected @endif value="high">High School</option>
                                        <option @if ($mannequin->school_type == 'college') selected @endif value="college">College</option>
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
                                        <input disabled value="{{ $mannequin->height }}" id="height" name="height" type="number" class="form-control">
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
                                        <input disabled value="{{ $mannequin->waist }}" id="waist" name="waist" type="number" class="form-control">
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
                                        <input disabled value="{{ $mannequin->bust }}" id="bust" name="bust" type="number" class="form-control">
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
                                        <input disabled value="{{ $mannequin->hips }}" id="hips" name="hips" type="number" class="form-control">
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
                                        <input disabled value="{{ $mannequin->hair_color }}" id="hair" name="hair_color" type="text" class="form-control">
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
                                        <input disabled value="{{ $mannequin->eyes_color }}" id="eye" name="eyes_color" type="text" class="form-control">
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
                                        <input disabled value="{{ $mannequin->shoe_size }}" id="shoe" name="shoe_size" type="number" class="form-control">
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
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header font-weight-bold">Photos</div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
