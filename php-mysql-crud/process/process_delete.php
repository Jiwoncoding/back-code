<?php
$link = mysqli_connect('localhost:3306', 'root', '1qazxsw2%', 'grade');

$filtered = array(
  'id'=>mysql_real_escape_string($link, $_POST['id'])
);

$sql = "
  DELETE gradeinfo
  WHERE id='{$filtered['id']}';
";

$result = mysqli_query($link, $sql);

if(result===false){
  echo "저장하는 과정에서 문제가 생겼습니다.";
}else{
  header('Location: ../read.php');
}
?>