<section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="<?php echo __('Transaction').' '.__('History');?>">
		     <?php echo$this->Html->image('banner/t-left-img.png',array('class'=>'left_img'));?> 
			<?php echo __('Transaction').'  '.__('History');?>
		     <?php echo$this->Html->image('banner/t-right-img.png',array('class'=>'right_img'));?>
                </div>
            </div>
</section>
<div class="grid_3">
  <div class="container">
  <?php echo $this->Session->flash();?>
   <div class="col-sm-12">
    <?php echo $this->element('menunavigation');?>
    <div class="col-sm-9">
   <?php echo $this->element('pagination',array('IsSearch'=>'No','IsDropdown'=>'No'));
		$page_params = $this->Paginator->params();
		$limit = $page_params['limit'];
		$page = $page_params['page'];
		$serial_no = 1*$limit*($page-1)+1;?>
	
   <div class="services">
   <div class=""><span class="text-danger"><strong><?php echo __('Remaining Contact');?></strong></span> <span class="text-info"><strong>(<?php echo$totalContact;?>)</strong></span></div>
			<table class="table table-striped table-bordered">
			<tr>
				<th><?php echo __('#');?></th>
				<th><?php echo __('Transaction ID');?></th>
				<th><?php echo __('Plan');?></th>
				<th><?php echo __('Amount');?></th>
				<th><?php echo __('Date');?></th>
				<th><?php echo __('Type');?></th>
				<th><?php echo __('Remarks');?></th>
			</tr>
			<?php foreach($Transactionhistory as $post):?>
			<tr>
				<td><?php echo$serial_no++;?></td>
				<td><?php echo$post['Transactionhistory']['transaction_id'];?></td>
				<td><?php echo$post['Plan']['name'];?></td>
				<td><?php echo$currency.$post['Transactionhistory']['amount'];?></td>
				<td><?php echo$this->Time->format($dtFormat,$post['Transactionhistory']['date']);?></td>
				<td><?php echo$post['Transactionhistory']['type'];?></td>
				<td><?php echo$post['Transactionhistory']['remarks'];?></td>
			</tr>
			<?php endforeach;unset($post);?>
			</table>
   </div>
<div class="clearfix"> </div>
    </div>
</div>
  </div>
</div>