<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('Login');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('Login');;?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
	    <div class="login_form_inner" >
           <h4><?php
	   $urlRegister=$this->Html->url(array('controller'=>'Registers','action'=>'index'));
	   echo __('Login');?></h4>
           <?php echo $this->Form->create('User', array('controller'=>'Users','action'=>'login','role'=>'form'));?>
	   <?php echo $this->Form->input('email',array('required'=>true,'type'=>'text','label' => false,'class'=>'form-text','placeholder'=>__('Username / Email'),'div'=>false));?>
           <?php echo $this->Form->input('password',array('size'=>'60','maxlength'=>'128','required'=>true,'label' => false,'class'=>'form-text','placeholder'=>__('Password'),'value'=>'','type'=>'password','div'=>false));?>
	   <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('LogIn');?></button>
                   <?php echo$this->Form->end();?>
		   <div class="login_social">
                       <h5><?php echo __('Links');?></h5>
                       <ul>
			        <li><?php echo$this->Html->link('<span class="glyphicon glyphicon-cog"></span>&nbsp; '.__(''),array('controller'=>'forgots','action'=>'password'),array('data-toggle'=>'tooltip','title'=>__('Forgot Password'),'escape'=>false));?></li>
				
				<?php if($frontRegistration==1){?>
				
				<li><?php echo$this->Html->link('<span class="glyphicon glyphicon-user"></span>&nbsp; '.__(''),'javascript:void(0);',array('onclick'=>"show_modal('$urlRegister');",'data-toggle'=>'tooltip','title'=>__('New Member? Create Account'),'escape'=>false));?></li>
				
				<li><?php echo$this->Html->link('<span class="glyphicon glyphicon-share-alt"></span>&nbsp; '.__(''),array('controller'=>'Emailverifications','action'=>'resend'),array('data-toggle'=>'tooltip','title'=>__('Re-Send Email Verification'),'escape'=>false));?></li>
				
				<?php }?>
                           
                       </ul>
                   </div>
		   
               </div>
                      
        </div>
	    </div>
</section>	    





