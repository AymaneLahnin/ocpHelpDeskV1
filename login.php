<?php 
include 'init.php';

// Redirect if already logged in
if($users->isLoggedIn()) {
    header('Location: ticket.php');
    exit();
}

// Handle login and get error message
$errorMessage = $users->login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/emi.png">

    <title>Help Desk OCP</title>
</head>

<body>

    <div class="container2" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Don't have an account?</h1>
                <span>Contact the admin for registration</span>
                <a href="https://www.google.com/search?q=gmail+login" class="icon">
                    <button type="button">
                        <i class="fa-brands fa-google-plus-g"></i>
                        Take me to Gmail
                    </button>
                </a>
            </form>
        </div>

        <div class="form-container sign-in">
            <form id="loginform" class="form-horizontal" role="form" method="POST" action="">
            <div style="display-items:inline">
            <img src="images/emi.jpg" alt="Logo1" style="height: 90px;width:120px; padding:5px;">
            <img src="images/ocp.png" alt="Logo1" style="height: 90px;width:120px; padding:5px;">
            </div>

                <h1>Sign In</h1>
                <span>Use your email and password given to you by the admin</span>

                <?php if ($errorMessage != '') { ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
                <?php } ?>

                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login" value="Login">Sign In</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Employee!</h1>
                    <p>The registration is a procedure that can be done by the admin</p>
                    <button class="hidden" id="register">Account Creation</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>
