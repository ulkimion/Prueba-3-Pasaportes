
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
</head>
<body class="text-center">
    
    <main class="form-signin w-100 m-auto">
    <form action="login.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Ingrese sus datos</h1>

        <div class="form-floating">
        <input type="text" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Ingresar correo</label>
        </div>

        <div class="form-floating">
        <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
        </div>

        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    </form>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>