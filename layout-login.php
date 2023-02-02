<!doctype html>
<html lang="en">
  <head>
    <title>เข้าสู่ระบบ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url('imgs/5816231.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
  <body>
    <form method="post" name="frm-login" action="login.php">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>เข้าสู่ระบบ</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="Username" id="Username" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pwd" id="pwd" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_login" class="btn btn-success w-100">เข้าสู่ระบบ</button>
                        </div>
                        <hr>
                        <div class="form-group">
                            <a href="#" class="text-dark btn w-100">สมัครสมาชิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </form>
</body>
</html>