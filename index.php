<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Task Manager</h2>
  <a href="add.php">+ Add Task</a>
  <ul>
    <?php
    $result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
      echo "<li>" . $row['title'] .
           " <a href='edit.php?id=".$row['id']."'>Edit</a> " .
           " <a href='delete.php?id=".$row['id']."'>Delete</a></li>";
    }
    ?>
  </ul>
</body>
</html>
