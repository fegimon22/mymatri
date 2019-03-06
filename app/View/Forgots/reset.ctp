<script type="text/javascript">
$(document).ready(function(){
  $('#password').change(function(){validatePassword();});
  $('#con_password').keyup(function(){validatePassword();})
function validatePassword(){
  if($('#password').val() != $('#con_password').val()) {
    document.getElementById('con_password').setCustomValidity("Passwords Don't Match");
  } else {
   document.getElementById('con_password').setCustomValidity('');
  }
}
});
</script>
<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('Reset Password');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('Reset Password');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
	    <div class="login_form_inner" >
           <h4><?php echo __('Reset Password');?></h4>
           <?php echo $this->Form->create('Forgot', array('name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','role'=>'form'));?>
           <?php echo $this->Form->input('password',array('id'=>'password','value'=>'','autocomplete'=>'off','label' => false,'required'=>true,'class'=>'form-control','placeholder'=>__('Password'),'div'=>false));?>
           <?php echo $this->Form->input('password',array('value'=>'','id'=>'con_password','autocomplete'=>'off','label' => false,'required'=>true,'class'=>'form-control','placeholder'=>__('Confirm Password'),'div'=>false));?>
             
            <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('Submit');?></button>
                   <?php echo$this->Form->end();?>
               </div>
                      
        </div>
	    </div>
</section>	    

















