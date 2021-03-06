<?php
class Town extends AppModel
{
  public $validationDomain = 'validation';
  public $belongsTo=array('Country','State');
  public $actsAs = array('search-master.Searchable');
  public $filterArgs = array('keyword' => array('type' => 'like','field'=>array('Town.name','state.name','Country.name')));
  public $validate = array('name' => array('alphaNumeric' => array('rule' => 'alphaNumericCustom','required' => true,'allowEmpty'=>false,'message' => 'Only letters and numbers allowed'),
                                                 'isUnique'=>array('rule' => 'isUnique','message' => 'Township  already exist'))
                            );
}
?>