<?php 
    session_start();
    if (isset($_SESION["user"])){
        header("location:beranda.php");
    }
    include("function.php");
?>

<html>
    <head><title>LOGIN</title></head>
    <body>
        <?php 
            if(isset($_GET["eror"])){
                if($_GET["eror"]== "wrong"){
                    echo '<h3>Username dan Password salah!</h3>';
                }
            }
            if(isset($_GET["notif"])){
                if($_GET["notif"]== "logout"){
                    echo '<h3>Berhasil Logout</h3>';
                }
            }
            if(isset($_POST['submit'])){
                echo do_login($_POST['username'],$_POST['password']);
            }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Username : <input type="text" name="username"><br>
            Password : <input type="text" name="password"><br>
            <input type="submit" name="submit" value="SIGN IN">
        </form>
    </body>
</html>