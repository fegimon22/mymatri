<script type="text/javascript">
    $(document).ready(function(){        
        $('#dob').datetimepicker({locale:'<?php echo $configLanguage; ?>',format:'<?php echo $dpFormat; ?>'});
	 $('#birth_time').datetimepicker({locale:'<?php echo $configLanguage; ?>',format:'HH:mm:ss'});
});
</script>


    <?php echo $this->Session->flash(); ?>
    <div class="panel panel-default">
        <div class="panel-heading"><strong><?php echo __('Add Member'); ?></strong></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Member', array('class' => 'form-horizontal', 'type' => 'file')); ?>
        <div class="panel panel-default">
  <!-- Default panel contents -->
 <div class="panel-heading"><strong><?php echo __(' Basic Details'); ?></strong></div>
 <div class="panel-body">
    <div class="form-group">
    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Profile created for'); ?><span class="text-danger"> </span></small></label>
                    <div class="col-sm-6">
                    <?php $profileCreated = array('Myself' => __('Myself'), 'Son' => __('Son'), 'Daughter' => __('Daughter'), 'Brother' => __('Brother'), 'Sister' => __('Sister'), 'Relative' => __('Relative'), 'Friend' => __('Friend'));
        echo $this->Form->select('profile_created', $profileCreated, array('class' => 'form-control', 'empty' => __('Select'))); ?>
                    </div>                    
   </div>
</div>
<div class="panel-body">
    <div class="form-group">
        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name'); ?><span class="text-danger"> *</span></small></label>
            <div class="col-sm-6">
            <?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Name'), 'div' => false)); ?>
            </div>
   </div>
</div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Date of Birth'); ?></small></label>
    <div class="col-sm-6">
      <div class="input-group date" id="dob">
	<?php echo $this->Form->input('dob', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'div' => false)); ?>
	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	</div>
   </div>
 </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Height'); ?></small></label>
    <div class="col-sm-6">
       <?php echo $this->Form->select('height_id', $heightName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
 </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Weight'); ?></small></label>
    <div class="col-sm-6">
       <?php $weightName = array('41' => '41 Kg', '42' => '42 Kg', '43' => '43 Kg', '44' => '44 Kg'); 
       echo $this->Form->select('weight_id', $weightName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
 </div>
</div>
 <div class="panel-body">
	<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Marital Status'); ?></small></label>
    <div class="col-sm-6">
      <?php
        echo $this->Form->select('maritialstatus_id', $maritialstatusName, array('class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
	</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Body Type'); ?></small></label>
    <div class="col-sm-6">
       <?php $bodyType = array('Slim' => 'Slim', 'Average' => 'Average', 'Athletic' => 'Athletic', 'Heavy' => 'Heavy');
        echo $this->Form->select('body_type', $bodyType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Complexion'); ?></small></label>
    <div class="col-sm-6">
      <?php $complexion = array('Normal' => __('Normal'), 'Fair' => __('Fair'), 'Very Fair' => __('Very Fair'), 'Wheatish' => __('Wheatish'), 'Dark' => __('Dark'));
        echo $this->Form->select('complexion', $complexion, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
</div>
</div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Physical Status'); ?></small></label>
    <div class="col-sm-6">
      <?php $physical = array('Normal' => __('Normal'), 'Disable' => __('Disable'), 'Does not matter' => __('Does not matter'));
        echo $this->Form->select('physical', $physical, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Tongue'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->select('mothertongue_id', $mothertongueName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Eating Habits'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->select('habit_id', $habitName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Drinking Habits'); ?></small></label>
    <div class="col-sm-6">
       <?php $drinksType = array('No' => 'No', 'Drinks Socially' => 'Drinks Socially', 'Yes' => 'Yes');
        echo $this->Form->select('drinks_type', $drinksType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Smoking Habits'); ?></small></label>
    <div class="col-sm-6">
    <?php $smokingType = array('No' => 'No', 'Occasionally' => 'Occasionally', 'Yes' => 'Yes');
        echo $this->Form->select('smoking_type', $smokingType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>

<div class="panel-body">
<div class="form-group">
    <?php if ($custom[0]['Sitesetting']['status'] == 'Enabled') {
        ?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[0]['Sitesetting']['alias']; ?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input('field1', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[0]['Sitesetting']['alias'], 'div' => false)); ?>
             </div>
    <?php
    } ?>
    <?php if ($custom[1]['Sitesetting']['status'] == 'Enabled') {
        ?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[1]['Sitesetting']['alias']; ?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input('field2', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[1]['Sitesetting']['alias'], 'div' => false)); ?>
        </div>
    <?php
    } ?>	
 </div>
</div>
<div class="panel-body">
<div class="form-group">
    <?php if ($custom[2]['Sitesetting']['status'] == 'Enabled') {
        ?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[2]['Sitesetting']['alias']; ?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input('field3', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[2]['Sitesetting']['alias'], 'div' => false)); ?>
             </div>
    <?php
    } ?>
    <?php if ($custom[3]['Sitesetting']['status'] == 'Enabled') {
        ?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[3]['Sitesetting']['alias']; ?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input('field4', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[3]['Sitesetting']['alias'], 'div' => false)); ?>
        </div>
    <?php
    } ?>	
 </div>
</div>
<div class="panel-body">
<div class="form-group">
    <?php if ($custom[4]['Sitesetting']['status'] == 'Enabled') {
        ?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[4]['Sitesetting']['alias']; ?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input('field5', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[4]['Sitesetting']['alias'], 'div' => false)); ?>
             </div>
    <?php
    } ?>
    <?php if ($custom[5]['Sitesetting']['status'] == 'Enabled') {
        ?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[5]['Sitesetting']['alias']; ?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input('field6', array('label' => false, 'class' => 'form-control', 'placeholder' => $custom[5]['Sitesetting']['alias'], 'div' => false)); ?>
        </div>
    <?php
    } ?>	
 </div>
</div>


<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Religion Information'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Religion'); ?></small></label>
    <div class="col-sm-6">
      <?php $url2 = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'caste'));
        echo $this->Form->select('religion_id', $religionName, array('id' => 'religionId', 'rel' => $url2, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Caste'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->select('caste_id', $casteName, array('id' => 'casteId', 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Raasi / Moon Sign'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->select('rashy_id', $rashiName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
   </div>
</div>
</div>


<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Location Information'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Country Living in'); ?></small></label>
    <div class="col-sm-6">
      <?php $url = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'state'));
        echo $this->Form->select('country_id', $countryName, array('id' => 'countryId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing State'); ?></small></label>
    <div class="col-sm-6">
    <?php $url = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'city'));
    echo $this->Form->select('state_id', $stateName, array('id' => 'stateId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing City / District'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->select('city_id', $cityName, array('id' => 'cityId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
    </div>
   </div>
</div>
</div>

<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Family Details'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Father Occupation'); ?></small></label>
    <div class="col-sm-4"><?php echo $this->Form->input('father_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Occupation'), 'div' => false)); ?>
   </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Occupation'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input('mother_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Mother Occupation'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No Of Brother'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->input('no_of_brother', array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Brother'), 'div' => false)); ?>
   </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No Of Sister'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input('no_of_sister', array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Sister'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Value'); ?></small></label>
    <div class="col-sm-4">
    <?php
    $familyValue = array('Orthodox' => __('Orthodox'), 'Traditional' => __('Traditional'), 'Moderate' => __('Moderate'), 'Liberal' => __('Liberal'));
    echo $this->Form->select('family_value', $familyValue, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
 </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Type'); ?></small></label>
    <div class="col-sm-4">
     <?php
    $familyType = array('Joint' => __('Joint'), 'Nuclear' => __('Nuclear'), 'Other' => __('Other'));
    echo $this->Form->select('family_type', $familyType, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Status'); ?></small></label>
    <div class="col-sm-4">
       <?php
        $familyStatus = array('Lower Class' => __('Lower Class'), 'Middle Class' => __('Middle Class'), 'Upper Middle Class' => __('Upper Middle Class'), 'Rich / Affluent' => __('Rich / Affluent'));
        echo $this->Form->select('family_status', $familyStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Origion'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input('family_origion', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Origion'), 'div' => false)); ?>
   </div>
   </div>
</div>
 <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save'); ?></button>
                    <?php echo $this->Html->link('<span class="fa fa-close"></span> '.__('Close'), array('controller' => 'Members', 'action' => 'index'), array('class' => 'btn btn-danger', 'escape' => false)); ?>
 </div>

 
</div></div>
 <div>
        <?php echo $this->Form->end(); ?>
        </div>
    </div>
	</div> 
</div>    
<script type="text/javascript">
$(document).ready(function(){
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
				    $('#cityId').html('<select><option value=""><?php echo __('Select'); ?></option></select>');
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

});
</script>    