<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Kavi Creations</h1>
    <form action="includes/signup.inc.php" method="POST" >
        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="email" placeholder="Email">
        <input type="text" id="fname" name="uid" placeholder="Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Register</button>

    </form>
    <?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields</div>';
        }elseif($_GET["error"] == "invaliduid"){
            echo '<div class="error">Invalid Username ! </div>';
        }elseif($_GET["error"] == "invalidemail"){
            echo '<div class="error">Invalid Email ! </div>';
        }elseif($_GET["error"] == "passwordsdontmatch"){
            echo '<div class="error">Passwords not matching ! </div>';
        }elseif($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong ! </div>';
        }elseif($_GET["error"] == "none"){
            echo '<div class="error">Account Created ! </div>';
        }elseif($_GET["error"] == "usernametaken"){
            echo '<div class="error">Username / Email Already in Use ! </div>';
        }
    }
    ?>
   
    <p>Aleady have an account ? <a href="login.php"> Log in.</a> </p>
    
</div>
<?php
    include_once 'footer.php';
?>