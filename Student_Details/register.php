<?php include('./nav_log.php'); ?>

<form class="m-4 p-2" action="./script.php" method="post">
        <h1 class="text-center p-2">Register</h1>
        <label class="form-label fw-bold" for="">User Name:</label>
        <input class="form-control" type="text" name="username" placeholder="Enter your name..." required>

        <label class="form-label fw-bold" for="">Password: </label>
        <input class="form-control" type="password" name="password" placeholder="Enter your password..." requird>

        <label class="form-label fw-bold" for="">Confirm Password: </label>
        <input class="form-control" type="password" name="confirm_password" placeholder="Enter your password again..." requird>

        <input class="btn btn-danger mt-3" type="submit" name="signup" value="Signup">
    </form>

<?php include('./footer.php') ?>