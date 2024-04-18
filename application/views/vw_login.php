
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Certificate</title>
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets2/images/logoy2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets2/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="assets2/images/logow.png" height="100" class='mb-4'>
                        <p>Please sign in to continue to E - Certificate.</p>
                    </div>
                    <form method="post" action="<?= base_url('Login/login') ?>">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                    <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <a href="<?= base_url('Login_Admin') ?>">
                            <button class="btn btn-block mb-2 btn-secondary"></i> Sign In As Admin </button>
                        </div>
                        <hr>
                        <div class="card-footer text-center py-2">
                      <a href="<?= base_url('Register') ?>">Need an account? Sign up!</a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets2/js/feather-icons/feather.min.js"></script>
    <script src="assets2/js/app.js"></script>
    
    <script src="assets2/js/main.js"></script>
</body>

</html>
