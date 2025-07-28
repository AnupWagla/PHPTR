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

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM contacts ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages - Admin Dashboard</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="bg-gray-200">
<div class="flex h-screen">
   
    <div class="h-full w-60 p-5 bg-gray-700">
        <a href="index.php" class="flex justify-center mb-4">
            <img class="h-10 rounded-full" src="./images/logo.png" alt="Logo">
        </a>
        <h1 class="text-white font-bold text-xl mb-6 text-center">Menu</h1>
        <ul class="flex flex-col gap-6">
            <li><a href="dashboard.php" class="text-white hover:text-black hover:bg-amber-400 hover:rounded-full p-2 transition-all duration-300 block text-center">Dashboard</a></li>
            <li><a href="logged.php" class="text-white hover:text-black hover:bg-amber-400 hover:rounded-full p-2 transition-all duration-300 block text-center">Loged Info</a></li>
            <li><a href="message.php" class="text-white hover:text-black bg-red-400 rounded-full p-2 transition-all duration-300 block text-center">Message</a></li>
            <li><a href="logout.php" class="text-white hover:text-black hover:bg-red-400 hover:rounded-full p-2 transition-all duration-300 block text-center">Logout</a></li>
        </ul>
    </div>


    <div class="flex-1 p-10 overflow-y-auto flex justify-center items-start">
    <div class="w-full max-w-6xl">
        <h1 class="text-3xl font-bold text-amber-500 mb-6 text-center">Contact Messages</h1>

        <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl shadow-md border border-gray-300">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-r">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-r">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-r">Message</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800 border-r"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class="px-6 py-4 text-sm text-blue-600 border-r"><?php echo htmlspecialchars($row['email']); ?></td>
                        <td class="px-6 py-4 text-sm text-gray-700 border-r"><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo $row['submitted_at']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <p class="text-gray-600 text-center">No messages found.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

<?php
mysqli_close($conn);
?>
