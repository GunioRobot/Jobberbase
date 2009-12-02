<?php /* Smarty version 2.6.26, created on 2009-12-01 09:07:14
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php echo $this->_tpl_vars['html_title']; ?>
</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
	<meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" />
	<meta name="author" content="Filip Cherecheş-Toşa (http://www.filipcte.ro)" />
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
favicon.ico" type="image/x-icon" />
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] == '' || $this->_tpl_vars['CURRENT_PAGE'] != 'jobs'): ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/all/" />
	<?php else: ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/<?php echo $this->_tpl_vars['current_category']; ?>
/" />
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
css/screen.css" type="text/css" media="screen" />
	<?php if ($this->_tpl_vars['editor']): ?>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<?php endif; ?>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/functions.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/main.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/overlay.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/messages.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.validate.min.js" type="text/javascript"></script>
	<?php $_from = $this->_tpl_vars['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
js/<?php echo $this->_tpl_vars['j']; ?>
.js" type="text/javascript"></script>
	<?php endforeach; endif; unset($_from); ?>
	<script type="text/javascript">
		Jobber.I18n = <?php echo $this->_tpl_vars['translationsJson']; ?>
;
	</script>
</head>

<body>
	<div id="container">
		<?php if ($_SESSION['status'] != ''): ?>
			<div id="status">
				<?php echo $_SESSION['status']; ?>

			</div><!-- #status -->
		<?php endif; ?>
		<div id="header">
			<div>
				<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&laquo; back to site</a>
				<?php if ($_SESSION['AdminId']): ?>
					<span class="version">v <?php echo @JOBBERBASE_VERSION; ?>
</span>
				<?php endif; ?>
			</div>
			<h1 id="logo"><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
home/" title="IT jobs">jobber</a></h1>
			<?php if ($this->_tpl_vars['isAuthenticated'] == 1): ?>
			<ul>
				<li <?php if ($this->_tpl_vars['current_category'] == 'edit-post'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
edit-post/">Post a job</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'pages'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
pages/">Pages</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'categories'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
categories/">Categories</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'stats'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
stats/">Stats</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'cities'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/list/">Cities</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'types'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
types/">Job types</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'links'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/">Links</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'settings'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
settings/">Settings</a></li>
				<li <?php if ($this->_tpl_vars['current_category'] == 'password'): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
password/">Change your password</a></li>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
logout/">Logout &raquo;</a></li>
			</ul>
			<?php endif; ?>
		</div><!-- #header -->
		
    <div id="categs-nav">
    	<?php if ($this->_tpl_vars['isAuthenticated'] == 1): ?>
     		 <ul>
				<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
       		<li id="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
" <?php if ($this->_tpl_vars['current_category'] == $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/" title="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
"><span><?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
</span><span class="cnr">&nbsp;</span></a></li>
				<?php endfor; endif; ?>
    		 </ul>
    	<?php endif; ?>
		</div><!-- #categs-nav -->
		<div class="clear"></div>