<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<div style="border:1px solid; margin:auto; width:500px;">
<div style="padding:5px;">
<h3 style=" text-align:center;background-color:#FFCCCC"> Job Seeker Registration Form
</h3>
<h4 style="text-decoration:underline"> Registration Details </h4>
<form action="insertdata.php" method="post">
<table align="center" width="450">
<tr> 
  <td> Title </td> 
  <td>
 <select name="title" required>
 <option value=""> Select Title </option>
 <option value="Mr."> Mr. </option>
 <option value="Ms.">Ms.</option>
 <option value="Dr.">Dr.</option>
 <option value="Prof.">Prof.</option>
 </select>
 </td>

</tr>
<tr> <td> Name: <td> <input type="text" name="name" required /> </td> </tr>
<tr>
 <td>Gender:
 <td><p>
 <label>
 <input type="radio" name="gender" value="male" required />
 male</label>
 <br />
 <label>
 <input type="radio" name="gender" value="female" required />
 female</label>
 <br />
 </p></td>
</tr>
<tr>
 <td>Date of Birth:
 <td><label>
 <input name="bday" type="date" max="<?php echo date('Y-m-d'); ?>" required>
 </label></td>
</tr>
<tr>
 <td>
 <td>&nbsp;</td>
</tr>
<tr>
 <td>
 <td>

 <div align="right">
 <input type="submit" name="Submit" value="register" />
 <input name="reset" type="reset" value="Reset" />
 </div></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>