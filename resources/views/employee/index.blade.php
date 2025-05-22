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

    <!-- Main content: Add Employee Form -->
    <div class="content">
        <div class="container-fluid">
<<<<<<< HEAD
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
=======
            <a href="{{ route('employee.create') }}" class="btn btn-info">Add New Employee</a>
            <div class="row">
>>>>>>> f32c396e829eee35f4b730696546d61073c2df70

                <div class="col-6 m-auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Employee</h3>
                        </div>

                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf
                            <div class="row card-body">
                                <div class="form-group col-12">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First Name" required>
                                    @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-12">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
                                    @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-12">
                                    <label for="midname">Middle Name</label>
                                    <input type="text" class="form-control" id="midname" name="midname" placeholder="Enter your Middle Name">
                                    @error('midname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-12">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="zip">Zip</label>
                                    <input type="number" class="form-control" id="zip" name="zip">
                                    @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age" name="age">
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Employee Table -->
            <div class="mt-4">
                <a href="{{ route('employee.create') }}" class="btn btn-info mb-3">Add New Employee</a>

<<<<<<< HEAD
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
                                @foreach($employee as $items)
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

