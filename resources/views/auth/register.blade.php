<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer - Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    @media screen and (max-width: 768px) {
        form.login-form {
            width: 100%;
        }
    }
</style>
<body>
    <div class="container mt-3">
        <div class="mt-5">
            <h2 class="text-center display-4">Car Dealer</h2>
            <h3 class="text-center text-muted">Register User</h3>

            <form action="{{ route('auth.validate_registration') }}" class="login-form mt-5 offset-md-3 w-50" method="post">
                @csrf    
                <div class="form-group mb-3">
                    <label for="" class="control-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="control-label">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>

                <div class="d-grid gap-2 w-50 offset-md-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <div class="row mt-4 mb-3">
                <div class="col-12 col-md-12 d-grid gap-2 offset-md-4" style="width: 34%;">
                    <a href="{{ url('login') }}" class="text-center btn btn-secondary">Back to Login</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>