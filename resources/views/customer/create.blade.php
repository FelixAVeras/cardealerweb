@extends('welcome')

@section('title', 'New Customer')

@section('content')
<a href="{{ route('customers.index') }}" class="btn btn-light mb-3"><i class="bi bi-chevron-left"></i> Go Back</a>

<h2 class="text-left mb-3">New Customer</h2>

<div class="row mb-3">
    <div class="col-12 col-md-4">
        <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group mb-2">
                <label for="" class="label-control">First Name</label>
                <input type="text" name="FirstName" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Middle Name (Optional)</label>
                <input type="text" name="MiddleName" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Last Name</label>
                <input type="text" name="LastName" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Address</label>
                <input type="text" name="Address" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Phone</label>
                <input type="text" name="Phone" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Phone alt</label>
                <input type="text" name="Phone_alt" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Email</label>
                <input type="text" name="Email" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-2">
                <label for="" class="label-control">Document Number</label>
                <input type="text" name="DocumentNumber" class="form-control" placeholder="Enter First Name">
            </div>
            
            <div class="form-group mb-2">
                <label for="" class="label-control">Profile Image</label>
                <input type="file" id="image" name="ProfileImage" class="form-control">
            </div>

            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-download"></i> Save
                </button>
            </div>
        </form>
    </div>
    <div class="col-12 col-md-8">
        <p class="text-center">Image Preview</p>
        <img src="" alt="" class="img-fluid rounded" id="image_preview" style="width: 600px; height: auto;">
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function() {
        let reader = new FileReader();

        reader.onload = (e) => {
            document.getElementById('image_preview').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection