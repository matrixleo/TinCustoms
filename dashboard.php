<?php include 'components/header.php';
include_once 'logic/UserMapper.php';

$mapper = new UserMapper();
$clients = $mapper->getAllUsers();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) {
?> 
    <div class="klientat">
            <h3>KLIENTAT TANE</h3>
            <table class="tablla">
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Modifiko</th>
                </tr>
                <?php foreach($clients as $klienti){ ?>
                <tr>
                    <td><?php echo $klienti['emri']?></td>
                    <td><?php echo $klienti['mbiemri']?></td>
                    <td><?php echo $klienti['username']?></td>
                    <td><?php echo $klienti['passwordi']?></td>
                    <td><a href="<?php echo "logic/deleteUser.php?action=delete-user&user-id=" . $klienti['id'];?>">Delete</a></td>
                    
                </tr>
                <?php } ?>
            </table>
    </div>

 <?php } else { 
     header("Location: home.php");
 }
 
 include 'components/footer.php' ?>   