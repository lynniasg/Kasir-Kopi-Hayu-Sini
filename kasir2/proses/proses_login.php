<?php
session_start();
include "connect.php";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5 (htmlentities($_POST['password'])) : "";
if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password' ");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $_SESSION['username_hayusini'] = $username && $password ;
        header('location: ../index.php?x=dashboard');
    } else { ?>
        <script>
            alert('Username or password is wrong');
            window.location = '../login.php?';
        </script>
<?php
    }
}
?>