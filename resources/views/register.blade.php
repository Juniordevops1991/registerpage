<!DOCTYPE html>
<head>
<title>Registration Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container bg-light py-3 mt-5">
<div class="row justify-content-center align-items-center">
<div class="col-sm-4"></div>
<div class="col-sm-4">
  <h2><center>REGISTRATION FORM</center></h2>
    <!--Name input -->
  <form action="{{ route('post.register')}}" method="POST">
  @csrf

  @if (count( $errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="form-outline mb-2 mt-2">
    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name"/>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-2 mt-2">
    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address"/>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2 mt-2">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
  </div>

  <!-- Submit button -->
  <div class="mt-2">
  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
  </div>
  </form>
</div>
<div class="col-sm-4"></div>
</div>
</div>

</body>

</html>