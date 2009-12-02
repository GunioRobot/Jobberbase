<?php /* Smarty version 2.6.26, created on 2009-12-01 09:45:11
         compiled from stats.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<h3 class="page-heading">Stats</h3>
			<div id="accordion-list">
				<h3><?php echo $this->_tpl_vars['translations']['stats']['last_50_posts']; ?>
:</h3> 
				<ul> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['total']; ?>
: <?php echo $this->_tpl_vars['applications']['count']; ?>
</li> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['average']; ?>
 / <?php echo $this->_tpl_vars['translations']['stats']['last_7_days']; ?>
: <?php echo $this->_tpl_vars['applications']['avg']; ?>
</li> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['maximum']; ?>
 / <?php echo $this->_tpl_vars['translations']['stats']['last_7_days']; ?>
: <?php echo $this->_tpl_vars['applications']['max']; ?>
</li> 
				</ul>
				<br />
				<?php echo $this->_tpl_vars['applications']['stats']; ?>

				<h3><?php echo $this->_tpl_vars['translations']['stats']['last_50_searches']; ?>
:</h3>
				<ul> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['total']; ?>
: <?php echo $this->_tpl_vars['keywordz']['count']; ?>
</li> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['average']; ?>
 / <?php echo $this->_tpl_vars['translations']['stats']['last_7_days']; ?>
: <?php echo $this->_tpl_vars['keywordz']['avg']; ?>
</li> 
					<li><?php echo $this->_tpl_vars['translations']['stats']['maximum']; ?>
 / <?php echo $this->_tpl_vars['translations']['stats']['last_7_days']; ?>
: <?php echo $this->_tpl_vars['keywordz']['max']; ?>
</li> 
				</ul>
				<br />
				<?php echo $this->_tpl_vars['keywordz']['stats']; ?>

			</div>
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>