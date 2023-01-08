@extends('welcome')

@section('title', 'Rent a Car')

@section('content')
<a href="{{ route('cars.index') }}" class="btn btn-light mb-3"><i class="bi bi-chevron-left"></i> Go Back</a>

<h2 class="text-left mb-3">New Car</h2>

<div class="row mb-3">
    <div class="col-12 col-md-4">
        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group mb-2">
                <label for="" class="label-control">Brand</label>
                <input type="text" name="Brand" class="form-control" placeholder="Enter Brand">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Model</label>
                <input type="text" name="Model" class="form-control" placeholder="Enter Model">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Year</label>
                <select name="Year" id="" class="form-control">
                    <option value="">--Choose Year--</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Plate</label>
                <input type="text" name="Plate" class="form-control" placeholder="Enter Plate">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Miles/Kilometers</label>
                <input type="number" name="Miles" class="form-control" placeholder="Enter Miles/Kilometers">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Price per Day</label>
                <input type="number" name="Price" class="form-control" placeholder="Enter Price">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control col-md-12 mb-2">Is Available?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="IsAvailable" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes, is available</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="IsAvailable" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No, is not available</label>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Image</label>
                <input type="file" id="image" name="Car_Image" class="form-control">
            </div>

            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-download"></i> Save
                </button>
            </div>
        </form>
    </div>
    <div class="col-12 col-md-8">
        <h4 class="text-center mb-3">Results</h4>
        <div class="table-responsive">
            <table class="table-hover table-borderless">
                <thead class="table-light">
                    <tr>
                        <th>Element 1</th>
                        <th>Element 2</th>
                        <th>Element 3</th>
                        <th>Element 4</th>
                        <th>Element 5</th>
                        <th>Element 6</th>
                        <th>Element 7</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection