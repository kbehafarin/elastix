<?php /* Smarty version 2.6.14, created on 2013-10-22 09:33:32
         compiled from file:/var/www/html/modules/dashboard/themes/default/applet_admin.tpl */ ?>
<div id="div_applet_admin">
    <table width="240" border="0" cellspacing="0" cellpadding="4">
        <tr class="moduleTitle">
            <td class="moduleTitle" valign="middle" colspan='2'>&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['IMG']; ?>
" border="0" align="absmiddle">&nbsp;&nbsp;<?php echo $this->_tpl_vars['title']; ?>
</td>
        </tr>
        <tr class="letra12">
            <td align="right">
                <input class="button" type="submit" name="save_new" value="<?php echo $this->_tpl_vars['SAVE']; ?>
">&nbsp;&nbsp;
                <input class="button" type="button" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
" id="close_applet_admin">
            </td>
        </tr>
    </table>
    <table class="tabForm" style="font-size: 16px;" width="240" border="0">
        <tr class="letra12">
            <td align="left"><b><?php echo $this->_tpl_vars['Applet']; ?>
</b></td>
            <td align="left"><b><?php echo $this->_tpl_vars['Activated']; ?>
</b></td>
        </tr>
        <?php $_from = $this->_tpl_vars['applets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['appletrow'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['appletrow']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['q'] => $this->_tpl_vars['applet']):
        $this->_foreach['appletrow']['iteration']++;
?>
            <tr class="letra12">
                <td align="left">
                    <b><?php echo $this->_tpl_vars['applet']['name']; ?>
:</b>
                </td>
                <td align="center">
                    <input name="chkdau_<?php echo $this->_tpl_vars['applet']['id']; ?>
" type="checkbox" <?php if ($this->_tpl_vars['applet']['activated']): ?> checked="checked" <?php endif; ?>> 
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
</div>
<?php echo '
<script type=\'text/javascript\'>
var statusDivAppletAdmin=\'closed\';
document.getElementById(\'div_applet_admin\').style.display = \'none\';
</script>
'; ?>
