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
            <dt>Miles</dt>
            <dd>{{ $car->Miles }}</dd>
            <dt>Is Avalaible</dt>
            <dd>{{ $car->IsAvailable }}</dd>
        </dl>

        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <button class="btn btn-secondary" data-bs-toggle="collapse" 
            data-bs-target="#collapseExample">Comment <i class="bi bi-chevron-down"></i></button>
        
        <div class="collapse mt-3" id="collapseExample">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>
</div>

<!-- Used by customer list -->
@endsection