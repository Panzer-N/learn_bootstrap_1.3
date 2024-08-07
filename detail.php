<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.js"></script>
    <title>Product Details</title>
</head>
<body>
    
    <?php include './header_1.3.php'; ?>
    <?php include './navbar_1.3.php'; ?>

    <div class="container mt-5">
        <?php
        // Retrieve parameters from the URL
        $img = isset($_GET['img']) ? $_GET['img'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : 'Unknown Product';
        $price = isset($_GET['price']) ? $_GET['price'] : 'Price Not Available';

        // Decode URL-encoded parameters
        $img = htmlspecialchars($img);
        $name = htmlspecialchars($name);
        $price = htmlspecialchars($price);
        ?>

        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $img; ?>" class="img-fluid card-img-top" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h3><?php echo $name; ?></h3>
                <p>ราคา: <?php echo $price; ?></p>
                <a class="btn btn-primary" href="./buy2_1.3.php">buy</a>
            </div>
        </div>
    </div>

    <?php include './footer.php'; ?>
</body>
</html>
