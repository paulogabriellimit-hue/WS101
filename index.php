<?php
// Connect to database
require_once "db_connect.php";

// Retrieve company information
$sql = "SELECT * FROM company";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Information Technology Company</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        header {
            background: #172554;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .container {
            width: 80%;
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px #ccc;
        }

        h2 {
            color: #172554;
        }

        p {
            line-height: 1.8;
        }

        footer {
            text-align: center;
            background: #172554;
            color: white;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<header>
    <h1>Information Technology Company</h1>
    <p>Innovating Technology, Connecting People</p>
</header>

<div class="container">

    <h2>Company Information</h2>

    <?php if ($result && $result->num_rows > 0): ?>

        <?php while ($row = $result->fetch_assoc()): ?>

            <h3>
                <?php echo htmlspecialchars($row['company_name']); ?>
            </h3>

            <p>
                <strong>Description:</strong><br>
                <?php echo htmlspecialchars($row['description']); ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?php echo htmlspecialchars($row['email']); ?>
            </p>

            <p>
                <strong>Contact Number:</strong>
                <?php echo htmlspecialchars($row['contact_number']); ?>
            </p>

            <p>
                <strong>Address:</strong>
                <?php echo htmlspecialchars($row['address']); ?>
            </p>

        <?php endwhile; ?>

    <?php else: ?>

        <p>No company information found.</p>

    <?php endif; ?>

</div>

<footer>
    <p>&copy; 2026 Information Technology Company. All Rights Reserved.</p>
</footer>

</body>
</html>

<?php
$conn->close();
?>
