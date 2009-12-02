<?php /* Smarty version 2.6.26, created on 2009-12-01 09:44:51
         compiled from cities.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'cities.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div id="content">
			<h3 class="page-heading">Cities</h3>
			<table id="job-posts" cellspacing="0">
				<?php if (count($this->_tpl_vars['cities']) > 50): ?>
					<p>
						<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/prepare-add/" title="Add new city"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/add.png" alt="Add new city" /> Add new city</a>
					</p>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city']):
?>
				<tr id="item<?php echo $this->_tpl_vars['city']['id']; ?>
">
					<td>
						<?php echo $this->_tpl_vars['city']['name']; ?>
 (<?php echo $this->_tpl_vars['city']['ascii_name']; ?>
)
					</td>
					<td width="200">
						<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/prepare-edit/<?php echo $this->_tpl_vars['city']['id']; ?>
/" title="Edit"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/page_white_edit.png" alt="Edit" /> Edit</a>
						<a href="javascript:void(0);" title="Delete" onclick="jobberBase.deleteCity('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/delete/', <?php echo $this->_tpl_vars['city']['id']; ?>
)"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="Edit" /> Delete</a>
					</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<p>
				<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/prepare-add/" title="Add new city"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/add.png" alt="Add new city" /> Add new city</a>
			</p>
	</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>