<!DOCTYPE html>
<html>

<head>
    <title>Apply</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Admission Form</h2>
        <form action="submit.php" method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <select name="course" required>
                <option value="">Select Course</option>
                <option value="CSE">CSE</option>
                <option value="BBA">BBA</option>
                <option value="EEE">EEE</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>