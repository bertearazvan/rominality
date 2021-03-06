<?php
$active = 'loginPage';
$showError = false;
session_start();
if ($_SESSION) {
    header("Location: latest_releases.php");
}

if (!empty($_POST)) {

    /* New object of Students() */
    require_once('../classes/User_class.php');
    $user = new User();

    // get name fields from input in new_student.php
    $email = $_POST["email"];
    $password = $_POST["password"];

    // call add method in students object
    $res = $user->login($email, $password);

    if ($res == 'invalid-credentials') {
        $showError = 'Invalid credentials';
    }
    if ($res === true) {
        header("Location: latest_releases.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
/* Include <head></head> */
require_once('../includes/header.php');
?>

<body>
    <?php
    /* Include <head></head> */
    require_once('../includes/menu.php');
    ?>


    <div class="hero-container">
        <div class="hero-img-container">
            <img class="hero-img" src="../img/hero2.png">
        </div>
        <div class="box-wide">
            <div class="landing-page-container box-wide-inner">
                <div class="titles">
                    <h1>Play and share</h1>
                    <h3>Underground music community</h3>
                </div>
                <div class="login-form">
                    <form class="" method="POST" action="login.php">
                        <h4>Login to rominality</h4>
                        <div class="">
                            <!-- <label for="director" class="">Email</label> -->
                            <input type="email" class="form-control" id="director" placeholder="Email" name="email" required>
                        </div>

                        <div class="">
                            <!-- <label for="" class="">Password</label> -->
                            <input type="password" class="form-control" id="plot" placeholder="Password" name="password" required>
                        </div>
                        <?php
                        if ($showError) {
                            echo "<div class='form-group'><p class='error-text'>$showError</p> </div>";
                        }
                        ?>

                        <div class="">
                            <input type="submit" class="button btn-white login-btn" value="Login">
                        </div>



                    </form>
                </div>

            </div>
            <?php
            require_once('../components/landing-page-bottom-animation.php');
            ?>
        </div>
    </div>


    <?php
    require_once('../components/about-us-component.php');
    require_once('../includes/footer.php');
    ?>
    <script src="../scripts/app.js"></script>
</body>

</html>