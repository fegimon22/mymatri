<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo h($linkName1);?><?php echo h($linkName2);?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo h($linkName1);?> <span><?php echo h($linkName2);?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
                <div class="welcome_title">
                    <h3><?php echo h($linkName1);?> <span><?php echo h($linkName2);?></h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
		<div class="height_item">
		<?php echo str_replace("<script","",$contentPost['Content']['main_content']);?>
		</div>
	    </div>
</section>	    
	    

