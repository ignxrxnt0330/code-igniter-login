<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 300px;">

        <form action="<?php echo base_url('/dosignup') ?>" method="POST" class="row g-3 col-md-6">
        <div class="col-md-12">
            <label class="form-label" for="name">
                Name
            </label>
            <input type="text" id="name" name="name" class="form-control" required placeholder="Asdasd" />
        </div>
        <div class="col-md-12">
            <label class="form-label" for="email">
                    Email
            </label>
            <input type="text" id="email" name="email" class="form-control" required placeholder="asd@asd.asd"/>
        </div>
        <div class="col-md-12">
            <label class="form-label" for="pwd">
                Password
            </label>
            <input type="password" id="pwd" name="pwd" class="form-control" required placeholder="pwd" />
            
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
    </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>