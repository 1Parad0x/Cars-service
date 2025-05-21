<?php
<<<<<<< HEAD
require_once('partials/header.php');
=======
include('partials/header.php');
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd

$db = new Database();
$auth = new Authenticate($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($auth->login($email, $password)) {
        header("Location: index.php");
    } else {
        $error = "Prihlásenie zlyhalo. Skontrolujte svoje údaje.";
    }
}
?>
<section class="container">
    <h2>Prihlásenie</h2>
    <?php if (isset($error)): ?>
        <div style="color: red;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Prihlásiť sa</button>
    </form>
</section>
<?php
<<<<<<< HEAD
require_once('partials/footer.php');
=======
include('partials/footer.php');
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
?>