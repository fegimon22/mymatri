<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo$name;?> <?php echo __('Edit Detail Profile');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo$name;?> <span><?php echo __('Edit Basic Profile');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){        
       // $('#birth_time').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'HH:mm A'});
});
</script>

<section class="advanced_search_area search_area2">
<div class="container">
<div class="welcome_title">
                    <h3><?php echo __('Edit Basic Profile');?></h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
<div class="col-sm-12">	
<?php   if($this->Session->check('Member')){?>
   
   <?php echo $this->element('menunavigation');?>
   
  <?php }?>
  <div class="col-md-9 search_left">
	<div class="panel panel-custom mrg">
        <div class="panel-heading"><?php echo __('Basic Information');?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>

		<div class="panel">
                <div class="panel-body">
                <?php echo $this->Form->create('Profile', array( 'controller' => 'Profiles', 'action' => 'editProfile','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
                     <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Body Type');?></small></label>
    <div class="col-sm-8">
       <?php $bodyType=array('Slim'=>__('Slim'),'Average'=>__('Average'),'Athletic'=>__('Athletic'),'Heavy'=>__('Heavy')); echo $this->Form->select('body_type',$bodyType,array('class'=>'form-control','empty'=>__('Select')));   ?>
   </div>
</div>
</div>

<div class="panel-heading"><?php echo __('Lifestyle Info');?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Eating Habit ');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->select('habit_id',$habitName,array('class'=>'form-control','empty'=>__('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-heading"><?php echo __('Religion Information');?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Raasi');?></small></label>
    <div class="col-sm-8">
    <?php  echo $this->Form->select('rashy_id',$rashiName,array('class'=>'form-control','empty'=>__('Select')));   ?>
   </div>
</div>
</div>
<!--<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Time of Birth');?></small></label>
    <div class="col-sm-8">
    <div class="input-group date" id="birth_time">
	<?php //echo $this->Form->input('birth_time',array('type'=>'text','label' => false,'class'=>'form-control','div'=>false));?>
	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	</div>
   </div>
</div>
</div>-->

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Place of Birth');?></small></label>
    <div class="col-sm-8">
    <?php  echo $this->Form->input('birth_place',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>__('Birth Place')));   ?>
   </div>
</div>
</div>

<div class="panel-heading"><?php echo __('Family Information');?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Father Status');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->input('father_occupation',array('type'=>'text','label' => false,'class'=>'form-control','placeholder'=>__('Father Occupation'),'div'=>false));?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Status');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->input('mother_occupation',array('type'=>'text','label' => false,'class'=>'form-control','placeholder'=>__('Mother Occupation'),'div'=>false));?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Brothers');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->input('no_of_brother',array('label' => false,'class'=>'form-control','placeholder'=>__('No Of Brother'),'div'=>false));?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sisters');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->input('no_of_sister',array('label' => false,'class'=>'form-control','placeholder'=>__('No Of Sister'),'div'=>false));?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Value');?></small></label>
    <div class="col-sm-8">
    <?php
						$familyValue=array('Orthodox'=>__('Orthodox'),'Traditional'=>__('Traditional'),'Moderate'=>__('Moderate'),'Liberal'=>__('Liberal'));
						echo $this->Form->select('family_value',$familyValue,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Type');?></small></label>
    <div class="col-sm-8">
    <?php
						$familyType=array('Joint'=>__('Joint'),'Nuclear'=>__('Nuclear'),'Other'=>__('Other'));
						echo $this->Form->select('family_type',$familyType,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Status');?></small></label>
    <div class="col-sm-8">
    <?php
						$familyStatus=array('Lower Class'=>__('Lower Class'),'Middle Class'=>__('Middle Class'),'Upper Middle Class'=>__('Upper Middle Class'),'Rich / Affluent'=>__('Rich / Affluent'));
						echo $this->Form->select('family_status',$familyStatus,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Origion');?></small></label>
    <div class="col-sm-8">
    <?php echo $this->Form->input('family_origion',array('type'=>'text','label' => false,'class'=>'form-control','placeholder'=>__('Father Origion'),'div'=>false));?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Tongue');?></small></label>
    <div class="col-sm-8">
    <?php  echo $this->Form->select('mothertongue_id',$mothertongueName,array('class'=>'form-control','empty'=>__('Select')));   ?>
   </div>
</div>
</div>

<div class="panel-body">
                    <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-7">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span>&nbsp;<?php echo __('Update');?></button>                            
                        </div>
                    </div>
		     </div>
                <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>
    </div>  </div>  
    
    </section>