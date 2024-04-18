<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets2/images/logow.png" type="image/x-icon">
    <link rel="stylesheet" href="assets2/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                    <img src="assets2/images/logow.png" height="100" class='mb-4'>
                        <p>Please fill the form to register.</p>
                    </div>
                    <form method="post" action="<?php echo base_url('register/proses') ?>">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control"  name="fullname" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">Username</label>
                                    <input type="text" class="form-control" name="username" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Password</label>
                                    <input type="password" class="form-control" name="password" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">level</label>
                                    <select type="select" class="form-control" name="level" required="required">
                                    <option value="user">user</option></select>
                                </div>
                            </div>
                        </diV>
                       
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right">Create</button>
                        </div>
                    </form>
                    <div class="divider">
                        <div class="divider-text"> // </div>
                    </div>
                    <div class="row">
                    <center><a href="<?= base_url('Login') ?>">Have an account? Login</a></center>
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
