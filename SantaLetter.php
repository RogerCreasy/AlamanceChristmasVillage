<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Alamance Christmas Village! Kids, Send A Letter To Santa. Tell Him What You Want For Christmas and get a reply! Online shopping for Alamance County">
<meta name="keywords" content="Santa, Claus, Letter, Christmas, gift, shopping, free, entertainment, kids, children, adults, store, Alamance County, Burlington, Roger Creasy">
<meta name="creator" content="Roger Creasy" />

<title>Alamance Christmas Village</title>
<style type="text/css">
<!--
body {
	margin-left: auto;
	margin-top: 30px;
	margin-right: auto;
	margin-bottom: auto;
	background: url(img/SantaLeterBG.png) repeat-x fixed;
}

-->
</style>

</head>

<body>
         <!--
          <div id="countdown" align="center">
                <iframe allowtransparency="true" SRC="countdown.html" NAME="countdownscript" scrolling="no" WIDTH=485 HEIGHT=50  frameborder="0"></iframe>
          </div>
         -->   

<div id="randomdiv1" style="display:block;" align="center">
      <form onSubmit="return submitForm(this.submitbutton)" method="post" action="reply.php">
        <p>Before you begin Please Read Our <a href="http://www.halifaxmediagroup.com/sites/privacy.html" target="_blank">Privacy 
          Policy</a>!</p>
        <table cellpadding="2" ALIGN="Center" border="0">
          <tr> 
            <td width="325" height="219"><B><font face="Verdana, Arial, Times" color="#ff0000" size="5">My 
              name Is:</font><font face="Verdana, Arial, Times" size="3" COLOR="#ff0000"> 
              </FONT></B>&nbsp; <input type="text" name="name" size="15" style="color: #006600; font-weight: bold" onChange="javascript:while(''+this.value.charAt(this.value.length-1)==' ')this.value=this.value.substring(0,this.value.length-1);"> 
              <?PHP $name = AddSlashes($name); ?>
			  <B><font size="5">First name</font></B> <P> <B><font color="#ff0000" size="4">Last 
                name:</font> </B>&nbsp; 
                <input type="text" name="lastname" size="15" style="color: #006600; font-weight: bold" onChange="javascript:while(''+this.value.charAt(this.value.length-1)==' ')this.value=this.value.substring(0,this.value.length-1);">
                <B> <font size="3">Not Required</font></B> <B><font color="#ff0000" size="6"><br>
                </font></B>
                &nbsp;
                <br />
                <B><font color="#ff0000" size="4">City Where You Live:</font> </B>&nbsp;
                <input type="text" name="city" size="15" style="color: #006600; font-weight: bold" onChange="javascript:while(''+this.value.charAt(this.value.length-1)==' ')this.value=this.value.substring(0,this.value.length-1);" />
                <br />
                <B><font color="#ff0000" size="4"><br />
                State Where You Live:</font> </B>&nbsp;
                <input type="text" name="state" size="15" style="color: #006600; font-weight: bold" onChange="javascript:while(''+this.value.charAt(this.value.length-1)==' ')this.value=this.value.substring(0,this.value.length-1);" />
		    </td>
            <td width="435" rowspan="4" align="center">
                <img src="img/logo_letter.gif" alt="Alamance Christmas Village" width="296" height="168" align="center" />
                <br>
                <br>
                <img src="LandingPages2013/IveyMotorcars/IveyMotorcars.JPG" width="300" height="250" usemap="#Map" border="0"></td>
          </tr>
          <tr> 
            <td><B><font color="#ff0000" size="6">I will be</font></B> <B>
              <input type="text" name="age" size="2" maxlength="2" style="color: #006600; font-weight: bold">
            <font size="5">Years Old This Christmas.</font></B> </TD>
          </tr>
          <tr> 
            <td colspan="2"><FONT COLOR="#ff0000"><B><font size="6">I am a:&nbsp;</font> 
              </B></FONT><B> <font size="5"> 
              <input type="radio" name="gender" value="boy" id="radio2">
              <label for="radio2">Boy</label>
              </font></B></TD>
          </tr>
          <tr> 
            <td colspan="2"><FONT COLOR="#ff0000"><B><font size="6">I am a:&nbsp;</font> 
              </B></FONT><font size="5"><B> 
              <input type="radio" name="gender" value="girl" id="radio">
              <label for="radio">Girl</label>
              </B></font></TD>
          </tr>
        </table>
        <table cellpadding="2" ALIGN="Center">
            <tr> 
              <td colspan=4><P ALIGN=Center> <font face="Verdana, Arial, Times" size="3" COLOR="#ff0000"><B><BIG> 
                  <U><I>Answer These Questions To Help Us Sort Santa's Mail.</I></U></BIG></B></FONT></TD>
            </tr>
            <tr> 
              <td width="29"> <input type="radio" name="checklist1" value="It is good that you have been nice to your friends." id="radio3">
                <B> 
                <label for="yes1">Yes</label>
                </B> <P> </TD>
              <td width="20"><input type="radio" name="checklist1" value="Try to treat your friends better." id="no1"> 
                <B> 
                <label for="no1">No</label>
                </B> <P> </TD>
              <td width="20%"> <input type="radio" name="checklist1" value="You might need to treat friends a little better." id="u1">
                <br> 
                <B> 
                <label for="u1">Kind of</label>
                </B>
                <P> </TD>
              <td><B>Have You been nice to your friends?</B> <P ALIGN=Center> 
                  <B> -- even people you don't like.</B> 
                <hr align="center"> </TD>
            </tr>
            <tr> 
              <td> <input type="radio" name="checklist2" value="I am glad that you are trying very hard to get good grades." id="yes2"> 
                <B> 
                <label for="yes2">Yes</label>
                </B> <P> </TD>
              <td> <input type="radio" name="checklist2" value="You need to try harder at school." id="no2"> 
                <B> 
                <label for="no2">No</label>
                </B> <P> </TD>
              <td width="20%"> <input type="radio" name="checklist2" value="Please put a little more effort into school work." id="u2">
<B> <br>
<label for="u2">Sort of</label>
                </B>
                <P> </TD>
              <td><B>Have you been trying your best at school?</B> <P ALIGN=Center> 
                  <B> -- even if you don't get straight A's.</B> 
                <hr align="center"> </TD>
            </tr>
            <tr> 
              <td> <input type="radio" name="checklist3" value="It is good that you help out around the house. Parents need help sometimes." id="yes3"> 
                <B> 
                <label for="yes3">Yes</label>
                </B> <P> </TD>
              <td> <input type="radio" name="checklist3" value="Parents need help sometimes. Try to help out more around the house." id="no3"> 
                <B> 
                <label for="no3">No</label>
                </B> <P> </TD>
              <td width="20%"><B> </B> <input type="radio" name="checklist3" value="You could put more effort into completing chores." id="u3">
                <br> 
                <B> 
                <label for="u3">A Little</label>
                </B>
                <P> </TD>
              <td><B>Do you help your parents keep the house clean?</B> <P ALIGN=Center> 
                  <B> -- a little more than they expect.</B> 
                <hr align="center"> </TD>
            </tr>
            <tr> 
              <td> <input type="radio" name="checklist4" value="You have been in trouble at school, try to do better. " id="yes4"> 
                <B> 
                <label for="yes4">Yes</label>
                </B> <P> </TD>
              <td> <input type="radio" name="checklist4" value="It is good that you have not been in trouble at school!" id="no4"> 
                <B> 
                <label for="no4">No</label>
                </B> <P> </TD>
              <td width="20%"> <input type="radio" name="checklist4" value="You seem to be a well behaved student at school. " id="u4">
<B> <br>
<label for="u4">Never</label>
                </B>
                <P> </TD>
              <td><B>Do you ever get in trouble at school?</B> <P ALIGN=Center> 
                  <B> -- like if you had to see the principal.</B> 
                <hr align="center"> </TD>
            </tr>
            <tr> 
              <td> <input type="radio" name="checklist5" value="Please try to be better for grownups. " id="yes5"> 
                <B> 
                <label for="yes5">Yes</label>
                </B> <P> </TD>
              <td> <input type="radio" name="checklist5" value="I am glad that you are good for your parents." id="no5"> 
                <B> 
                <label for="no5">No</label>
                </B> <P> </TD>
              <td width="20%"> <input type="radio" name="checklist5" value="You are good for grownups most of the time." id="u5">
                <br> 
                <B> 
                <label for="u5">Sometimes</label>
                </B>
                <P> </TD>
              <td><B>Do you make your parents mad at you?</B> <P ALIGN=Center> 
                  <B> -- like if you do something you know is wrong.</B> 
                <hr align="center"> </TD>
            </tr>
            <tr> 
              <td> <input type="radio" name="checklist6" value="Brushing your teeth every day is important, keep up the good work." id="yes6"> 
                <B> 
                <label for="yes6">Yes</label>
                </B> <P> </TD>
              <td> <input type="radio" name="checklist6" value="Brushing your teeth every day is important, try to do better." id="no6"> 
                <B> 
                <label for="no6">No</label>
                </B> <P> </TD>
              <td width="20%"> <input type="radio" name="checklist6" value="Take better care of your teeth, they are important." id="u6"> 
                <B> 
                <label for="u6"><br>
                Not always</label>
                </B>
                <P> </TD>
              <td><B>Do you brush your teeth every day?</B> <P ALIGN=Center> <B> 
                  -- at least once a day.</B> 
                <hr align="center"> </TD>
            </tr>
        </table>
          <table cellpadding="2" ALIGN="Center" border="0">
            <tr> 
              <td> <p align="center"><B><I><U><font face="Times New Roman, Times, serif" color="#ff0000" size="7">My 
                  Gift List</font></U></I></B> </TD>
            </tr>
            <tr> 
              <td height="37" align="center"><p><font color="#339900" size="4" face="Times New Roman, Times, serif"><strong><br>
                  What is the one gift that you really would like to get?</strong></font></p>
                <p><strong><font color="#339900" size="4" face="Times New Roman, Times, serif">
                  <input type="text" name="maingift">
              <?PHP $maingift = AddSlashes($maingift); ?>				  
                  </font></strong></p></TD>
            </tr>
            <tr> 
              <td width="500" height="156"> <p>&nbsp;</p>
                <P ALIGN=Center><strong><font color="#339900" size="4">Enter 
                  1 - 3 gifts that you would like</font></strong><br>
                  <br>
                  <textarea wrap=physical name="giftlist" style="color: #006600; font-weight: bold" value="List your gift wishes here." ROWS="3" cols="57">
</TEXTAREA>
              <?PHP $giftlist = AddSlashes($giftlist); ?>
</TD>
            </tr>
          </table>
        <P ALIGN=Center> <CENTER> 
        <P ALIGN=Center><font face="Verdana, Arial, Times" size="5" COLOR="#ff0000"><B>Here 
          Is My Letter To Santa:</B></FONT> 
        <P ALIGN=Center> <B>Do Not List your Gifts here, they should be listed 
          above..</B> 
        <P ALIGN=Center> 
          <CENTER>
            <textarea wrap=physical name="letter" style="color: #006600; font-weight: bold" value="Type Your Letter Here" ROWS="9" COLS="57">
</TEXTAREA>
              <?PHP $letter = AddSlashes($letter); ?>
          </CENTER>
        <table CELLSPACING="0" cellpadding="10" ALIGN="Center">
          <tr> 
            <td> <p align="center"><b><font size="3" face="Times New Roman, Times, serif" color="#FF0000">Please 
                Tell Your Parents </font><font face="Times New Roman, Times, serif" size="4" color="#FF0000">BEFORE</font><font size="3" face="Times New Roman, Times, serif" color="#FF0000"> 
                Sending This Letter!</font></b> </p>
              <table cellpadding="2" ALIGN="Center">
                <tr> 
                  <td><P ALIGN=Center><b><font size="3" face="Comic Sans MS" color="#FF0000"> 
                      <input type=submit name=submitbutton value="PARENTS: Click Here To Send This Letter">
                      </font></b></p></TD>
                </tr>
              </table>
              <!--
              <p align="center" class="style1">
                <input name="checkbox" type="checkbox" value="opt-in" checked>
                I agree that the Times-News and Burlington Square Mall may use<br> 
              my e-mail address to send special offers or announcements </p>
              -->
            </TD>
          </tr>
        </table>
  </form>

</div>

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
    s.pageName="The Times News: ACV SantaLetter";
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

<map name="Map">
  <area shape="rect" coords="0,1,300,248" href="http://www.iveymotorcars.com/index.htm" target="_blank">
</map>
</body>
</html>
