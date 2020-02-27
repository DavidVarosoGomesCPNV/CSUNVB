<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - Temp2.php
 * User : David-Manuel.VAROSO
 * Date : 24.02.2020
 * Time : 10:37
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>formulaire multichamp</title>
    <script type="text/javascript">
        function create_champ(i) {
            var i2 = i + 1;
            document.getElementById('leschamps_'+i).innerHTML = '<input type="text" name="image['+i+']"></span>';
            document.getElementById('leschamps_'+i).innerHTML += (i <= 10) ? '<br /><span id="leschamps_'+i2+'"><a href="javascript:create_champ('+i2+')">Ajouter un champs</a></span>' : '';
        }
    </script>
</head>

<body>
<?php
if(empty($_POST['valide']))
{
    ?>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="text" name="image[0]" /><br />
        <span id="leschamps_1"><a href="javascript:create_champ(1)">Ajouter un champs</a></span>
        <!-- <input name="valide" type="submit" value="envoyer"/> -->
        <button type="submit" value="envoyer" name="valide"><img src="img9.png" alt="valider" height="25" width="25" /></button>
    </form>
    <?php
}
else
{
    echo 'Voila le résultat du formulaire<br/>';
    var_dump($_POST);
    echo '<br/>et voila le résultat des champs en affichage<br/>';
    foreach($_POST['image'] as $value)
    {
        echo $value.'<br/>';
    }
}
?>
</body>
</html>
