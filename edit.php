<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $status = $_POST['status'];
    $conn->query("UPDATE tasks SET title='$title', status='$status' WHERE id=$id");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$row = $result->fetch_assoc();

include 'header.php';
?>

<h2>Edit Task</h2>
<form method="POST">
    <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" required>
    <select name="status">
        <option value="Pending" <?= $row['status']=='Pending'?'selected':'' ?>>Pending</option>
        <option value="Completed" <?= $row['status']=='Completed'?'selected':'' ?>>Completed</option>
    </select>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>

<?php include 'footer.php'; ?>
