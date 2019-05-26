<?php 

include 'connection.php';

$payee_id = $_GET['user_id'];


$sql = "SELECT * FROM users WHERE id != $payee_id";
$users = $conn->query($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>credit management</title>

           

 <style>
 body{background-color:#0a3d62}

     #wrapper {
            width: 350px;
            height: 350px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:#3c6382
        }

     .form-element {
        margin: 50px;
     }
 </style>
 </head>
<body >

 <h3 style="text-align:center;font-size:60px;color:black ;text-underline-position:below">Transfer Credit</h3>

 <div id="wrapper">
     
     <form action="credit.php?payee_id=<?php echo $payee_id ?>" method="POST">
         
        <div class="form-element">
        <label>to:</label>
            <select name="receiver_id" id="">
                <?php while ($row = $users->fetch_array()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>
            </select>
        </div>

         <div class="form-element">
             <label for="credit">Credit</label>
             <input type="text" name="credit">
         </div>

         <input type="submit" value="transfer">
     </form>
 </div>
 </body>
</html>