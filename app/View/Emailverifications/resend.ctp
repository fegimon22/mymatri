<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('Re-Send Email Verification');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('Re-Send Email Verification');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<section class="advanced_search_area search_area2">
            <div class="container">
	    <?php echo $this->Session->flash();?>
	    <div class="login_form_inner">
           <h4><?php echo __('Re-Send Email Verification');?></h4>
           <?php echo $this->Form->create('Emailverification', array( 'controller' => 'Emailverifications', 'action' => 'resendsub','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','role'=>'form'));?>
           <?php echo $this->Form->input('email',array('type'=>'email','required'=>true,'label' => false,'class'=>'form-control','placeholder'=>__('Please Enter Email Id in the Text Box'),'div'=>false));?>
                <button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('Submit');?></button>
                   <?php echo$this->Form->end();?>
               </div>
                      
        </div>
	    </div>
</section>	    





