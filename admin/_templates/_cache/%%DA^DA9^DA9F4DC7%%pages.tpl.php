<?php /* Smarty version 2.6.26, created on 2009-12-01 09:45:08
         compiled from pages.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="content">
				<h3 class="page-heading">Pages</h3>
				<table id="job-posts" class="job-posts" cellspacing="0">
					<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
					<tr>
						<td>
							<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['page']['url']; ?>
/" target="_blank"><?php echo $this->_tpl_vars['page']['title']; ?>
</a> - <?php echo $this->_tpl_vars['page']['page_title']; ?>

						</td>
						<td width="200">
							<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
pages/edit/<?php echo $this->_tpl_vars['page']['url']; ?>
/" title="Edit"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/page_white_edit.png" alt="Edit" /> Edit</a>
							<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
pages/delete/<?php echo $this->_tpl_vars['page']['url']; ?>
/" title="Delete" onclick="if(!confirm('Are you sure you want to delete this page?'))return false;"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="Edit" /> Delete</a>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<p></p>
				<p>
					<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
pages/add/" title="Add new page"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/page_white_add.png" alt="Add new page" /> Add new page</a>
				</p>
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>