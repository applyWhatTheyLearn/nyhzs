<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
	$l_classid=trim($_REQUEST["l_classid"]);
$l_id=trim($_REQUEST["l_id"]);

$msql->query("select * from z_hot  where l_id=".$l_id);
if($msql->next_record()){
    $l_title=trim($msql->f("l_title"));
    $l_detail=trim($msql->f("l_detail"));
    $l_sort=trim($msql->f("l_sort"));
    $l_views=trim($msql->f("l_views"));
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>热门活动信息</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>
</html>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
          <form action="Visa_Add_Submit.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">热门活动信息</font></td>
                <td width="492" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="103" bgcolor="#FFFFFF"><div align="center"><a href="Hot_list.php?l_classid=<?php echo  $l_classid ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;活动标题：</td><font size="2"></font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font color="#990000"><?php echo $l_title ?></font></td>
              </tr>
              <tr>
                <td height="26" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;活动内容：</font></td>
                <td height="26" colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $l_detail ?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $l_sort ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_views ?></td>
              </tr>
              
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="location='Hot_list.php?l_classid=<?php echo  $l_classid ?>'"></td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>        </td>
    </tr>
  </table>
</body>
</html>
