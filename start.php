<?php

	/**
	 * Olark Chat for Elgg
	 * 
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Tingxi Tan <txtan@redmelonconsulting.com>
	 * @link http://redmelonconsulting.com
	 */
	
		function olark_chat_init() {
			extend_view('page_elements/footer', 'olark_chat/chat');
		}
		
		register_elgg_event_handler('init','system','olark_chat_init');
        
?>
