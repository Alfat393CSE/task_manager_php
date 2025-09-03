<?php
include 'db.php';
include 'header.php';

$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
?>

<ul>
<?php while ($row = $result->fetch_assoc()): ?>
    <li class="<?= $row['status'] === 'Completed' ? 'completed' : '' ?>">
        <?= htmlspecialchars($row['title']) ?>
        <span>
            <?php if($row['status'] === 'Pending'): ?>
                <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
            <?php endif; ?>
            <a href="delete.php?id=<?= $row['id'] ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
        </span>
    </li>
<?php endwhile; ?>
</ul>

<?php include 'footer.php'; ?>
