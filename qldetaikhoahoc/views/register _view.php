<!DOCTYPE html>
<html>
 <title>đăng ký </title>
<body>
<form method="post" action="<?php echo URL; ?>">
<table style="width: 300px; margin: auto; position: relative; " >
       <tr style="height:20px; background:#57b846 ;" >
        <th colspan="5" align="center">Đăng ký thành viên </th>
       </tr>
       
   <tr>
 <td> Id_user: </td> 
  <td> <input type="text" name="lD_user" > </td> 
</tr>

<tr>
<td> Họ tên: </td>
<td> <input type="text" name="hoTen"> </td>
</tr>

<tr>
 <td> Số điện thoại: </td>
 <td> <input type="text" name="sdt"> </td>
</tr>

<tr>
<td> Giới tính: </td>
<td> <input type="text" name="gioiTinh"> </td>
</tr>

<tr>
<td> Email: </td>
<td> <input type="text" name="email"> </td>
</tr>

<tr>
<td> Password: </td>
<td> <input type="password" name="passWord"> </td>
</tr>

<tr>
<td> Id class: </td>
<td><input type="password" name="lD_lop"></td>
</tr>

<tr style=" margin-top: 12px;">
<td colspan="5" align="Center"> <input style="background-color:#57b846;" type="submit" value="Submit"> </td>
</tr>


</table>

</form> 
</body>
</html>