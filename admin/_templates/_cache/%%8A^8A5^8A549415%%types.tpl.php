<?php /* Smarty version 2.6.26, created on 2009-12-01 09:45:15
         compiled from types.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="content">
				<h3 class="page-heading">Job Types</h3>
				<div id="typesContainer">
				<strong>Note:</strong> Var name must not contain spaces or other special chars.<br />
				The icon is named icon_varname.png and has to be uploaded in the  
				'img' subdirectory situated in your themes directory under '_templates' folder.<br />
				<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<div class="typeItem" rel="<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]->getId(); ?>
">
						<div class="typeHandle"></div>
						<div class="typeWrapper">
							<a href="#" title="Delete" class="deleteType"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/icon-delete.png" alt="Edit" /> Delete</a>
							<label><span>Name:</span><input type="text" size="60" name="name[<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]->getId(); ?>
]" value="<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]->getName(); ?>
" /></label>
							<a href="#" title="Save" class="saveType"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/disk.png" alt="Save" /> Save</a>
							<label><span>Var name:</span><input type="text" size="60" id="nr" name="var_name[<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]->getId(); ?>
]" value="<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]->getVarName(); ?>
" /></label>
							<div class="clear"></div>
						</div>
					</div>
				<?php endfor; endif; ?>
				</div>
				<p></p>
				<p>
					<a href="#" title="Add new type"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/add.png" alt="Add new job type" /> Add new job type</a></p>
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>