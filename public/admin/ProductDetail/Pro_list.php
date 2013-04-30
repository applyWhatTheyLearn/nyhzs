<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$l_classid = trim($_REQUEST["l_classid"]);
$msql->query("select * from z_product where l_classid=" . $l_classid . " order by l_tuijian desc ,l_sort ");

?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="../css.css" rel="stylesheet" type="text/css">
        <title>商品列表</title>
        <script type="text/javascript">
            <!--
            function MM_openBrWindow(theURL, winName, features) { //v2.0
                window.open(theURL, winName, features);
            }
            //-->
        </script>
    </head>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#999999">
            <td height="1" valign="top"></td>
        </tr>
        <tr bgcolor="#E4E4E4">
            <td height="230" valign="top">
                <table width="740" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品列表</font></td>
                        <form name="form" id="form">
                            <td width="540" bgcolor="#FFFFFF">
                                <div align="right"></div>
                            </td>
                        </form>
                        <td width="63" bgcolor="#FFFFFF">
                            <div align="center"><a href="Pro_add.php?l_classid=<?php echo  $l_classid ?>">添加商品</a></div>
                        </td>

                    </tr>
                </table>
                <?php if ($msql->num_rows() > 0) { ?>
                    <table width="740" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="15">
                                <div align="right">
                                    <?php
                                    //每页显示的条数
                                    $page_size = 25;
                                    //总条目数
                                    $nums = $msql->num_rows();
                                    //每次显示的页数
                                    $sub_pages = 5;
                                    //得到当前是第几页
                                    $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                    if (empty($l_classid)) {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_List.php?pageno=", 2);
                                    } else {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                                    }

                                    ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="65" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="268" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;商品名称</font></td>
                            <td width="72" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;市场价/元</font></td>
                            <td width="69" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;商城价/元</font></td>
                            <td width="60" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;库存数量</font></td>
                            <td width="31" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF" size="2">荐</font></div>
                            </td>
                            <td width="55" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">排序</font></div>
                            </td>
                            <td width="52" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF" size="2"></font><font
                                        color="#FFFFFF">状态</font></div>
                            </td>
                            <td width="19" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF" size="2">图</font></div>
                            </td>
                            <td width="16" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">改</font></div>
                            </td>
                            <td width="21" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">删</font></div>
                            </td>
                        </tr>
                        <?php
                        $num = 1;
                        $beginPosition = $page_size * ($pageno - 1);
                        $endPosition = $page_size * $pageno;
                        //定位到开始位置
                        for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
                        for ($m = 0; $m < $endPosition; $m++) {
                            if ($msql->next_record()) {
                                $l_id = $msql->f("l_id");
                                $l_name = $msql->f("l_name");
                                $l_name_e = $msql->f("l_name_e");
                                $l_price1 = $msql->f("l_price1");
                                $l_price2 = $msql->f("l_price2");

                                $l_num = trim($msql->f("l_num"));
                                $l_sort = trim($msql->f("l_sort"));
                                $l_tuijian = trim($msql->f("l_tuijian"));
                                $l_views = trim($msql->f("l_views"));
                                $l_tuijianinfo = $l_tuijian == "推荐" ? "<font color=#ff0000>荐</font> " : "";
                                $SelectColor='';

                                ?>
                                <tr>
                                    <td rowspan="2" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                                color="#993300"><?php echo $num?></font>、</font></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a
                                            href="Pro_Detail.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo  $pageno ?>"><?php echo  $l_name ?></a>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">&nbsp;<font
                                            color="<?php echo  $SelectColor ?>"><?php echo  $l_price1 ?></font></td>
                                    <td rowspan="2" bgcolor="F1F0F1">&nbsp;<font
                                            color="<?php echo  $SelectColor ?>"><?php echo  $l_price2 ?></font></td>
                                    <td rowspan="2" bgcolor="F1F0F1">&nbsp;<font
                                            color="<?php echo  $SelectColor ?>"><?php echo  $l_num ?></font></td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><?php echo  $l_tuijianinfo ?></div>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo  $SelectColor ?>"><?php echo  $l_sort ?></font></div>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo  $SelectColor ?>"><?php echo $l_views?></font></div>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><a href="#"
                                                               onClick="MM_openBrWindow('Pro_Pic_List.php?l_classid=<?php echo $l_id?>','','scrollbars=yes,resizable=yes,width=780,height=400')">图</a>
                                        </div>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Pro_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo  $pageno ?>"><font
                                                    size="2">改</font></a></div>
                                    </td>
                                    <td rowspan="2" bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Pro_Del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo  $pageno ?>">删</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo  $l_name_e ?></td>
                                </tr>
                                <tr>
                                    <td height="1" colspan="15" bgcolor="#999999"></td>
                                </tr>
                            <?php
                            } else {
                                break;
                            }
                            $num += 1;
                        }?>
                        <tr>
                            <td height="21" colspan="15" valign="top">
                                <?php
                                //每页显示的条数
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                if (empty($l_classid)) {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_List.php?pageno=", 2);
                                } else {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                                }

                                ?>
                            </td>
                        </tr>
                    </table>
                <?php } ?>      </td>
        </tr>
    </table>

    </body>
    </html>
<?php



?>