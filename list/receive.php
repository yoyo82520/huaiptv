<?php
//* 黑鸟博客 *
$strF = isset($_POST['c']) ? $_POST['c'] : '';
if($strF!==''){
  $myfile = fopen("./list/10001.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $strF);
  fclose($myfile);
}
echo "完毕";
?>