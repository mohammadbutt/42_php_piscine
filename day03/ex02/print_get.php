
<!DOCTYPE html>
<html lang="en">
<head>
    <title>print_get</title>
</head>
<style>
    .body-container
    {
        width: 200px;
        height: 200px;
        margin: 25px auto 0;
        background-color: rgb(166, 247, 247);
    }
    p
    {
        font-size: 20px;
        text-align: right;
    }
</style>
<body class ="body-container">
    <form class="form-container" method="post" action="print_get.php">
        <p>Name <input type="text" name="name" placeholder="Name"></p>
        <p>Age <input type="text" name="age" placeholder="Age"></p>
        <p><input type="submit" value="submit"></p>
    </form>
-->
    <!-- php code goes here-->
<?php
    if ($_GET) {
        foreach($_GET as $key => $value) {
            echo $key . " : " . $value . "\n";
        }
    }
?>

</body>
</html>