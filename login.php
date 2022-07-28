<?php

    include 'connection.php';
    session_start();

    if(isset($_SESSION['userid']))
    {
        $userid = $_SESSION['userid'];
        $sql = "SELECT * FROM `user` WHERE id = '$userid' LIMIT 1";
        $result = $con->query($sql);
        if($result->fetch_assoc() != null)
        {
            header('location: index.php');
        }
    }

?>

<?php include 'header.php' ?>
<div class="container">
<?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
    
                $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                if($row != null)
                {   
                    $db_password = $row['password'];
                    if(password_verify($password, $db_password))
                    {
                        $_SESSION['userid'] = $row['id'];
                        header('location: index.php');
                    } else
                    {
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid login.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                    }
                } else
                {
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid login.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                }
    
            } else
            {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Please fill all the fields.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
        }
?>
    

<form method="post" class="w-50">
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="username" id="floatingInput" placeholder="jhon@email.com">
        <label class="form-label" for="floatingInput">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" type="password" name="password" id="floatingInput" placeholder="12345">
        <label class="form-label" for="floatingInput">Password</label>
    </div>
        <input class="btn btn-primary" type="submit" value="Login">
    </form>
    <br>
</div>
</body>
</html>