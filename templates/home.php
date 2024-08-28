<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Coucou, <?= htmlspecialchars(getUsername()) ?> !</h1>
    <nav>
        <a href="http://localhost/MVCpractice-testsite">Home</a>
        <a href="http://localhost/MVCpractice-testsite?admin=true">Admin</a>

        <!-- logout button just to test session off/on -->
        <?php// if (connected()) { ?> 
        <!-- <form method="post" action="index.php">
            <input type="hidden" name="logout">
            <button type="submit">Logout</button>
        </form> -->
    <?php //}?>
    </nav>
</body>
</html>