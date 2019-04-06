<div <?php if(!$isError){?>class="container"<?php }?>>
    <div class="panel panel-custom mrg"><?php echo $this->Form->create('Member', array('class'=>'form-horizontal','type' => 'file','enctype'=>'multipart/form-data'));?>
        <div class="panel-heading"><?php echo __('Edit Members');?><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div>
                <div class="panel-body"><?php echo $this->Session->flash();?>
                 <?php foreach ($Member as $k=>$post): $id=$post['Member']['id'];$form_no=$k;
         $selstate="stateName$k";$selcity="cityName$k";$selcaste="casteName$k"; $townName = "townName$k";
         //print_r($townName);?>
		 
         
         <script type="text/javascript">
	    $(document).ready(function(){
	    $('#countryId<?php echo$k;?>').change(function() {
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
						$('#stateId<?php echo$k;?>').html(response);
						$('#townId<?php echo$k;?>').html('<select><option value=""><?php echo __('Select');?></option></select>');
                        $('#cityId<?php echo$k;?>').html('<select><option value=""><?php echo __('Select');?></option></select>');
					}
				},
				error: function(e) {
					
				}
			});
		});
	    $('#stateId<?php echo$k;?>').change(function() {
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
						$('#townId<?php echo$k;?>').html(response);
					}
				},
				error: function(e) {
					
				}
			});
		});
        $('#townId<?php echo$k;?>').change(function() {
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
						$('#cityId<?php echo$k;?>').html(response);
					}
				},
				error: function(e) {
					
				}
			});
		});
	    $('#religionId<?php echo$k;?>').change(function() {
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
						$('#casteId<?php echo$k;?>').html(response);
					}
				},
				error: function(e) {
					
				}
			});
		});
	    });
	    </script>
		 
		 
		<script type="text/javascript">
		$(document).ready(function(){        
		$('#dob<?php echo$k;?>').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'<?php echo $dpFormat;?>'});
		$('#birth_time<?php echo$k;?>').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'HH:mm A'});
		});
		</script>
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong class="text-danger"><small><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
			
            <div class="panel-heading"><strong>Personal Information</strong></div>
            
            <div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('In My Own Words');?></small></label>
	    <div class="col-sm-4">
        <?php echo $this->Form->input("$k.Member.about_me", array('type' => 'textarea','div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('In My Own Words'))); ?>
	    </div>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('About My Family');?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-4">
        <?php echo $this->Form->input("$k.Member.about_family", array('type' => 'textarea','div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('About My Family'))); ?>
	    </div>
 </div>
</div> 
            
            <div class="panel-heading"><strong>Basic Details</strong></div>
<div class="panel-body">
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><small><?php echo __('Profile created for');?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-4">
        <?php
      $profileCreated = array('Myself' => __('Myself'), 'Son' => __('Son'), 'Daughter' => __('Daughter'), 'Brother' => __('Brother'), 'Sister' => __('Sister'), 'Relative' => __('Relative'), 'Friend' => __('Friend'));
      echo $this->Form->select("$k.Member.profile_created", $profileCreated, array('class' => 'form-control', 'empty' => __('Select'))); ?> 
      	    </div>
              <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name');?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
	    </div>
 </div>
</div>
			
 
<div class="panel-body">
<div class="form-group">   
        <label for="email" class="col-sm-2 control-label"><small><?php echo __('User Name');?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.user_name",array('required'=>true,'label' => false,'class'=>'form-control','placeholder'=>__('User Name'),'div'=>false));?>
        <?php echo $this->Form->input("$k.Member.id", array('type' => 'hidden'));?>
        </div>
        <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Date of Birth');?></small></label>
    <div class="col-sm-4">
      <div class="input-group date" id="dob<?php echo$k;?>">
      <?php if($post['Member']['dob']!=null){$dob=$this->Time->format($dtFormat,$post['Member']['dob']);}else{$dob=null;} echo $this->Form->input("$k.Member.dob",array('type'=>'text','value'=>$dob,'label' => false,'class'=>'form-control','div'=>false));?>
      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	</div>
   </div>
 </div>
</div>
 <div class="panel-body">
	<div class="form-group">
	<label for="email" class="col-sm-2 control-label"><small><?php echo __('Age'); ?></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.age", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Age'), 'div' => false)); ?>
	    </div>
        <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Height'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->select("$k.Member.height_id", $heightName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
	</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Weight'); ?></small></label>
    <div class="col-sm-4">
       <?php  //print_r($weightName);
       echo $this->Form->select("$k.Member.weight_id", $weightName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Marital Status'); ?></small></label>
    <div class="col-sm-4">
      <?php
        echo $this->Form->select("$k.Member.maritialstatus_id", $maritialstatusName, array('class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Body Type'); ?></small></label>
    <div class="col-sm-4">
       <?php $bodyType = array('Slim' => 'Slim', 'Average' => 'Average', 'Athletic' => 'Athletic', 'Heavy' => 'Heavy');
        echo $this->Form->select("$k.Member.body_type", $bodyType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Complexion'); ?></small></label>
    <div class="col-sm-4">
      <?php $complexion = array('Normal' => __('Normal'), 'Fair' => __('Fair'), 'Very Fair' => __('Very Fair'), 'Wheatish' => __('Wheatish'), 'Dark' => __('Dark'));
        echo $this->Form->select("$k.Member.complexion", $complexion, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
</div>
</div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Physical Status'); ?></small></label>
    <div class="col-sm-4">
      <?php $physical = array('Normal' => __('Normal'), 'Disable' => __('Disable'), 'Does not matter' => __('Does not matter'));
        echo $this->Form->select("$k.Member.physical", $physical, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Tongue'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.mothertongue_id", $mothertongueName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
    
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Eating Habits'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.habit_id", $habitName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Drinking Habits'); ?></small></label>
    <div class="col-sm-4">
       <?php $drinksType = array('No' => 'No', 'Drinks Socially' => 'Drinks Socially', 'Yes' => 'Yes');
        echo $this->Form->select("$k.Member.drinks_type", $drinksType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
    
</div>
</div>

<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Smoking Habits'); ?></small></label>
    <div class="col-sm-4">
    <?php $smokingType = array('No' => 'No', 'Occasionally' => 'Occasionally', 'Yes' => 'Yes');
        echo $this->Form->select("$k.Member.smoking_type", $smokingType, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>  
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Profile Photo Status');?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.photo_status",array("Pending"=>__('Pending'),"Approved"=>__('Approved')),array('empty'=>null,'label' => false,'class'=>'form-control','placeholder'=>'Status','div'=>false));?>
   </div>
</div>
</div>

<?php echo $luserId; if($luserId==1){?>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Featured');?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.feature",array("Yes"=>__('Yes'),"No"=>__('No')),array('empty'=>null,'label' => false,'class'=>'form-control','placeholder'=>'Status','div'=>false));?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small>Status</small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.status",array("Active"=>__('Active'),"Pending"=>__('Pending'),"Suspend"=>__('Suspend')),array('empty'=>null,'label' => false,'class'=>'form-control','placeholder'=>'Status','div'=>false));?>
   </div>
   </div>
</div>
<?php }?>

<!--<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php //echo __('Horoscope Image');?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('horoscopeimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php //echo __('Upload Proof');?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('proofimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                </div>
    
</div>
</div> 

<div class="panel-body">
<div class="form-group">
    <?php if($custom[0]['Sitesetting']['status']=='Enabled'){?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[0]['Sitesetting']['alias'];?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.field1",array('label' => false,'class'=>'form-control','placeholder'=>$custom[0]['Sitesetting']['alias'],'div'=>false));?>
             </div>
    <?php }?>
    <?php if($custom[1]['Sitesetting']['status']=='Enabled'){?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[1]['Sitesetting']['alias'];?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input("$k.Member.field2",array('label' => false,'class'=>'form-control','placeholder'=>$custom[1]['Sitesetting']['alias'],'div'=>false));?>
        </div>
    <?php }?>	
 </div>
</div>
<div class="panel-body">
<div class="form-group">
    <?php if($custom[2]['Sitesetting']['status']=='Enabled'){?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[2]['Sitesetting']['alias'];?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.field3",array('label' => false,'class'=>'form-control','placeholder'=>$custom[2]['Sitesetting']['alias'],'div'=>false));?>
             </div>
    <?php }?>
    <?php if($custom[3]['Sitesetting']['status']=='Enabled'){?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[3]['Sitesetting']['alias'];?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input("$k.Member.field4",array('label' => false,'class'=>'form-control','placeholder'=>$custom[3]['Sitesetting']['alias'],'div'=>false));?>
        </div>
    <?php }?>	
 </div>
</div>
<div class="panel-body">
<div class="form-group">
    <?php if($custom[4]['Sitesetting']['status']=='Enabled'){?>
    <label for="email" class="col-sm-2 control-label"><small><?php echo $custom[4]['Sitesetting']['alias'];?><span class="text-danger"></span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.field5",array('label' => false,'class'=>'form-control','placeholder'=>$custom[4]['Sitesetting']['alias'],'div'=>false));?>
             </div>
    <?php }?>
    <?php if($custom[5]['Sitesetting']['status']=='Enabled'){?>
     <label for="group_name" class="col-sm-2 control-label"><small><?php echo $custom[5]['Sitesetting']['alias'];?><span class="text-danger"> </span></small></label>
	<div class="col-sm-4">
	    <?php echo $this->Form->input("$k.Member.field6",array('label' => false,'class'=>'form-control','placeholder'=>$custom[5]['Sitesetting']['alias'],'div'=>false));?>
        </div>
    <?php }?>	
 </div>
</div>-->

 </div>
 </div>

 <div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Religion Information');?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Religion'); ?></small></label>
    <div class="col-sm-4">
      <?php $url2 = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'caste'));
        echo $this->Form->select("$k.Member.religion_id", $religionName, array('id' => 'religionId', 'rel' => $url2, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Caste'); ?></small></label>
    <div class="col-sm-4">
    <?php  echo $this->Form->select("$k.Member.caste_id",$$selcaste,array('id'=>"casteId$k",'class'=>'form-control','empty'=>__('Select')));  ?>
   </div>
</div>
</div>
</div>
</div>
 
<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Professional Information');?></strong></div>
 <div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Highest Education'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->select("$k.Member.education_id", $educationName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>

<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('College/ Institution'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.college_name", array('label' => false, 'class' => 'form-control', 'placeholder' => __('College / Institution'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Education in Detail'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.education_detail", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Education in Detail'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Occupation'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->select("$k.Member.occupation_id", $occupationName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Occupation in Detail'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.occupation_detail", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Occupation in Detail'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Employed in'); ?></small></label>
    <div class="col-sm-4">
       <?php
        echo $this->Form->select("$k.Member.employed_id", $employedName, array('class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><?php echo __('Annual Income'); ?></label>
	<div class="col-sm-4">
	<?php //$income = array('0-1000' => __('0-1000'), '1000-5000' => __('1000-5000'), '5000-10000' => __('5000-10000'), '10000-20000' => __('10000-20000'), '20000-30000' => __('20000-30000'), '30000-50000' => __('30000-50000'), '50000-100000' => __('50000-100000'), '100000-above' => __('100000-above'));
echo $this->Form->select("$k.Member.income_id", $incomeName, array('class' => 'form-control', 'empty' => __('Select'))); ?>
       </div>
   
   </div>
</div>
</div>
</div>
<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Location Information');?></strong></div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Address'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input("$k.Member.address", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Address'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Country Living in'); ?></small></label>
    <div class="col-sm-4">
      <?php $url = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'state'));
        echo $this->Form->select("$k.Member.country_id", $countryName, array('id' => 'countryId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing State'); ?></small></label>
    <div class="col-sm-4">
    <?php 
    $urltown = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'town'));
    echo $this->Form->select("$k.Member.state_id",$$selstate,array('id'=>"stateId$k",'rel'=>$urltown,'class'=>'form-control','empty'=>__('Select')));  ?>
    </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing Township'); ?></small></label>
    <div class="col-sm-4">
    <?php $urlcity = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'city'));
    echo $this->Form->select("$k.Member.town_id", $$townName, array('id' => "townId$k", 'rel' => $urlcity, 'class' => 'form-control', 'empty' => __('Select'))); ?>
    </div>
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Residing City'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->select("$k.Member.city_id", $$selcity, array('id' => 'cityId',  'class' => 'form-control', 'empty' => __('Select'))); ?>
    </div>
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Citizenship'); ?></small></label>
    <div class="col-sm-4">
      <?php $url = $this->Html->url(array('controller' => '../Ajaxcontents', 'action' => 'state'));
        echo $this->Form->select("$k.Member.citizenship_id", $countryName, array('id' => 'countryId', 'rel' => $url, 'class' => 'form-control', 'empty' => __('Select'))); ?>
   </div>
   </div>
</div>


<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Family Details');?></strong></div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Value'); ?></small></label>
    <div class="col-sm-4">
    <?php
    //$familyValue = array('Orthodox' => __('Orthodox'), 'Traditional' => __('Traditional'), 'Moderate' => __('Moderate'), 'Liberal' => __('Liberal'));
    echo $this->Form->select("$k.Member.familyvalue_id", $familyValue, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
 </div>
 <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Type'); ?></small></label>
    <div class="col-sm-4">
     <?php
    //$familyType = array('Joint' => __('Joint'), 'Nuclear' => __('Nuclear'), 'Other' => __('Other'));
    echo $this->Form->select("$k.Member.familytype_id", $familyType, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Family Status'); ?></small></label>
    <div class="col-sm-4">
       <?php
        //$familyStatus = array('Lower Class' => __('Lower Class'), 'Middle Class' => __('Middle Class'), 'Upper Middle Class' => __('Upper Middle Class'), 'Rich / Affluent' => __('Rich / Affluent'));
        echo $this->Form->select("$k.Member.familystatus_id", $familyStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>  
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Father Educated'); ?></small></label>
    <div class="col-sm-4">
       <?php
        $father_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select("$k.Member.father_educated", $father_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>  
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __("Father's Occupation"); ?></small></label>
    <div class="col-sm-4">
    <?php 
    $fatherStatus = array('Employed' => __('Employed'), 'Business Man' => __('Business Man'), 'Professional' => __('Professional'), 'Retired' => __('Retired'), 'Not Employed' => __('Not Employed'), 'Passed Away' => __('Passed Away'));
    echo $this->Form->select("$k.Member.father_occupation", $fatherStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    //echo $this->Form->input('father_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Status'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Educated'); ?></small></label>
    <div class="col-sm-4">
       <?php
        $mother_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select("$k.Member.mother_educated", $mother_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div> 
   </div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Mother Occupation'); ?></small></label>
    <div class="col-sm-4">
    <?php 
    $motherStatus = array('Employed' => __('Employed'), 'Business Man' => __('Business Man'), 'Professional' => __('Professional'), 'Retired' => __('Retired'), 'Not Employed' => __('Not Employed'), 'Passed Away' => __('Passed Away'));
    echo $this->Form->select("$k.Member.mother_occupation", $motherStatus, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
    //echo $this->Form->input('father_occupation', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Father Status'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No. of Brothers'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->input("$k.Member.no_of_brother", array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Brother'), 'div' => false)); ?>
   </div>
   </div>
</div>

<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Bothers Married'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->input("$k.Member.bothers_married", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Bothers Married status'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('No Of Sisters'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input("$k.Member.no_of_sister", array('label' => false, 'class' => 'form-control', 'placeholder' => __('No Of Sister'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sisters Married'); ?></small></label>
    <div class="col-sm-4">
       <?php echo $this->Form->input("$k.Member.sisters_married", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Sisters Married status'), 'div' => false)); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Ancestral Origin'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input("$k.Member.family_origion", array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Ancestral / Family Origin'), 'div' => false)); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Asset Values'); ?></small></label>
    <div class="col-sm-4">
      <?php echo $this->Form->input("$k.Member.asset_values", array('type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Asset Values'), 'div' => false)); ?>
   </div>
   </div>
</div>

<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Hobbies and Interests');?></strong></div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Hobbies'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.hobbies", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Hobbies'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Interests'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.interests", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Interests'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Favourite music'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.favourite_music", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favourite music'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __(' Favourite Reads'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.favourite_reads", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favourite Reads'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Preffered Movies'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.preffered_movies", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Preffered Movies'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Sports Fitness Activities'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.sports_fitness_activities", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Sports Fitness Activities'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Favorite Cusine'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.favorite_cusine", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Favorite Cusine'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Preffered Dress style'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.preffered_dress_style", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Preffered Dress style'))); ?>
   </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Spoken languages'); ?></small></label>
    <div class="col-sm-4">
    <?php echo $this->Form->input("$k.Member.spoken_languages", array('div' => false, 'label' => false, 'class' => 'form-control', 'placeholder' => __('Spoken languages'))); ?>
   </div>
   <label for="inputPassword3" class="col-sm-2 control-label"><small><?php echo __('Know Cooking'); ?></small></label>
    <div class="col-sm-4">
       <?php
        $mother_educated = array('Yes' => __('Yes'), 'No' => __('No'));
        echo $this->Form->select("$k.Member.know_cooking", $mother_educated, array('div' => false, 'label' => false, 'class' => 'form-control', 'empty' => __('Select')));
        ?>
   </div>   
</div>
</div>

<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php echo __('Identity');?></strong></div>
<!--<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php //echo __('NRC Card'); ?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('proofimg', array('type' => 'file', 'label' => false, 'class' => '', 'div' => false)); ?>
                </div>
   
</div>
</div> -->
<div class="panel-body">
<div class="form-group">
<label for="email" class="col-sm-2 control-label"><small><?php echo __('Contact Person'); ?></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.contact_person", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Contact Person'), 'div' => false)); ?>
	    </div>
        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Phone Number'); ?><span class="text-danger"> *</span></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.phone", array('type' => 'number', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Phone Number'), 'div' => false)); ?>
	    </div>
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="email" class="col-sm-2 control-label"><small><?php echo __('Email-Id'); ?></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.email", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Email-Id'), 'div' => false)); ?>
	    </div>
        <label for="email" class="col-sm-2 control-label"><small><?php echo __('Facebook Id'); ?></small></label>
	    <div class="col-sm-4">
		<?php echo $this->Form->input("$k.Member.facebook", array('label' => false, 'class' => 'form-control', 'placeholder' => __('Facebook Id'), 'div' => false)); ?>
	    </div>
</div>
</div>

<!--<div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading"><strong><?php //echo __('Upload');?></strong></div>
<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload Profile Photo');?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('photoimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                </div>
   
</div>
</div>
<div class="panel-body">
<div class="form-group">
<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload More Photo');?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('Pr.photo.', array('type' => 'file','label'=>false,'multiple'=>'multiple','class'=>'')); ?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Upload Horoscope'); ?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('horoscopeimg', array('type' => 'file', 'label' => false, 'class' => '', 'div' => false)); ?>
                </div>
</div>
</div> -->



    <?php endforeach; ?>
    <?php unset($post); ?>
                        <div class="panel-body">
                        <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-7">                            
                            <?php echo$this->Form->button('<span class="fa fa-refresh"></span>&nbsp;'.__('Update'),array('class'=>'btn btn-success','escpae'=>false));?>
			    <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancel');?></button><?php }else{
			    echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));}?>
                        </div>
                    </div>
		    </div>
                <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
</div>
</div>   </div>
</div>   </div>
</div>   </div>
</div>