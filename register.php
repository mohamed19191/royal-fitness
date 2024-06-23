<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/logo/Tab-Icon.png" sizes="30x30">
    <title>SIGN UP NOW</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

 <!-- Header Section -->

 <header>
        <a href="index.html" class="logo">Royal <span>Fitness</span></a>

    </header>



    <!--register-->
    <div class="container">
        
    
    
    <form action="register_post.php" method='POST'>





            <h1>JOIN THE WORLD OF </h1>
            <div class="signup_logo">
                <img src="assets/logo-in.png" alt="signup_logo">
            </div>

            <?php if(isset($email_error)){  
                echo $email_error;
            }?>
            <div class="input-area e">
                <label for="email">EMAIL :</label>
                <input type="email" id="email" name="email" placeholder="Please Enter Your Email">
                <i class="error-icon fas fa-exclamation-circle"></i>
                <div class="error-txt">Email field is Empty!</div>
            </div>
            <?php if(isset($user_error)){
                echo $user_error;}?>
          
            <div class="input-area u">
                <label for="username">USERNAME :</label>
                <input type="text" id="username" name="username" placeholder="Please Enter Your Username">
                <i class="error-icon fas fa-exclamation-circle"></i>
                <div class="error-txt">Username field is Empty!</div>
            </div>
        
              <?php if(isset($age_error)){
                echo $age_error;
            }?>
            <div class="input-area a">
                <label for="age"> Age :</label>
                <input type="number" id="user" Age="user" placeholder="Please Enter Your Age">
                <i class="error-icon fas fa-exclamation-circle"></i>
                <div class="error-txt">Age field is Empty!</div>
            </div>
            <?php if(isset($gender_error)){
                echo $gender_error;
            }?>
            <div class="input-area_g">
                <label for="grander"> Grander :</label>
                <select id="grander">
                    <option value="male">male</option>
                    <option value="female">female</option>
                  
                </select>
            </div>
            <?php if(isset($password_error)){
                echo $password_error;
            }?>
            <div class="input-area p">
                <label for="password">PASSWORD :</label>
                <input type="password" id="password" name="password" placeholder="Please Enter Your Password">
                <i class="error-icon fas fa-exclamation-circle"></i>
                <div class="error-txt">Password field is Empty!</div>
            </div>
            <div class="signin">
                <p >HAVE AN ACCOUNT ? <a href="login.php">LOG IN NOW!</a></p>
            </div>   
            <input class="button" type="submit" name='submit' value="SIGN UP">
        </form>
    </div>
    <img class="left" src="assets/login.png" alt="characters">
    <div class="error-message" id="error-message"></div>

    <script>
        const form = document.querySelector("form");
        const eField = form.querySelector(".e");
        const eInput = eField.querySelector("input");
        const uField = form.querySelector(".u");
        const uInput = uField.querySelector("input");
        const pField = form.querySelector(".p");
        const pInput = pField.querySelector("input");

        form.onsubmit = (e) => {
            e.preventDefault(); //preventing from form submitting

            // Check if email, username, and password are blank
            (eInput.value == "") ? showError(eField) : hideError(eField);
            (uInput.value == "") ? showError(uField) : hideError(uField);
            (pInput.value == "") ? showError(pField) : hideError(pField);
        }

        function showError(field) {
            field.classList.add("error");
            const errorTxt = field.querySelector(".error-txt");
            errorTxt.style.display = "block";
        }

        function hideError(field) {
            field.classList.remove("error");
            const errorTxt = field.querySelector(".error-txt");
            errorTxt.style.display = "none";
        }
    </script>
</body>
</html>