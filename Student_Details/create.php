<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5" >
        <h1 class="text-center fw-bold" >Create New Employee</h1>

        <div class="form-group">
            <label for="" class="form-label fw-bold">Name</label>
            <input type="text" name="name" placeholder="Enter your name.." required class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label fw-bold">Reg.No</label>
            <input type="text" name="regno" placeholder="Enter your Reg No.." required class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label fw-bold">City</label>
            <input type="text" name="city" placeholder="Enter your city.." required class="form-control">
        </div>

        <input type="submit" name="create" class="btn btn-success m-2" value="create">
        <a href="./home.php" class="btn btn-secondary m-2" value="Back">Go back</a>
    </form>

<?php include('./footer.php'); ?>