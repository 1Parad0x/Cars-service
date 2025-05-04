<?php
include('partials/header.php');

$db = new DataBase();
$contact = new Contact($db);
$contacts = $contact->index();

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
    $contact->destroy($_GET['delete']);
    header('Location: admin.php');
    exit;
}

if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}
if ($auth->getUserRole() != 0) {
    header('Location: index.php');
    exit;
}
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
            echo '</tr>';
        }
        ?>
    </table>

</section>


<?php
include('partials/footer.php')
?>