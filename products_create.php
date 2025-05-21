<?php
require_once('partials/header.php');
?>
<?php
$db = new DataBase();
$product = new Product($db);
$products = $product->index();

if ($auth->getUserRole() != 0) {
    header('Location: index.php');
    exit;
}
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    
    if ($product->create($name, $price, $image)) {
        echo "<div class='alert alert-success'>Product created successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to create product.</div>";
    }
}

?>
<section class="container margin-bottom-50">
    <div class="tm-overflow-hidden row">
        <div class="tm-gallery col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <h3 class="tm-gallery-title">Create Product</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn">Create Product</button>
            </form>
        </div>
</section>

<?php
require_once('partials/footer.php');
?>