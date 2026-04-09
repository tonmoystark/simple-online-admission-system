<?php
include 'db.php';
$result = $conn->query("SELECT * FROM applications");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>All Applications</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>