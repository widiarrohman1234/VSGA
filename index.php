<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JWD 1</title>
    <link rel="icon" type="image/gif/jpg" href="assets\img\logo.jpg">
	<link rel="stylesheet" type="text/css" href="assets\vendor\bootstrap-4.6.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets\vendor\fortawesome\font-awesome\css\all.css">
    <link rel="stylesheet" href="assets\vendor\datatables\datatables\media\css\dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets\vendor\datatables\datatables\media\css\dataTables.bootstrap4.css">
    <link rel="stylesheet" href="assets\vendor\datatables\datatables\media\css\jquery.dataTables.css">
    <link rel="stylesheet" href="assets\vendor\select2\dist\css\select2.min.css">
</head>
<body>
<?php include"_inc/header.inc" ?>
<?php include"_inc/sidebar.inc"?>

    <main id="main-content">
        <div class="container">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                include"_pages/$page.php";
            }else{
                include"_pages/default.php";
            }
            ?>
            <?php include"_inc/footer.inc"?>
        </div>
    </main>


<script src="assets\vendor\jquery\jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="assets\vendor\bootstrap-4.6.0-dist\js\bootstrap.min.js"></script>
<script src="assets\vendor\datatables\datatables\media\js\dataTables.bootstrap.js"></script>
<script src="assets\vendor\datatables\datatables\media\js\dataTables.bootstrap4.js"></script>
<script src="assets\vendor\datatables\datatables\media\js\jquery.dataTables.js"></script>
<script src="assets\script\script.js"></script>
<script src="assets\vendor\select2\dist\js\select2.min.js"></script>
</body>
</html>
