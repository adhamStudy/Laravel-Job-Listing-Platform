<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job listing</title>
</head>

<body>

    <h1>
        <?php echo $title; ?>
    </h1>

    <ul>
        <?php foreach ($jobs as $job): ?>
            <li style="padding:2px ;color:black; background-color:grey">
                <?php echo $job ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>