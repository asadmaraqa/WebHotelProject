<?php 
include("config.php");




$sql = "SELECT * FROM categories WHERE category_id=?";

$stmt = $conn->prepare($sql); 
$stmt->bind_param("i", $category_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['name'];
}
