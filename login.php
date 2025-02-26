<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Kavi Creations</h1>
    <form action="includes/login.inc.php" method="post" >
        <input type="text" id="fname" name="uid" placeholder="Email / Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <button name="submit" type="submit">Login</button>

    </form>
    <?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields</div>';
        }elseif($_GET["error"] == "wronglogin"){
            echo '<div class="error">Invalid Details ! </div>';
        }elseif($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong ! </div>';
        }elseif($_GET["error"] == "none"){
            echo '<div class="error">Account Created ! </div>';
        }
    }
    ?>
    <p>New Here ? <a href="signup.php"> Register.</a> </p>
    </div>
<?php
    include_once 'footer.php';
?>