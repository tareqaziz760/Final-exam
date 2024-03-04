@extends('layouts.app')

@section('content')
    <div class="container bg-info py-2">
        <h2 class="my-4">Employees</h2>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $employees)
                <tr>
                    <th>{{ $employees->id }}</th>
                    <td>{{ $employees->employee_id }}</td>
                    <td>{{ $employees->name }}</td>
                    <td>{{ $employees->phone }}</td>
                    <td>{{ $employees->email }}</td>
                    <td>{{ $employees->address }}</td>
                    <td>{{ $employees->salary }}</td>
                    <td>
                        <a href="{{route('employee.edit', $employees->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>

                        <form action="{{ route('employee.delete', $employees->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-align "><i class="fa-solid fa-trash-arrow-up"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection