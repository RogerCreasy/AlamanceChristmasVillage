<?PHP
  //handle the form variables
  $name = StripSlashes($_POST["name"]);
  $city = StripSlashes($_POST["city"]);
  $state = StripSlashes($_POST["state"]);
  $lastname = StripSlashes($_POST["lastname"]);
  $age = StripSlashes($_POST["age"]);
  $gender = $_POST["gender"];
  $checklist1 = StripSlashes($_POST["checklist1"]);
  $checklist2 = StripSlashes($_POST["checklist2"]);
  $checklist3 = StripSlashes($_POST["checklist3"]);
  $checklist4 = StripSlashes($_POST["checklist4"]);
  $checklist5 = StripSlashes($_POST["checklist5"]);
  $checklist6 = StripSlashes($_POST["checklist6"]);
  $maingift = StripSlashes($_POST["maingift"]);
  $giftlist = StripSlashes($_POST["giftlist"]);
  $letter = StripSlashes($_POST["letter"]);
  
  //trap for articles in giftlist
  $needle = array("a ", "an ", "the ", "A ", "An ", "The ", "THe ", "THE ");
  $giftlist = str_replace($needle, "", $giftlist);
  
  //set up the reply
  //age under 8
  if($age <= 8)
  {
  $reply = "Dear $name, <br /> \r\n
Thanks for writing me. I cannot believe that you are already $age years old! You are getting to be a big $gender. <br />\r\n
My elf Roger got your message to me. $checklist1 $checklist2 $checklist3 <br />
$checklist4 $checklist5 $checklist6 \r\nBe a good $gender. Remember, I am watching! <br />I will try my best to get you the $maingift. The $giftlist will be difficult, but I will try. Try not to be too disappointed, if I cannot get everything for you.
\r\n<br />Rudolf is getting his nose ready; just in case we need the light. He has had the sniffles, but I think he will be well by Christmas Eve. \r\n
Mrs. Claus has me on a diet, but if you want to leave me some milk and cookies, I won\'t tell her.<br />
I had better go. I have lots of work to do.\r\n\r\n\r\n
Santa.\r\n\r\n\r\n";
  }
  
//age 8-12
   elseif($age>8 && $age<13)
     {
  $reply = "Dear $name, \r\n<br />
Thanks for writing me. I cannot believe that you are already $age years old! You will be a teenager before you know it! \r\n<br />
My elf Roger got your message to me. $checklist1 $checklist2 $checklist3 <br />
$checklist4 $checklist5 $checklist6 \r\n<br /> I will try my best to get you that $maingift , but I'm not promising. The $giftlist will be difficult, but I will try. Try not to be too disappointed, if I cannot get everything for you.<br /><br />
\r\nRudolf is getting his nose ready; just in case we need the light. He has had the sniffles, but I think he will be well by Christmas Eve. \r\n<br /><br />
Mrs. Claus has me on a diet, but if you want to leave me some milk and cookies, I won\'t tell her.<br />
I had better go. I have lots of work to do.\r\n\r\n\r\n<br />
Love,<br />Santa.\r\n\r\n\r\n ";
	 }
	 
//age 13-19
   elseif($age>12 && $age<20)
     {
   $reply = "Dear $name, \r\n<br />
Thanks for writing me. I cannot believe that you are already $age years old! It is great to hear from you, most teenagers don't bother to write me. \r\n<br />
My elf Roger got your message to me. $checklist1 $checklist2 $checklist3
$checklist4 $checklist5 $checklist6 \r\n <br />I will try my best to get you that $maingift. The $giftlist will be difficult,but I will try.<br /><br />
\r\nRudolf is getting his nose ready. He has had the sniffles, but I think he will be well by Christmas Eve. \r\n<br />
Mrs. Claus has me on a diet, but if you want to leave me some milk and cookies, I won\'t tell her.<br /><br />
I had better go. I have lots of work to do.\r\n\r\n\r\n<br />
Love,<br />Santa. \r\n\r\n\r\n";
	 }
	 
//age 20-55
   elseif($age>19 && $age<55)
     {
   $reply = "Dear $name, \r\n<br />
Thanks for writing me. I cannot believe that you are already all grown up! It is great to hear from you, most folks your age don't bother to write me. \r\n<br />
My elf Roger got your message to me. $checklist1 $checklist3.
$checklist4 $checklist5 $checklist6 \r\n <br />I will try my best to get you that $maingift. The $giftlist will be difficult,but I will try.<br /><br />
\r\nRudolf is getting his nose ready. He has had the sniffles, but I think he will be well by Christmas Eve. \r\n<br />
Mrs. Claus has me on a diet, but if you want to leave me some milk and cookies, I won\'t tell her.<br /><br />
I had better go. I have lots of work to do.\r\n\r\n\r\n<br />
Love,<br />Santa. \r\n\r\n\r\n ";
	 }

//age > 55
   elseif($age>55)
     {
  $reply = "$name, \r\n<br />
Thanks for writing me. It is great to hear from you, most folks your age don't bother to write me. You and I have been friends for many years. \r\n<br />
My elf Roger got your message to me. \r\n I will try my best to get you that $maingift. The $giftlist will be difficult, but I will try.
\r\n<br /><br />Rudolf is getting his nose ready. He has had the sniffles, but I think he will be well by Christmas Eve. \r\n<br /><br />
Mrs. Claus has me on a diet, but if you want to leave me some milk and cookies, I won\'t tell her. I have to eat cookies with no nuts, they get stuck in my dentures, and upset my diverticulosis. Ho! Ho! Ho!<br /><br />
I had better go. I have lots of work to do.\r\n\r\n\r\n<br />
Love,<br />Santa. \r\n\r\n\r\n";
	 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Alamance Christmas Village! Kids, Send A Letter To Santa. Tell Him What You Want For Christmas and get a reply! Online shopping for Alamance County">
<meta name="keywords" content="Santa, Claus, Letter, Christmas, gift, shopping, free, entertainment, kids, children, adults, store, Alamance County, Burlington, Roger Creasy">
<meta name="creator" content="Roger Creasy" />

<title>Alamance Christmas Village - Letter from Santa</title>
<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 24px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style4 {
	font-family: font-family: 'Comic Sans MS', Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #008000;
}

-->
</style>
</head>

<body>

<table width="600" border="0" cellspacing="10">
  <tr>
    <td bgcolor="#FF0000" colspan="3" align="center">
      <span class="style2">Merry Christmas 
      <?PHP print $name; ?>
    !    </span></td>
  </tr>
  <tr>
    <td width="139"><img src="img/santa_stamp.gif" width="74" height="100" /></td>
    <td width="260">&nbsp;</td>
    <td width="155" valign="bottom"><p class="style3">Santa<br />
    1 Christmas Lane<br />
    North Pole<br />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style3">
      <?PHP print $name."<br />".$city.", ".$state; ?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">
      <span class="style4">
      <br /><br />
      <?PHP print StripSlashes($reply); ?>
      </span>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <span class="style4">
      <br />
      <br />
      <a href="javascript:window.print()">Print this letter
      </a></span>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <span class="style4">
      <br />
      <br />
      <a href="index.php">Back to Alamance Christmas Village</a>      </span>
    </td>
  </tr>
</table>


<!-- SiteCatalyst code version: H.25.1.
    Copyright 1996-2012 Adobe, Inc. All Rights Reserved
    More info available at http://www.omniture.com -->
    <script language="JavaScript" type="text/javascript" src="http://www.thetimesnews.com/hmg/js/s_code.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://www.thetimesnews.com/hmg/js/omniture.js"></script>
    <script language="JavaScript" type="text/javascript">
    initOmniture("fiburlington", "freedom.112.2o7.net", "javascript:,ncpiedmontautos.com,ncpiedmonthomes.com,freedom.com,blogs.thetimesnews.com,special.thetimesnews.com,thetimesnews.com,freedomblogging.com,hosted.ap.org,customwire.ap.org,old.thetimesnews.com,meevee.com,oodle.com,monster.com,upickem.net,209.85.175.104,209.85.173.104,digitalmediacommunications.com,nieonline.com");
    var serverLocation = "";
    var isInIFrame = (window.location != window.parent.location) ? true : false;      
    if (isInIFrame) {
      serverLocation = parent.window.location.hostname;
    } else {
      serverLocation = window.location.hostname;
    }
    <!--
    /* You may give each page an identifying name, server, and channel on
    the next lines. */
    s.pageName="The Times News: ACV SantaLetter Reply";
    s.server=serverLocation;
    s.channel="ACV";
    s.pageType=""
    s.prop1="";
    s.prop2="";
    s.prop3="";
    s.prop4="";
    s.prop5="";
    /* Conversion Variables */
    s.campaign="";
    s.state="";
    s.zip="";
    s.events="";
    s.products="";
    s.purchaseID="";
    s.eVar1="";
    s.eVar2="";
    s.eVar3="";
    s.eVar4="";
    s.eVar5="";
    /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
    var s_code=s.t();if(s_code)document.write(s_code)//--></script>
    <script language="JavaScript" type="text/javascript"><!--
    if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
    //--></script><noscript><img src="http://freedom.112.2o7.net/b/ss/fiburlington/1/H.25.1--NS/0"
    height="1" width="1" border="0" alt="" /></noscript><!--/DO NOT REMOVE/-->
    <!-- End SiteCatalyst code version: H.25.1. -->
</body>
</html>
