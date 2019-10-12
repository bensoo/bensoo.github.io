<HTML><HEAD><TITLE>benso</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<SCRIPT LANGUAGE="JavaScript">
</SCRIPT>
<?php
$qs=$_GET['que'];?>
<FRAMESET rows=41,* 
frameSpacing=0 frameBorder=0 border=0 bordercolor="#3E77B3">
  <FRAME border=0 name=poptoolsbar 
frameSpacing=0 src="head.php?que=<?php echo urlencode($qs);?>" frameBorder=NO 
scrolling=no>
<FRAMESET cols=50%,11,* bordercolor="#3E77B3" id=myFrame>
  <FRAME class=a src="https://seeres.com/search?q=<?php echo $qs;?>" 
name=popforum bordercolor="#3E77B3" target="right">
  <FRAME src="middle.htm" name=midFrame 
frameBorder=0 scrolling=no noResize bordercolor="#3E77B3">
    <FRAME 
src="https://www.baidu.com/s?wd=<?php echo $qs;?>" name=popmain bordercolor="#3E77B3">
  </FRAMESET><NOFRAMES></NOFRAMES></FRAMESET>
<DIV style="DISPLAY: none">
<A href="https://github.com/yijiesun">syj</A>
<A href="https://github.com/yijiesun" >syj</A>
</DIV></HTML>
