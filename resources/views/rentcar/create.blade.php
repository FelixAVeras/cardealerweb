@extends('welcome')

@section('title', 'Rent a Car')

@section('content')
<a href="{{ route('cars.index') }}" class="btn btn-light mb-3"><i class="bi bi-chevron-left"></i> Go Back</a>

<h2 class="text-left mb-3">Rent a Car</h2>

<div class="row mb-3">
    <div class="col-12 col-md-7">
        <form action="" method="POST">
            @csrf
            
            <div class="form-group mb-2">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <label for="" class="label-control">Vehicle</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- Choose Vehicle --</option>
                            
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="" class="label-control">Price per day</label>
                        <input type="text" value="" class="form-control" disabled>
                    </div>
                </div>
                
            </div>

            <div class="form-group mb-2">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <label for="" class="label-control">Customer</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- Choose Customer --</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group mb-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="" class="label-control">Start Date</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="label-control">End Date</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-download"></i> Save
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-grid gap-2 mt-3">
                        <button type="button" class="btn btn-light">Calculate</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="text-center mb-3">Results</h4>
        <div class="table-responsive">
            <table class="table table-hover table-borderless">
                <thead class="table-light">
                    <tr>
                        <th>Quote</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection