@extends('layouts.main')
@section('main-section')
<div class="container mt-4 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Book Details</h2>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>name </th>
                        <td>{{$employee->name}}</td>
                    </tr>
                    <tr>
                        <th>designation </th>
                        <td>{{$employee->designation}}</td>
                    </tr>
                    <tr>
                        <th>joining </th>
                        <td>{{$employee->joining_date}}</td>
                    </tr>
                    <tr>
                        <th>salary: </th>
                        <td>{{$employee->salary}}</td>
                    </tr>
                    <tr>
                        <th>email: </th>
                        <td>{{$employee->email}}</td>
                    </tr>
                    <tr>
                        <th>mobile_no: </th>
                        <td>{{$employee->mobile_no}}</td>
                    </tr>
                    <tr>
                        <th>Created: </th>
                        <td>{{$employee->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated: </th>
                        <td>{{$employee->updated_at}}</td>
                    </tr>
                </table>
            </div>

            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>
@endsection
