<?php
/*
	Section: Comments
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: Adds comments to main on pages/single posts
	Class Name: PageLinesComments
	Tags: internal
	Workswith, main
	failswith: pagelines_special_pages()
*/

class PageLinesComments extends PageLinesSection {

	function section_styles() {  
		wp_enqueue_script( 'comment-reply' );
	} 

	function section_template() { 
		
		// Important! Comments.php must be in theme root to work properly. Also 'comments_template() function must be used. Its a wordpress thing.

		global $post;
		comments_template();
		
	}

}

/*
	End of section class
*/