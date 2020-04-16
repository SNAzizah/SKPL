<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/styles/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $title ?></title>
    <style type="text/css">
        body {
            background-color: #eee;
        }

        .kotak_login {
            width: 65%;
            height: 450px;
            background: white;
            margin: 75px auto;
            display: grid;
            grid-template-columns: 65% auto;
        }

        .form_login {
            box-sizing: border-box;
            width: 250px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 3px;
            border-style: solid;
            border-bottom-color: #ddd;
        }

        .form_login:hover {
            border-bottom-color: darkgray;
        }

        .des {
            background-image: url(<?= base_url('assets/imgs/lamp.jpg') ?>);
            border-top-right-radius: 4.2px;
            border-bottom-right-radius: 4.2px;
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>