<?php /* Smarty version 2.6.26, created on 2009-12-01 09:07:31
         compiled from posts-loop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'posts-loop.tpl', 22, false),)), $this); ?>
<?php if ($this->_tpl_vars['is_home'] == 1): ?>
<div><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&laquo; home</a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['no_categ'] != 1): ?>
<table id="job-posts" class="job-posts" cellspacing="0">
<?php if ($this->_tpl_vars['keywords']): ?>
	<tr><td colspan="3" class="search_results_label">
		Search results for <strong><?php echo $this->_tpl_vars['keywords']; ?>
</strong>:
	</td></tr>
<?php endif; ?>
<?php if (! $this->_tpl_vars['jobs']): ?>
<div id="no-ads">
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] != 'search'): ?>
	No jobs, yet.<br />
	<?php else: ?>
	No jobs were found.<br />
	<?php endif; ?>
</div><!-- #no-ads -->
<?php endif; ?>
<?php $_from = $this->_tpl_vars['jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tmp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tmp']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['job']):
        $this->_foreach['tmp']['iteration']++;
?>

	<tr id="item<?php echo $this->_tpl_vars['job']['id']; ?>
" <?php echo smarty_function_cycle(array('values' => 'class="alt",'), $this);?>
>
		<td>
			<img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-<?php echo $this->_tpl_vars['job']['type_var_name']; ?>
.png" alt="<?php echo $this->_tpl_vars['job']['type_name']; ?>
" />
			<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a> <span class="la">at</span> <?php echo $this->_tpl_vars['job']['company']; ?>
<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?>, <?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?> <span class="la">in</span> <?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?>
			<div style="font-size: 12px; margin-top: 5px;">viewed <?php echo $this->_tpl_vars['job']['views_count']; ?>
 times<?php if ($this->_tpl_vars['statisticalData'][$this->_tpl_vars['job']['id']]): ?>, <?php echo $this->_tpl_vars['statisticalData'][$this->_tpl_vars['job']['id']]['numberOfApplications']; ?>
 applicants, last application on <?php echo $this->_tpl_vars['statisticalData'][$this->_tpl_vars['job']['id']]['lastApplicationOn']; ?>
<?php endif; ?></div>
		</td>
		<td class="time-posted"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/clock.gif" alt="" /> <?php echo $this->_tpl_vars['job']['created_on']; ?>
</td>
		<td style="font-size: 11px;">
			<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
edit-post/<?php echo $this->_tpl_vars['job']['id']; ?>
/" title="edit"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon_edit.gif" alt="edit" /></a>
			 <?php if ($this->_tpl_vars['job']['is_spotlight'] == 0): ?>
		        <a id="activateSpotlight<?php echo $this->_tpl_vars['job']['id']; ?>
" href="javascript:void(0);" onclick="Jobber.SpotlightActivate('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
activate-spotlight/', <?php echo $this->_tpl_vars['job']['id']; ?>
, <?php if ($this->_tpl_vars['CURRENT_PAGE'] == ''): ?>1<?php else: ?>0<?php endif; ?>);" title="activate-spotlight"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon_spotlight_activate.gif" alt="activate" /></a>
		    <?php else: ?>
		        <a id="deactivateSpotlight<?php echo $this->_tpl_vars['job']['id']; ?>
" href="javascript:void(0);" onclick="Jobber.SpotlightDeactivate('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
deactivate-spotlight/', <?php echo $this->_tpl_vars['job']['id']; ?>
);" title="deactivate-spotlight"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon_spotlight_deactivate.gif" alt="deactivate" /></a>
		    <?php endif; ?>&nbsp;
			<?php if ($this->_tpl_vars['job']['is_active'] == 0): ?>
				<a id="activateLink<?php echo $this->_tpl_vars['job']['id']; ?>
" href="javascript:void(0);" onclick="Jobber.Activate('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
activate/', <?php echo $this->_tpl_vars['job']['id']; ?>
, <?php if ($this->_tpl_vars['CURRENT_PAGE'] == ''): ?>1<?php else: ?>0<?php endif; ?>);" title="activate"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon_accept.gif" alt="activate" /></a>
			<?php else: ?>
				<a id="deactivateLink<?php echo $this->_tpl_vars['job']['id']; ?>
" href="javascript:void(0);" onclick="Jobber.Deactivate('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
deactivate/', <?php echo $this->_tpl_vars['job']['id']; ?>
);" title="deactivate"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon_deactivate.gif" alt="deactivate" /></a>
			<?php endif; ?>&nbsp;
			<a href="javascript:void(0);" onclick="Jobber.Delete('<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
delete/', <?php echo $this->_tpl_vars['job']['id']; ?>
);" title="delete"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="delete" /></a>
		</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<br/>
<?php echo $this->_tpl_vars['pages']; ?>

<?php endif; ?>