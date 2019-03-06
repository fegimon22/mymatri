<?php if($isError){?>

<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('Registration');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
		      <?php echo __('Registration');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
<div class="container register_form_inner zoom-anim-dialog">

<?php }?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){        
        $('#dob1').datetimepicker({locale:'en',format:'YYYY-MM-DD'});
});
</script>



<div <?php if(!$isError){?>class="container register_form_inner zoom-anim-dialog"<?php }?>>
    <br/><?php echo $this->Session->flash();?>
    <div class="panel panel-custom mrg">
        <div class="panel-heading"><strong>Registration</strong><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div>
        <div class="panel-body">
	    <?php echo $this->Form->create('Register', array( 'controller' => 'Register', 'action' => 'index','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','role'=>'form','type' => 'file'));?>
            	<div class="panel-body">
                <div class="form-group">
				
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Profile Created By');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
				<?php $profileCreated=array('Myself'=>__('Myself'),'Son'=>__('Son'),'Daughter'=>__('Daughter'),'Brother'=>__('Brother'),'Sister'=>__('Sister'),'Relative'=>__('Relative'),'Friend'=>__('Friend'));
					echo $this->Form->select('profile_created',$profileCreated,array('class'=>'form-control','empty'=>__('Select')));   ?>
                </div>
				 
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                </div>
                </div>
		</div>
	        <div class="panel-body">
                <div class="form-group">
				<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('User Name');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('user_name',array('required'=>true,'label' => false,'class'=>'form-control','placeholder'=>__('User Name'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Date of Birth');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
                 <div class="input-group date" id="dob1">
				       <?php echo $this->Form->input('dob',array('type'=>'text','value'=>$dob,'label' => false,'class'=>'form-control','div'=>false));?>
			        	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
					</div>
                </div>
                
                </div>
		</div>
		<div class="panel-body">
                <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Religion');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
                 <?php $url = $this->Html->url(array('controller'=>'Ajaxcontents','action' => 'caste'));
                              echo $this->Form->select('religion_id',$religionName,array('id'=>'religionId','rel'=>$url,'empty'=>__('Select'),'class'=>'form-control')); ?>
                </div>


                 <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Mother Tongue');?><span class="text-danger"> </span></small></label>
                <div class="col-sm-4">
               <?php  echo $this->Form->select('mothertongue_id',$mothertongueName,array('class'=>'form-control','empty'=>__('Select')));   ?></div>

                
				
		
                </div>
		</div>
		<div class="panel-body">
                <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Phone');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('phone',array('label' => false,'class'=>'form-control','placeholder'=>__('Phone'),'div'=>false));?>
                </div>

                <label for="inputEmail3" class="col-sm-2 control-label"><small><?php echo __('Email');?> <span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                </div>
               		
               
		
		</div>
		</div>
		<div class="panel-body">
                <div class="form-group">
		
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Password');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php echo $this->Form->input('password',array('label' => false,'class'=>'form-control','placeholder'=>__('Password'),'minlength'=>'4','maxlength'=>'15','div'=>false));?>
                </div>  

			   <!--<label for="group_name" class="col-sm-2 control-label"><small><?php //echo __('Upload Photo');?></small></label>
                <div class="col-sm-4">
                <?php //echo $this->Form->input('photoimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                </div> -->
		
		</div>
		</div>
		
		<!--<div class="panel-body">
        <div class="form-group">
	        <label for="group_name" class="col-sm-2 control-label"><small><?php //echo __('Security Code22');?><span class="text-danger"> *</span></small></label>
                <div class="col-sm-4">
                <?php //echo$this->Captcha->render($captchaSettings);?>
                </div>
		</div>
		</div> -->
	    <div class="form-group text-left">
		<div class="col-sm-offset-2 col-sm-6">
		    <button type="submit" class="btn form-control login_btn"><span class="glyphicon glyphicon-refresh"></span> <?php echo __('Register Now');?></button>
		    <?php if(!$isError){?><button type="button" class="btn form-control login_btn" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button><?php }?>
		</div>
	    </div>
	    <?php echo $this->Form->end();?>
	</div>
    </div>
</div>
<?php if($isError){?>
</div>
</section>
<?php }?>
