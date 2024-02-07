@extends('layouts.main')
@section('main-section')
<div class="container mt-4 mb-4">
    <div class="card shadow p-4">
        <h2 class="text-center mb-3">Edit Employee</h2>
        <form action="{{ route('edit_employee', $employee->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">name</label>
                <input type="text" name="name" id="title" class="form-control" placeholder="Enter Your Name" value="{{ old('name', $employee->name) }}">
                @if($errors->has('name'))
                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Designation</label>
                <input type="text" name="designation" id="title" class="form-control" placeholder="Enter Your designation" value="{{ old('designation',  $employee->designation) }}">
                @if($errors->has('designation'))
                    <div class="error text-danger">{{ $errors->first('designation') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Joining Date</label>
                <input type="date" name="joining_date" id="title" class="form-control" placeholder="Enter joining_date" value="{{ old('joining_date',  $employee->joining_date) }}">
                @if($errors->has('joining_date'))
                    <div class="error text-danger">{{ $errors->first('joining_date') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Salary</label>
                <input type="number" name="salary" id="title" class="form-control" placeholder="Enter salary" value="{{ old('salary',  $employee->salary) }}">
                @if($errors->has('salary'))
                    <div class="error text-danger">{{ $errors->first('salary') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Email</label>
                <input type="email" name="email" id="title" class="form-control" placeholder="Enter Email" value="{{ old('email',  $employee->email) }}">
                @if($errors->has('email'))
                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Mobile</label>
                <input type="number" name="mobile_no" id="title" class="form-control" placeholder="Enter mobile_no" value="{{ old('mobile_no',  $employee->mobile_no) }}">
                @if($errors->has('mobile_no'))
                    <div class="error text-danger">{{ $errors->first('mobile_no') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Address</label>
                <input type="text" name="address" id="title" class="form-control" placeholder="Enter Address" value="{{ old('address',  $employee->address) }}">
                @if($errors->has('address'))
                    <div class="error text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
