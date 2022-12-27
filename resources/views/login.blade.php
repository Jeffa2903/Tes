<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unico</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
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

    <script src="../assets/js/main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
