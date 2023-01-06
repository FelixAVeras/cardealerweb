@extends('welcome')

@section('title', 'Cars')

@section('content')
    <h2 class="text-left mb-3">Cars</h2>

    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search car...">
                <button type="button" class="btn btn-secondary"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <a href="cars/create" class="btn btn-primary float-end">Create New Car</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-borderless">
            <thead class="table-light">
                <tr>
                    <th>Photo</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Miles</th>
                    <th>Is Avalaible?</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td>
                        <img src="/images/{{ $car->Car_Image }}" 
                             class="rounded carimage" 
                             style="width:200px;"
                             alt="">
                    </td>
                    <td>{{ $car->Brand }}</td>
                    <td>{{ $car->Model }}</td>
                    <td>{{ $car->Year }}</td>
                    <td>{{ $car->Miles }}</td>
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
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
@endsection