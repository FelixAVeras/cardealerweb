@extends('welcome')

@section('title', 'Dashboard')

@section('content')
    <h2 class="display-4 text-left mb-2">Hello, @UserName</h2>
    <h3 class="text-left mb-3">Dashboard</h3>

    <a href="cars" class="btn btn-primary">Go to Cars</a>
    <a href="#" class="btn btn-primary">Go To Customers</a>
    <br>
    <hr>
    <h3 class="text-left mb-3">Vehicles currently rent</h3>
    <div class="table-responsive">
        <table class="table table-hover table-borderless">
            <thead class="table-light">
                <tr>
                    <th>Vehicle</th>
                    <th>Customer</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Fee</th>
                    <th>Remaining Amount</th>
                    <th>Days Left</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2019 Ford Explorer</td>
                    <td>Harry Potter</td>
                    <td>10-Jan-2023</td>
                    <td>25-Jan-2023</td>
                    <td>$20.00</td>
                    <td>$369.25</td>
                    <td>15</td>
                    <td>
                        <button class="btn btn-primary"><i class="bi bi-eye"></i> Details</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection