<?php
$link = mysqli_connect('localhost:3306', 'root', '1qazxsw2%', 'grade');

$filtered = array(
  'name'=>mysql_real_escape_string($link, $_POST['name']),
  'python'=>mysql_real_escape_string($link, $_POST['python']),
  'java'=>mysql_real_escape_string($link, $_POST['java']),
  'c'=>mysql_real_escape_string($link, $_POST['c'])
);

$sql = "
  UPDATE gradeinfo
  SET
  name='{$filtered['name']}',
  python='{$filtered['python']}',
  java='{$filtered['java']}',
  c='{$filtered['c']}',
  WHERE
  id='{$filtered['id']}';
";

$result = mysqli_query($link, $sql);

if(result===false){
  echo "저장하는 과정에서 문제가 생겼습니다.";
}else{
  header('Location: ../read.php');
}
?>