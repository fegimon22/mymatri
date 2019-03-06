<?php
 $this->Js->JqueryEngine->jQueryObject = 'jQuery';
// Paginator options
$this->Paginator->options(array(
  'update' => '#resultDiv',
  'evalScripts' => true,
));
?>
<div id="resultDiv"> 

<div id="resultDiv">
<section class="banner_area banner_area2">
            <div class="container">
                <div class="banner_content">
                             <h3 title="<?php echo __('Profiles');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('Profiles');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
		     <?php echo $this->Form->create('Viewprofile', array( 'controller' => 'Viewprofiles', 'action' => 'index'));?>
            <div class="advanced_search">
                <div class="container">
                    <div class="search_inner">
                        <div class="search_item">
                            <h5><?php echo __('I am looking for');?></h5>
			    <?php   echo $this->Form->select('sex',array('Female'=>__('Bride'),'Male'=>__('Groom')),array('class'=>'selectpicker','empty'=>__('All Gender'))); ?>
                        </div>
                        <div class="search_item">
                            <?php   echo $this->Form->select('state_id',$stateName,array('class'=>'selectpicker','empty'=>__('All State'))); ?>
                        </div>
                        <div class="search_item">
                            <?php   echo $this->Form->select('habit_id',$habitName,array('style'=>'','class'=>'selectpicker','empty'=>__('Interest'))); ?>
                        </div>
			<div class="search_item">
                            <?php   echo $this->Form->select('maritialstatus_id',$maritialstatus,array('class'=>'selectpicker','empty'=>__('All Status'))); ?>
			    
                        </div>
			
                        
                        <div class="search_item">
                            <button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('Find Matches');?></button>
                        </div>
                    </div>
                </div>
            </div>
	    <?php echo$this->Form->end();?>
                </div>
		
		
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
                <div class="welcome_title">
                    <h3><?php echo __('Profiles');?></h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
		
		
	    </div>
</section>	    






<div class="grid_3">
  <div class="container"><?php echo $this->Session->flash();?>
      <div class="services">
	     <?php echo $this->Session->flash();?>
   	    <div class="col-sm-12 login_left">
	    <?php echo $this->Session->flash();?>
   
   <div class="services">
   <div class="col-sm-12">
   <div class="col-sm-9">
    <?php if(!$post){?><br/><br/><h3><span class="text-danger"><strong><?php echo __('No Record Found');?> !</strong></span><?php }?>
	   
<?php //echo $this->element('pagination',array('IsSearch'=>'No','IsDropdown'=>'No'));
$page_params = $this->Paginator->params();
$limit = $page_params['limit'];
$page = $page_params['page'];
$serialNo = 1*$limit*($page-1)+1;?>
   
   <?php  foreach ($post as $value):$id=$value['Viewprofile']['id'];
   $age=$value[0]['age'];
   if($age==NULL){
    $age=0;
   }
   //if($value['Viewprofile']['photo'] && $value['Viewprofile']['photo_status']=='Approved' && $viewed==1)
   if($value['Viewprofile']['photo'] && $value['Viewprofile']['photo_status']=='Approved' ){
   
	$memberImg='member_thumb/'.$value['Viewprofile']['photo'];
	$memberImg=$this->CustomFunction->resizedUrl(1,$value['Viewprofile']['photo'],'member_thumb/','member_thumb/',150,150);

   }else{
	$memberImg='User.png';
   }
   ?>
   <br/>
   

	    <div class="profile_top" >
	    <div class="col-sm-12" >
	    <div class="col-sm-3 profile_photo_left">
	    <?php $url=$this->Html->url(array('controller'=>'Viewprofiles'));
	    if($this->Session->check('Member')){
	     echo$this->Html->link($this->Html->image($memberImg,array('class'=>'img-responsive img-thumbnail','alt' => $value['Viewprofile']['name'])),'javascript:void(0);',array('onclick'=>"show_modal('$url/view/$id/$age');",'escape' => false));
	     }else{
	     echo$this->Html->link($this->Html->image($memberImg,array('class'=>'img-responsive img-thumbnail','alt' => $value['Viewprofile']['name'])),array('controller'=>'Users','action'=>'login','Viewprofiles'),array('escape' => false,'title'=>$value['Viewprofile']['name'],'class'=>'religion_1'));
	     }?>
	     <?php if($this->Session->check('Member')){?>
	     <?php echo$this->Function->favouriteMember($value['Viewprofile']['id']);?><br/>
	     <?php echo$this->Function->shortlistMember($value['Viewprofile']['id']);?><br/>
	     <?php }?>
	     </div>
	    <div class="col-sm-9" style="background:white;">
	    	<table class="table_working_hours table table-bordered" style="background-color:white;">
	        	<tbody>
	        		<tr class="opened_1">
				<tr class="opened">
						<td class="day_label1"><h4><?php echo __('Profile ID');?> :</h4></td>
						<td class="day_value"><h5>&nbsp;<?php if($value['Viewprofile']['profileId']){ echo$value['Viewprofile']['profileId'];}else{echo __('Not Specified');}?></h5></td>
					</tr>
				<tr class="opened">
						<td class="day_label1"><h4><?php echo __('Name');?> :</h4></td>
						<td class="day_value"><h5>&nbsp;
						<?php if($viewed==1 || $value['Viewprofile']['id']==$memberId){
									if($value['Viewprofile']['name']){
										echo $value['Viewprofile']['name'];
									}
									else{
										echo __('Not Specified');
									}
							}
							else{
								echo __('xxxxxxxxxx');
								echo'&nbsp;&nbsp;'.$this->Form->button(__('Show Contact'),array('type'=>'button','id'=>'showcontact','class'=>'btn btn-sm'));
							}
							//if($value['Viewprofile']['name']){ echo$value['Viewprofile']['name'];}else{echo __('Not Specified');}?></h5></td>
					</tr>
				
						<td class="day_label1"><h4><?php echo __('Age / Sex / Height');?> :</h4></td>
						<td class="day_value"><h5><?php if($age!=0){echo$age.' '.__('Yrs');}else{echo __('Not Specified');}?> , <?php if($value['Viewprofile']['sex']){echo$value['Viewprofile']['sex'];}else{echo __('Not Specified');}?> , <?php if($value['Height']['name']){echo$value['Height']['name'];}else{echo __('Not Specified');}?></h5></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1"><h4><?php echo __('Religion');?> :</h4></td>
						<td class="day_value"><h5>&nbsp;<?php if($value['Religion']['name']){echo$value['Religion']['name'];}else{echo __('Not Specified');}?></h5></td>
					</tr>
					<tr class="opened">
						<td class="day_label1"><h4><?php echo __('Location');?> :</h4></td>
						<td class="day_value"><h5>&nbsp;<?php 
						if($viewed==1 || $value['Viewprofile']['id']==$memberId){
									if($value['Viewprofile']['city_id']){echo$value['City']['name'];}else{echo __('Not Specified');}?>,&nbsp;<?php if($value['State']['name']){echo$value['State']['name'];}else{echo __('Not Specified');}?>,&nbsp;<?php if($value['Country']['name']){echo$value['Country']['name'];}else{echo __('Not Specified');}
							}
							else{
								echo __('xxxxxxxxxx');
								//echo'&nbsp;&nbsp;'.$this->Form->button(__('Show Contact'),array('type'=>'button','id'=>'showcontact','class'=>'btn btn-sm'));
							}
						
						?></h5></td>
					</tr>
					<tr class="opened">
						<td class="day_label1"><h4><?php echo __('Last Login');?> :</h4></td>
						<td class="day_value"><h5>&nbsp;<?php if($value['Viewprofile']['last_login']){echo$this->Time->format($dtFormat,$value['Viewprofile']['last_login']);}else{echo __('Not specified');}?></h5></td>
					</tr>
					
					<tr class="opened">
						<td class="day_label1" colspan="2">
						 <?php if($this->Session->check('Member'))
			    echo$this->Html->link('View Profile','javascript:void(0);',array('onclick'=>"show_modal('$url/view/$id/$age');",'class'=>'register_angkar_btn','escape' => false));
			    else
			    echo$this->Html->link('View Profile',array('controller'=>'Users','action'=>'login','Viewprofiles'),array('class'=>'register_angkar_btn','escape' => false,'title'=>$value['Viewprofile']['name']));?>
						</td>
						
					</tr>
			    </tbody>
		   </table>
		   
			   
		</div>
	    </div>
	    </div>
		<?php endforeach; ?>
		<?php unset($value); ?>	   
	    </div>
	    
	    <div class="col-sm-3"><br/>
	    <h3 class="text-danger"><?php echo __('Featured Profile');?></h3>
	    <ul id="">
	<?php  foreach($featured as $value):$id=$value['Member']['id'];
	if($value['Member']['photo'] && $value['Member']['photo_status']=='Approved')
	$memberImg='member_thumb/'.$value['Member']['photo'];
	else
	$memberImg='User.png';
	$age=$value[0]['age'];
	$url=$this->Html->url(array('controller'=>'Viewprofiles','action'=>'view',$id,$age));
	
	?>
	     <li>
	     <div class="featured_text">
	     <?php $url=$this->Html->url(array('controller'=>'Viewprofiles'));
	    if($this->Session->check('Member')){
	     echo$this->Html->link($this->Html->image($memberImg,array('class'=>'img-responsive img-thumbnail','alt' => $value['Member']['name'])),'javascript:void(0);',array('onclick'=>"show_modal('$url/view/$id/$age');",'escape' => false));
	     }else{
	     echo$this->Html->link($this->Html->image($memberImg,array('class'=>'img-responsive img-thumbnail','alt' => $value['Member']['name'])),array('controller'=>'Users','action'=>'login','Viewprofiles'),array('escape' => false,'title'=>$value['Member']['name'],'class'=>'religion_1'));
	     }?>
             <div><strong class="text-danger"><?php echo __('Profile ID');?> : <?php echo $value['Member']['profileId'];?></strong></div>
	     <div><strong class="text-info"><?php echo $value['Member']['name'];?></strong></div>
	     <div class="">
                <div class=""><?php if($age!=0){echo$age.' '.__('Yrs');}else{echo __('Not Specified');}?> , <?php if($value['Member']['sex']){echo$value['Member']['sex'];}else{echo __('Not Specified');}?></div>
             </div>
             <div><?php if($value['City']['name']){echo$value['City']['name'];}else{echo __('Not Specified');}?>,&nbsp;<?php if($value['State']['name']){echo$value['State']['name'];}else{echo __('Not Specified');}?>,&nbsp;<?php if($value['Country']['name']){echo$value['Country']['name'];}else{echo __('Not Specified');}?></div>
	     </div>
          </li>
	  <div class="clearfix"><br></div>
	  
		<?php endforeach;unset($value);?> 
	    </ul>
	    
	   </div>
    </div>
   
   
<?php echo $this->element('pagination',array('IsSearch'=>'No','IsDropdown'=>'No'));?>
</div>
</div></div></div>
	    
				</div>
				<div class="clear"> </div>
			</div>		  
	  </div>
  </div>
</div>

