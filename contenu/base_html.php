<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:49:27+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T07:56:38+01:00


?>

<!DOCTYPE html>
<!--[if lt IE 8]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>
<html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="fr"><!--<![endif]-->
<head>
    <?php require_once 'head.php' ?>
</head>
<body <?php if(empty($_REQUEST['op'])){
    echo "class=\"bdyAccueil\"";
} ?>>
<?php
if(empty($_REQUEST['op'])){
    require_once 'site_header_accueil.php';
}
else{
    require_once 'site_header.php';
}

$oSite->load_content();


require_once 'site_footer.php';
?>

</body>
</html>
