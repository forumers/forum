<?php session_start(); ?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
            <div class="nav-login">
                <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '<form action="./includes/logout.php" method="POST">
                                <button type="submit" name="submit">Logout</button>
                              </form>';
                    } else {
                        echo '<form action="./includes/login.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/Email">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="submit">Login</button>
                              </form>
                        <a href="register.php">Register</a>';
                    }
                ?>
            </div>
        </div>
    </nav>
</header>