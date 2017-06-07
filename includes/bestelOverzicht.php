<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage()."<br>";
    die();
}
$sql = 'SELECT * FROM orders';
?>

<html>

<head>
    <title>Orderlist</title>
</head>

<body>

<table border="1" cellpadding="1" cellspacing="1">

    <tr>

        <th>ID</th>
        <th>Time</th>
        <th>Firtname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Country</th>
        <th>Zip</th>
        <th>State</th>
        <th>City</th>
        <th>Address</th>
        <th>Phone</th>

    </tr>

    <?php

    foreach( $db->query($sql) as $row ) {

        echo "<tr>";
        echo "<td>".$row['orderID']."</td>";
        echo "<td>".$row['order_time']."</td>";
        echo "<td>".$row['cust_firstname']."</td>";
        echo "<td>".$row['cust_lastname']."</td>";
        echo "<td>".$row['cust_email']."</td>";
        echo "<td>".$row['cust_country']."</td>";
        echo "<td>".$row['cust_zip']."</td>";
        echo "<td>".$row['cust_state']."</td>";
        echo "<td>".$row['cust_city']."</td>";
        echo "<td>".$row['cust_address']."</td>";
        echo "<td>".$row['cust_phone']."</td>";
        echo "</tr>";
    }

    $db = null;

    ?>

</table>

</body>


</html>