<?php 


include 'connection.php';

$sql = "SELECT * FROM users";

$users = $conn->query($sql);
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>credit management</title>
    <style>
            body{background-color:#006266}
            td{font-style: italic;font-size: 22px}
               table{background-color:#2C3A47}
               td{background-color:#4b6584}
               
               }
            
    </style>
    </head>
    <body >
       <h1 style="text-align:center;font-size:60px;color:black ;text-underline-position:below">CREDIT MANAGEMENT SYSTEM</h1> 
       <table  cellspacing=10px cellpadding=10 align="center" border="5">


 <table>    
        <thead> 
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Score</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php  while ($row = $users->fetch_array()) { ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['score'] ?></td>
                    <td>
                        <button><a href="<?php echo'transferCredit.php?user_id=' . $row['id'] ?>">Transfer Credit</a></button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
 </table>
 </body>
</html>


