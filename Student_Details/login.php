<?php include('./nav_log.php'); ?>

    <form class="m-4 p-2" action="./script.php" method="post">
        <h1 class="text-center p-2">Login</h1>
        <label class="form-label fw-bold" for="">User Name:</label>
        <input class="form-control" type="text" name="username" placeholder="Enter your name..." required>

        <label class="form-label fw-bold" for="">Password: </label>
        <input class="form-control" type="password" name="password" placeholder="Enter your password..." requird>

        <input class="btn btn-danger mt-3" type="submit" name="login" value="login">
        <a class="btn btn-success mt-3" href="./register.php" name="register">Register</a>
    </form>

<?php include('./footer.php'); ?>