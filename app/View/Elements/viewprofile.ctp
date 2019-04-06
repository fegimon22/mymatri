<div class="col-md-10"> 
							<div>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"><?php echo __('Personal & Hobbies Info');?></a></li>
								  <li role="presentation"><a href="#basic" aria-controls="basic" role="tab" data-toggle="tab"><?php echo __('Basic & Religion Details');?></a></li>
								  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo __('Professional & Location ');?></a></li>
								  <li role="presentation"><a href="#familyprofile" aria-controls="familyprofile" role="tab" data-toggle="tab"><?php echo __('Family Details');?></a></li>
								  <li role="presentation"><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab"><?php echo __('Photos');?></a></li>
								</ul>
							     <?php //echo print_r($post); ?> 
								<!-- Tab panes -->
								<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="personal">
								<div class="table-responsive"> 
								<table class="table table-bordered">
								<tr>
								<td><strong><small class="text-primary"><?php echo __('In My Own Words');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo h($post['Member']['about_me']);?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('About My Family');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo h($post['Member']['about_family']);?></small></strong></td>								
								</tr>
								<?php if($luserId==1){?>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Featured Profile');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo h($post['Member']['feature']);?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Register Date');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear.$dateGap.$sysHour.$timeSep.$sysMin.$dateGap.$sysMer,$post['Member']['created']);?></small></strong></td>								
								</tr>					
								<?php }?>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Last Login');?></small></strong></td>
								<td colspan="3"><strong><small class="text-danger"><?php if($post['Member']['last_login']==null){echo __('not specified');}else{ echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear.$dateGap.$sysHour.$timeSep.$sysMin.$dateGap.$sysMer,$post['Member']['last_login']);}?></small></strong></td>								
																
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Interests');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['interests']){ echo h($post['Member']['interests']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Favourite music');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['favourite_music']){ echo h($post['Member']['favourite_music']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Favourite Reads');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['favourite_reads']){ echo h($post['Member']['favourite_reads']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Preffered Movies');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['preffered_movies']){ echo h($post['Member']['preffered_movies']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Sports Fitness Activities');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['sports_fitness_activities']){ echo h($post['Member']['sports_fitness_activities']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Favorite Cusine');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['favorite_cusine']){ echo h($post['Member']['favorite_cusine']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Preffered Dress style');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['preffered_dress_style']){ echo h($post['Member']['preffered_dress_style']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Spoken languages');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['spoken_languages']){ echo h($post['Member']['spoken_languages']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Know Cooking');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['know_cooking']){ echo h($post['Member']['know_cooking']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Hobbies');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['hobbies']){ echo h($post['Member']['hobbies']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								</table>
								</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="basic">
								<div class="table-responsive"> 
								<table class="table table-bordered">
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Profile created for');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo h($post['Member']['profile_created']);?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Name');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['name']){ echo h($post['Member']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('User Name');?></small></strong></td>
								<td><strong><small class="text-danger"><?php echo h($post['Member']['user_name']);?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Date of Birth');?></small></strong></td>
								<td><strong><small class="text-danger"><?php  if($post['Member']['dob']==null){echo __('not specified');}else{ echo$this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,$post['Member']['dob']);}?></small></stromg></td>
							        </tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Age');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['age']){ echo h($post['Member']['age']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Height');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Height']['name']){ echo h($post['Height']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Weight');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Weight']['name']){ echo h($post['Weight']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Marital Status');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Maritialstatus']['name']){ echo h($post['Maritialstatus']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Body Type');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['body_type']){ echo h($post['Member']['body_type']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Complexion');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['complexion']){ echo h($post['Member']['complexion']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Physical Status');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['physical']){ echo h($post['Member']['physical']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Mother Tongue');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Mothertongue']['name']){ echo h($post['Mothertongue']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Eating Habbits');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Habit']['name']){ echo h($post['Habit']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Drinking Habits');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['drinks_type']){ echo h($post['Member']['drinks_type']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Smoking Habbits');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['smoking_type']){ echo h($post['Member']['smoking_type']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Religion');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Religion']['name']){ echo h($post['Religion']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Caste');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Caste']['name']){ echo h($post['Caste']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td></td>
								<td></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary">
								<?php if($custom[0]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[0]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[0]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field1']){ echo h($post['Member']['field1']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								<td><strong><small class="text-primary">
								<?php if($custom[1]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[1]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[1]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field2']){ echo h($post['Member']['field2']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary">
								<?php if($custom[2]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[2]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[2]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field3']){ echo h($post['Member']['field3']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								<td><strong><small class="text-primary">
								<?php if($custom[3]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[3]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[3]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field4']){ echo h($post['Member']['field4']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary">
								<?php if($custom[4]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[4]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[4]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field5']){ echo h($post['Member']['field5']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								<td><strong><small class="text-primary">
								<?php if($custom[5]['Sitesetting']['status']=='Enabled'){?>
								<?php echo $custom[5]['Sitesetting']['alias'];?></small></strong>
								<?php }?>
								</td>
								<td><strong><small class="text-danger">
								<?php if($custom[5]['Sitesetting']['status']=='Enabled'){?>
								<?php if($post['Member']['field6']){ echo h($post['Member']['field6']);}else{echo __('Not Specified');}?></small></strong>
								<?php }?>
								</td>								
								</tr>
															
								</table>
					                       </div>
								  </div>
								  <div role="tabpanel" class="tab-pane" id="profile">
								  <div class="table-responsive"> 
								<table class="table table-bordered">
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Highest Education');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Education']['name']){ echo h($post['Education']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('College/ Institution');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['college_name']){ echo h($post['Member']['college_name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Education in Detail');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['education_detail']){ echo h($post['Member']['education_detail']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Occupation');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Occupation']['name']){ echo h($post['Occupation']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Occupation in Detail');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['occupation_detail']){ echo h($post['Member']['occupation_detail']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Employed in');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Employed']['name']){ echo h($post['Employed']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Annual Income');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Income']['name']){ echo $currency.' '.h($post['Income']['name']);}else{echo __('not specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Address');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['address']){ echo h($post['Member']['address']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Country Living in');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Country']['name']){ echo h($post['Country']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Residing State');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['State']['name']){ echo h($post['State']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Residing Township');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Town']['name']){ echo h($post['Town']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Residing City');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['city_id']){ echo h($post['City']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Citizenship');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Country']['name']){ echo h($post['Country']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td></td>
								<td></td>								
								</tr>
								</table>
					                        </div>	
								</div>
								<div role="tabpanel" class="tab-pane" id="familyprofile">
								  <div class="table-responsive"> 
								<table class="table table-bordered">
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Family Value');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Familyvalue']['name']){ echo h($post['Familyvalue']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Family Type');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Familytype']['name']){ echo h($post['Familytype']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Family Status');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Familystatus']['name']){ echo h($post['Familystatus']['name']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Father Educated');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['father_educated']){ echo h($post['Member']['father_educated']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __("Father's Occupation");?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['father_occupation']){ echo h($post['Member']['father_occupation']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Mother Educated');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['mother_educated']){ echo h($post['Member']['mother_educated']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Mother Occupation');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['mother_occupation']){ echo h($post['Member']['mother_occupation']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('No. of Brothers');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['no_of_brother']){ echo h($post['Member']['no_of_brother']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Bothers Married');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['bothers_married']){ echo h($post['Member']['bothers_married']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('No Of Sisters');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['no_of_sister']){ echo h($post['Member']['no_of_sister']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Sisters Married');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['sisters_married']){ echo h($post['Member']['sisters_married']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Ancestral Origin');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['family_origion']){ echo h($post['Member']['family_origion']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Asset Values');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['asset_values']){ echo h($post['Member']['asset_values']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td></td>
								<td></td>								
								</tr>
								</table>
					                        </div>	
								</div>
								
								<div role="tabpanel" class="tab-pane" id="photo">
								<div class="table-responsive"> 
								<table class="table table-bordered">
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Contact Person');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['contact_person']){ echo h($post['Member']['contact_person']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Phone Number');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['phone']){ echo h($post['Member']['phone']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('Email-Id');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['email']){ echo h($post['Member']['email']);}else{echo __('Not Specified');}?></small></strong></td>								
								<td><strong><small class="text-primary"><?php echo __('Facebook Id');?></small></strong></td>
								<td><strong><small class="text-danger"><?php if($post['Member']['facebook']){ echo h($post['Member']['facebook']);}else{echo __('Not Specified');}?></small></strong></td>								
								</tr>
								<tr>
								<td><strong><small class="text-primary"><?php echo __('NRC Card');?></small></strong></td>
								<td colspan="3"><?php $proofImg='proof/'.$post['Member']['proof']; 
								echo$this->Html->image($proofImg,array('class'=>'img-responsive','width'=>'30%','height'=>'30%'));?></td>								
															
								</tr>
								</table>
					                        </div>	
								<div class="col-sm-12">
								
								<?php if(!$postPhoto)
								       echo '<span class=text-danger>'.__('No Photo Available').'</span>';
								 foreach ($postPhoto as $value):
			                                              $memberphotoId=$value['MembersPhoto']['id'];
			                                             $memberImg='member_thumb/'.$value['MembersPhoto']['photo'];
			                                         
			                                       ?>
								<div class="col-sm-4 mrg">
								<?php echo$this->Html->image($memberImg,array('class'=>'img-responsive','width'=>'30%','height'=>'30%'));?>
								<?php echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;'.__('Remove'),array('controller'=>'Members','action'=>'del',$memberphotoId),array('escape'=>false));?>
								<?php if($value['MembersPhoto']['photo_status']=='Pending'){ echo $this->Html->Link('<span class="fa fa-edit"></span>&nbsp;'.__('Approved'),array('controller'=>'Members','action'=>'approvedphoto',$memberphotoId),array('escape'=>false));}?>
								<?php if($value['MembersPhoto']['photo_status']=='Approved'){ echo $this->Html->Link('<span class="fa fa-remove"></span>&nbsp;'.__('Pending'),array('controller'=>'Members','action'=>'pendingphoto',$memberphotoId),array('escape'=>false));}?>
								
								</div>
								<?php endforeach; ?>
			                                        <?php unset($value); ?>
								</div>	
								</div>
								
								</div>
						       </div>
						</div>