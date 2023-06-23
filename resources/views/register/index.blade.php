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
                <h5 class="text-center text-dark mt-5">Register Page</h5>    
                  <form class="card-body" action="" method="post">
                    @csrf
                          <div class="form-floating">
                            <input required type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <label for="floatingInput">Username</label>
                          </div>
                          <div class="form-floating">
                            <input required type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <label for="floatingInput">Name</label>
                          </div>

                          <div class="form-floating">
                            <input required  type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="floatingInput">Password</label>
                          </div>

                          <div class="form-floating">
                            <input required type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                            <label for="floatingInput">Confirm Password</label>
                          </div> 
                          <br>
                          <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Register</button>
                          <br>
                          <br>
                          @if ($responseData !== '')
                          @if ($responseData['success'] == false)
                            @foreach ($responseData['message'] as $item)
                            <strong class="text-danger">{{$item[0]}} <br></strong>
                            @endforeach
                          @else
                          @foreach ($responseData['message'] as $item)
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{$item[0]}}</strong>
                          <a href="/login" class="text-success"><u>Login Here</u></a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endforeach    
                          @endif
                        @endif
                        </form>
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>