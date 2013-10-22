<?php /* Smarty version 2.6.14, created on 2013-10-22 09:33:32
         compiled from _common/index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title>Elastix</title>
        <link rel="stylesheet" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/styles.css" />
        <link rel="stylesheet" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/help.css" />
		<!--<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/old.theme.elastixwave.styles.css" />-->
		<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/header.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/content.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/applet.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/sticky_note.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/table.css" />

        <!--[if lte IE 8]><link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/ie.css" /><![endif]-->
	<?php echo $this->_tpl_vars['HEADER_LIBS_JQUERY']; ?>

        <script type='text/javascript' src="libs/js/base.js"></script>
	<script type='text/javascript' src="libs/js/sticky_note.js"></script>
        <script type='text/javascript' src="libs/js/iframe.js"></script>
        <?php echo $this->_tpl_vars['HEADER']; ?>

	<?php echo $this->_tpl_vars['HEADER_MODULES']; ?>

    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody" <?php echo $this->_tpl_vars['BODYPARAMS']; ?>
>
        <?php echo $this->_tpl_vars['MENU']; ?>
 <!-- Viene del tpl menu.tlp-->
		<?php if (! empty ( $this->_tpl_vars['mb_message'] )): ?>
		<br />
	  	<div class="div_msg_errors" id="message_error">
                    <div style="height:24px">
                        <div class="div_msg_errors_title" style="padding-left:5px">
                            <b style="color:red;">&nbsp;<?php echo $this->_tpl_vars['mb_title']; ?>
</b>
                        </div>
                        <div class="div_msg_errors_dismiss">
                            <input type="button" onclick="hide_message_error();" value="<?php echo $this->_tpl_vars['md_message_title']; ?>
"/>
                        </div>
                    </div>
		    <div style="padding:2px 10px 2px 10px">
			<?php echo $this->_tpl_vars['mb_message']; ?>

		    </div>
		</div>
		<?php endif; ?>
				<?php echo $this->_tpl_vars['CONTENT']; ?>

			</div>
		    </div>
			<?php if ($this->_tpl_vars['isThirdLevel'] == 'on'): ?>
				<?php if ($this->_tpl_vars['viewMenuTab'] == 'true'): ?>
		    <div id="neo-lengueta-minimized"></div>
				<?php elseif ($this->_tpl_vars['viewMenuTab'] == 'false'): ?>
			<div id="neo-lengueta-minimized" class="neo-display-none"></div>
				<?php else: ?>
			<div id="neo-lengueta-minimized" class="neo-display-none"></div>
				<?php endif; ?>
			<?php else: ?>
			<div id="neo-lengueta-minimized"></div>
			<?php endif; ?>
		</div>
		<div align="center" id="neo-footerbox"> <!-- mostrando el footer -->
			<a href="http://www.elastix.org" style="color: #444; text-decoration: none;" target='_blank'>Elastix</a> is licensed under <a href="http://www.opensource.org/licenses/gpl-license.php" target='_blank' style="color: #444; text-decoration: none;" >GPL</a> by <a href="http://www.palosanto.com" target='_blank' style="color: #444; text-decoration: none;">PaloSanto Solutions</a>. 2006 - <?php echo $this->_tpl_vars['currentyear']; ?>
.
		</div>
		<div id="neo-sticky-note" class="neo-display-none">
		  <div id="neo-sticky-note-text"></div>
		  <div id="neo-sticky-note-text-edit" class="neo-display-none">
			<textarea id="neo-sticky-note-textarea"></textarea>
			<div id="neo-sticky-note-text-char-count"></div>
			<input type="button" value="<?php echo $this->_tpl_vars['SAVE_NOTE']; ?>
" class="neo-submit-button" id="neo-submit-button" onclick="send_sticky_note()" />
			<div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1"></div>
		  </div>
		  <div id="neo-sticky-note-text-edit-delete"></div>
		</div>
		<!-- Neo Progress Bar -->
		<div class="neo-modal-elastix-popup-box">
			<div class="neo-modal-elastix-popup-title"></div>
			<div class="neo-modal-elastix-popup-close"></div>
			<div class="neo-modal-elastix-popup-content"></div>
		</div>
		<div class="neo-modal-elastix-popup-blockmask"></div>
    </body>
</html>