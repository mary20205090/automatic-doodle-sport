@extends('main')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

<div class="container">
  <div class="row">
    <div class="col-12">
   <div class="card">
	<div class="card-header"></div>
   <div class="card-body">
            <h5>login</h5>

   
	<form action="{{ route('validate_login') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email</label> <br>
    <input type="text" placeholder="Enter Email" class="form-control" name="email" > <br>
	@if($errors->has('email'))
		<span class="text-danger">{{ $errors->first('email') }}</span>
	@endif
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label><br>
    <input type="text"  placeholder="Enter Password"class="form-control" name="password" ><br>
	@if($errors->has('password'))
		<span class="text-danger">{{ $errors->first('password') }}</span>
	@endif
</div>
<button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
</div>


   
   </div>
    </div>
     </div>
</div>
@endsection('content')