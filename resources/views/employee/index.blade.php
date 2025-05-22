@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div>
            </div>
        </div>
    </div>


            <!-- Employee Table -->
            <div class="mt-4">
                <a href="{{ route('employee.create') }}" class="btn btn-info mb-3">Add New Employee</a>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-black">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Zip</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $items)
                                    <tr>
                                        <td>{{ $items->id }}</td>
                                        <td>{{ $items->fname }}</td>
                                        <td>{{ $items->lname }}</td>
                                        <td>{{ $items->mname }}</td>
                                        <td>{{ $items->age }}</td>
                                        <td>{{ $items->address }}</td>
                                        <td>{{ $items->zip }}</td>
                                        <td>
                                            <a href="{{ route('employee.edit', $items->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('employee.delete', $items->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{-- Pagination or other controls can go here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

