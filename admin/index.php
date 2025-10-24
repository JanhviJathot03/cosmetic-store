<?php
session_start();

// Simple login
if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['password']) && $_POST['password'] === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
    } else {
        echo '<!DOCTYPE html>
        <html><head><title>Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        </head><body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Admin Login</h4>
                            <form method="POST">
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                            <small class="text-muted">Default password: admin123</small>
                        </div>
                    </div>
                </div>
            </div>
        </div></body></html>';
        exit;
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Include database
include '../includes/db_config.php';

// Get inquiries
$conn = getConnection();
$result = $conn->query("SELECT * FROM inquiries ORDER BY created_at DESC");
$inquiries = $result->fetch_all(MYSQLI_ASSOC);

$count_result = $conn->query("SELECT COUNT(*) as count FROM inquiries");
$total_inquiries = $count_result->fetch_assoc()['count'];

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Glam Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Glam Beauty Admin</span>
            <a href="?logout=1" class="btn btn-outline-light">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5><i class="bi bi-envelope"></i> Total Inquiries</h5>
                        <h2><?php echo $total_inquiries; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-list"></i> Customer Inquiries</h5>
            </div>
            <div class="card-body">
                <?php if (empty($inquiries)): ?>
                    <p class="text-muted">No inquiries yet.</p>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Service</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($inquiries as $inquiry): ?>
                                <tr>
                                    <td><?php echo date('M j, Y', strtotime($inquiry['created_at'])); ?></td>
                                    <td><?php echo htmlspecialchars($inquiry['name']); ?></td>
                                    <td><?php echo htmlspecialchars($inquiry['email']); ?></td>
                                    <td><?php echo htmlspecialchars($inquiry['mobile']); ?></td>
                                    <td><?php echo htmlspecialchars($inquiry['service']); ?></td>
                                    <td><?php echo htmlspecialchars(substr($inquiry['message'], 0, 50)) . '...'; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
