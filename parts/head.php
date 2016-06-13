<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel='stylesheet' href='../lib/cupertino/jquery-ui.min.css' />
    <link href='../fullcalendar.css' rel='stylesheet' />
    <link href='../fullcalendar.print.css' rel='stylesheet' media='print' />
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link href="../css/form_style.css" rel="stylesheet"/>
    <script src='../lib/moment.min.js'></script>
    <script src='../lib/jquery.min.js'></script>
    <script src='../fullcalendar.min.js'></script>
    <script src='../lang-all.js'></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/polyfill.js"></script>
    <script src="../js/script.js"></script>

</head>
<?php
function php_self(){
    $php_self = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], '/')+1);
    return $php_self;
}
$phpself = php_self();

?>
