<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="view/contents/css/styles.css" rel="stylesheet">

    <!-- Icons -->
    <link href="view/contents/assets/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="view/contents/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="view/contents/assets/fontawesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <script src="view/contents/js/jquery-3.4.1.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Javascript de l'application -->
    <script src="view/contents/js/global.js"></script>
    <script src="view/contents/js/admin.js"></script>
    <script src="view/contents/js/shiftEnd.js"></script>
    <script src="view/contents/js/stups.js"></script>
    <script src="view/contents/js/todoList.js"></script>

</head>
<body>

<div class="container">

    <header>

            <a href="?action=login" class="btn btn-primary m-1 pull-right">Login</a>
        </div>
    </header>

    <div>
        <?= $content; ?>
    </div>

</body>
</html>
