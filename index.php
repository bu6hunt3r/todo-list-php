<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('./app/views/header.php'); ?>
    <title>TODOIT - ToDo List App</title>
</head>
<body>
<div class="container">
    <dialog class="login" open>
        <form method="post">
            <input type="text" name="username" placeholder="Usename", id="username">
            <input type="text" name="password" placeholder="Password", id="password">
            <div style="margin: 0 auto">
                <input type="submit" value="Login" id="dologin">
                <button type="cancel" class="close">Close</button>
            </div>
        </form>
    </dialog>
</div>
</body>
</html>