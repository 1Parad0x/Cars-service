<?php
include('partials/header.php');

$db = new Database();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
<<<<<<< HEAD
    $role = $_POST['role']; 
=======
    $role = $_POST['role']; // tu príde 0 alebo 1
>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630
    $password = $_POST['password'];

    if ($user->create($name, $email, $role, $password)) {
        header("Location: admin.php");
        exit;
    } else {
        echo "<p style='color: red;'>Error creating user. Možno už existuje používateľ s týmto emailom.</p>";
    }
}
?>

<section class="container">
    <h1>Pridanie používateľa</h1>
    <form id="user" action="" method="POST">
        <input type="text" placeholder="Meno" id="name" name="name" required><br>
        <input type="email" placeholder="Email" id="email" name="email" required><br>

        <select id="role" name="role" required>
            <option value="" disabled selected>Vyberte rolu</option>
            <option value="0">Admin</option>
            <option value="1">User</option>
        </select><br>

        <input type="password" placeholder="Heslo" id="password" name="password" required><br>
        <input type="submit" value="Vytvoriť">
    </form>
</section>

<?php
include('partials/footer.php');
?>