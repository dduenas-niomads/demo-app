<?php
$pdo = new PDO('sqlite:/var/www/html/database/database.sqlite');
$query = 'PRAGMA table_info(cities);';
$stmt = $pdo->query($query);
$columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($columns as $column) {
    echo 'Column Name: ' . $column['name'] . "\n";
}
?>
