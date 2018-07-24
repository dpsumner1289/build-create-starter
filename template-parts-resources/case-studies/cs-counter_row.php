<?php
global $case_study;

$count_figure = $case_study['count_figure'];
?>
<section class="counter_row counter_row_2">
    <div class="container container-md">
        <div class="flex row num vc">
            <?php
            foreach($count_figure as $figure):
                $output = '';
                $number = $figure['number'];
                $preceding_icon = $figure['preceding_icon'];
                $caption = $figure['caption'];

                if($preceding_icon == 'fontawesome') {
                    $icon = $figure['fa_icon'];
                }elseif($preceding_icon == 'texticon') {
                    $icon = $figure['text_icon'];
                }else{
                    $icon = '';
                }

                $output .= '<div class="figure item_1_3">';
				$output .= '<div class="fig_cont">';
				if(!empty($number)): $output .= '<figure class="count">'.$number.'</figure>'.$icon; endif;
				if(!empty($caption)): $output .= '<small>'.$caption.'</small>'; endif;
				$output .= '</div>';
                $output .= '</div>';
                
                echo $output;
            endforeach;
            ?>
        </div>
    </div>
</section>