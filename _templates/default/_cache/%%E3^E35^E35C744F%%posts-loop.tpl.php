<?php /* Smarty version 2.6.26, created on 2009-12-01 09:03:58
         compiled from posts-loop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'posts-loop.tpl', 21, false),)), $this); ?>
<?php if ($this->_tpl_vars['is_home'] == 1): ?>
<div><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&laquo; home</a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['no_categ'] != 1): ?>
<?php if ($this->_tpl_vars['keywords']): ?>
		Search results for <strong><?php echo $this->_tpl_vars['keywords']; ?>
</strong>:
<?php endif; ?>
<?php if (! $this->_tpl_vars['jobs']): ?>
<div id="no-ads">
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] != 'search'): ?>
	<?php echo $this->_tpl_vars['translations']['jobs']['no_job']; ?>
 <strong><?php echo $this->_tpl_vars['current_category_name']; ?>
</strong>.
	<?php if (@ENABLE_NEW_JOBS): ?>
		<br /><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" title="<?php echo $this->_tpl_vars['translations']['footer']['new_job_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['new_job']; ?>
</a>
	<?php endif; ?>
	<?php else: ?>
	<?php echo $this->_tpl_vars['translations']['jobs']['no_job_found']; ?>
<br />
	<?php endif; ?>
</div><!-- #no-ads -->
<?php endif; ?>
<?php $_from = $this->_tpl_vars['jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
	<div class="<?php echo smarty_function_cycle(array('values' => 'row,row-alt'), $this);?>
">
		<span class="row-info">
			<img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/icon-<?php echo $this->_tpl_vars['job']['type_var_name']; ?>
.png" alt="<?php echo $this->_tpl_vars['job']['type_name']; ?>
" />
			<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a> <span class="la"><?php echo $this->_tpl_vars['translations']['homepage']['at']; ?>
</span> <?php echo $this->_tpl_vars['job']['company']; ?>
<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?>, <?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?> <span class="la"><?php echo $this->_tpl_vars['translations']['homepage']['in']; ?>
</span> <?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?>
		</span>
		<span class="time-posted"><img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/clock.gif" alt="" /> <?php echo $this->_tpl_vars['job']['created_on']; ?>
</span>			
	</div>
<?php endforeach; endif; unset($_from); ?>
<br/>
<?php echo $this->_tpl_vars['pages']; ?>

<?php endif; ?>