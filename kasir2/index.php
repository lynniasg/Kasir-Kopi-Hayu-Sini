<?php
            if (isset($_GET['x']) && $_GET['x'] == 'dashboard'){
                $page= "home.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'product') {
                $page = "product.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
                 $page = "order.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
                include "login.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'log out') {
                include "proses/proses_logout.php";
            }
            else{
                include "main.php";
            }
?>