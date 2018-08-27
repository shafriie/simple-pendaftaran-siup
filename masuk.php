<html>
<head>
    <title>Sistem Informasi Pendaftaran SIUP</title>
</head>
<body style="background-color:#0f303f">

<center>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/bootstrap.min.css">

<!-- jQuery library -->
<script src="asset/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="asset/bootstrap.min.js"></script>

<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        </div>

        <div class="col-md-4" style="background-color:white;border-radius: 20px;padding-top: 10px">
            <img style="margin-top:20px" src="dki.png" width="100" height="100" />
            <br>
            <br>
            <h4 class="" style="font-family: verdana">Sistem Informasi Pendaftaran SIUP</h4>
            <hr>

            <div style="background-color:white;padding-bottom:40px;padding-left: 30px;padding-right: 30px">
                <form method="POST" action="login">
                  <div class="form-group" align="left">
                    <label for="username" >Username:</label>
                    <input type="text" name="username" placeholder="Username" required class="form-control" />
                  </div>
                  <div class="form-group" align="left">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" placeholder="Password" required class="form-control" />
                  </div>

                  <br>
                  <button style="width: 130px" type="submit" name="login" class="btn btn-default" value="VALUE"><b>Login</b></button>
                  <a style="width: 130px" href="./" class="btn btn-default" ><b>Back</b></a>
                </form>
            </div>

        </div>

        <div class="col-md-4">
        </div>
    
    </div>
</div>


</center>
</body>
</html>