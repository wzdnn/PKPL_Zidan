<body bgcolor="#CCCCCC">

<h2>
  <p align="center"><a href="create.php">TAMBAH DATA</a></p>
</h2>

<form method="post" action="main.php">

<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">item</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <label>
      <input name="item" type="text" size="10">
      </label>
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">item_price</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="item_price">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>

</table>
</form>
</body>