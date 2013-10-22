<?php /* Smarty version 2.6.14, created on 2013-10-22 09:33:32
         compiled from _common/_menu.tpl */ ?>
 
<?php if ($this->_tpl_vars['AUTO_POPUP'] == '1'): ?>
   <?php echo '
   	<script type=\'text/javascript\'>
 	$(\'.togglestickynote\').ready(function(e) {
            $("#neo-sticky-note-auto-popup").attr(\'checked\', true);
	    note();
	});
	</script>
   '; ?>

<?php endif; ?>

<div id="PopupElastix" style="position: absolute; top: 0px; left: 0px;"></div>

<?php echo '
<script type=\'text/javascript\'>
//<![CDATA[
function mostrar_Menu(element)
{
    var subMenu;

    var idMenu = document.getElementById("idMenu");
    if(idMenu.value!="")
    {
        subMenu = document.getElementById(idMenu.value);
        subMenu.setAttribute("class", "vertical_menu_oculto");
    }
    if(element != idMenu.value)
    {
        subMenu = document.getElementById(element);
        subMenu.setAttribute("class", "vertical_menu_visible");
        idMenu.setAttribute("value", element);
    }
    else idMenu.setAttribute("value", "");
}

//<![CDATA[
    $(".menutabletaboff").mouseover(function(){
        var source_img = $(\'#neo-logobox\').find(\'img:first\').attr("src");
        var themeName = source_img.split("/",2);
        $(this).css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_center2.gif)");
        $(this).css("height","47px");
        $(this).find(\'a:first\').css("bottom","6px");
        $(this).parent().find(\'div:first\').css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_left2.gif)");
        $(this).parent().find(\'div:last\').css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_right2.gif)");
        $(this).parent().find(\'div:first\').css("height","38px");
        $(this).parent().find(\'div:last\').css("height","38px");
    });

    $(".menutabletaboff").mouseout(function(){
        var source_img = $(\'#neo-logobox\').find(\'img:first\').attr("src");
        var themeName = source_img.split("/",2);
        $(this).css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_center.gif)");
        $(this).css("height","37px");
        $(this).find(\'a:first\').css("bottom","0px");
        $(this).parent().find(\'div:first\').css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_left.gif)");
        $(this).parent().find(\'div:last\').css("background-image","url(themes/"+themeName[1]+"/images/fondo_boton_right.gif)");
        $(this).parent().find(\'div:first\').css("height","35px");
        $(this).parent().find(\'div:last\').css("height","35px");
    });
/*newwwww*/
$(document).ready(function(){
	$("#toggleleftcolumn, #neo-lengueta-minimized").click(function(){
	    if(!$(\'#neo-lengueta-minimized\').hasClass(\'neo-display-none\')){
		  $("#neo-contentbox-leftcolumn").removeClass("neo-contentbox-leftcolumn-minimized");
		  $("#neo-contentbox-maincolumn").css("width", "1025px");
	      $("#neo-contentbox-leftcolumn").data("neo-contentbox-leftcolum-status", "visible");
		  $("#neo-lengueta-minimized").addClass("neo-display-none");
		  if($(\'#toggleleftcolumn\')){
			  var labeli = $(\'#toolTip_hideTab\').val();
			  $(\'#toggleleftcolumn\').attr(\'title\',labeli);
			  $(\'#toggleleftcolumn\').attr(\'src\',"images/expand.png");
		  }
	    }else{
		  $("#neo-contentbox-leftcolumn").addClass("neo-contentbox-leftcolumn-minimized");
		  $("#neo-contentbox-maincolumn").css("width", "1245px");
		  $("#neo-contentbox-leftcolumn").data("neo-contentbox-leftcolum-status", "hidden");
		  $("#neo-lengueta-minimized").removeClass("neo-display-none");
		  if($(\'#toggleleftcolumn\')){
			  var labeli = $(\'#toolTip_showTab\').val();
			  $(\'#toggleleftcolumn\').attr(\'title\',labeli);
			  $(\'#toggleleftcolumn\').attr(\'src\',"images/expandOut.png");
		  }
		}
	});
	$("#togglebookmark").click(function() {
		var source_img = $(\'#neo-logobox\').find(\'img:first\').attr("src");
		var themeName = source_img.split("/",2);
		var imgBookmark = $("#togglebookmark").attr(\'src\');
		if(/bookmarkon.png/.test(imgBookmark)) {
			$("#togglebookmark").attr(\'src\',"themes/"+themeName[1]+"/images/bookmark.png");
		} else {
			$("#togglebookmark").attr(\'src\',"themes/"+themeName[1]+"/images/bookmarkon.png");
		}
	});
	$("#neo-cmenu-cpallet").hover(
	  function () {
		$(this).addClass("neo-cmenutableft-hvr");
		$( "#search_module_elastix" ).autocomplete( "close" );
		$( "#search_module_elastix" ).val("");
	  },
	  function () {
		$(this).removeClass("neo-cmenutableft-hvr");
	  }
	);
	$("#neo-cmenu-search").hover(
	  function () {
		$(this).addClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-search").removeClass("neo-display-none");
		$( "#search_module_elastix" ).autocomplete( "close" );
		$( "#search_module_elastix" ).val("");
	  },
	  function () {
		$(this).removeClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-search").addClass("neo-display-none");
	  }
	);
	$("#neo-cmenu-info").hover(
	  function () {
		$(this).addClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-info").removeClass("neo-display-none");
		$( "#search_module_elastix" ).autocomplete( "close" );
		$( "#search_module_elastix" ).val("");
	  },
	  function () {
		$(this).removeClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-info").addClass("neo-display-none");
	  }
	);
	$("#neo-cmenu-user").hover(
	  function () {
		$(this).addClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-user").removeClass("neo-display-none");
		$( "#search_module_elastix" ).autocomplete( "close" );
		$( "#search_module_elastix" ).val("");
	  },
	  function () {
		$(this).removeClass("neo-cmenutab-hvr");
		$("#neo-cmenu-showbox-user").addClass("neo-display-none");
	  }
	);
    
	$("#neo-cmenu-showbox-search").hover(
	  function() {
		$("#neo-cmenu-showbox-search").removeClass("neo-display-none");
	  },
	  function() {
		$("#neo-cmenu-showbox-search").addClass("neo-display-none");
	  }
	);

	$("#neo-cmenu-showbox-info").hover(
	  function() {
		$("#neo-cmenu-showbox-info").removeClass("neo-display-none");
	  },
	  function() {
		$("#neo-cmenu-showbox-info").addClass("neo-display-none");
	  }
	);
	$("#neo-cmenu-showbox-user").hover(
	  function() {
		$("#neo-cmenu-showbox-user").removeClass("neo-display-none");
	  },
	  function() {
		$("#neo-cmenu-showbox-user").addClass("neo-display-none");
	  }
	);

	$(\'.neo-tabh-rend\').live(\'click\', function() {
		if($("#neo-second-showbox-menu").hasClass("neo-display-none"))
			$("#neo-second-showbox-menu").removeClass("neo-display-none");
		else
			$("#neo-second-showbox-menu").addClass("neo-display-none");
		$(\'body\').one(\'click\', function(e) {
			$("#neo-second-showbox-menu").addClass("neo-display-none");
			e.stopPropagation();
		});
	});

        $(\'#neo-cmenu-cpallet\').click(function(e){
		if($("#colorpicker_framework").css("display")=="none")
			$("#colorpicker_framework").fadeIn(500);
		else
			$("#colorpicker_framework").fadeOut(500);
		oneClickEvent();
	});

	$(\'#search_module_elastix\').bind(\'click\', function(e) {
		//$( "#search_module_elastix" ).autocomplete( "close" );
		$( "#search_module_elastix" ).val("");
	});

	$("#export_button").hover(
	  function () {
	      $(this).addClass("exportBorder");
	  },
	  function () {
	      $(this).removeClass("exportBorder");
	      $(this).attr("aria-expanded","false");
	      $(this).removeClass("exportBackground");
	      $(".letranodec").css("color","#444444");
	      $("#subMenuExport").addClass("neo-display-none");
	  }
	);
	$("#export_button").click(
	  function () {
	      if($(this).attr("aria-expanded") == "false"){
		  var exportPosition = $(\'#export_button\').position();
		  var top = exportPosition.top + 41;
		  var left = exportPosition.left - 3;
		  $("#subMenuExport").css(\'top\',top+"px");
		  $("#subMenuExport").css(\'left\',left+"px");
		  $(this).attr("aria-expanded","true");
		  $(this).addClass("exportBackground");
		  $(".letranodec").css("color","#FFFFFF");
		  $("#subMenuExport").removeClass("neo-display-none");
	      }
	      else{
		  $(".letranodec").css("color","#444444");
		  $("#subMenuExport").addClass("neo-display-none");
		  $(this).removeClass("exportBackground");
		  $(this).attr("aria-expanded","false");
	      }
	  }
	);
	$(".menuItem").hover(
	  function () {
		if($(this).attr("aria-disabled") == "false")
		    $(this).css("background","#F4FA58");
	  },
	  function () {
		$(this).css("background","");
	  }
	);
	$("#subMenuExport").hover(
	  function () {
		$(this).removeClass("neo-display-none");
		$(".letranodec").css("color","#FFFFFF");
		$("#export_button").attr("aria-expanded","true");
		$("#export_button").addClass("exportBackground");
	  },
	  function () {
		$(this).addClass("neo-display-none");
		$(".letranodec").css("color","#444444");
		$("#export_button").removeClass("exportBackground");
		$("#export_button").attr("aria-expanded","false");
	  }
	);
	$(\'#neo-cmenu-cpallet\').ColorPicker({
		color: \'#0000ff\',
		onShow: function (colpkr) {
			return false;
		},
		onHide: function (colpkr) {
			changeColorMenu();// lanzar el ajax
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$(\'#neo-smenubox\').css(\'backgroundColor\', \'#\' + hex);
			$(\'.neo-tabhon\').css(\'backgroundColor\', \'#\' + hex);
			$(\'#userMenuColor\').val(\'#\' + hex);
		},
		onSubmit: function(hsb, hex, rgb, el) {
			$(\'#neo-smenubox\').css(\'backgroundColor\', \'#\' + hex);
			$(\'.neo-tabhon\').css(\'backgroundColor\', \'#\' + hex);
			$(\'#userMenuColor\').val(\'#\' + hex);
        	        $(el).ColorPickerHide();
			changeColorMenu();// se lanza la peticion ajax
	        },
		id_colorPicker: \'colorpicker_framework\'
	});
	var menu_color_user = $(\'#userMenuColor\').val();
	$(\'#neo-smenubox\').css(\'backgroundColor\', menu_color_user);
	$(\'.neo-tabhon\').css(\'backgroundColor\', menu_color_user);
    $(\'#neo-cmenu-cpallet\').ColorPickerSetColor(menu_color_user);

	  // Scroll automático en caso de que el contenido del menú de segundo nivel se reboce
    // ---------------------------------------------------------------------------------
    var smenuoverflow = false; var offsetright = 0; var lastleft = 0; var accumulated_width = 0; var longpaso = 60;
	var move = "";
	$("#neo-smenubox div.neo-tabv,div.neo-tabvon").each(function(index) {
		accumulated_width += $(this).outerWidth();
		// Si el offset.left del elemento anterior es mayor que el actual quiere decir que el elemento
		// actual hizo una especio de retorno de carro
		if(lastleft>$(this).offset().left) smenuoverflow = true;
		lastleft = $(this).offset().left;
		// Si el offset.left+width del elemento actual es mayor al area de neo-smenubox entonces
		// evidentemente se rebozo
		offsetright = $(this).offset().left+$(this).outerWidth();
		if(offsetright>$("#neo-smenubox").outerWidth()) smenuoverflow = true;
	});
	if(smenuoverflow==true) {
	  $("#neo-smenubox-innerdiv").width(accumulated_width+longpaso+"px");
	  $("#neo-smenubox-arrow-more").removeClass("neo-display-none");
	}
	$(\'.neo-smenubox-arrow-more-right\').mouseup(function() {
	  clearInterval(move);
	}).mousedown(function(e) {
	  clearInterval(move);
	  move = setInterval("moveRight()",90);
	});
	$(\'.neo-smenubox-arrow-more-left\').mouseup(function() {
	  clearInterval(move);
	}).mousedown(function(e) {
	  clearInterval(move);
	  move = setInterval("moveLeft()",90);
	});

	$(\'.neo-historybox-tab,.neo-historybox-tabmid\').hover(function() {
	  $(this).find(\'div\').removeClass(\'neo-display-none\');
	}, function() {
	  $(this).find(\'div\').addClass(\'neo-display-none\');
	});
});

function removeNeoDisplayOnMouseOut(ref){
	$(ref).find(\'div\').addClass(\'neo-display-none\');
}

function removeNeoDisplayOnMouseOver(ref){
	$(ref).find(\'div\').removeClass(\'neo-display-none\');
}

function moveLeft()
{
	var source_img = $(\'#neo-logobox\').find(\'img:first\').attr("src");
	var themeName = source_img.split("/",2);
	var img = $(\'#neo-smenubox-arrow-more\').children(\':first-child\').attr(\'src\');
	var longpaso = 60;
	var leftvar = $(\'#neo-smenubox-innerdiv\').css("left");
	leftvarArr = leftvar.split("px");
	if($(\'#neo-smenubox-innerdiv\').offset().left<-longpaso && leftvarArr[0] < 0 ) {
		$(\'#neo-smenubox-innerdiv\').animate({left:\'+=\'+longpaso}, 70, function() {});
		$(\'#neo-smenubox-arrow-more\').children(\':first-child\').attr(\'src\', \'themes/\'+themeName[1]+\'/images/icon_arrowleft.png\');
		$(\'#neo-smenubox-arrow-more\').children(\':last-child\').attr(\'src\', \'themes/\'+themeName[1]+\'/images/icon_arrowright.png\');
	} else {
		$(\'#neo-smenubox-innerdiv\').css("left", "0px");
		if(/icon_arrowleft.png/.test(img))
			$(\'#neo-smenubox-arrow-more\').children(\':first-child\').attr(\'src\', \'themes/\'+themeName[1]+\'/images/icon_arrowleft_no.png\');
	}
}

function moveRight()
{
	var source_img = $(\'#neo-logobox\').find(\'img:first\').attr("src");
	var themeName = source_img.split("/",2);
	var img = $(\'#neo-smenubox-arrow-more\').children(\':last-child\').attr(\'src\');
	var longpaso = 60;
	if(($(\'#neo-smenubox-innerdiv\').offset().left+$(\'#neo-smenubox-innerdiv\').outerWidth()+longpaso)>($("#neo-smenubox").offset().left+$("#neo-smenubox").outerWidth())) {
		$(\'#neo-smenubox-innerdiv\').animate({left:\'-=\'+longpaso}, 70, function() {});
		$(\'#neo-smenubox-arrow-more\').children(\':first-child\').attr(\'src\', \'themes/\'+themeName[1]+\'/images/icon_arrowleft.png\');
	} else {
		if(/icon_arrowright.png/.test(img))
			$(\'#neo-smenubox-arrow-more\').children(\':last-child\').attr(\'src\', \'themes/\'+themeName[1]+\'/images/icon_arrowright_no.png\');
	}
}

function oneClickEvent()
{
    $(\'body\').one(\'click\', function(e) {
	var element = e.target;
	var hide = true;
	if($(element).parents(\'#colorpicker_framework\').length > 0)
	    hide = false
	if(hide)
	    $("#colorpicker_framework").fadeOut(500);
	else
	    oneClickEvent();
	e.stopPropagation();
    });
}
//]]>
</script>
'; ?>


<input type="hidden" id="lblTextMode" value="<?php echo $this->_tpl_vars['textMode']; ?>
" />
<input type="hidden" id="lblHtmlMode" value="<?php echo $this->_tpl_vars['htmlMode']; ?>
" />
<input type="hidden" id="lblRegisterCm"   value="<?php echo $this->_tpl_vars['lblRegisterCm']; ?>
" />
<input type="hidden" id="lblRegisteredCm" value="<?php echo $this->_tpl_vars['lblRegisteredCm']; ?>
" />
<input type="hidden" id="lblCurrentPassAlert" value="<?php echo $this->_tpl_vars['CURRENT_PASSWORD_ALERT']; ?>
" />
<input type="hidden" id="lblNewRetypePassAlert"   value="<?php echo $this->_tpl_vars['NEW_RETYPE_PASSWORD_ALERT']; ?>
" />
<input type="hidden" id="lblPassNoTMatchAlert" value="<?php echo $this->_tpl_vars['PASSWORDS_NOT_MATCH']; ?>
" />
<input type="hidden" id="lblChangePass" value="<?php echo $this->_tpl_vars['CHANGE_PASSWORD']; ?>
" />
<input type="hidden" id="lblCurrentPass" value="<?php echo $this->_tpl_vars['CURRENT_PASSWORD']; ?>
" />
<input type="hidden" id="lblRetypePass" value="<?php echo $this->_tpl_vars['RETYPE_PASSWORD']; ?>
" />
<input type="hidden" id="lblNewPass" value="<?php echo $this->_tpl_vars['NEW_PASSWORD']; ?>
" />
<input type="hidden" id="btnChagePass" value="<?php echo $this->_tpl_vars['CHANGE_PASSWORD_BTN']; ?>
" />
<input type="hidden" id="userMenuColor" value="<?php echo $this->_tpl_vars['MENU_COLOR']; ?>
" />
<input type="hidden" id="lblSending_request" value="<?php echo $this->_tpl_vars['SEND_REQUEST']; ?>
" />
<input type="hidden" id="toolTip_addBookmark" value="<?php echo $this->_tpl_vars['ADD_BOOKMARK']; ?>
" />
<input type="hidden" id="toolTip_removeBookmark" value="<?php echo $this->_tpl_vars['REMOVE_BOOKMARK']; ?>
" />
<input type="hidden" id="toolTip_addingBookmark" value="<?php echo $this->_tpl_vars['ADDING_BOOKMARK']; ?>
" />
<input type="hidden" id="toolTip_removingBookmark" value="<?php echo $this->_tpl_vars['REMOVING_BOOKMARK']; ?>
" />
<input type="hidden" id="toolTip_hideTab" value="<?php echo $this->_tpl_vars['HIDE_IZQTAB']; ?>
" />
<input type="hidden" id="toolTip_showTab" value="<?php echo $this->_tpl_vars['SHOW_IZQTAB']; ?>
" />
<input type="hidden" id="toolTip_hidingTab" value="<?php echo $this->_tpl_vars['HIDING_IZQTAB']; ?>
" />
<input type="hidden" id="toolTip_showingTab" value="<?php echo $this->_tpl_vars['SHOWING_IZQTAB']; ?>
" />
<input type="hidden" id="amount_char_label" value="<?php echo $this->_tpl_vars['AMOUNT_CHARACTERS']; ?>
" />
<input type="hidden" id="save_note_label" value="<?php echo $this->_tpl_vars['MSG_SAVE_NOTE']; ?>
" />
<input type="hidden" id="get_note_label" value="<?php echo $this->_tpl_vars['MSG_GET_NOTE']; ?>
" />
<input type="hidden" id="elastix_theme_name" value="<?php echo $this->_tpl_vars['THEMENAME']; ?>
" />
<input type="hidden" id="lbl_no_description" value="<?php echo $this->_tpl_vars['LBL_NO_STICKY']; ?>
" />

<div id="neo-headerbox">
	<div id="neo-logobox"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/elastix_logo_mini2.png" width="200" height="59" alt="elastix" longdesc="http://www.elastix.org" /></div>
	<div id="neo-mmenubox"> <!-- mostrando contenido del menu principal -->
	  <?php $_from = $this->_tpl_vars['arrMainMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menuMain'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menuMain']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['idMenu'] => $this->_tpl_vars['menu']):
        $this->_foreach['menuMain']['iteration']++;
?>
		<?php if ($this->_tpl_vars['idMenu'] == $this->_tpl_vars['idMainMenuSelected'] && $this->_foreach['menuMain']['iteration'] < 8): ?>
		  <div class="neo-tabhon"><a class='menutable2' href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></div>
		<?php elseif (($this->_foreach['menuMain']['iteration'] <= 1)): ?>
		  <div class="neo-tabh-lend2"><a class="menutable" href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></div>
		<?php elseif ($this->_foreach['menuMain']['iteration'] < 8 && ($this->_foreach['menuMain']['iteration'] == $this->_foreach['menuMain']['total'])): ?>
		  <div class="neo-tabh-lend3"><a class="menutable" href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></div>
		<?php elseif ($this->_foreach['menuMain']['iteration'] < 8): ?>
		  <div class="neo-tabh"><a class="menutable" href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></div>
		<?php elseif ($this->_foreach['menuMain']['iteration'] == 8): ?>
		  <div class="neo-tabh-rend"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/arrowdown.png" width="17" height="15" alt="arrowdown" /></div>
		  <div id="neo-second-showbox-menu" class="neo-second-showbox-menu neo-display-none">
			<p><a class="menutable" href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></p>
		<?php elseif ($this->_foreach['menuMain']['iteration'] >= 8): ?>
			<p><a class="menutable" href="index.php?menu=<?php echo $this->_tpl_vars['idMenu']; ?>
"><?php echo $this->_tpl_vars['menu']['Name']; ?>
</a></p>
		<?php endif; ?>
        <?php if ($this->_foreach['menuMain']['iteration'] >= 8 && ($this->_foreach['menuMain']['iteration'] == $this->_foreach['menuMain']['total'])): ?>
           </div>
        <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
		  
	</div>
	<div id="neo-smenubox"> <!-- mostrando contenido del menu secundario -->
	  <div id="neo-smenubox-innerdiv">
		<?php $_from = $this->_tpl_vars['arrSubMenuByParents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['idSubMenu'] => $this->_tpl_vars['subMenu']):
?>
		  <?php if ($this->_tpl_vars['idSubMenu'] == $this->_tpl_vars['idSubMenuSelected']): ?>
			<div class="neo-tabvon"><a href="?menu=<?php echo $this->_tpl_vars['idSubMenu']; ?>
" class="submenu_on"><?php echo $this->_tpl_vars['subMenu']['Name']; ?>
</a></div>
		  <?php else: ?>
			<div class="neo-tabv"><a href="index.php?menu=<?php echo $this->_tpl_vars['idSubMenu']; ?>
"><?php echo $this->_tpl_vars['subMenu']['Name']; ?>
</a></div>
		  <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	  </div>
	  <div id="neo-smenubox-arrow-more" class="neo-display-none">
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/icon_arrowleft_no.png" width="15" height="17" alt="arrowleft" class="neo-smenubox-arrow-more-left" style="cursor: pointer;" />
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/icon_arrowright.png" width="15" height="17" alt="arrowright" class="neo-smenubox-arrow-more-right" style="cursor: pointer;" />
	  </div>
	</div>
	<div id="neo-topbar">
	  <div id="neo-cmenubox">
		<div id="neo-cmenu-cpallet" class="neo-cmenutableft"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/cpallet.png" width="19" height="21" alt="color" /></div>
		<div id="neo-cmenu-search" class="neo-cmenutab"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/searchw.png" width="19" height="21" alt="user_search" border="0" /></div>
		<div id="neo-cmenu-info" class="neo-cmenutab"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/information.png" width="19" height="21" alt="user_info" border="0" /></div>
		<div id="neo-cmenu-addons" class="neo-cmenutab"><a href="index.php?menu=addons"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/toolbar_addons.png" width="19" height="21" alt="elastix_addons" border="0" /></a></div>
		<div id="neo-cmenu-user" class="neo-cmenutab"><img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/user.png" width="19" height="21" alt="user" border="0" /></div>
	  </div>
	</div>
	<div id="neo-cmenu-showbox-search" class="neo-cmenu-showbox neo-display-none">
	  <p><?php echo $this->_tpl_vars['MODULES_SEARCH']; ?>
</p>
	  <p><input type="search"  id="search_module_elastix" name="search_module_elastix"  value="" autofocus="autofocus" placeholder="search" /></p>
	</div>
	<div id="neo-cmenu-showbox-info" class="neo-cmenu-showbox neo-display-none">
	  <p><span><a class="register_link" style="color: <?php echo $this->_tpl_vars['ColorRegister']; ?>
; cursor: pointer; font-weight: bold; font-size: 13px;" onclick="showPopupElastix('registrar','<?php echo $this->_tpl_vars['Register']; ?>
',538,400)"><?php echo $this->_tpl_vars['Registered']; ?>
</a></span></p>
	  <p><span><a id="viewDetailsRPMs"><?php echo $this->_tpl_vars['VersionDetails']; ?>
</a></span></p>
	  <p><span><a href="http://www.elastix.org" target="_blank">Elastix Website</a></span></p>
	  <p><span><a href="javascript:mostrar();"><?php echo $this->_tpl_vars['ABOUT_ELASTIX2']; ?>
</a></span></p>
	</div>
	<div id="neo-cmenu-showbox-user" class="neo-cmenu-showbox neo-display-none">
	  <p><span><a style="cursor: pointer;" onclick="setAdminPassword();"><?php echo $this->_tpl_vars['CHANGE_PASSWORD']; ?>
</a></span></p>
	  <p><span><a class="logout" href="?logout=yes"><?php echo $this->_tpl_vars['LOGOUT']; ?>
 (<font style='color:#FFFFFF;font-style:italic'><?php echo $this->_tpl_vars['USER_LOGIN']; ?>
</font>)</a></span></p>
	</div>
</div>
<div id="neo-contentbox">
	<?php if (! empty ( $this->_tpl_vars['idSubMenu2Selected'] )): ?>
		<?php if ($this->_tpl_vars['viewMenuTab'] == 'true'): ?>
	<div id="neo-contentbox-leftcolumn" class="neo-contentbox-leftcolumn-minimized">
		<?php elseif ($this->_tpl_vars['viewMenuTab'] == 'false'): ?>
	<div id="neo-contentbox-leftcolumn">
		<?php else: ?>
	<div id="neo-contentbox-leftcolumn">
		<?php endif; ?>
		<div id="neo-3menubox">  <!-- mostrando contenido del menu tercer nivel -->
			<?php $_from = $this->_tpl_vars['arrSubMenu2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['idSubMenu2'] => $this->_tpl_vars['subMenu2']):
?>
			  <?php if ($this->_tpl_vars['idSubMenu2'] == $this->_tpl_vars['idSubMenu2Selected']): ?>
				<div class="neo-3mtabon"><a href="index.php?menu=<?php echo $this->_tpl_vars['idSubMenu2']; ?>
" style="text-decoration: none;"><?php echo $this->_tpl_vars['subMenu2']['Name']; ?>
</a></div>
			  <?php else: ?>
				<div class="neo-3mtab"><a href="index.php?menu=<?php echo $this->_tpl_vars['idSubMenu2']; ?>
" style="text-decoration: none;"><?php echo $this->_tpl_vars['subMenu2']['Name']; ?>
</a></div>
			  <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
		<div id="neo-historybox">
			<?php echo $this->_tpl_vars['SHORTCUT']; ?>

		</div>
	</div>
		<?php if ($this->_tpl_vars['viewMenuTab'] == 'true'): ?>
	<div id="neo-contentbox-maincolumn" style="width: 1245px;">
		<?php elseif ($this->_tpl_vars['viewMenuTab'] == 'false'): ?>
	<div id="neo-contentbox-maincolumn" style="width: 1025px;">
		<?php else: ?>
	<div id="neo-contentbox-maincolumn" style="width: 1025px;">
		<?php endif; ?>
	    <div class="neo-module-title"><div class="neo-module-name-left"></div><span class="neo-module-name">
	      <?php if ($this->_tpl_vars['icon'] != null): ?>
	      <img src="<?php echo $this->_tpl_vars['icon']; ?>
" width="22" height="22" align="absmiddle" />
	      <?php endif; ?>
	      &nbsp;<?php echo $this->_tpl_vars['title']; ?>
</span><div class="neo-module-name-right"></div>
	      <div class="neo-module-title-buttonstab-right"></div><span class="neo-module-title-buttonstab">
	      <?php if ($this->_tpl_vars['STATUS_STICKY_NOTE'] == 'true'): ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/tab_notes_on.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" class="togglestickynote" style="cursor: pointer;" />
		  <?php else: ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/tab_notes.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" class="togglestickynote" style="cursor: pointer;" />
		  <?php endif; ?>
		  <?php if ($this->_tpl_vars['viewMenuTab'] == 'true'): ?>
	      <img src="images/expandOut.png" width="24" height="24" alt="expand" id="toggleleftcolumn" class="neo-picker" border="0" onclick='saveToggleTab()' title="<?php echo $this->_tpl_vars['SHOW_IZQTAB']; ?>
" />
		  <?php elseif ($this->_tpl_vars['viewMenuTab'] == 'false'): ?>
		   <img src="images/expand.png" width="24" height="24" alt="expand" id="toggleleftcolumn" class="neo-picker" border="0" onclick='saveToggleTab()' title="<?php echo $this->_tpl_vars['HIDE_IZQTAB']; ?>
" />
		  <?php else: ?>
		   <img src="images/expand.png" width="24" height="24" alt="expand" id="toggleleftcolumn" class="neo-picker" border="0" onclick='saveToggleTab()' title="<?php echo $this->_tpl_vars['HIDE_IZQTAB']; ?>
" />
		  <?php endif; ?>
		  <?php if ($this->_tpl_vars['IMG_BOOKMARKS'] == 'bookmark.png'): ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/<?php echo $this->_tpl_vars['IMG_BOOKMARKS']; ?>
" width="24" height="24" alt="bookmark" title="<?php echo $this->_tpl_vars['ADD_BOOKMARK']; ?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
		  <?php else: ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/<?php echo $this->_tpl_vars['IMG_BOOKMARKS']; ?>
" width="24" height="24" alt="bookmark" title="<?php echo $this->_tpl_vars['REMOVE_BOOKMARK']; ?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
		  <?php endif; ?>
	      <a href="javascript:popUp('help/?id_nodo=<?php echo $this->_tpl_vars['idSubMenu2Selected']; ?>
&amp;name_nodo=<?php echo $this->_tpl_vars['nameSubMenu2Selected']; ?>
','1000','460')">
	      <img src="images/icon-help.png" width="24" height="24" alt="help" title="<?php echo $this->_tpl_vars['HELP']; ?>
" class="neo-picker" border="0"/></a></span><div class="neo-module-title-buttonstab-left"></div></div>
	      <div class="neo-module-content">
	<?php else: ?>
	<div id="neo-contentbox-leftcolumn" class="neo-contentbox-leftcolumn-minimized">
		<div id="neo-historybox">
			<?php echo $this->_tpl_vars['SHORTCUT']; ?>

		</div>
	</div>
	<div id="neo-contentbox-maincolumn" style="width: 1245px;">
	    <div class="neo-module-title"><div class="neo-module-name-left"></div><span class="neo-module-name">
	      <?php if ($this->_tpl_vars['icon'] != null): ?>
	      <img src="<?php echo $this->_tpl_vars['icon']; ?>
" width="22" height="22" align="absmiddle" />
	      <?php endif; ?>
	      &nbsp;<?php echo $this->_tpl_vars['title']; ?>
</span><div class="neo-module-name-right"></div>
	      <div class="neo-module-title-buttonstab-right"></div><span class="neo-module-title-buttonstab">
	      <?php if ($this->_tpl_vars['STATUS_STICKY_NOTE'] == 'true'): ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/tab_notes_on.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" style="cursor: pointer;" class="togglestickynote" />
		  <?php else: ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/tab_notes.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" style="cursor: pointer;" class="togglestickynote" />
		  <?php endif; ?>
		  <img src="images/expandOut.png" width="24" height="24" alt="expand" id="toggleleftcolumn" class="neo-picker" border="0"  title="<?php echo $this->_tpl_vars['SHOW_IZQTAB']; ?>
" />
		  <?php if ($this->_tpl_vars['IMG_BOOKMARKS'] == 'bookmark.png'): ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/<?php echo $this->_tpl_vars['IMG_BOOKMARKS']; ?>
" width="24" height="24" alt="bookmark" title="<?php echo $this->_tpl_vars['ADD_BOOKMARK']; ?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
		  <?php else: ?>
		  <img src="themes/<?php echo $this->_tpl_vars['THEMENAME']; ?>
/images/<?php echo $this->_tpl_vars['IMG_BOOKMARKS']; ?>
" width="24" height="24" alt="bookmark" title="<?php echo $this->_tpl_vars['REMOVE_BOOKMARK']; ?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
		  <?php endif; ?>
	      <a href="javascript:popUp('help/?id_nodo=<?php echo $this->_tpl_vars['idSubMenuSelected']; ?>
&amp;name_nodo=<?php echo $this->_tpl_vars['nameSubMenuSelected']; ?>
','1000','460')">
	      <img src="images/icon-help.png" width="24" height="24" alt="help" border="0"/></a></span><div class="neo-module-title-buttonstab-left"></div></div>
	 <div class="neo-module-content">
	<?php endif; ?>


