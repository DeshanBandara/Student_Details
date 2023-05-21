<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5" >
        <h1 class="text-center fw-bold" >Update New Employee</h1>

        <?php
            $id=$_GET['id'];
            $sql="SELECT * FROM student WHERE id='$id'";
            $res=mysqli_query($connect,$sql);

            if (mysqli_num_rows($res)>0) {
                $row=mysqli_fetch_assoc($res);
                ?>

                    <div class="form-group">
                        <label for="" class="form-label fw-bold">Id</label>
                        <input type="text" name="id" required class="form-control" readonly value="<?php echo $row['id']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input type="text" name="name" required class="form-control" value="<?php echo $row['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label fw-bold">Reg.No</label>
                        <input type="text" name="regno" required class="form-control" value="<?php echo $row['regno']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label fw-bold">City</label>
                        <input type="text" name="city" required class="form-control" value="<?php echo $row['city']; ?>">
                    </div>

                    <input type="submit" name="update" class="btn btn-success m-2" value="Update">
                    <a href="./home.php" class="btn btn-secondary m-2" value="Back">Go back</a>
    
                <?php
            }
        ?>

        </form>

<?php include('./footer.php'); ?>