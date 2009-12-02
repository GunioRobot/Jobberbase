<?php /* Smarty version 2.6.26, created on 2009-12-01 09:49:19
         compiled from password.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="content">
				<h3 class="page-heading">Change your password</h3>
				
				<form id="publish_form" action="<?php echo $_SERVER['REQUEST_URI']; ?>
" method="post">
					<fieldset>
						<table cellspacing="2" cellpadding="2" border="0">
							<?php if ($this->_tpl_vars['error']): ?>
							<tr>
								<td colspan="2">
									<em class="form_error"><?php echo $this->_tpl_vars['error']; ?>
</em>
								</td>
							</tr>
							<?php endif; ?>
							<tr>
								<td>New password:</td>
								<td><input type="password" name="new_password" size="30" /></td>
							</tr>
							<tr>
								<td>Verify password:</td>
								<td><input type="password" name="verify_password" size="30" /></td>
							</tr>
						</table>
					</fieldset>
					<p>
						<button type="submit" class="submit_button">Change password</button>
					</p>
				</form>
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>