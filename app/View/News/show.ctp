<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('News & Events');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('News & Events');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
	    <div class="col-sm-8">
        <?php echo $this->Session->flash();?>
            <div><strong><?php echo h($newsPost['News']['news_title']);?></strong></div><br/>
			<div><?php echo str_replace("<script","",($newsPost['News']['news_desc']));?></div>        
    </div>
    <div class="col-sm-4">
      <h4><?php echo __('News & Events');?></h4><i class="fa fa-style1 fa fa-bullhorn"></i>
	        
		<marquee align="top" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" height="218">
				    <ul>				
					<?php foreach($news as $value):$id=$value['News']['page_url'];?>
					<li><?php echo$this->Html->link($value['News']['news_title'],array('controller'=>'News','action'=>'show',$id));?></li>
					<?php endforeach;unset($value);?>				  
				  </ul>
		</marquee>
    </div>
	    </div>
</section>	    
