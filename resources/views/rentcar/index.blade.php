@extends('welcome')

@section('title', 'Rent a Car')

@section('content')
    <h2 class="text-left mb-3">Rent a Car</h2>

    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="button" class="btn btn-secondary"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <a href="rentcars/create" class="btn btn-primary float-end">Rent car</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-borderless">
            <thead class="table-light">
                <tr>
                    <th>Vehicle</th>
                    <th>Customer</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Initial Payment</th>
                    <th>Total Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach($cars as $car)
                <tr>
                    <td>{{ $car->Brand }}</td>
                    <td>{{ $car->Model }}</td>
                    <td>{{ $car->Year }}</td>
                    <td>{{ $car->Miles }}</td>
                    <td>${{ $car->Price }}</td>
                    <td>{{ $car->IsAvailable }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">
                               <i class="bi bi-eye"></i> Details
                            </a>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-warning">
                               <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-danger">
                               <i class="bi bi-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach -->
            </tbody>
        </table>
    </div>
@endsection