<?php
$link = mysqli_connect('localhost:3306', 'root', '1qazxsw2%', 'grade');

$filtered = array(
  'name'=>mysql_real_escape_string($link, $_POST['name']),
  'python'=>mysql_real_escape_string($link, $_POST['python']),
  'java'=>mysql_real_escape_string($link, $_POST['java']),
  'c'=>mysql_real_escape_string($link, $_POST['c'])
);

$sql="
  INSERT INTO gradeinfo
  (name, python, java, c)
  VALUES(
    '{$filtered['name']}',
    '{$filtered['python']}',
    '{$filtered['java']}',
    '{$filtered['c']}',
  )
";

$result = mysql_query($link, $sql);
if($result===false){
  echo '저장하는 과정에서 문제가 생겼습니다';
}else{
  header('Location: ../read.php');
}
?>