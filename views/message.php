<?php if ($this->session->flashdata('SUCCESS')) {?>
<div role="alert"  class="alert alert-success">
	
<?=$this->session->flashdata('SUCCESS')?>
</div>
<?php }?>
<?php if ($this->session->flashdata('ERROR')) {?>

<div role="alert" class="alert alert-danger">
	
<?=$this->session->flashdata('ERROR')?>
</div>
<?php }?>

<?php if($this->session->flashdata('Message')) { ?>
<div role="alert" class="alert alert-danger">
	
	<?=$this->session->flashdata('Message')?>
</div>
<?php } ?>

<?php if($this->session->flashdata('SUCCESSMSGREGISTER')) { ?>
<div role="alert" class="alert alert-success">
	
	<?=$this->session->flashdata('SUCCESSMSGREGISTER')?>
</div>
<?php } ?>

 <?php if (validation_errors()) { ?>
    <div  class="alert alert-danger alert-dismissable">
        <?php echo validation_errors(); ?>
    </div>
<?php } ?>
