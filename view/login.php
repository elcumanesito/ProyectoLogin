<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/login.css">
    <title>Login</title>
</head>
<body class="contenedor">

<section class= "principal">
  <img src="/assets/devchallenges.svg" alt="##" class="img">
  <form action="/handle_db/loginconect.php" method="POST">
    <div>
        <h1>Login</h1>
        <label class="form-label">Email</label>
        <div>
        <input type="email" class="form-control"placeholder="example@email.com" name="correo">
        </div>
    </div>
    <div>
        <label class="form-label">Password</label>
        <div>
        <input type="password" class="form-control" id="inputPassword" name="contrasena">
        </div>
    </div>
    <section class="regis">
      <div>
          <button type="submit" class="btn-primary"> Start coding now </button>
      </div>
      <div class ="registerTexto">
                <p>or continue with these social profile</p>
            </div>
      <div class="icon">
                <img src="/assets/Google.svg">
                <img src="/assets/Facebook.svg">
                <img src="/assets/Twitter.svg">
                <img src="/assets/Gihub.svg">
      </div>
      <div class="dev">
      <p>Don't have an account yet?    <a href="/index.php">Register</a></p>
      </div>
      
    </section>
  </form>
</section>
<section class="complete">
            <p>Created By: ElCumanesitoDev</p>
            <p>devchallenge.io</p>
</section>

</body>
</html>
