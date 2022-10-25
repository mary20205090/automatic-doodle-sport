<!DOCTYPE html>
<html>

<head>
    <title>Register
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="denno.css">
</head>

<body>

    @extends('main')

    @section('content')

    <div class="container">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <h4>Enter your Credentials to register</h4>

                <form action="{{ route('Auth.validate_add') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name " class="form-label">Name</label></br>
                        <input type="text" name="name" placeholder="Enter Names" class="form-control"><br><br>
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for = " email"  class="form-label">Email</label></br>
                        <input type="text" name="email" class="form-control" placeholder="Email Address"><br>
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for = " password"  class="form-label">Password</label></br>
                        <input type="password" name="password" class="form-control" placeholder="Password"><br>
                        @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    
                    <input type="submit" value="Register" class="btn btn-primary"><br>
                </form>
            </div>
        </div>
    </div>

    @endsection('content')

</body>

</html>