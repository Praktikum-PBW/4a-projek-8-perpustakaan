<?php
require 'koneksi.php';
// LOGIN
    if (isset($_POST["Login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $signin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $signin);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                // Set Session
				session_start();
				$_SESSION['username'] = $_POST["username"];
                $_SESSION["Admin"] = true;
                header("Location:home.php");
                exit;
            }
        }
        $error = true;
        if (isset($error)){
            ?>
                <script>
                alert("Username atau Password salah!");
                </script>
            <?php
        }
    }
    
?>