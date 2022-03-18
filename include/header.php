<head>
    <meta charset="UTF-8">
    <meta content="IE=ed">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="other/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" sizes="180x180" href="other/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="other/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="other/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="other/favicon_io/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <title>
        <?php if (isset($pageTitle)) {
            echo(strip_tags($pageTitle));
        } else
            echo "Black Space"
        ?>
    </title>
    <?php include 'style/style.php'; ?>
</head>
