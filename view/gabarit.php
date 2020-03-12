
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="/https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="/view/contents/css/styles.css" rel="stylesheet">
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
    <div class="row">
        <div class="col-sm-4"><img src="/assets/images/logo.png"></div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row"><div class="col-sm-12"><a href="?action=login" class="btn btn-primary col-sm-2 pull-right" >Login</a></div></div>

    <div>
        <?= $content; ?>
    </div>

</div>

</body>
</html>
