<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "9767661639";
$dbname = "hwphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Search Logic Only ---
$search = isset($_GET['search']) ? $_GET['search'] : '';

$where = "WHERE 1";
if ($search) {
    $search = $conn->real_escape_string($search);
    $where .= " AND (username LIKE '%$search%' OR email LIKE '%$search%')";
}

$sql = "SELECT id, username, email, role, created_at FROM users $where ORDER BY created_at DESC";
$result = $conn->query($sql);
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Info - Admin</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="bg-gray-300">
<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="h-full w-60 p-5 bg-gray-700">
        <a href="index.php" class="flex justify-center mb-4">
            <img class="h-10 rounded-full" src="./images/logo.png" alt="Logo">
        </a>
        <h1 class="text-white font-bold text-xl mb-6 text-center">Menu</h1>
        <ul class="flex flex-col gap-6">
            <li><a href="dashboard.php" class="text-white hover:text-black hover:bg-amber-400 p-2 block text-center rounded-full">Dashboard</a></li>
            <li><a href="logged.php" class="text-white hover:text-black hover:bg-amber-400 p-2 block text-center rounded-full">Logged Info</a></li>
            <li><a href="logout.php" class="text-white hover:text-black hover:bg-red-400 p-2 block text-center rounded-full">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10 overflow-auto">
        <h1 class="text-3xl font-bold text-amber-500 mb-6 text-center">Registered Users</h1>

        <!-- Search Form Only -->
        <form method="GET" class="mb-4 flex flex-wrap justify-center gap-4">
            <input type="text" name="search" placeholder="Search by name or email"
                   value="<?php echo htmlspecialchars($search); ?>"
                   class="p-2 border rounded-md w-60">
            <button type="submit" class="bg-amber-400 px-4 py-2 rounded-md text-white hover:bg-amber-500">Search</button>
        </form>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <table class="w-full table-auto border border-gray-400 text-sm">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border px-2 py-2">ID</th>
                        <th class="border px-2 py-2">Username</th>
                        <th class="border px-2 py-2">Email</th>
                        <th class="border px-2 py-2">Role</th>
                        <th class="border px-2 py-2">Registered At</th>
                        <th class="border px-2 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-2 py-1"><?php echo $row['id']; ?></td>
                            <td class="border px-2 py-1"><?php echo htmlspecialchars($row['username']); ?></td>
                            <td class="border px-2 py-1"><?php echo htmlspecialchars($row['email']); ?></td>
                            <td class="border px-2 py-1"><?php echo htmlspecialchars($row['role']); ?></td>
                            <td class="border px-2 py-1"><?php echo htmlspecialchars($row['created_at']); ?></td>
                            <td class="border px-2 py-1 space-x-2">
                                <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="text-blue-600 hover:underline">Edit</a>
                                <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="text-red-600 hover:underline"
                                   onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-4 text-red-500">No users found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

<?php $conn->close(); ?>
