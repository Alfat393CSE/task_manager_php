<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $conn->query("UPDATE tasks SET title='$title' WHERE id=$id");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Task</title></head>
<body>
  <h2>Edit Task</h2>
  <form method="POST">
    <input type="text" name="title" value="<?= $row['title'] ?>" required>
    <button type="submit">Update</button>
  </form>
  <a href="index.php">Back</a>
</body>
</html>
