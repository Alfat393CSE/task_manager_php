<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $conn->query("INSERT INTO tasks (title) VALUES ('$title')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Task</title></head>
<body>
  <h2>Add Task</h2>
  <form method="POST">
    <input type="text" name="title" required>
    <button type="submit">Save</button>
  </form>
  <a href="index.php">Back</a>
</body>
</html>
