
<style>
a{
text-decoration:none
}
</style>
<?php


include('MD.php');
$Parsedown = new Parsedown();

echo $Parsedown->text(file_get_contents($_GET['file']));
