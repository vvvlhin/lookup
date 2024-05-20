<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изображение</title>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="<?php echo urldecode($_GET['pic']); ?>" alt="" />
    </div>
</body>

</html>