<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/logo/Tab-Icon.png" sizes="30x30">
    <title>SIGN IN NOW</title>
    <link rel="stylesheet" href="https://use.typekit.net/example.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
   <!-- Header Section -->

   <header>
        <a href="index.html" class="logo">Royal <span>Fitness</span></a>

    </header>



     <!--Login-->
    <div class="container">
            <form action="login-post.php">






                <h1>WELCOME BACK TO THE WORLD OF </h1>
                <div class="signin_logo">
                <img src="assets/logo-in.PNG" alt="signin_logo">
                </div>




                <?php if(isset($user_error)){
                echo $user_error;}?>



                <div class="u">
                    <label for="user">USERNAME OR EMAIL :</label>
                    <input type="text" id="user" name="username" placeholder="Please Enter Your Username Or Email">
                </div>

                <?php if(isset($password_error)){
                echo $password_error;
            }?>
                <div class="p">
                    <label for="password">PASSWORD :</label>
                    <input type="password" id="password" name="password" placeholder="Please Enter Your Password">
                </div>
                <div class="signup">
                <p >DON'T HAVE AN ACCOUNT ? <a href="register.php">SIGN UP NOW!</a></p>
                </div>   
                <button class="button" type="button" onclick="login()">LOG-IN</button>
            </form>
        </div>
        <img class="left" src="assets/login.PNG" alt="characters">
        <div class="error-message" id="error-message"></div>
        <script>
            function displayErrorMessage(message) {
                var errorMessage = document.getElementById("error-message");
                errorMessage.innerText = message;
                errorMessage.style.display = "block";
            }
            function login() {
                var loginSuccessful = false;
                if (!loginSuccessful) {
                    displayErrorMessage("Incorrect username or password. Please try again.");
                }
            }
        </script>
        
</body>
</html>