
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link href="/view/content/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/view/content/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="/view/content/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="/view/content/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <!--[if lt IE 8]>
    <link href="/view/content/scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen"
          rel="stylesheet"
          type="text/css"/>
    <link href="/view/content/scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen"
          rel="stylesheet"
          type="text/css"/>
    <![endif]-->
    <link rel="stylesheet" href="/view/content/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/view/content/scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="/view/content/scripts/carousel/style.css" rel="stylesheet" type="text/css"/>
    <link href="/view/content/scripts/camera/css/camera.css" rel="stylesheet" type="text/css"/>

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="/view/content/styles/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
    <header>
        <div class="row banner">
            <img class="col-2" src="/assets/images/logo.png" alt="logo">
            <a href="/index.php" class="col-10 text-center mt-5 text-decoration-none"><h1>CSU-NVB</h1></a>
            <a href="?action=login" class="btn btn-primary m-1 pull-right">Login</a>
        </div>
    </header>

    <div>
        <?= $content; ?>
    </div>

</body>
</html>
