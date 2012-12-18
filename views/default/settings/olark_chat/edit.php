<?php
	/**
         * Olark Chat for Elgg
         * 
         * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
         * @author Tingxi Tan <txtan@redmelonconsulting.com>
         * @link http://redmelonconsulting.com
         */

	$body = elgg_echo("olark_chat:settings:uid")." (<a target='_blank' href='http://www.olark.com/?rid=mehatem'>Click here to obtain a key</a>)";
	$body .= "<br/>";
	$body .= elgg_view('input/text',array('internalname'=>'params[uid]','value'=>get_plugin_setting('uid','olark_chat')));
	echo $body;

?>
