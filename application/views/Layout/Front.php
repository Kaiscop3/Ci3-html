<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">

    <title><?= $title ? $title : ''; ?> - DLRC</title>


    <meta name="theme-color" content="#cc0000">

    <?= $headerscripts ? $headerscripts : ''; ?>

    <style>
        * {
            font-family: 'Century Gothic', sans-serif;
        }
    </style>

</head>

<body>
    <?= $header ? $header : ''; ?>
    <?= $toggler ? $toggler : ''; ?>    


    <!-- MAIN COMPONENT -->

    <?= $image ? $image : ''; ?>
    <?= $middle ? $middle : ''; ?>

    <!-- MAIN COMPONENT -->

    <?= $footer ? $footer : ''; ?>

    <?= $endlinks ? $endlinks : ''; ?>

</body>

</html>