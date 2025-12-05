<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class = "bg-light"> 
<div class ="container d-flex justify-content-center align-items-center vh-100">
    <div class ="card shadow p-4" style="width: 350px">
        <h3 class="text-center mb-4">LOGIN</h3>
        <form action ="login_proses.php" method="POST">
            <div class = "mb-3">
                <label class ="form-label">Email/Username</label>
                <input type ="text" name="login" class="form-control" placeholder="Email atau username">
            </div>
            <div class = "mb-3">
                <label class ="form-label">Password</label>
                <input type ="password" name="password" id="password" class="form-control"
            </div>
            <button type ="submit" class ="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>    
</body>
</html>