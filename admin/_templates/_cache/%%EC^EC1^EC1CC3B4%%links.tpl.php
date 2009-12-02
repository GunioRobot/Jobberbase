<?php /* Smarty version 2.6.26, created on 2009-12-01 09:49:13
         compiled from links.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="content">
				<?php if ($this->_tpl_vars['links'] == ''): ?>
					<h3 class="page-heading">Navigation Links</h3>
					<div class="category_box">
						<span class="category_name"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/primary'>Primary Menu &raquo;</a></span>
						<span class="category_description"><br/>The primary menu for your Jobberbase theme. By default this menu is located at the top.</span>
					</div>
					<div class="category_box">
						<span class="category_name"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/secondary'>Secondary Menu &raquo;</a></span>
						<span class="category_description"><br/>The secondary menu for your Jobberbase theme. By default this menu is located in the sidebar.</span>
					</div>
					<br />
					<div class="category_box">
						<span class="category_name"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer1'>Footer Column 1 &raquo;</a></span>
						<span class="category_description"><br/>The default footer holds 3 columns with links.</span>
					</div>
					<div class="category_box">
						<span class="category_name"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer2'>Footer Column 2 &raquo;</a></span>
						<span class="category_description"><br/>The default footer holds 3 columns with links.</span>
					</div>
					<div class="category_box">
						<span class="category_name"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer3'>Footer Column 3 &raquo;</a></span>
						<span class="category_description"><br/>The default footer holds 3 columns with links.</span>
					</div>
				<?php else: ?>
					<h3 class="page-heading"><?php echo $this->_tpl_vars['menu_name']; ?>
<span class="back_to_overview"><a href='<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links' title='Back to overview'>&laquo; Back to overview</a></span></h3>
					<div id="linksContainer">
					<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
						<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
							<div class="linkItem" rel="<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['id']; ?>
">
								<div class="linkHandle"></div>
								<div class="linkWrapper">
									<a href="#" title="Delete" class="deleteLink"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="Edit" /> Delete</a>
									<label><span>Name:</span><input type="text" size="60" name="name<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['name']; ?>
" /></label>
									<a href="#" title="Save" class="saveLink" style="display: none;"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/disk.png" alt="Save" /> Save</a>
									<label><span>Url:</span><input type="text" size="60" name="url<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['url']; ?>
" /></label>
									<label><span>Title:</span><input type="text" size="60" name="title<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['menu'][$this->_sections['tmp']['index']]['title']; ?>
" /></label>
									</label>
									<div class="clear"></div>
								</div>
							</div>
						<?php endfor; endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<p></p>
				<p><a href="#" title="Add new link"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/add.png" alt="Add new link" /> Add new link</a></p>
				<?php endif; ?>
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>