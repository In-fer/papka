<?php
$a=$_POST["login"];
$b=$_POST["passwor"];
$file=fopen('Lab30.txt','rt');
if($file){
  while(!feof($file)){
    $text=fgets($file,900);
  }
  if(strops($text,$a." / ".$b) !==false)
    {
      echo "0";
    }
  else {
    fclose($file);
    $file2=fopen('Lab30.txt','a');
      $text2="/".$a." / ".$b."/";
      $result=fwrite($file2,$text2);
      if($result) {
        echo "1";
        fclose($file2);
      }
      else {echo ("Ошибка при записи в файл");
        fclose($file2);}
  }
}
else echo ("Ошибка при открытии файла");
?>
