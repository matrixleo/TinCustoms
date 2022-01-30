<?php 
include "UserMapper.php";
if (isset($_GET['action']) && $_GET['action']=="delete-user") {
    if(isset($_GET['user-id']) && (is_numeric($_GET['user-id']))){
        $userId = $_GET['user-id'];
        $mapper = new UserMapper();
        $mapper->deleteUser($userId);
        header("Location:../dashboard.php");
    }
    
    
}