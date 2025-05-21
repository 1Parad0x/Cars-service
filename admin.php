<?php
<<<<<<< HEAD
require_once('partials/header.php');

$db = new DataBase();
$contact = new Contact($db);
$user = new User($db);
$product = new Product($db);
$users = $user->index();
$contacts = $contact->index();
$products = $product->index();
=======
include('partials/header.php');

$db = new DataBase();
$contact = new Contact($db);
<<<<<<< HEAD
$user = new User($db);
$users = $user->index();
=======
>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630
$contacts = $contact->index();
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['subject'])) {
        $contact->create($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
        header('Location: admin.php');
        exit;
    } else {
        echo '<p style="color:red;">All fields are required!</p>';
    }
}

if (isset($_GET['delete'])) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
    $contact->destroy_contact($_GET['delete']);
    header('Location: admin.php');
    exit;
}
if(isset($_GET['delete_user'])) {
    $user->destroy_user($_GET['delete_user']);
    header('Location: admin.php');
    exit;
}
<<<<<<< HEAD
if (isset($_GET['delete_car'])) {
    $product->destroy($_GET['delete_car']);
    header('Location: admin.php');
    exit;
}
=======
=======
    $contact->destroy($_GET['delete']);
    header('Location: admin.php');
    exit;
}

>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}
if ($auth->getUserRole() != 0) {
    header('Location: index.php');
    exit;
}
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
?>
<section class="container">
    <h1>Vítaj admin</h1>

    <h2>Pridať Kontakt</h2>
    <form method="POST" action="">
        <label for="name">Meno:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="subject">Predmet:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="message">Správa:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Pridať</button>
    </form>

    <h2>Kontakty</h2>

    <table border=>

        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Sprava</th>
            <th>Správa</th>
        </tr>
        <?php foreach ($contacts as $con) {
            echo '<tr>';
            echo '<td>' . $con['id'] . '</td>';
            echo '<td>' . $con['name'] . '</td>';
            echo '<td>' . $con['email'] . '</td>';
            echo '<td>' . $con['subject'] . '</td>';
            echo '<td>' . $con['message'] . '</td>';
            echo '<td><a href="?delete=' . $con['id'] . '"
                onclick="return confirm(\'Urcite chcete vymazat tuto spravu?\')">Delete</a></td>';
<<<<<<< HEAD
            echo '<td><a href="contact_edit.php?id=' . $con['id'] . '">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td><a href="contact_edit.php?id=' . $con['id'] . '">Edit</a></td>';
=======
>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
            echo '</tr>';
        }
        ?>
    </table>

</section>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
<section class="container">
    <h2>Users</h2>
    <table border=>

        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Heslo</th>
            <th>Rola</th>
            <th>Správa</th>
        </tr>
        <?php foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['id'] . '</td>';
            echo '<td>' . $user['name'] . '</td>';
            echo '<td>' . $user['email'] . '</td>';
            echo '<td>' . $user['password'] . '</td>';
            echo '<td>' . $user['role'] . '</td>';
            echo '<td><a href="?delete_user=' . $user['id'] . '"
                onclick="return confirm(\'Urcite chcete vymazat tuto spravu?\')">Delete</a></td>';
            echo '<td><a href="user_edit.php?id=' . $user['id'] . '">Edit</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</section>
<<<<<<< HEAD
<section class="container">
    <h2>Cars</h2>
    <table border=>
        <tr>
            <th>ID</th>
            <th>Nazov</th>
            <th>Cena</th>
            <th>Obrázok</th>
        </tr>
        <?php foreach ($products as $product) {
            echo '<tr>';
            echo '<td>' . $product['ID'] . '</td>';
            echo '<td>' . $product['Name'] . '</td>';
            echo '<td>' . $product['Price'] . '</td>';
            echo '<td><img src="data:image/png;base64,' . base64_encode($product['Image']) . '" width="100"></td>';
            echo '<td><a href="?delete_car=' . $product['ID'] . '"
                onclick="return confirm(\'Urcite chcete vymazat tuto spravu?\')">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</section>
<?php
require_once('partials/footer.php')
=======
=======
>>>>>>> 7a6ea41c4b0d0277be438e018267b3ac4d53c630

<?php
include('partials/footer.php')
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd
?>