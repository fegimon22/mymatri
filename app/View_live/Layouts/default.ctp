<!DOCTYPE html>
<html lang="<?php echo$configLanguage;?>" dir="<?php echo$dirType;?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="google-translate-customization" content="839d71f7ff6044d0-328a2dc5159d6aa2-gd17de6447c9ba810-f">
	<?php echo $this->Html->charset();?>
	<title><?php echo $metaTitle;?></title>
	<meta name="keyword" content="<?php echo$metaKeyword;?>"/>
	<meta name="description" content="<?php echo$metaContent;?>"/>
	<?php 
		echo $this->Html->meta('icon');		
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Oswald:300,400,700');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700');
		
		  //echo $this->Html->css('/design700/css/font-awesome.min.css');
		  echo $this->Html->css('/design700/css/bootstrap-3.1.1.min.css');
		  echo $this->Html->css('/design700/css/flexslider.css');
		  echo $this->Html->css('/design700/css/style.css');
		  echo $this->Html->css('/design1000/vendors/material-icon/css/materialdesignicons.min');
		  echo $this->Html->css('/design1000/css/font-awesome.min');
		  echo $this->Html->css('/design1000/vendors/linears-icon/style');
		  echo $this->Html->css('/design1000/vendors/revolution/css/layers');
                  echo $this->Html->css('/design1000/vendors/revolution/css/navigation');
		  echo $this->Html->css('/design1000/vendors/revolution/css/settings');
                  //echo $this->Html->css('/design1000/css/bootstrap.min');
                  echo $this->Html->css('/design1000/vendors/image-dropdown/dd');
                  echo $this->Html->css('/design1000/vendors/image-dropdown/flags');
		  echo $this->Html->css('/design1000/vendors/image-dropdown/skin2');
		  echo $this->Html->css('/design1000/vendors/magnific-popup/magnific-popup');
                  echo $this->Html->css('/design1000/vendors/bootstrap-selector/bootstrap-select');
		  echo $this->Html->css('/design1000/vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min');
		  echo $this->Html->css('/design1000/vendors/owl-carousel/assets/owl.carousel');
		  echo $this->Html->css('/design1000/vendors/animate-css/animate');
		  echo $this->Html->css('/design1000/vendors/bs-tooltip/jquery.webui-popover');
		  echo $this->Html->css('/design1000/vendors/jquery-ui/jquery-ui');
		  echo $this->Html->css('/design1000/css/style');
		  echo $this->Html->css('/design1000/css/responsive');
		
		echo $this->Html->css('bootstrap-datetimepicker.min');
		if($this->Session->check('Member') && $isChat>0){echo $this->Html->css('/Chat/css/chat');
		echo $this->Html->css('/Chat/css/screen');}
		echo $this->Html->css('style');
		echo $this->fetch('meta');		
		echo $this->fetch('css');
		//echo $this->Html->script('/design700/js/jquery.min.js');
		echo $this->Html->script('/design700/js/bootstrap.min.js');
		echo $this->Html->script('/design700/js/jquery.flexslider.js');
		echo $this->Html->script('/design1000/js/jquery-2.1.4.min');
		echo $this->Html->script('moment-with-locales');
		echo $this->Html->script('bootstrap-datetimepicker.min');
		echo $this->Html->script('waiting-dialog.min');
		if($this->Session->check('Member') && $isChat>0){echo $this->Html->script('/Chat/js/chat');}
		echo $this->Html->script('custom.min');
		echo $this->fetch('script');
                echo $this->Js->writeBuffer();
		?>
<?php if($translate>0){?>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php }?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


</head>
<div id="google_translate_element"></div>

<body class="bgimage">
	<!-- Login form start -->
	<div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4><?php $urlRegister=$this->Html->url(array('controller'=>'Registers','action'=>'index'));
	   echo __('Login');?></h4>
           <?php echo $this->Form->create('User', array('controller'=>'Users','action'=>'login','role'=>'form'));?>
	   <?php echo $this->Form->input('email',array('id'=>'edit-name','required'=>true,'type'=>'text','label' => false,'class'=>'form-text required','placeholder'=>__('Username / Email'),'div'=>false));?>
           <?php echo $this->Form->input('password',array('size'=>'60','maxlength'=>'128','required'=>true,'id'=>'edit-pass','label' => false,'class'=>'form-text required','placeholder'=>__('Password'),'value'=>'','type'=>'password','div'=>false));?><div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('LogIn');?></button>
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
           <?php echo$this->Form->end();?>
	   <?php echo$this->Html->image('close-btn.png',array('class'=>'mfp-close'));?>
           
        </div>
	<!-- Login form close -->
        <!-- register form start -->
        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
			<?php echo$this->Html->image('Registration_man.png',array('class'=>''));?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4><?php echo __('Registration');?></h4>
                        <?php echo $this->Form->create('Register', array( 'controller' => 'Register', 'action' => 'index','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','role'=>'form','type' => 'file'));?>
                        <div class="form-group">
				<?php echo $this->Form->input('user_name',array('required'=>true,'label' => false,'class'=>'form-control','placeholder'=>__('User Name'),'div'=>false));?>
                
                        </div>
                            <div class="form-group">
                                <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                
                            </div>
                            <div class="form-group">
                               <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                            </div>
                            <div class="form-group">
                               <?php echo $this->Form->input('password',array('label' => false,'class'=>'form-control','placeholder'=>__('Password'),'minlength'=>'4','maxlength'=>'15','div'=>false));?>
                            </div>
                            <div class="form-group">
				<?php echo $this->Form->input('phone',array('label' => false,'class'=>'form-control','placeholder'=>__('Phone'),'div'=>false));?>
                
                            </div>
	                   <div class="form-group">
				<?php echo $this->Form->input('photoimg',array('type' => 'file','label' => false,'class'=>'','div'=>false));?>
                
				</div>
                           <div class="form-group">
				<?php //echo$this->Captcha->render($captchaSettings1);?>
                            </div>
                            <div class="form-group">
				<button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        <?php echo$this->Form->end();?>
                        <?php echo$this->Html->image('close-btn.png',array('class'=>'mfp-close'));?>
                    </div>
                </div>
            </div>
        </div>
       <!-- register form close -->
       <!--================Frist Main hader Area =================-->
        <header class="header_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
		    <?php if(strlen($frontLogo)>0){?><?php echo $this->Html->link($this->Html->image($frontLogo,array('alt'=>$siteName,'class'=>'img-responsive')),array('controller'=>'pages','action'=>''),array('escape'=>false,'class'=>'navbar-brand'));} else{?><?php echo$siteName;?><?php }?>
                    
                </div>

		
		
		 
 
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
			<div class="pull-right" >
 <?php if(strlen($contact[0])>0){?>
	    <a href="#" class="text-topheading"><i class="fa fa-phone"></i>&nbsp; <strong><span class="text-topheading"><?php echo$contact[0];?></span></strong></a><?php }?>
	    <?php if(strlen($contact[1])>0){?>
	    <a href="mailto:<?php echo$contact[1];?>"  class="text-topheading"><i class="fa fa-envelope"></i>&nbsp;<strong><span class="text-topheading"><?php echo$contact[1];?></span></strong></a><?php }?>
	    <?php if(strlen($contact[2])>0){?>
	    <a href="<?php echo$contact[2];?>"  class="text-topheading" target="_blank"><i class="fa fa-facebook"></i>&nbsp;<strong><span class="text-topheading"><?php echo __('follow on facebook');?></span></strong></a><?php }?>
	    </div>
			
			
                    <ul class="nav navbar-nav ">
			  <li><?php echo $this->Html->link('<span class="fa fa-home"></span>&nbsp;'.__('Home'),array('controller' => 'pages'),array('escape' => false,'class'=>'data-toggle'));?></li>
			  <?php foreach($contents as $menu): $menuName=h($menu['Content']['link_name']);
			  if($menu['Content']['is_url']=="External"){?><li><?php echo$this->Html->Link($menu['Content']['link_name'],$menu['Content']['url'],array('target'=>$menu['Content']['url_target']));?>></li><?php }else{?><li <?php echo (strtolower($contentId)==strtolower($menu['Content']['page_url']))?>"><?php echo $this->Html->link($menuName,array('controller' => 'Contents','action'=>'pages',$menu['Content']['page_url']),array('escape' => false));?></li><?php }?>
			  <?php endforeach;unset($menu);unset($menuName);?>
			    <?php if($this->Session->check('Member')){?>
			    <li class="dropdown submenu">
			<?php echo $this->Html->link('<span class="fa fa-user"></span>&nbsp;'.__('My Account').'<span class="caret"></span>',array('controller' => 'Dashboards', 'action' => 'index'),array('escape' => false,'class'=>'dropdown-toggle'));?>	
		              <ul class="dropdown-menu" role="menu">
				<li><?php  echo$this->Html->link('<span class="fa fa-power-off"></span>&nbsp;'.__('Sign Out'),array('controller'=>'Users','action'=>'logout'),array('escape' => false));?></li>
			        </ul>
		            </li>
			    <?php }?>
			      <li class="dropdown submenu ">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search"></span>&nbsp;<?php echo __('Search');?><span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
				<li><?php  echo$this->Html->link(__('Quick Search'),array('controller'=>'Searches','action'=>'Quick'),array('escape' => false));?></li>
			        <li><?php  echo$this->Html->link(__('Regular Search'),array('controller'=>'Searches','action'=>'Regular'),array('escape' => false));?></li>	
		                <li><?php  echo$this->Html->link(__('Advanced Search'),array('controller'=>'Searches','action'=>'Advanced'),array('escape' => false));?></li>
				<li><?php  echo$this->Html->link(__('Profile By Id'),array('controller'=>'Searches','action'=>'Profile'),array('escape' => false));?></li>
		               </ul>
		            </li>
			    <li><?php  echo$this->Html->link('<span class="fa fa-briefcase"></span>&nbsp;'.__('Plans'),array('controller'=>'Plans','action'=>'index'),array('escape' => false));?></li>
		        <?php
			
			if($frontRegistration==1 && !$this->Session->check('Member')){?>
			<li><?php echo $this->Html->link('<span class="fa fa-user-plus"></span>&nbsp;'.__('Registration'),'javascript:void(0);',array('onclick'=>"show_modal('$urlRegister');",'escape'=>false,'class'=>'popup-with-zoom-anim'));?></li>
                        <!--<li><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>&nbsp;<?php echo __('Registration');?></a></li>-->
			<?php }?>
			<?php  if(!$this->Session->check('Member')){?>
		         <li><a class="popup-with-zoom-anim" href="#small-dialog"><i class="fa fa-key"></i>&nbsp;<?php echo __('Login');?></a></li>
		    <?php }?>
		    </ul>
			
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================Frist Main hader Area =================-->	
	
	
	
	
	
	
	
<!-- ============================  Navigation End ============================ -->

<?php echo $this->fetch('content');?>
<!-- ////////////////////////////////////////////////////////////////////////////footer////////////////////////////////////////////////////////////////////////-->	
<!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="vero_widget">
                                    <h4><span><?php echo $about['Content']['link_name'];?></span></h4>
                                    <p><?php echo substr($about['Content']['main_content'],0,140);?>&nbsp;&nbsp;
			               <?php echo $this->Html->link(__('More..'),array('controller' => 'Contents','action'=>'pages',$about['Content']['page_url']),array('escape' => false));?></p>
                                    
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3><?php echo __('Help & Support');?></h3>
                                </div>
                                <div class="information_widget">
                                    <ul>
					<li>
					<?php echo $this->Html->link(__('24x7 Live help'),array('controller' => 'Contents','action'=>'pages','live-help'),array('escape' => false));?>
				        </li>
					<li>
						<?php echo $this->Html->link(__('Contact us'),array('controller' => 'Contacts','action'=>'index'),array('escape' => false));?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Success Stories'),array('controller' => 'Testimonials','action'=>'index'),array('escape' => false));?>
					</li>
				   </ul>
                                </div>
                            </aside>
                        </div>
			<div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3><?php echo __('Quick Links');?></h3>
                                </div>
                                <div class="information_widget">
                                    <ul>
					<li>
					<?php echo $this->Html->link(__('Profiles'),array('controller' => 'Viewprofiles','action'=>'index'),array('escape' => false));?>
				        </li>
    				
					<li>
						<?php echo $this->Html->link(__('Privacy Policy'),array('controller' => 'Contents','action'=>'pages','privacy-policy'),array('escape' => false));?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Terms and Conditions'),array('controller' => 'Contents','action'=>'pages','terms-and-conditions'),array('escape' => false));?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Services'),array('controller' => 'Contents','action'=>'pages','services'),array('escape' => false));?>
					</li>
				   </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Browse By</h3>
                                </div>
                                <div class="recent_post_widget"><div class="welcome_item">
               <h3 style="color: white;"><?php echo __('Religion');?> </h3>
	       <?php foreach($religion as $value):$id=$value['Religion']['id'];$name="religion";
	             echo '<strong>'.$this->Html->link($value['Religion']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['Religion']['name'],'class'=>'')).'</strong>';?>
		    <span>|</span>
		    <?php endforeach;unset($value);?>
	        </div>
	        <div class="welcome_item">
               <h3 style="color: white;"><?php echo __('Community');?> </h3>
		     <?php foreach($mothertongue as $value):$id=$value['Mothertongue']['id'];$name="mothertongue";
	             echo '<strong>'.$this->Html->link($value['Mothertongue']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['Mothertongue']['name'],'class'=>'')).'</strong>';?>
		    <span>|</span>
		    <?php endforeach;unset($value);?>
	        </div>
	        
	        <div class="welcome_item" style="padding: 5px;">
               <h3 style="color: white;"><?php echo __('Location');?> </h3>
	       <?php foreach($state as $value):$id=$value['State']['id'];$name="state";
	       echo '<strong>'.$this->Html->link($value['State']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['State']['name'],'class'=>'')).'</strong>';?>
	       <span>|</span>
	       <?php endforeach;unset($value);?>
	      </div>
                                </div>
                            </aside>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright_left">
                    <div class="copyright_text">
                        <h4><?php echo __('&copy; Copyright');?> <?php echo$this->Time->format('Y',$siteTimezone);?> <?php echo$siteName;?> | <?php echo __('Time');?> <span><?php echo $this->Time->format('d-m-Y h:i:s A',$siteTimezone);?></span></h4>
                    </div>
                </div>
                <div class="copyright_right">
                    <div class="copyright_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>  

    <div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content"></div>
    </div>
    
<div id="chaturl" style="display: none;"><?php echo$this->Html->url(array('controller'=>'chat','action'=>'Chats'));?></div>
</body>
</html>
<?php


		echo $this->Html->script('/design1000/js/bootstrap.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/jquery.themepunch.tools.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/jquery.themepunch.revolution.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.actions.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.carousel.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.kenburn.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.layeranimation.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.migration.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.navigation.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.parallax.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.slideanims.min');
		echo $this->Html->script('/design1000/vendors/revolution/js/extensions/revolution.extension.video.min');
		echo $this->Html->script('/design1000/vendors/image-dropdown/jquery.dd.min');
		echo $this->Html->script('/design1000/vendors/animate-css/wow.min');
		echo $this->Html->script('/design1000/vendors/magnific-popup/jquery.magnific-popup.min');
		echo $this->Html->script('/design1000/vendors/bootstrap-selector/bootstrap-select');
		echo $this->Html->script('/design1000/vendors/bootstrap-datepicker/js/moment-with-locales');
		echo $this->Html->script('/design1000/vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min');
	        echo $this->Html->script('/design1000/vendors/counter-up/waypoints.min');
	        echo $this->Html->script('/design1000/vendors/counter-up/jquery.counterup.min');
		echo $this->Html->script('/design1000/vendors/owl-carousel/owl.carousel.min');
		echo $this->Html->script('/design1000/vendors/bs-tooltip/jquery.webui-popover.min');
		echo $this->Html->script('/design1000/vendors/jquery-ui/jquery-ui');
		echo $this->Html->script('/design1000/js/video_player');
		echo $this->Html->script('/design1000/js/theme');
		?>