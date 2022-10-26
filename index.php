<?php 
// Include calendar helper functions 
include_once 'functions.php'; 
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PHP Event Calendar by CodexWorld</title>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<meta charset="utf-8">

<!-- Stylesheet file -->
<link rel="stylesheet" href="./style.css">

<!-- jQuery library -->
</head>
<body>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</body>
</html>