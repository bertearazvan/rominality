<!DOCTYPE html>
<html lang="en">
<nav class="navbar  ">
    <div class="box-wide">
        <div class="navigation ">
            <div class="nav-left-aligned"><a class="logo" id="logoId" href="../users/login.php"><img style="width:192px" src="../img/logo2.png" /></a></div>
            <div class="nav-right-aligned">
                <li><a <?php echo ($active == 'loginPage') ? 'class="menu-active"' : '' ?> href="../users/login.php">Login</a></li>
                <li><a <?php echo ($active == 'signupPage') ? 'class="menu-active"' : '' ?> href="../users/signup.php">Signup</a></li>
                <div class="nav-two-design-lines not-loggedin">
                    <div class="nav-design-line"></div>
                    <div class="nav-design-line"></div>
                </div>
            </div>
        </div>
    </div>
</nav>