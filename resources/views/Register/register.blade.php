<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v5.2</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="/css/register.css" rel="stylesheet">

  
  </head>

<img class="img-fluid" src="/img/2219375.jpg" alt="">
<body class="text-start justify-content-center">   
<div class="col-md-3">
<main class="form-registration">
   
<div class="row justify-content-center">
          <form action="/Register" method="post">
            <h1 class="h3 mb-3 fw-normal">Register please !</h1>
            @csrf
    <div class="form-floating">
       <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
       <label for="name">Name</label>
       @error('name')
       <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>   

    <div class="form-floating">
       <input type="text" name='username' class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
       <label for="username">Username</label>
       @error('username')
       <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>   

    <div class="form-floating">
       <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
       <label for="email">Email address</label>
       @error('email')
       <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>   

    <div class="form-floating">
      <input type="password"  class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
       {{ $message }}
     </div>
     @enderror
    </div>

    <div class="form-floating">
      <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
      <label for="confirm-password"> Confirm Password</label>
      @error('confirm-password')
      <div class="invalid-feedback">
       {{ $message }}
     </div>
     @enderror
    </div>

  
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

    <a class="" href="/Login">if you registered back to login</a>
 
  </form>
</div>
</div>
</main>


    
  </body>
</html>
