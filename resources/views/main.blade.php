<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgenX-Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container-sm mt-5 mb-5 bg-primary-subtle border border-primary-subtle rounded-3" style="height: 500px">
        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand">Agen-X Ticketing</a>


                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Login
                  </button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Login Here</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('postlogin') }}" method="POST">
                                @csrf
                        <div class="login-page">

                            <div class="login-input">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" required>
                                <br>
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <i class="far fa-eye" id="togglePassword"></i>

                                <div class="btn-submit">
                                    <a href="">Forgot Password</a>
                                    <button class="btn btn-primary form-control">Log in</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        </div>



                      </div>
                    </div>
                  </div>
                </div>
              </nav>

              <div class="log-in mt-5 mb-5 -center mx-auto" style="width: 40%; height: 100%;">
                <form method="POST" action="simpantiket">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Telfon</label>
                        <input type="text" class="form-control" id="no_telfon" name="no" required>
                      </div>

                    <button type="submit" id="exampleModal" class=" btn btn-primary" style="width: 100%" aria-labelledby="exampleModalLabel" data-bs-target="#exampleModal">Pesan Tiket</button>
                  </form>
              </div>



              <!-- Modal -->

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
