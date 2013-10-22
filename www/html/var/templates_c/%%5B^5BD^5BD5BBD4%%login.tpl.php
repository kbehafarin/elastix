<?php /* Smarty version 2.6.14, created on 2013-10-22 03:46:01
         compiled from _common/login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title>Elastix - <?php echo $this->_tpl_vars['PAGE_NAME']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">-->
	<link rel="stylesheet" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/login_styles.css">
    <?php echo $this->_tpl_vars['HEADER_LIBS_JQUERY']; ?>

  </head>
  <body>
	<form method="POST">
	  <div id="neo-login-box">
		<div id="neo-login-logo">
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/elastix_logo_mini.png" width="200" height="62" alt="elastix logo" />
		</div>
		<div class="neo-login-line">
		  <div class="neo-login-label"><?php echo $this->_tpl_vars['USERNAME']; ?>
:</div>
		  <div class="neo-login-inputbox"><input type="text" id="input_user" name="input_user" class="neo-login-input" /></div>
		</div>
		<div class="neo-login-line">
		  <div class="neo-login-label"><?php echo $this->_tpl_vars['PASSWORD']; ?>
:</div>
		  <div class="neo-login-inputbox"><input type="password" name="input_pass" class="neo-login-input" /></div>
		</div>
		<div class="neo-login-line">
		  <div class="neo-login-label"></div>
		  <div class="neo-login-inputbox"><input type="submit" name="submit_login" value="<?php echo $this->_tpl_vars['SUBMIT']; ?>
" class="neo-login-submit" /></div>
		</div>
		<div class="neo-footernote"><a href="http://www.elastix.org" style="text-decoration: none;" target='_blank'>Elastix</a> is licensed under <a href="http://www.opensource.org/licenses/gpl-license.php" style="text-decoration: none;" target='_blank'>GPL</a> by <a href="http://www.palosanto.com" style="text-decoration: none;" target='_blank'>PaloSanto Solutions</a>. 2006 - <?php echo $this->_tpl_vars['currentyear']; ?>
.</div>
		<br>
        <?php echo '
		<script type="text/javascript">
            $(document).ready(function() {
                 $("#neo-login-box").draggable();
            });
			document.getElementById("input_user").focus();
		</script>
        '; ?>

	  </div>
	</form>
  </body>
</html>