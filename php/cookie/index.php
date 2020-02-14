<?php
if (isset($_GET['accept-cookies'])) {
    setcookie('accept-cookies', 'true', time() + 31556925);
    header('location: ./');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie banner</title>
    <link rel="stylesheet" href="cookie.css">
</head>
<body>
<?php
if (!isset($_COOKIE['accept-cookies'])) {
    ?>
    <div class="cookie-banner">
        <div class="container">
            <p>we use cookies on this website. By using this website, we will assume you consent to 
                <a href="/cookies">the cookies we set</a> .</p>
            <a href="?accept-cookies" class="button">Ok, continue</a>
        </div>
    </div>
    <?php
}
?>
    <p>this is a cookie banner</p>

    <script src="jquery.js"></script>
    <script src="cookie.js"></script>
</body>
</html>