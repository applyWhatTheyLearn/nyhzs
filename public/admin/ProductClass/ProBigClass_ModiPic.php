
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
  l_id=trim($_REQUEST["l_id"))
  pageno=trim(request("pageno"))
  l_continent=trim($_REQUEST["l_continent"))
'response.Write("ClassID="&ClassID &"<br>")
'response.Write("fotherid="&fotherid &"<br>")
'response.Write("topClassID="&topClassID &"<br>")
'response.Write("PicID="&PicID &"<br>")


?>

<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4E4E4;
}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改ͼƬ</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="ProBigClass_ModiPic_Save.php" name="form1" enctype="multipart/form-data">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改ͼƬ</font></td>
      <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="Dome_list.php?class_id=<?php echo $class_id ?>&pageno=<?php echo $pageno ?>&l_continent=<?php echo $l_continent ?>">����商品列表</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3"><div align="right"></div></td>
    </tr>
    <tr>
      <td width="124" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="49" valign="top" bgcolor="F1F0F1"><font size="2"><br>
        &nbsp;ѡ��ͼƬ��</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="开始上传">
        <input type="reset" name="reset" value="重新选择">
        <input type="button" name="Submit2" value="取消" onClick="location='ProBigClass_List.php?l_id=<?php echo $l_id ?>&pageno=<?php echo $pageno ?>'">
        <input type="hidden" name="l_id" value="<?php echo $l_id?>">
        <input type="hidden" name="pageno" value="<?php echo $pageno ?>">
        
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
