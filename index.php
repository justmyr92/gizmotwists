<?php
$current_page = "HOME";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="icon" href="assets/images/gizmo-twist-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>GIZMOTWIST | HOME</title>
</head>

<body>
    <?php include "src/components/navigation_bar.php" ?>
    <section class="main-section">
        <div class="main-container">
            <div class="main-content-group">
                <h1>PH<span> NO. 1 </span>CUBESHOP</h1>
                <p>Its start with a cross</p>
                <div class="link-group">
                    <a href="products.php" class="btn btn-dark">Read more</a>
                    <a href="products.php" class="btn btn-outline-dark">
                        Shop now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        var current_page = "<?php echo $current_page; ?>"
    </script>
    <script src="src/js/navbar.js">
    </script>
</body>

</html>