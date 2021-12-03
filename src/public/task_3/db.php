<h1>this will be database</h1>
<?php
require_once './DbConnect.php';

$connect = new DbConnect('192.168.1.11', 'dbtest', 'postgres','password');
$connect->connectDB();




?>
</body>
</html>
