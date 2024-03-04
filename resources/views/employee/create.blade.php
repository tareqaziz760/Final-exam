@extends('layouts.app')

@section('content')
    <div class="container bg-info">
        <h2 class="my-4">Add Employee</h2>

        <form action="/employee/store" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="number" class="form-control mt-2" id="employee_id" name="employee_id" placeholder="Enter your employee id" value="{{ old('employee_id') }}">
                    @if($errors->has('employee_id'))
                    <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control mt-2" id="phone" name="phone" placeholder="Enter your phone" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control mt-2" id="address" name="address" placeholder="Enter your address" value="{{ old('address') }}">
                    @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" class="form-control mt-2" id="salary" name="salary" placeholder="Enter your salary" value="{{ old('salary') }}">
                    @if($errors->has('salary'))
                    <span class="text-danger">{{ $errors->first('salary') }}</span>
                    @endif
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection