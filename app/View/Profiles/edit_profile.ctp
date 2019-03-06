<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo$name;?> <?php echo __('Edit Basic Profile');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo$name;?> <span><?php echo __('Edit Basic Profile');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){        
        $('#dob').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'<?php echo $dpFormat;?>'});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){        
        //$('#birth_time').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'HH:mm A'});
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
<div class="panel-heading"><?php echo __('Religion Details');?>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="panel">
<?php echo $this->Form->create('Profile', array( 'controller' => 'Profiles', 'action' => 'editProfile','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','type' => 'file'));?>
<div class="panel-body">
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Religion');?></small></label>
      <div class="col-sm-4">
        <?php $url = $this->Html->url(array('controller'=>'Ajaxcontents','action' => 'caste'));
                              echo $this->Form->select('religion_id',$religionName,array('id'=>'religionId','rel'=>$url,'empty'=>__('Select'),'class'=>'form-control')); ?>
      </div>
      <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Caste');?></small></label>
      <div class="col-sm-4">
        <?php   echo $this->Form->select('caste_id',$casteName,array('id'=>'casteId','empty'=>__('Select'),'class'=>'form-control')); ?>
      </div>
    </div>
  </div></div>

<div class="panel-heading"><?php echo __('Personal Details');?>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="panel">


<div class="panel-body">
      <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Marital Status');?></small></label>
        <div class="col-sm-4">
          <?php
      echo $this->Form->select('maritialstatus_id',$maritialstatusName,array('class'=>'form-control','empty'=>__('Select')));
     ?>
        </div>
        <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Height');?></small></label>
        <div class="col-sm-4">
          <?php  echo $this->Form->select('height_id',$heightName,array('class'=>'form-control','empty'=>__('Select'))); ?>
        </div>

      </div>
    </div>
    <div class="panel-body">
      <div class="form-group">

       <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Family Status');?></small></label>
					    <div class="col-sm-4">
						<?php
						$familyStatus=array('Lower Class'=>__('Lower Class'),'Middle Class'=>__('Middle Class'),'Upper Middle Class'=>__('Upper Middle Class'),'Rich / Affluent'=>__('Rich / Affluent'));
						echo $this->Form->select('family_status',$familyStatus,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>
					    </div>
              <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Family Type');?></small></label>
					    <div class="col-sm-4">
						<?php
						$familyType=array('Joint'=>__('Joint'),'Nuclear'=>__('Nuclear'),'Other'=>__('Other'));
						echo $this->Form->select('family_type',$familyType,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>
					    </div>
    </div>
    </div>
   
 <div class="panel-body">
    <div class="form-group">
    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Family Value');?></small></label>
					    <div class="col-sm-4">
						<?php
						$familyValue=array('Orthodox'=>__('Orthodox'),'Traditional'=>__('Traditional'),'Moderate'=>__('Moderate'),'Liberal'=>__('Liberal'));
						echo $this->Form->select('family_value',$familyValue,array('div'=>false,'label'=>false,'class'=>'form-control','empty'=>__('Select')));
					      ?>
					    </div>

              <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Any Disability');?></small></label>
    <div class="col-sm-4">
      <?php $physical=array('Normal'=>__('Normal'),'Disable'=>__('Disable'),'Does not matter'=>__('Does not matter')); echo $this->Form->select('physical',$physical,array('class'=>'form-control','empty'=>__('Select')));   ?>
    
   </div>
    </div>
  </div>
  
  </div>
  <div class="panel-heading"><?php echo __('Professional Details');?>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  </div>
  
    <div class="panel-body">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Highest Education');?></small></label>
        <div class="col-sm-4"> <?php echo $this->Form->select('education_id',$educationName,array('class'=>'form-control','empty'=>__('Select')));   ?> </div>
        <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Employed In ');?></small></label>
    <div class="col-sm-4">
       <?php
      echo $this->Form->select('employed_id',$employedName,array('class'=>'form-control','empty'=>__('Select')));
      ?>
   </div>
    </div>
    </div>
    <div class="panel-body">
      <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"><small>Occupation</small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select('occupation_id',$occupationName,array('class'=>'form-control','empty'=>__('Select')));   ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><?php echo __('Annual Income ');?></label>
					<div class="col-sm-4">
					<?php $income=array('0-1000'=>__('0-1000'),'1000-5000'=>__('1000-5000'),'5000-10000'=>__('5000-10000'),'10000-20000'=>__('10000-20000'),'20000-30000'=>__('20000-30000'),'30000-50000'=>__('30000-50000'),'50000-100000'=>__('50000-100000'),'100000-above'=>__('100000-above'));
					echo $this->Form->select('income',$income,array('class'=>'form-control','empty'=>__('Select')));   ?>
				       </div>
      </div>
    </div>
    
    </div>
    <div class="panel-heading"><?php echo __('Work Location');?>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="panel">
        <div class="panel-body">
          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Country');?><span class="text-danger"> *</span></small></label>
		    <div class="col-sm-8">
	  	    <?php $url1 = $this->Html->url(array('controller'=>'Ajaxcontents','action' => 'state'));
                             echo $this->Form->select('country_id',$countryName,array('required'=>true,'id'=>'countryId','rel'=>$url1,'empty'=>__('Select'),'class'=>'form-control')); ?>
                   </div> 
                   </div>
                   </div>       

        <div class="panel-body">
          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('State');?><span class="text-danger"> *</span></small></label>
		    <div class="col-sm-8">
        <?php $url2 = $this->Html->url(array('controller'=>'Ajaxcontents','action' => 'city'));
                              echo $this->Form->select('state_id',$stateName,array('required'=>true,'id'=>'stateId','rel'=>$url2,'empty'=>__('Select'),'class'=>'form-control')); ?>
                   </div> </div>
        </div>

        <div class="panel-body">
          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('City');?><span class="text-danger"> *</span></small></label>
		    <div class="col-sm-8">
        <?php   echo $this->Form->select('city_id',$cityName,array('required'=>true,'id'=>'cityId','empty'=>__('Select'),'class'=>'form-control')); ?>
                   </div> </div>
        </div>
        
        <div class="panel-body">
          <div class="form-group text-left">
            <div class="col-sm-offset-2 col-sm-7">
              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span>&nbsp;<?php echo __('Update');?></button>
            </div>
          </div>
        </div>
        <?php echo $this->Form->end();?> </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function(){
$('#countryId').change(function() {
            var selectedValue = $(this).val();
            var targeturl = $(this).attr('rel') + '?id=' + selectedValue;
            $.ajax({
                    type: 'get',
                    url: targeturl,
                    beforeSend: function(xhr) {
                            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    },
                    success: function(response) {
                            if (response) {
                                    $('#stateId').html(response);
				    $('#cityId').html('<select><option>Select</option></select>');
                            }
                    },
                    error: function(e) {
                            
                    }
            });
    });
$('#stateId').change(function() {
            var selectedValue = $(this).val();
            var targeturl = $(this).attr('rel') + '?id=' + selectedValue;
            $.ajax({
                    type: 'get',
                    url: targeturl,
                    beforeSend: function(xhr) {
                            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    },
                    success: function(response) {
                            if (response) {
                                    $('#cityId').html(response);
                            }
                    },
                    error: function(e) {
                            
                    }
            });
    });
$('#religionId').change(function() {
            var selectedValue = $(this).val();
            var targeturl = $(this).attr('rel') + '?id=' + selectedValue;
            $.ajax({
                    type: 'get',
                    url: targeturl,
                    beforeSend: function(xhr) {
                            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    },
                    success: function(response) {
                            if (response) {
                                    $('#casteId').html(response);
                            }
                    },
                    error: function(e) {
                            
                    }
            });
    });
});
</script>
