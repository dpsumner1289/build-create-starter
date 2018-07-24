<?php

global $flex_content;

$column = $flex_content['column'];
$container = $flex_content['container_width'];
?>

<div class="two-column-row">
	<div class="container <?php echo $container; ?> flex row vc">
		<?php 
		foreach($column as $col){
			$content_type = $col['content_type'];
			?>
			<div class="item_1_2 <?php echo $content_type; ?>">
			<?php
			if($content_type == 'wysiwyg') {
				$heading = $col['heading'];
				$content = $col['content'];
				if(!empty($heading)){
					echo '<h2>'.strip_tags($heading).'</h2>';
				}
				if(!empty($content)){
					echo '<div class="content">'.$content.'</div>';
				}
			}
			elseif($content_type == 'form') {
				$form = $col['form'];
				if(!empty($form)){
					gravity_form($form['id'], false, false, false, '', true, 1);
				}
			}
			elseif($content_type == 'tabs') {
				$tabs = $col['tabs'];
				if(!empty($tabs)){
					?>
					<div class="tab-section">
					<div class="tab">
						<?php
						$i = 0;
						$default = '';
						foreach($tabs as $tab) {
							$heading = $tab['tab']['heading'];
							if($i = 1){$default = 'id="defaultOpen"';}
							echo '<button class="tablinks" onclick="openTab(event, \''.$heading.'\')" '.$default.' >'.$heading.'</button>';
							$i++;
						}
						?>
					</div> <!-- /.tab -->
					<?php
					foreach($tabs as $tab) {
						$heading = $tab['tab']['heading'];
						$content = $tab['tab']['content'];
					?>
						<div id="<?php echo $heading; ?>" class="tabcontent">
							<?php echo $content; ?>
						</div> <!-- /.tabcontent -->
					<?php
					}?>
					</div> <!-- /.tab-section -->
					<?php
				}
			}
			elseif($content_type == 'testimonial') {
				$testimonial = $col['testimonial'];
				if( $testimonial ): 
					// override $post
					$post = $testimonial;
					$author = get_the_title();
					setup_postdata( $post );
                	$author_company = get_field('author_company');
					echo '<div class="review-content">'.get_the_content().'</div>';
					echo '<div class="review-meta"><div class="title">'.esc_html($author).'</div><div class="company">'.esc_html($author_company).'</div></div>';
					wp_reset_postdata();
    			endif; 
			} elseif($content_type == 'video') {
				$video = $col['video'];
				$video_type = $video['video_type'];
				
				if($video_type == 'oembed') {
					$vid = $video['embed'];
				} elseif($video_type == 'upload') {
					$vid = $video['upload'];
					$vid = '<video src="'.$vid["url"].'">
					Sorry, your browser doesn\'t support embedded videos, but don\'t worry, you can <a href="'.$vid["url"].'" target="_blank">download it</a> and watch it with your favorite video player!
					</video>';
				}
				echo $vid;
			}
			?>
		</div> <!-- /.item_1_2 -->
		<?php
		}
		?>
	</div> <!-- /.container -->
</div> <!-- /.two-column-row -->