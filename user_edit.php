<?php
<<<<<<< HEAD
require_once('partials/header.php');
=======
include_once('partials/header.php');
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd

$db = new Database();
$user = new User($db);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $userData = $user->show($id);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        if ($user->update_user($id, $name, $email, $role)) {
            header("Location: admin.php");
            exit;
        } else {
            echo "Error editing user.";
        }
    }
} else {
    echo "User ID not provided.";
}
?>

<section class="container">
    <h1>Edit User</h1>
    <form method="POST" action="">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($userData['id']); ?>" readonly>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($userData['name']); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userData['email']); ?>" required>
        <br>
        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="0" <?php if ($userData['role'] == 0); ?>>Admin</option>
            <option value="1" <?php if ($userData['role'] == 1); ?>>User</option>
        </select>
        <br>
        <button type="submit">Edit</button>
    </form>
    <a href="admin.php">Back to Admin</a>

</section>

<?php
<<<<<<< HEAD
require_once('partials/footer.php');
=======
include_once('partials/footer.php');
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
?>