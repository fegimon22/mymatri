<?php
App::uses('CakeTime', 'Utility');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('CakeEmail', 'Network/Email');
class MembersController extends AdminAppController {
    public $helpers = array('Html', 'Form','Session','Paginator','Paginator','Js'=> array('Jquery'));
    public $components = array('Session','Paginator','search-master.Prg','CustomFunction');
    public $presetVars = true;
    var $paginate = array('page'=>1,'order'=>array('Member.id'=>'desc'));
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->currentDateTime=CakeTime::format('Y-m-d H:i:s',CakeTime::convert(time(),$this->siteTimezone));
        $this->currentDate=CakeTime::format('Y-m-d',CakeTime::convert(time(),$this->siteTimezone));
        $this->adminId=$this->adminValue['User']['id'];        
    }
    public function index()
    {
        try
        {
            
            $this->Prg->commonProcess();
            $this->Paginator->settings = $this->paginate;
            $this->Paginator->settings['limit']=$this->pageLimit;
            $this->Paginator->settings['maxLimit']=$this->maxLimit;
            $this->Paginator->settings['conditions'] = array($this->Member->parseCriteria($this->Prg->parsedParams()));
            $this->set('Member', $this->Paginator->paginate());
            $this->set('luserId',$this->luserId);
            if ($this->request->is('ajax'))
            {
                $this->render('index','ajax'); // View, Layout
            }
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
        }
    }
    public function add()
    {
        $countryId=null;$religionId=null;$stateId=null;
        if ($this->request->is('post'))
        {   
            try
            {
                $profileId=substr(rand(),0,6);
                $password = $this->request->data['Member']['password'];
                $this->request->data['Member']['reg_status'] = "Done";
                $this->request->data['Member']['status'] = "Active";
                $this->request->data['Member']['reg_code'] = "";
                $this->request->data['Member']['renewal_date'] = $this->currentDate;
                $this->request->data['Member']['profileId'] = $profileId;
                
                $horoscopeName = $this->request->data['Member']['horoscopeimg']['name'];
                $horoscopeTmp = $this->request->data['Member']['horoscopeimg']['tmp_name'];
                $horoscopefileName=$this->CustomFunction->upload($horoscopeTmp,$horoscopeName,'horoscope',$this->siteOrganization);
                if(strlen($horoscopefileName)>0)
                {
                    //$this->request->data['Profile']['horoscopeimg']=$horoscopefileName;
                    //$horoscoperecord=array('Member'=>array('profileId'=>$profileId,'horoscope'=>$horoscopefileName));
                    //$this->Member->save($horoscoperecord);

                    $this->request->data['Member']['horoscope'] = $horoscopefileName;
                }
                
                $proofName = $this->request->data['Member']['proofimg']['name'];
                $proofTmp = $this->request->data['Member']['proofimg']['tmp_name'];
                $prooffileName=$this->CustomFunction->upload($proofTmp,$proofName,'proof',$this->siteOrganization);
                if(strlen($prooffileName)>0)
                {
                    //$this->request->data['Profile']['horoscopeimg']=$horoscopefileName;
                   // $proofrecord=array('Member'=>array('profileId'=>$profileId,'proof'=>$prooffileName));
                   // $this->Member->save($proofrecord);

                   $this->request->data['Member']['proof'] = $prooffileName;
                }

                $photoName=$this->request->data['Member']['photoimg']['name'];
                $photoTmp=$this->request->data['Member']['photoimg']['tmp_name'];
                $fileName=$this->CustomFunction->upload($photoTmp,$photoName,'member',$this->siteOrganization);
                if(strlen($fileName)>0)
                {
                                    //$this->Register->unbindValidation('remove', array('user_name','email','name','password','phone'), true);
                                    //$record=array('Register'=>array('id'=>$this->Register->id,'photo'=>$fileName));
                                    //$this->Register->save($record);
                                    $this->request->data['Member']['photo'] = $fileName;
                }

                   $this->Member->create();
                 //print_r($this->request->data); echo $this->request->data['Member']['horoscopeimg']['name'];die;
                   // print_r($this->Member->save($this->request->data));die;
                  if($this->Member->save($this->request->data))
                    { //echo "fdfsdf";die;
                        // $email=$this->request->data['Member']['email'];$memberName=$this->request->data['Member']['name'];
                        // $mobileNo=$this->request->data['Members']['phone'];
                        // $siteName=$this->siteName;$siteEmailContact=$this->siteEmailContact;$url=$this->siteDomain;
                        // if($email)
                        // {   $this->emailNotification='';
                        //     if($this->emailNotification)
                        //     {                          
                        //         /* Send Email */
                        //         $this->loadModel('Emailtemplate');
                        //         $emailSettingArr=$this->Emailtemplate->findByType('SLC');
                        //         if($emailSettingArr['Emailtemplate']['status']=="Published")
                        //         {
                        //             $message=eval('return "' . addslashes($emailSettingArr['Emailtemplate']['description']) . '";');
                        //             $Email = new CakeEmail();
                        //             $Email->transport($this->emailSettype);
                        //             if($this->emailSettype=="Smtp")
                        //             $Email->config(array('host' => $this->emailHost,'port' =>  $this->emailPort,'username' => $this->emailUsername,'password' => $this->emailPassword));
                        //             $Email->from(array($this->siteEmail =>$this->siteName));
                        //             $Email->to($email);
                        //             $Email->template('default');
                        //             $Email->emailFormat('html');
                        //             $Email->subject($emailSettingArr['Emailtemplate']['name']);
                        //             $Email->send($message);
                        //             /* End Email */
                        //         }
                        //     }
                        // }
                        // $this->smsNotification ='';
                        // if($this->smsNotification)
                        // {
                        //     /* Send Sms */
                        //     $this->loadModel('Smstemplate');
                        //     $smsTemplateArr=$this->Smstemplate->findByType('SLC');
                        //     if($smsTemplateArr['Smstemplate']['status']=="Published")
                        //     {
                        //         $url="$this->siteDomain";
                        //         $message=eval('return "' . addslashes($smsTemplateArr['Smstemplate']['description']) . '";');
                        //         $this->CustomFunction->sendSms($mobileNo,$message,$this->smsSettingArr);
                        //     }
                        //     /* End Sms */
                        // }

                        echo $Id = $this->Member->getLastInsertID();
                        $this->loadModel('MembersPhoto');
                        $photoArr=array();
                        $dirName="member";
                        foreach($this->request->data['Pr']['photo'] as $Photo)
                        {
                            $fileName=$this->CustomFunction->upload($Photo['tmp_name'],$Photo['name'],$dirName,$this->siteOrganization);
                            if(strlen($fileName)>0)
                            {
                                $photoArr[]=(array('member_id'=>$Id,'photo' => $fileName));
                            }
                        }
                        $this->MembersPhoto->saveAll($photoArr);
                        

                        $this->Session->setFlash(__('Member added Successfully'),'flash',array('alert'=>'success'));
                        return $this->redirect(array('action' => 'add'));
                    }
            
            }
            catch (Exception $e)
            {
                $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            }
            $countryId=$this->request->data['Member']['country_id'];
            $religionId=$this->request->data['Member']['religion_id'];
            $stateId=$this->request->data['Member']['state_id'];
        }
        $this->loadModel('State');
        $this->loadModel('City');
        $this->loadModel('Mothertongue');
        $this->loadModel('Maritialstatus');
        $this->loadModel('Country');
        $this->loadModel('Employed');
        $this->loadModel('Religion');
        $this->loadModel('Caste');
        $this->loadModel('Height');
        $this->loadModel('Education');
        $this->loadModel('Habit');
        $this->loadModel('Occupation');
        $this->loadModel('Rashy');
        $this->loadModel('Weight');
        $this->loadModel('Income');
        $this->loadModel('Town');
        $this->loadModel('Familyvalue');
        $this->loadModel('Familytype');
        $this->loadModel('Familystatus');
        $this->set('mothertongueName',$this->Mothertongue->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('stateName',$this->State->find('list',array('conditions'=>array('State.country_id'=>$countryId),'order'=>array('State.name'=>'asc'))));
        $this->set('cityName',$this->City->find('list',array('conditions'=>array('City.state_id'=>$stateId),'order'=>array('City.name'=>'asc'))));
        $this->set('countryName',$this->Country->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('employedName',$this->Employed->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('religionName',$this->Religion->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('casteName',$this->Caste->find('list',array('conditions'=>array('Caste.religion_id'=>$religionId),'order'=>array('Caste.name'=>'asc'))));
        $this->set('maritialstatusName',$this->Maritialstatus->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('heightName',$this->Height->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('educationName',$this->Education->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('habitName',$this->Habit->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('occupationName',$this->Occupation->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('rashiName',$this->Rashy->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('weightName',$this->Weight->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('incomeName',$this->Income->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('townName',$this->Town->find('list',array('conditions'=>array('Town.state_id'=>$stateId),'order'=>array('Town.name'=>'asc'))));
        $this->set('familyValue',$this->Familyvalue->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('familyType',$this->Familytype->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('familyStatus',$this->Familystatus->find('list',array('order'=>array('name'=>'asc'))));
        
    }
    public function edit($id = null)
    {
        $this->loadModel('State');
        $this->loadModel('City');
        $this->loadModel('Mothertongue');
        $this->loadModel('Maritialstatus');
        $this->loadModel('Country');
        $this->loadModel('Employed');
        $this->loadModel('Religion');
        $this->loadModel('Caste');
        $this->loadModel('Height');
        $this->loadModel('Education');
        $this->loadModel('Habit');
        $this->loadModel('Occupation');
        $this->loadModel('Rashy');
        $this->loadModel('Weight');
        $this->loadModel('Income');
        $this->loadModel('Town');
        $this->loadModel('Familyvalue');
        $this->loadModel('Familytype');
        $this->loadModel('Familystatus');
        $this->set('mothertongueName',$this->Mothertongue->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('countryName',$this->Country->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('employedName',$this->Employed->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('religionName',$this->Religion->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('maritialstatusName',$this->Maritialstatus->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('heightName',$this->Height->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('educationName',$this->Education->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('habitName',$this->Habit->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('occupationName',$this->Occupation->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('rashiName',$this->Rashy->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('weightName',$this->Weight->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('incomeName',$this->Income->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('townName',$this->Town->find('list',array('order'=>array('Town.name'=>'asc'))));
        $this->set('familyValue',$this->Familyvalue->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('familyType',$this->Familytype->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('familyStatus',$this->Familystatus->find('list',array('order'=>array('name'=>'asc'))));
        $this->set('luserId',$this->luserId);

       // echo "SDSDSDS".$id;die;
        if (!$id)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        $ids=explode(",",$id);
        $post=array();
        $group_select=array();
        foreach($ids as $k=>$id)
        {
            $k++;
            $post[$k]=$this->Member->findByid($id);
            $stateName=$this->State->find('list',array('order'=>array('name'=>'asc'),
                                                       'conditions'=>array('State.country_id'=>$post[$k]['Member']['country_id'])));
            $this->set("stateName$k",$stateName);
            $cityName=$this->City->find('list',array('order'=>array('name'=>'asc'),
                                                     'conditions'=>array('City.town_id'=>$post[$k]['Member']['town_id'])));
            $this->set("cityName$k",$cityName);
            $townName=$this->Town->find('list',array('order'=>array('name'=>'asc'),
                                                     'conditions'=>array('Town.state_id'=>$post[$k]['Member']['state_id'])));
//print_r($townName);die;
            $this->set("townName$k",$townName);
            $casteName=$this->Caste->find('list',array('order'=>array('name'=>'asc'),
                                                       'conditions'=>array('Caste.religion_id'=>$post[$k]['Member']['religion_id'])));
            $this->set("casteName$k",$casteName);
        }
        //print_r($post);die;
        $this->set('Member',$post);
         
        if (!$post)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put')))
        { 
            $isSave=true;
            try
            {
                foreach($this->request->data as $k=> $value)
                { //print_r($value['Member']['status']);die;
                    if(@$value['Member']['status']=="Active")
                    {
                        $this->request->data[$k]['Member']['reg_status']="Done";
                        $this->request->data[$k]['Member']['reg_code']="";
                    }                     
                }
                
                if($isSave==true)
                {
               /* $horoscopeName = $this->request->data[$k]['Member']['horoscopeimg']['name'];
                $horoscopeTmp = $this->request->data[$k]['Member']['horoscopeimg']['tmp_name'];
                $horoscopefileName=$this->CustomFunction->upload($horoscopeTmp,$horoscopeName,'horoscope',$this->siteOrganization);
                if(strlen($horoscopefileName)>0)
                {
                    $this->request->data[$k]['Member']['horoscopeimg']=$horoscopefileName;
                    //$horoscoperecord=array('Member'=>array('id'=>$profileId,'horoscope'=>$horoscopefileName));
                    //$this->Member->saveAll($horoscoperecord);
                }
                
                $proofName = $this->request->data[$k]['Member']['proofimg']['name'];
                $proofTmp = $this->request->data[$k]['Member']['proofimg']['tmp_name'];
                $prooffileName=$this->CustomFunction->upload($proofTmp,$proofName,'proof',$this->siteOrganization);
                if(strlen($prooffileName)>0)
                {
                    $this->request->data[$k]['Member']['horoscopeimg']=$horoscopefileName;
                    //$proofrecord=array('Member'=>array('id'=>$profileId,'proof'=>$prooffileName));
                    //$this->Member->save($proofrecord);
                }
                //print_r($this->request->data); echo $this->request->data['Member']['horoscopeimg']['name'];die;
                $photoName=$this->request->data[$k]['Member']['photoimg']['name'];
                $photoTmp=$this->request->data[$k]['Member']['photoimg']['tmp_name'];
                $fileName=$this->CustomFunction->upload($photoTmp,$photoName,'member',$this->siteOrganization);
                if(strlen($fileName)>0)
                {
                                    //$this->Register->unbindValidation('remove', array('user_name','email','name','password','phone'), true);
                                    //$record=array('Register'=>array('id'=>$this->Register->id,'photo'=>$fileName));
                                    //$this->Register->save($record);
                                    $this->request->data[$k]['Member']['photo'] = $fileName;
                }
*/
            
                 // print_r($this->request->data);die;
                    $this->Member->unbindValidation('remove', array('user_name','email','password','photo'), true);
                    
                  if($this->Member->saveAll($this->request->data))
                    {
                       // echo $isSave."SDSDS";die;
                       //debug($this->Member->validationErrors);die;
                      
                        $this->Session->setFlash(__('Member has been updated'),'flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => 'index'));
                    } else{
                        echo "elsepart";
                       echo debug($this->Member->validationErrors); die();
                    }

                   
                }                
            }
            catch (Exception $e)
            {
                $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            }
            $this->set('isError',true);
        }
        else
        {
            $this->layout = 'ajax';
            $this->set('isError',false);
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
    }    
    public function deleteall()
    {
        try
        {
        
            if ($this->request->is('post'))
            {
                foreach($this->data['Member']['id'] as $key => $value)
                {
                    if($value>0)
                    {
                        $post=$this->Member->findById($value);
                        if($post && $post['Member']['photo']){$this->CustomFunction->fileDelete($post['Member']['photo'],'member');}
                        $this->Member->delete($value);
                    }
                }
                $this->Session->setFlash(__('Member has been deleted'),'flash',array('alert'=>'success'));
            }        
            $this->redirect(array('action' => 'index'));
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function view($id = null)
    {
        try
        {
            $this->layout = null;
            if (!$id)
            {
                $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
                $this->redirect(array('action' => 'index'));
            }
            $this->loadModel('MembersPhoto');
            $postPhoto = $this->MembersPhoto->findAllByMemberId($id);
            $post = $this->Member->findById($id);
            if (!$post)
            {
                $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
                $this->redirect(array('action' => 'index'));
            }
            $this->set('postPhoto', $postPhoto);
            if(strlen($post['Member']['photo'])>0)
            $std_img='member_thumb/'.$post['Member']['photo'];
            else
            $std_img='User.png';
            $this->set('post', $post);
            $this->set('std_img', $std_img);
            $this->set('id', $id);
            $this->set('luserId',$this->luserId);
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function payment($id = null)
    {
        try
        {
            $transactionId=uniqid(rand());
            $this->layout = null;
            $this->loadModel('Plan');
            $this->loadModel('Payment');
            $this->loadModel('MembersContact');
            $this->set('planName',$this->Plan->find('list',array('fields'=>array('Plan.id','Plan.name','Plan.amount'))));
            $MemberContactArr=$this->MembersContact->findBymemberId($id);
            if (!$id)
            {
                $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
                $this->redirect(array('action' => 'index'));
            }
            if ($this->request->is('post'))
            {
                $planArr=$this->Plan->findById($this->request->data['Payment']['plan_id']);
                if(!$planArr){
                    $this->Session->setFlash(__('Please select plan'),'flash',array('alert'=>'danger'));
                    $this->redirect(array('action' => 'index'));
                }
                if(!$MemberContactArr)
                {
                    $totalContact=$planArr['Plan']['expiry'];
                    $recordArr=array('member_id'=>$id,'total_contact'=>$totalContact);
                }
                else
                {
                    $totalContact=$planArr['Plan']['expiry']+$MemberContactArr['MembersContact']['total_contact'];
                    $recordArr=array('id'=>$MemberContactArr['MembersContact']['id'],'member_id'=>$id,'total_contact'=>$totalContact);
                 }
                $this->request->data['Payment']['status']='Approved';
                $this->request->data['Payment']['amount']=$planArr['Plan']['amount'];
                $this->request->data['Payment']['member_id']=$id;
                $this->request->data['Payment']['transaction_id']=$transactionId;
                $this->request->data['Payment']['date']=$this->currentDateTime;
                $this->request->data['Payment']['type']='Administrator';
                if($this->Payment->save($this->request->data))
                { 
                    $this->MembersContact->save($recordArr);
                    $this->Session->setFlash(__('Payment has been done'),'flash',array('alert'=>'success'));
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function changepass($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $post = $this->Member->findById($id);
        if (!$post)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put')))
        {
            try
            {
                $this->Member->id = $id;
                $this->Member->unbindValidation('keep', array('password'), true);
                if ($this->Member->save($this->request->data))
                {
                    $this->Session->setFlash(__('Password Changed Successfully'),'flash',array('alert'=>'success'));
                    $this->redirect(array('action' => 'index'));
                }                
            }
            catch (Exception $e)
            {
                $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
             }
            $this->set('isError',true);
        }
        else
        {
            $this->layout = null;
            $this->set('isError',false);
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
    }
    public function changephoto($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $post = $this->Member->findById($id);
        if (!$post)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put')))
        {
            try
            {
                $this->Member->id = $id;
                $this->Member->unbindValidation('keep', array('photo'), true);
                $this->request->data['Member']['photo_status']='Approved';
                $photoName=$this->request->data['Member']['photo']['name'];
                $photoTmp=$this->request->data['Member']['photo']['tmp_name'];
                $fileName=$this->CustomFunction->upload($photoTmp,$photoName,'member',$this->siteOrganization);
                if($post['Member']['photo']){$this->CustomFunction->fileDelete($post['Member']['photo'],'member');}
                if(strlen($fileName)==0)
                {
                   $fileName=null;
                }
                $recordArr=array('Member'=>array('photo'=>$fileName,'photo_status'=>'Approved')); 
                if ($this->Member->save($recordArr))
                {
                    $this->Session->setFlash(__('Photo Changed Successfully'),'flash',array('alert'=>'success'));
                    $this->redirect(array('action' => 'index'));
                }
            }
            catch (Exception $e)
            {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
            }
            $this->set('isError',true);
        }
        else
        {
            $this->layout = null;
            $this->set('isError',false);
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
    }
    public function del($id=null)
    {
        try
        {
            if ($id!=null)
            {         
                $this->loadModel('MembersPhoto');
                $deleteArr = $this->MembersPhoto->findById($id);
                $this->CustomFunction->fileDelete($deleteArr['MembersPhoto']['photo'],'member');
                $this->MembersPhoto->Delete($id);
                $this->Session->setFlash(__('File Remove Successfully'),'flash',array('alert'=>'success'));
                $this->redirect(array('controller'=>'Members','action' => 'index'));
            }
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function approvedphoto($id=null)
    {
        try
        {
            $this->loadModel('MembersPhoto');
            $record=array('id'=>$id,'photo_status'=>'Approved');
            $this->MembersPhoto->save($record);
            $this->Session->setFlash(__('File Approved Successfully'),'flash',array('alert'=>'success'));
            $this->redirect(array('controller'=>'Members','action' => 'index'));
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function pendingphoto($id=null)
    {
        try
        {
            $this->loadModel('MembersPhoto');
            $record=array('id'=>$id,'photo_status'=>'Pending');
            $this->MembersPhoto->save($record);
            $this->Session->setFlash(__('File Pending Successfully'),'flash',array('alert'=>'success'));
            $this->redirect(array('controller'=>'Members','action' => 'index'));
        }
        catch (Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function deactive($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $post = $this->Member->findById($id);
        if (!$post)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
            try
            {
                $record=array('id'=>$id,'status'=>'Suspend');
                $this->Member->unbindValidation('remove', array('user_name','email','name','password','address','phone','dob','sex','country_id','state_id','city_id','birth_place'), true);
                if ($this->Member->save($record))
                {
                    $this->Session->setFlash(__('Profile Deactivated Successfully'),'flash',array('alert'=>'success'));
                    $this->redirect(array('action' => 'index'));
                }                
            }
            catch (Exception $e)
            {
                $this->Session->setFlash($e->getMessage(),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
            }
    }
}