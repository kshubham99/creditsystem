<?php 


include 'connection.php';

$payee_id = $_GET['payee_id'];
$rec_id = $_POST['receiver_id'];
$score = $_POST['credit'];

$sql = "UPDATE users SET score = 
        CASE
            WHEN id = $payee_id THEN (score - $score)
            WHEN id = $rec_id THEN (score + $score)
        END
        WHERE id IN ($payee_id, $rec_id)";

$res = $conn->query($sql);

if ($res) {
    echo 'Transfer Successful...';
} 
else 
    echo 'Error while transferring credit...';

 ?>

 <br><br><br>

 <a href="<?php echo BASE_URL ?>">Go Home</a>