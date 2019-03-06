<?php
class Testimonial extends AppModel
{
  public $validationDomain = 'validation';
  public $belongsTo=array('Member');
  public $actsAs = array('search-master.Searchable','Upload.Upload' => array(
            'photo' => array(
                'pathMethod'=>'flat',
                'thumbnailSizes' => array(
                    '' => '150x150',
                ),
                'path' => '{ROOT}webroot{DS}img{DS}testimonial{DS}',
                'thumbnailPath' => '{ROOT}webroot{DS}img{DS}testimonial_thumb{DS}',
                'thumbnailMethod' => 'php',
                'thumbnailPrefixStyle' => false,
                'thumbnailType'=>true
            ),
        )
    );
 public $validate = array('name' => array('alphaNumeric' => array('rule' => 'alphaNumericCustom','required' => true,'allowEmpty'=>false,'message' => 'Only letters and numbers allowed')),
                          'photo' => array('isValidExtension' =>array('rule' => array('isValidExtension', array('jpg', 'jpeg', 'png'),false),'allowEmpty'=>false,'message' => 'File does not have a valid extension'),
                                           'isValidMimeType' => array('rule' => array('isValidMimeType', array('image/jpeg','image/png','image/bmp','image/gif'),false),'allowEmpty'=>true,'message' => 'You must supply a JPG, GIF  or PNG File.')),
                          );
  public $filterArgs = array('keyword' => array('type' => 'like','field'=>'Testimonial.name'));
}
?>