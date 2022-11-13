<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>

    <link href="/css/landingpage.css" rel="stylesheet">
  
{{-- font awesome --}}
<script src="https://kit.fontawesome.com/4bd23a6058.js" crossorigin="anonymous"></script>    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
      @include('partials.navbar');

      <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">SOULBLADE</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Solusi dari IOT yang terpercaya sehingga dapat membantu dalam monitoring kondisi dari mesin hemodialisa yang ada.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Login</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Sign-Up</button>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
          <div class="container px-5">
            <img src="/img/bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
          </div>
        </div>
      </div>
<div class="testimoni">
    <div class="container mb-6">
      <div class="row">
          <div class="card col me-3">
              <img src="/img/2219375.jpg" class="card-img-top" alt="people">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          <div class="card col me-3">
              <img src="/img/2219375.jpg" class="card-img-top" alt="people">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          <div class="card col me-3">
              <img src="/img/2219375.jpg" class="card-img-top" alt="people">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>   
       </div>
    </div>
  </div>
  
<div class="backg">
<div class="containers">
          <div class="company">
            <h4>Perusahaan</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="social">
            <h4>Follow Us</h4>
            <ul>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>

          </div>
</div>
</div>   
 
</body>
</html>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>