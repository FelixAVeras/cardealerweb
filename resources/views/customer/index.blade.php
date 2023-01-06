@extends('welcome')

@section('title', 'Customers')

@section('content')
    <h2 class="text-left mb-3">Customers</h2>

    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search customer...">
                <button type="button" class="btn btn-secondary"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <a href="customers/create" class="btn btn-primary float-end">Create New Customer</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Photo</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>
                        <img src="/images/{{ $customer->ProfileImage }}" 
                             class="rounded carimage" 
                             style="width:100px;"
                             alt="">
                    </td>
                    <td>{{ $customer->FirstName }} {{ $customer->MiddleName }} {{ $customer->LastName }}</td>
                    <td>{{ $customer->Phone }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>
                    <div class="btn-group">
                            <a href="{{ route('cars.show', $customer->id) }}" class="btn btn-info">
                               <i class="bi bi-eye"></i> Details
                            </a>
                            <a href="{{ route('cars.show', $customer->id) }}" class="btn btn-warning">
                               <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="{{ route('cars.show', $customer->id) }}" class="btn btn-danger">
                               <i class="bi bi-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection