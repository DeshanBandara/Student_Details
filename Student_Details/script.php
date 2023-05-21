<?php 

    include('./dbconnect.php');
    session_start();

    //Login Script
    if(isset($_POST['login'])){
        $username=mysqli_real_escape_string($connect,$_POST['username']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);

        $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
        $res=mysqli_query($connect,$sql);

        if(mysqli_num_rows($res)>0){
            //echo "Login success";
            $_SESSION['user']=$username;
            header('location:home.php');
        }else{
            echo "Failed to login";
        }
    }

    //Create student
    if (isset($_POST['create'])){
        $name=mysqli_real_escape_string($connect,$_POST['name']);
        $regno=mysqli_real_escape_string($connect,$_POST['regno']);
        $city=mysqli_real_escape_string($connect,$_POST['city']);

        $sql="INSERT INTO student(name,regno,city) VALUES('$name','$regno','$city')";
        $res=mysqli_query($connect,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Faild to add student";
        }
    }

    //Update script
    if(isset($_POST['update'])){
        $id=mysqli_real_escape_string($connect,$_POST['id']);
        $name=mysqli_real_escape_string($connect,$_POST['name']);
        $regno=mysqli_real_escape_string($connect,$_POST['regno']);
        $city=mysqli_real_escape_string($connect,$_POST['city']);

        $sql="UPDATE student SET name='$name',regno='$regno',city='$city' WHERE id='$id'";
        $res=mysqli_query($connect,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Faild to update";
        }
    }

    //Register
    if(isset($_POST['signup'])){
        $username=mysqli_real_escape_string($connect,$_POST['username']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);
        $confirm_password=mysqli_real_escape_string($connect,$_POST['confirm_password']);

        $sql="INSERT INTO user(username,password,confirm_password) VALUES('$username','$password','$confirm_password')";
        $res=mysqli_query($connect,$sql);

        if($res){
            if($password == $confirm_password){
                header('location:login.php');
            }else{
                echo "Password not mached. Try again";
            }
        }else{
            echo "Faild to connect.";
        }
    }
?>