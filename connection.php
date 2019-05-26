<?php 
define('BASE_URL', '/creditsystem/');
$config = [

    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'credit_management_system'
];


$conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

// Check connection
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


 ?>