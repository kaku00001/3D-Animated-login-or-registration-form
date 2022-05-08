<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="register.css">
    <title>Register 
        | Aslii online Form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box"
            id="card">
                <div class="card-front">

                    <h2>LOGIN</h2>
                    <form action="#">
                        <input type="email"class="input-box" placeholder="Your Email Id" required>


                        <input type="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="submit-btn">Login</button>

                        <input type="checkbox"><span>Remeber Me</span>
                    
                    </form>
                    <button type="button" class="new-btn" onclick="openREGISTER()" >I'm New Here</button>
                    <a href="#">Forgot Password</a>
                </div>


                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action="registration.php" method="POST">
                        <input type="text" class="input-box" placeholder="Your Name" name="user" required>
                        <input type="email"class="input-box" placeholder="Your Email Id" name="email" required>


                        <input type="password" class="input-box" placeholder="Password" name="password" required>
                        <button type="submit" class="submit-btn">Submit</button>

                        
                    
                    </form>
                    <button type="button" class="new-btn" onclick="openLOGIN()" >I've an account</button>
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>

    </div>

    <script>

var card = document.getElementById("card")

function openREGISTER(){
    card.style.transform= "rotatey(-180deg)";

}
function openLOGIN(){
    card.style.transform = "rotatey(0deg)";
}
    </script>

</body>
</html>