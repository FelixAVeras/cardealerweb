<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
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
            <h3 class="text-center text-muted">Login</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>    
                </div>
            @endif

            <form action="{{ route('auth.validate_authenticate') }}" method="POST" class="login-form mt-5 offset-md-3 w-50">
                @csrf
                
                <div class="form-group mb-3">
                    <label for="" class="control-label">Email Address</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email address">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>

                <div class="d-grid gap-2 w-50 offset-md-3">
                    <button type="submit" class="btn btn-primary">Enter</button>
                </div>
            </form>

            <div class="row mb-3">
                <div class="col-12 col-md-12">
                    <a href="#" class="d-block mb-4 mt-2 text-center">Forgot Password?</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-12 d-grid gap-2 offset-md-4" style="width: 34%;">
                    <a href="{{ url('register') }}" class="text-center btn btn-secondary">Register User</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>