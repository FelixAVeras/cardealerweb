@extends('welcome')

@section('title', 'Car Details')

@section('content')
<a href="{{ route('cars.index') }}" class="btn btn-light mb-3"><i class="bi bi-chevron-left"></i> Go Back</a>

<h2 class="text-left mb-3">Car Details: {{ $car->Year }} {{ $car->Brand }} {{ $car->Model }}</h2>

<div class="row mb-3">
    <div class="col-12 col-md-6">
        <img src="/images/{{ $car->Car_Image }}" class="rounded img-fluid">
    </div>
    <div class="col-12 col-md-6">
        <dl class="dl-horizontal">
            <dt>Brand</dt>
            <dd>{{ $car->Brand }}</dd>
            <dt>Model</dt>
            <dd>{{ $car->Model }}</dd>
            <dt>Year</dt>
            <dd>{{ $car->Year }}</dd>
            <dt>Plate</dt>
            <dd>{{ $car->Plate }}</dd>
            <dt>Miles</dt>
            <dd>{{ $car->Miles }}</dd>
            <dt>Price per Day</dt>
            <dd>${{ $car->Price }}</dd>
            <dt>Is Avalaible</dt>
            <dd>{{ $car->IsAvailable }}</dd>
        </dl>
        
        <a href="" class="btn btn-success">Rent this car</a>
        <a href="" class="btn btn-secondary">Book this car</a>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
    </div>
</div>

<hr>
<!-- Used by customer list -->
@endsection