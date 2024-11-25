<?php
session_start();
include 'header.html';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>All Products - Shades</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    </head>
<body>
    <br><br><br>
    <h1><center>

    <font size="10"
          face="verdana"
          color="black">
          Welcome <?php echo $_SESSION['username']; ?> !
    </font><br>
    <font size="4">
        Do continue you shopping by <a href="products.php"> clicking here. </a>
    </font>

    
        </center> </h1>
    <br><br><br>
</body>
</html>
<?php
include 'footer.html';
?>