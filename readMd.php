<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='script.js'></script>
  	<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



<?php


include('MD.php');
$Parsedown = new Parsedown();

echo $Parsedown->text(file_get_contents($_GET['file']));
?>



<style>
a{
text-decoration:none
}
body {
  background-color:white;
  padding:50px 50px;
}

pre {
  background-color:#eee;
  overflow:auto;
  margin:0 0 1em;
  padding:.5em 1em;
}

pre code, pre .line-number {
  font:normal normal 12px/14px "Courier New",Courier,Monospace;
  color:black;
  display:block;
}

pre .line-number {
  float:left;
  margin:0 1em 0 -1em;
  border-right:1px solid;
  text-align:right;
}

pre .line-number span {
  display:block;
  padding:0 .5em 0 1em;
}

pre .cl {
  display:block;
  clear:both;
}
</style>


<script language="javascript">
(function() {
    var pre = document.getElementsByTagName('pre'),
        pl = pre.length;
    for (var i = 0; i < pl; i++) {
        pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
        var num = pre[i].innerHTML.split(/\n/).length;
        for (var j = 0; j < num; j++) {
            var line_num = pre[i].getElementsByTagName('span')[0];
            line_num.innerHTML += '<span>' + (j + 1) + '</span>';
        }
    }
})();
</script>




</body>
</html>
