@extends('layouts.main')
@section('main-section')
<div class="container mb-4 mt-4">
    <h2 class="text-center mb-3">Employee List</h2>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('add_employee')}}" class="btn btn-primary">Add Employee</a>

        <form action="" class="d-flex">
            @csrf
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$search}}">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>

    <div class="card shadow mt-3">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Joining Date</th>
                    <th colspan="2">Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->id}}</th>
                        <td>{{ $employee->name}}</td>
                        <td>{{$employee->designation}}</td>
                        <td>{{ $employee->joining_date}}</td>
                        <td>{{ $employee->phone}}</td>
                        <td><a href="{{route('delete_employee', $employee->id)}}" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        <td><a href="{{route('edit_employee', $employee->id)}}" class="text-primary"><i class="fas fa-pen"></i></a></td>
                        <td><a href="{{route('view', $employee->id)}}" class="text-primary"><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$employees->links()}}
        </div>
    </div>
</div>
@endsection
