@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Detail') }}</div>

                <div class="card-body">
                    <div class="form-group col-md-6 row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-8">
                        <strong>{{ $students->firstname }}</strong>
                        </div>
                    </div>

                    <div class="form-group col-md-6 row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-8">
                        <strong>{{ $students->lastname }}</strong>
                        </div>
                    </div>

                    <div class="form-group col-md-6 row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-8">
                        <strong>{{ $students->gender }}</strong> 
                        </div>
                    </div>

                    <div class="form-group col-md-6 row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                        <div class="col-md-8">
                        <strong>{{ $students->country }}</strong>
                        </div>
                    </div>

                    <div class="form-group col-md-6 row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-8">
                            <strong>{{ $students->address }}</strong>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-6">
                            <a href="{{ route('students.index') }}" class="btn btn-lg btn-danger">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
