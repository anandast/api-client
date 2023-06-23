<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h5 class="text-center text-dark mt-5">Login</h5>    
                  <form class="card-body" action="" method="post">
                    @csrf
                          <div class="form-floating">
                            <input type="text" required class="form-control" id="username" name="username" placeholder="Username">
                            <label for="floatingInput">Username</label>
                          </div>
                          <div class="form-floating">
                            <input type="password" required class="form-control" id="password" name="password" placeholder="Password">
                            <label for="floatingInput">Password</label>
                          </div>
                          <br>
                          <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? <a href="/register" class="text-dark fw-bold">Create an account</a></div>
                          <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
                        </form>
                   
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>