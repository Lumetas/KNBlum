<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='script.js'></script>
  	<link rel="stylesheet" href="style.css">
    <title>KNBlum</title>
</head>
<body>
    


<?php
  function showTree($folder, $space) {
    /* Получаем полный список файлов и каталогов внутри $folder */
    $files = scandir($folder);
    foreach($files as $file) {
      /* Отбрасываем текущий и родительский каталог */
      if (($file == '.') || ($file == '..')) continue;
      $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
      /* Если это директория */
      if (is_dir($f0)) {
        /* Выводим, делая заданный отступ, название директории */
		  $dropdown = 'a'.$file.'1';
		  $dropbtn = 'b'.$file.'2';
		  $dropdownContent = 'c'.$file.'3';



		echo <<<OUT

<div class="$dropdown">
  <button class="$dropbtn">$file</button>
  <div class="$dropdownContent">



<style>
.$dropbtn {
  background-color: #000000;
  color: white;
width:100px;

position:relative;
font-size: 16px;
  border: none;
}

.$dropdown {
  position: relative;
  display: inline-block;
}

.$dropdownContent {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 1px;
width:140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.$dropdownContent a {
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;

position:relative;
}

.$dropdownContent a:hover {background-color: #ddd;}

.$dropdown:hover .$dropdownContent {display: block;}

.$dropdown:hover .$dropbtn {background-color: #000000;}
a{
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;


}
</style>



OUT;
		/* С помощью рекурсии выводим содержимое полученной директории */
		showTree($f0, '');



		echo <<<OUT

  </div>
</div>
<br><br>

OUT;		
      }
      /* Если это файл, то просто выводим название файла */
	  else echo <<<OUT
<a href='#$file' onclick='md("$f0")'>$file</a><br>


OUT;
    }
  }
/* Запускаем функцию для текущего каталога */
		  echo "<div class='tree'>";

showTree("./files", "");


echo "</div>";

echo <<<OUT

<style>
.tree{

width:140px;
left:0;
positon:absolute;
background:	#D3D3D3;
top:0px;
height:calc(100vh - 20px);
}
a{
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;
}
</style>

OUT;

?>
<script>
function md(url){
document.querySelector('#md').src = 'readMd.php?file=' + url


}


</script>

<iframe style='position:absolute; right:0; height:99%; top:0; width:calc(100% - 155px)' id='md'></iframe>

</body>
</html>
