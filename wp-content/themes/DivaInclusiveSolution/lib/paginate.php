<?php
	
function paginatorNews($query)
{
	$content = '';
	$big = 999999999;
	if ($query->max_num_pages < 1)
		$content .= '';
		$content.= paginate_links(array(
			'base'		=>	str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'	=>	'?paged=%#%',
			'current'	=>	max(1, get_query_var('paged')),
			'type'		=>	'list',
			'prev_next'	=>	true,
			'prev_text'	=>	__('<svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32"><path id="Previous" data-name="Previous" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(117.84 17.76) rotate(-90)" fill="#253825"/></svg>'),
			'next_text'	=>	__('<svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="40.32" viewBox="0 0 16.56 40.32"><path id="Next" data-name="Next" d="M-22.56-102.84q3.84-2.4,7.44-5.04,3.12-2.16,6.6-4.8a71.157,71.157,0,0,0,6.12-5.16,71.158,71.158,0,0,0,6.12,5.16q3.48,2.64,6.6,4.8,3.6,2.64,7.44,5.04l-.96,1.56-19.2-9.6-19.2,9.6Z" transform="translate(-101.28 22.56) rotate(90)" fill="#253825"/></svg>'),
			'add_args' => array('class' => 'pagination pagination-journal'),
			'total'		=>	$query->max_num_pages
		));
	$content = str_replace( "<ul class='page-numbers'>", '<ul class="pagination pagination-journal">', $content );
	return $content;
}