<?php /* Smarty version 2.6.26, created on 2009-12-01 09:07:14
         compiled from footer.tpl */ ?>
	</div><!-- #container -->
	<div class="footer">
	</div><!-- .footer -->
	<?php echo '
	<script type="text/javascript">
		//<![CDATA[
		Jobber.jobber_admin_url = "'; ?>
<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo '";
		Jobber.FixPng();
		//]]>
	</script>
	'; ?>

	<div id="overlay"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
img/ajax-loader.gif" /></div>
	<div id="messagesContainer"></div>
</body>
</html>