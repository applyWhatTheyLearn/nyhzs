<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$w_id=trim($_REQUEST["w_id"]);
$class_id=isset($_REQUEST["class_id"])?trim($_REQUEST["class_id"]):'';
$msql->query("select * from z_link where w_id=".$w_id);
if($msql->next_record()){
    $w_name=trim($msql->f("w_name"));
    $w_url=trim($msql->f("w_url"));
    $w_sort=trim($msql->f("w_sort"));
    $w_views=trim($msql->f("w_views"));
    $View1 = $w_views == "显示" ? "checked" : "";
    $View2 = $w_views == "不显示" ? "checked" : "";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改友情连接</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top">
          <form action="Link_modi_sub.php" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改友情连接</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="link_List.php?class_id=<?php echo $class_id ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;连接名称:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_name" type="text" id="w_name" value="<?php echo  $w_name?>" size="30" maxlength="50">
                </font></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;连接URL：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_url" type="text" id="w_url" value="<?php echo $w_url?>" size="50" maxlength="50">
                        例如：www.sohu.com 不用加 http://</font></td>
              </tr>
              <tr>
                <td height="6" valign="top" bgcolor="F1F0F1">&nbsp;排序</td>
                <td height="6" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                  <input name="w_sort" type="text" id="w_sort" value="<?php echo $w_sort ?>" size="20" maxlength="6">
                </font></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="w_views" type="radio" value="显示" <?php echo $View1 ?>>
                  不显示
                  <input type="radio" name="w_views" value="不显示" <?php echo $View2 ?>>
                  </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="修改">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='link_List.php?class_id=<?php echo $class_id ?>'">
                  <input name="w_id" type="hidden" value="<?php echo $w_id?>">
                  <input name="class_id" type="hidden" value="<?php echo $class_id?>">
                                 </td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </td>
    </tr>
  </table>
</body>
</html>

 