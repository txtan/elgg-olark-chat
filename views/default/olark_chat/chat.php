<?php

	/*
	 * Olark Chat for Elgg
	 * @author Tingxi Tan
	 * @link http://redmelonconsulting.com/
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * 
	 */
	 
	//check for uid
	if($uid = get_plugin_setting('uid','olark_chat')){

?>

<!-- Begin Olark Chat --><script type="text/javascript">(function(){document.write(unescape('%3Cscript src=%27' + (document.location.protocol == 'https:' ? "https:" : "http:") + '//static.olark.com/js/wc.js%27 type=%27text/javascript%27%3E%3C/script%3E'));})();</script><div id="olark-data"><a class="olark-key" id="<?php echo $uid;?>" title="Powered by Olark" href="http://olark.com/?rid=mehatem" rel="nofollow">Powered by Olark</a></div> <script type="text/javascript"> wc_init();</script><!-- /End Olark Chat -->
<!-- insert an analytics view to be extended -->
<?php }else{

	register_error('Please enter a valid Olark Chat key');
}
?>
