<?php
include('partials/header.php');
$db = new Database();
$contact = new Contact($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contactData = $contact->show($id);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if ($contact->update_contact( $id,$name, $email, $subject, $message)) {
            header("Location: admin.php");
            exit;
        } else {
            echo "Error editing contact.";
        }
    }
}

?>

<section class="container">
    <h1>Edit Contact</h1>
    <form method="POST" action="">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($contactData['id']); ?>" readonly>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($contactData['name']); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($contactData['email']); ?>" required>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($contactData['subject']); ?>" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo htmlspecialchars($contactData['message']); ?></textarea>
        <br>
        <button type="submit">Edit</button>
    </form>
    <a href="admin.php">Back to Admin</a>

</section>



<?php
require_once('partials/footer.php');
?>