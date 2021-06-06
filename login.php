<?php
  session_start();
  if (isset($_SESSION['loggedin'])) {
    header("location:worker.php");
    
  }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="icons/itworkicon.png">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <title>Login</title>
    <link href="login.css" rel="stylesheet">

</head>
<body class="text-center" background="images/coding.jpeg">
        <form class ="form-signin" action="proses_login.php" method="post" id="myForm" onsubmit="return validasi(this)">
        <img class="mb-4" src="icons/itworkicon.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Worker<br />Please sign in</h1>
            <div class="mb-3 row">
            <label for="inputEmail" class="sr-only">Email</label>
            
                    <input type="text" id="inputEmail" class="form-control" name="email" required>
                
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="sr-only">Password</label>
                
                    <input type="password" class="form-control" id="inputPassword" name="pw" required>
                
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <label>
			<a href="loginp.php">Log In As Company</a> <br/>
            <a href="registrasi.php">Don't Have an Account? Register</a>
            </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted"> ©ITWork 2021</p>
        </form>


    </div>
    
</body>
<script type="text/javascript">
  function validasi(form){
   if (form.nama.value == ''){
     alert("Nama wajib diisi");
     form.nama.focus();
     return(false)
   }
   if (form.password.value == ''){
     alert("Password wajib diisi");
     form.password.focus();
     return(false)
   }
  return(true)
  }
</script>
</html>

<?php
  }
?>