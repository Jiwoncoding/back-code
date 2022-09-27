<!DOCTYPE html>
<html lane="ko" dir="ltr">
  <head>
    <meta charset="uft-8">
    <title>PHP_MySQL 연동</title>
    <script type="text/javascript">
      function update(id, name, python, java, c){
        document.getElementById("update_id").value=id;
        document.getElementById("update_name").value=name;
        document.getElementById("update_python").value=python;
        document.getElementById("update_java").value=java;
        document.getElementById("update_c").value=c;
      }
      </script>
      </head>
      <body>
        <div>
        <table border="1" style="margin: 0 auto;">
        <tr style="background-color:#d8d8d8; text-align:center;">
        <td style="width:70px;">이름</td>
        <td style="width:70px;">파이썬</td>
        <td style="width:70px;">자바</td>
        <td style="width:70px;">C/C#</td>
        <td style="width:50px;">수정</td>
        <td style="width:50px;">삭제</td>
        </tr>

        <tr style="text-align:center;">
          <td><?=$filtered['name']?></td>
          <td><?=$filtered['python']?></td>
          <td><?=$filtered['java']?></td>
          <td><?=$filtered['c']?></td>
          <td>
            <input type="button" name="" value="수정" onclick="update('<?=$filtered['id']?>', <?=$filtered['name']?>', <?=$filtered['python']?>', <?=$filtered['java']?>', <?=$filtered['c']?>')">
          </td>
          <td>
            <form class="" action="./process/process_delete.php" method="post">
              <input type="hidden" name="id" value="<?=$filtered['id']?>">
              <input type="submit" value="삭제">
            </form>
          </td>
        </tr>
    </table>
    </div>


<table style="margin: 0 auto;">
<tr>
  <td>
    <div style="border: 1px solid black; width:150px; height:180px;">
    <form action="./process/process_create.php" method="post">
  <table border="1" style="margin: 0 auto;">
    <caption>성적 입력</caption>
    <tr>
      <td>이름</td>
      <td><input style="width:50px" type="text" name="name"></td>
    </tr>
    <tr>
      <td>파이썬</td>
      <td><input style="width:50px" type="text" name="python"></td>
    </tr>
    <tr>
      <td>자바</td>
      <td><input style="width:50px" type="text" name="java"></td>
    </tr>
    <tr>
      <td>C/C#</td>
      <td><input style="width:50px" type="text" name="c"></td>
    </tr>
  </table>
  <div style="text-align:center;">
    <input type="submit" value="성적입력">
</div>
</form>
</div>
</td>

<td>
    <div style="border: 1px solid black; width:150px; height:180px;">
    <form action="./process/process_update.php" method="post">
  <table border="1" style="margin: 0 auto;">
    <caption>성적 수정</caption>
    <input type="hidden" name="id" id="update_id" value="">
    <tr>
      <td>이름</td>
      <td><input style="width:50px" type="text" name="name" id="update_name" value=""></td>
    </tr>
    <tr>
      <td>파이썬</td>
      <td><input style="width:50px" type="text" name="python" id="update_python" value=""></td>
    </tr>
    <tr>
      <td>자바</td>
      <td><input style="width:50px" type="text" name="java" id="update_java" value=""></td>
    </tr>
    <tr>
      <td>C/C#</td>
      <td><input style="width:50px" type="text" name="c" id="update_c" value=""></td>
    </tr>
  </table>
  <div style="text-align:center;">
    <input type="submit" value="성적수정">
</div>
</form>
</div>
</td>
</tr>
</table>
</body>
</html>