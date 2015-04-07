<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="EditRegion4" -->
<title>Reset Password</title>
<!-- InstanceEndEditable -->
<link href='css/all-pages.css' type='text/css' rel='stylesheet'/>
<link href='css/forms.css' type='text/css' rel='stylesheet'/>
<link href='css/nav-bar.css' type='text/css' rel='stylesheet'/>
<link href='fonts/ptsans/stylesheet.css' type='text/css' rel='stylesheet'/>
<link href='pics/favicon.png' rel='icon' />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1'/>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>


<div id='menu'>
	<div id='menu-items-div' class='text2 relative'>
    	<img src='pics/menu-icon.png' id='menu-icon' class='pointer'/>
		<a href='index.html'><img id='logo' src='pics/witzkey-logo.png'/></a>
        <div id='menu-links-div'>
        	<a href='search-members.html' class='black-text-link'>Search Mentors</a>
        	<a href='member-login.html' class='black-text-link'>Login</a>
        </div>
    </div>
</div><!--menu-->

<div id='mobile-dropdown' class='weak-hide text2'>
	<a href='search-members.html' class='black-text-link'>Search Mentors</a>
    <a href='member-login.html' class='black-text-link'>Login</a>
</div><!--mobile-dropdown-->

<div id='container'>

<div id='bottom-menu' class='text2 weak-hide'>
	<a href='search-members.html' class='black-text-link'><img src='pics/search-icon.png'/></a>
    <a href='member-login.html' class='black-text-link'><img src='pics/login-arrow.png' /></a>
</div><!--bottom-menu-->
<!-- InstanceBeginEditable name="EditRegion1" -->
<center>
<div class='title'>Reset Password</div>

<p>

<div class='general-form-container'>

<div class='general-form-div'>

<div id='password-div' class='left text'>Password</div>

<p>

<input id='new-password' type='password' class='general-input'/>

<p>

<div id='repeat-password-div' class='left text'>Repeat password</div>

<p>

<input id='repeat-password' type='password' class='general-input'/>

<input type='hidden' id='email' value='<?php echo $_GET['email']?>'/>
<input type='hidden' id='code' value='<?php echo $_GET['code']?>'/>

<div class='left'>
<input type='submit' value='Reset' id='submit-form' class='inline-middle general-submit2'/>

<div class='form-message relative inline-middle'>
<img src='pics/ajax-loader2.gif' id='form-loader' class='hide general-loader'>
<div id='form-message-text' class='text2'></div>
</div>

</div>

</div><!--general-form-div-->

</div><!--general-form-container-->

</center>
<!-- InstanceEndEditable -->
</div><!--container-->


</body>
<script src='js/jquery.js'></script>
<script src='js/fastclick.js'></script>
<script src='js/functions.js'></script>
<script src='sjcl-master/sjcl.js'></script>
<script src='js/nav-bar.js'></script>
<script src='phonegap.js'></script>
<!-- InstanceBeginEditable name="EditRegion2" -->
<script src='js/forgot-password/reset-password.js'></script>
<!-- InstanceEndEditable -->
<!-- InstanceEnd --></html>