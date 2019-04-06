<script type="text/javascript">
    $(document).ready(function(){        
        $('#dob').datetimepicker({locale:'<?php echo $configLanguage; ?>'});
	 $('#birth_time').datetimepicker({locale:'<?php echo $configLanguage; ?>',format:'HH:mm:ss'});
});
</script>


    <?php echo $this->Session->flash(); ?>
    <div class="panel panel-default">
        <div class="panel-heading"><strong><?php echo __('Add Member'); ?></strong></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Member', array('class' => 'form-horizontal', 'type' => 'file')); ?>

        <div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Personal Info'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('In My Own Words'); ?><span class="text-danger"> </span></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('about_me', array('type' => 'textarea','div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('In My Own Words'))); ?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('About My Family'); ?><span class="text-danger"> </span></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('about_family', array('type' => 'textarea','div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('About My Family'))); ?>
   </div>
</div>
</div>
</div>
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
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('User Name'); ?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('user_name', array('label' => false, 'class' => 'form-control', 'placeholder' => __('User Name'), 'div' => false)); ?>
	    </div>
 </div>
</div>
<div class="panel-body">
<div class="form-group">
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Password'); ?><span class="text-danger"> *</span></small></label>
	<div class="col-sm-6">
	    <?php echo $this->Form->input('password', array('type' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Password'), 'div' => false, 'maxlength' => 15, 'minlength' => 4)); ?>
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
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('Age'); ?></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('age', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Age'), 'div' => false)); ?>
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
       <?php 
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


<!--<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sex'); ?></small></label>
    <div class="col-sm-6">
      <?php
        $option = array('Male' => __('Male'), 'Female' => __('Female'));
        echo $this->Form->select('sex', $option, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
   </div>
</div>-->
 

 



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
<!--<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Raasi / Moon Sign'); ?></small></label>
    <div class="col-sm-6">
      <?php //echo $this->Form->select('rashy_id', $rashiName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Birth Time'); ?></small></label>
    <div class="col-sm-6">
    <div class="input-group date" id="birth_time">
	<?php //echo $this->Form->input('birth_time', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'div' => false)); ?>
	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	</div>
    </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
    </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Birth Place'); ?></small></label>
    <div class="col-sm-6">
      <?php //echo $this->Form->input('birth_place', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Birth Place'))); ?>
   </div>
   </div>-->
</div>

<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Professional Information'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Highest Education'); ?></small></label>
    <div class="col-sm-6">
       <?php echo $this->Form->select('education_id', $educationName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('College/ Institution'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('college_name', array('label' => false, 'class' => 'form-control', 'placeholder' => __('College / Institution'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Education in Detail'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('education_detail', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Education in Detail'), 'div' => false)); ?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Occupation'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->select('occupation_id', $occupationName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Occupation in Detail'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('occupation_detail', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Occupation in Detail'), 'div' => false)); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Employed in'); ?></small></label>
    <div class="col-sm-6">
       <?php
        echo $this->Form->select('employed_id', $employedName, array('class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><?php echo __('Annual Income'); ?></label>
	<div class="col-sm-6">
	<?php //$income = array('0-1000' => __('0-1000'), '1000-5000' => __('1000-5000'), '5000-10000' => __('5000-10000'), '10000-20000' => __('10000-20000'), '20000-30000' => __('20000-30000'), '30000-50000' => __('30000-50000'), '50000-100000' => __('50000-100000'), '100000-above' => __('100000-above'));
echo $this->Form->select('income_id', $incomeName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
       </div>
   </div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Location Information'); ?></strong></div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Address'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->input('address', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Address'))); ?>
   </div>
    
</div>
</div>
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
    <?php 
    $urltown = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'town'));
    echo $this->Form->select('state_id', $stateName, array('id' => 'stateId', 'rel' => $urltown, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing Township'); ?></small></label>
    <div class="col-sm-6">
    <?php $urlcity = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'city'));
    echo $this->Form->select('town_id', $townName, array('id' => 'townId', 'rel' => $urlcity, 'class' => 'form-control', 'empty' => __('Select'))); ?>
    </div>
   </div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing City'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->select('city_id', $cityName, array('id' => 'cityId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
    </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Citizenship'); ?></small></label>
    <div class="col-sm-6">
      <?php $url = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'state'));
        echo $this->Form->select('citizenship_id', $countryName, array('id' => 'countryId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
</div>



<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Family Details'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Value'); ?></small></label>
    <div class="col-sm-6">
    <?php
    //$familyValue = array('Orthodox' => __('Orthodox'), 'Traditional' => __('Traditional'), 'Moderate' => __('Moderate'), 'Liberal' => __('Liberal'));
    echo $this->Form->select('familyvalue_id', $familyValue, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
 </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Type'); ?></small></label>
    <div class="col-sm-6">
     <?php
    //$familyType = array('Joint' => __('Joint'), 'Nuclear' => __('Nuclear'), 'Other' => __('Other'));
    echo $this->Form->select('familytype_id', $familyType, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Status'); ?></small></label>
    <div class="col-sm-6">
       <?php
        //$familyStatus = array('Lower Class' => __('Lower Class'), 'Middle Class' => __('Middle Class'), 'Upper Middle Class' => __('Upper Middle Class'), 'Rich / Affluent' => __('Rich / Affluent'));
        echo $this->Form->select('familystatus_id', $familyStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>  
   
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Father Educated'); ?></small></label>
    <div class="col-sm-6">
       <?php
        $father_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select('father_educated', $father_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>  
   
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __("Father's Occupation"); ?></small></label>
    <div class="col-sm-6">
    <?php 
    $fatherStatus = array('Employed' => __('Employed'), 'Business Man' => __('Business Man'), 'Professional' => __('Professional'), 'Retired' => __('Retired'), 'Not Employed' => __('Not Employed'), 'Passed Away' => __('Passed Away'));
    echo $this->Form->select('father_occupation', $fatherStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    //echo $this->Form->input('father_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Status'), 'div' => false)); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Educated'); ?></small></label>
    <div class="col-sm-6">
       <?php
        $mother_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select('mother_educated', $mother_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>  
   
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Occupation'); ?></small></label>
    <div class="col-sm-6">
    <?php 
    $motherStatus = array('Employed' => __('Employed'), 'Business Man' => __('Business Man'), 'Professional' => __('Professional'), 'Retired' => __('Retired'), 'Not Employed' => __('Not Employed'), 'Passed Away' => __('Passed Away'));
    echo $this->Form->select('mother_occupation', $motherStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    //echo $this->Form->input('father_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Status'), 'div' => false)); ?>
   </div>
   </div>
</div>

<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No. of Brothers'); ?></small></label>
    <div class="col-sm-6">
       <?php echo $this->Form->input('no_of_brother', array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Brother'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Bothers Married'); ?></small></label>
    <div class="col-sm-6">
       <?php echo $this->Form->input('bothers_married', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Bothers Married status'), 'div' => false)); ?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No Of Sisters'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->input('no_of_sister', array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Sister'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sisters Married'); ?></small></label>
    <div class="col-sm-6">
       <?php echo $this->Form->input('sisters_married', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Sisters Married status'), 'div' => false)); ?>
   </div>
</div>
</div>

<div class="panel-body">
<div class="form-group">
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Ancestral Origin'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->input('family_origion', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Ancestral / Family Origin'), 'div' => false)); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Asset Values'); ?></small></label>
    <div class="col-sm-6">
      <?php echo $this->Form->input('asset_values', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Asset Values'), 'div' => false)); ?>
   </div>
   </div>
</div>
</div>





<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Hobbies and Interests'); ?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Hobbies'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('hobbies', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Hobbies'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Interests'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('interests', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Interests'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Favourite music'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('favourite_music', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favourite music'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Favourite Reads'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('favourite_reads', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favourite Reads'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Preffered Movies'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('preffered_movies', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Preffered Movies'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sports Fitness Activities'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('sports_fitness_activities', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Sports Fitness Activities'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Favorite Cusine'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('favorite_cusine', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favorite Cusine'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Preffered Dress style'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('preffered_dress_style', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Preffered Dress style'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Spoken languages'); ?></small></label>
    <div class="col-sm-6">
    <?php echo $this->Form->input('spoken_languages', array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Spoken languages'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Know Cooking'); ?></small></label>
    <div class="col-sm-6">
       <?php
        $mother_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select('know_cooking', $mother_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>   
   </div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Identity'); ?></strong></div>
<div class="panel-body">
<div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('NRC Card'); ?></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('proofimg', array('type' => 'file', 'label' => false, 'class' => '', 'div' => false)); ?>
                </div> 
</div>
</div>

<!--<div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('NRC Card'); ?></small></label>
	    <div class="col-sm-6">
		<?php //echo $this->Form->input('nrc_card', array('label' => false, 'class' => 'form-control', 'placeholder' => __('NRC Card'), 'div' => false)); ?>
	    </div>
 </div>
</div>-->
<div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('Contact Person'); ?></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('contact_person', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Contact Person'), 'div' => false)); ?>
	    </div>
 </div>
</div>
<div class="panel-body">
	<div class="form-group">
	<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Phone Number'); ?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('phone', array('type' => 'number', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Phone Number'), 'div' => false)); ?>
	    </div>
	</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('Email-Id'); ?></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Email-Id'), 'div' => false)); ?>
	    </div>
 </div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('Facebook Id'); ?></small></label>
	    <div class="col-sm-6">
		<?php echo $this->Form->input('facebook', array('label' => false, 'class' => 'form-control', 'placeholder' => __('Facebook Id'), 'div' => false)); ?>
	    </div>
 </div>
</div>

</div>

<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Upload'); ?></strong></div>
 <div class="panel-body">
 <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload Profile Photo');?></small></label>
                <div class="col-sm-6">
                <?php echo $this->Form->input('photoimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                </div>
</div>
<div class="panel-body">
 <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload More Photo');?></small></label>
                <div class="col-sm-6">
                <?php echo $this->Form->input('Pr.photo.', array('type' => 'file','label'=>false,'multiple'=>'multiple','class'=>'')); ?>
                </div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload Horoscope'); ?></small></label>
                <div class="col-sm-6">
                <?php echo $this->Form->input('horoscopeimg', array('type' => 'file', 'label' => false, 'class' => '', 'div' => false)); ?>
                </div>    
</div>
</div>

</div>


<div class="panel panel-default">
 <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save'); ?></button>
                    <?php echo $this->Html->link('<span class="fa fa-close"></span> '.__('Close'), array('controller' => 'Members', 'action' => 'index'), array('class' => 'btn btn-danger', 'escape' => false)); ?>
 </div>
</div>

 
</div></div>
 <div>
        <?php echo $this->Form->end(); ?>
        </div>
    </div>
	</div> 
   
   
<script type="text/javascript">
$(document).ready(function(){
   
  /* $('#MemberAge').click(function() {
        var dob = $('#MemberDob').val();
        
//dob = new Date(dob);

var today = new Date();
    var birthDate = new Date(dob);
    
    var age = today.getFullYear() - birthDate.getFullYear();
    
    var m = today.getMonth() - birthDate.getMonth();
    
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
 alert(today);
$("#MemberAge").val(age);

 }); 
*/



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
                                    $('#townId').html(response);
                            }
                    },
                    error: function(e) {
                            
                    }
            });
    });

    $('#townId').change(function() {
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