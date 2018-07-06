<?php include_once 'header.php'; ?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Register</h2>
        <form class="signup-form" action="includes/register.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</section>

<?php include_once 'footer.php'; ?>
