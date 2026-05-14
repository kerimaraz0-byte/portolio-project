<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include "../includes/db.php";

$projects = $conn->query("SELECT * FROM projects")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; padding: 40px; background: #0f172a; color: white; }
        .card { background: #1e293b; padding: 20px; margin: 15px 0; border-radius: 12px; }
        a { color: #38bdf8; }
    </style>
</head>
<body>

<h1>Admin Dashboard</h1>
<p>Welcome, <?php echo $_SESSION['admin']; ?></p>

<a href="logout.php">Logout</a>

<hr>

<h2>Projects from Database</h2>

<?php foreach ($projects as $project): ?>
    <div class="card">
        <h3><?php echo $project['title']; ?></h3>
        <p><?php echo $project['description']; ?></p>
        <strong><?php echo $project['technologies']; ?></strong>
    </div>
<?php endforeach; ?>

</body>
</html>