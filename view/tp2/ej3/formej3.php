<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script 
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.4/dist/jquery.validate.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../css/styleej3.css">

  <div class="login-box">
  <h3 class="text-center mb-4">Member Login</h3>

  <form id="formLogin" action="../action/verej3.php" method="post">

    <div class="input-group mb-3">
      <span class="input-group-text">
        <i class="bi bi-person"></i>
      </span>
      <input type="text" class="form-control" name="user" id="user" placeholder="Username">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">
        <i class="bi bi-lock"></i>
      </span>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

    <div class="d-grid">
      <input type="submit" value="Login" class="btn btn-login">
    </div>

  </form>
</div>

<script src="../js/validacionej3.js"> </script>

</head>
<body>