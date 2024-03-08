<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include_once 'meta/index-meta.php'; ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Vijay Malan</title>
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="shortcut icon" href="img/logo/logo.jpg" type="image/x-icon"> -->

</head>


<body>
  <!-- header 
======================================================-->
  <?php include 'include/index-header.php'; ?>

  <!-- Login Modal 
=======================================================-->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login to vijay malan's website</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Sign Up Modal 
====================================================-->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get an Vijay Malan's Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="cexampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="cexampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- crouser 
===============================================-->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/crouser/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font">Welcome to Mr. Vijay Malan!</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/crouser/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font">I think I healed too much now <br> I don't like anyone.</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/crouser/4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font">Mr. Vijay Malan</h2>

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="demo">
    <div class="leftSection">
      Hi, My name is <span class="purple">Vijay Malan</span>

      <div>and I am a passinate </div>
      <span id="element"></span>
      <div class="buttons">
        <a href="https://www.instagram.com/_itz_vijay/?igshid=YmMyMTA2M2Y%3D" target="_blank"><button
            class="btn">Instagram</button></a>
        <a href="https://vijaymalan7.github.io/myportfolio/"><button class="btn">Portfolio</button></a>
      </div>
    </div>
  </div>
  <!-- blogs
  ============================================ -->

  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Re-start </strong>
            <h3 class="mb-0">Never loose hope!</h3>
            <div class="mb-1 text-muted">______________</div>
            <p class="card-text mb-auto">Many of life’s failures are people who did not realize how close they were to
              success when they gave up.</p>

          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="img/index/t1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Turn on</strong>
            <h3 class="mb-0">Learn to being Happy</h3>
            <div class="mb-1 text-muted">______________</div>
            <p class="mb-auto">If you want to live a happy life, tie it to a goal, not to people or things.</p>

          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="img/index/t2.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">Best Quote</strong>
            <h3 class="mb-0">Life Mantra</h3>
            <div class="mb-1 text-muted">______________</div>
            <p class="card-text mb-auto">The purpose of our lives is to be happy.<br> You only live once, but if you do
              it right, once is enough.</p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="img/index/t3.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-warning">Vijay Malan</strong>
            <h3 class="mb-0">Self Motivation</h3>
            <div class="mb-1 text-muted">______________</div>
            <p class="mb-auto">Life should be big instead of being long.</p>

          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="img/index/t4.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="450px" src="img/index/i4.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Sometimes, you just need to change your altitude.<br>Life is short, and the world
                is wide.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="450" src="img/index/i2.jpg" alt="">
            <div class="card-body">
              <p class="card-text">In every photograph, a chapter of my life unfolds, telling stories only my heart
                can understand.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="450" src="img/index/i3.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Behind every photograph, there's a story waiting to be told, a memory eager to be
                relived.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- ******************************************* -->

  <!-- footer -->
  <?php include 'include/footer.php'; ?>

  <script>
    var typed = new Typed('#element', {
      strings: ['Day Dreamer!', 'Web Developer!', 'Software Engineer!'],
      typeSpeed: 100,
      loop: true,
    });
  </script>

</body>

</html>