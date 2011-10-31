<?php /* Smarty version 2.6.26, created on 2009-12-01 09:07:14
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form id="publish_form" method="post" action="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
">
<fieldset>
<legend>Login</legend>
<table border="0" cellspacing="2" cellpadding="2">
	<?php if ($this->_tpl_vars['errors']['incorrect']): ?><tr><td colspan="3"><span class="validation-error"><img
			src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="" /><?php echo $this->_tpl_vars['errors']['incorrect']; ?>
</span></td>
		</tr>
	<?php endif; ?>
	<tr>
		<td class="publish-label">Username:</td>
		<td><input <?php if ($this->_tpl_vars['errors']['username']): ?>class="error" <?php endif; ?> tabindex="1"
			type="text" name="username" id="username" size="40"
			value="<?php echo $_POST['username']; ?>
" />
		<span class="validation-error"><?php if ($this->_tpl_vars['errors']['username']): ?><img
			src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="" /><?php endif; ?></span></td>
	</tr>
	<tr>
		<td class="publish-label">Password:</td>
		<td><input <?php if ($this->_tpl_vars['errors']['password']): ?>class="error" <?php endif; ?> tabindex="2"
			type="password" name="password" id="password" size="40"
			value="" />
		<span class="validation-error"><?php if ($this->_tpl_vars['errors']['password']): ?><img
			src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="" /><?php endif; ?></span></td>
	</tr>


</table>
</fieldset>
<fieldset><input type="submit" name="submit" id="submit"
	value="Login" /></fieldset>
	<fieldset class="hidden">
		<input type="hidden" name="action" value="login" />

	</fieldset>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>