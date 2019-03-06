<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('My Favourite');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('My Favourite');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>


<div class="grid_3">
  <div class="container">
   <?php echo $this->Session->flash();?>
   <div class="col-sm-12">
    <?php echo $this->element('menunavigation');?>
    <div class="col-sm-9">
   <?php
               $url=$this->Html->url(array('controller'=>'Viewprofiles'));
                echo $this->element('pagination',array('IsSearch'=>'No','IsDropdown'=>'No'));
		$page_params = $this->Paginator->params();
		$limit = $page_params['limit'];
		$page = $page_params['page'];
		$serial_no = 1*$limit*($page-1)+1;?>
	
   <div class="services">
   			<table class="table table-striped table-bordered">
			      <tr>
				  <th><?php echo __('Photo');?></th>
				  <th><?php echo __('Profile ID');?></th>
				  <th><?php echo __('Name');?></th>
				   <th><?php echo __('Age');?></th>
				  <th><?php echo __('Location');?></th>
				  <th><?php echo __('Action');?></th>
			      </tr>			      
			      <?php  foreach($post as $value):
			      $id=$value['Member']['id'];
			      $age=$value[0]['age'];
			      if($value['Member']['photo'])
			      $memberImg='member_thumb/'.$value['Member']['photo'];
			      else
			      $memberImg='User.png';?>
			      <tr>
				  <td><?php echo$this->Html->link($this->Html->image($memberImg,array('class'=>'img-circle responsive','height'=>50,'alt' => $value['Member']['name'])),'javascript:void(0);',array('onclick'=>"show_modal('$url/view/$id/$age');",'escape' => false));?></td>
				  <td><?php echo$value['Member']['profileId'];?></td>
				  <td><?php echo$value['Member']['name'];?></td>
				   <td><?php if($age!=0){echo$age.' '.__('Yrs');}else{echo __('Not Specified');}?></td>
				  <td><?php if($value['City']['name']){echo$value['City']['name'];}else{echo'Not Specified';}?>,&nbsp;<?php if($value['State']['name']){echo$value['State']['name'];}else{echo __('Not Specified');}?>,&nbsp;<?php if($value['Country']['name']){echo$value['Country']['name'];}else{echo __('Not Specified');}?></td>
				  <td><?php echo$this->Html->link('View','javascript:void(0);',array('onclick'=>"show_modal('$url/view/$id/$age');",'class'=>'vertical','escape' => false));?></td>
			      </tr>
			      <?php endforeach;?>
			      <?php unset($post);?>
			  </table>
   </div>
<div class="clearfix"> </div>
    </div>
</div>
  </div>
</div>