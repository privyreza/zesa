<?php
/* @var $this BuyController */
/* @var $model Buy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buy-buy-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'transactionDate'); ?>
		<?php echo $form->textField($model,'transactionDate'); ?>
		<?php echo $form->error($model,'transactionDate'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Amount (in $)'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Meter Number'); ?>
		<?php echo $form->textField($model,'meterNumber'); ?>
		<?php echo $form->error($model,'meterNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Customer name (Owner of meter)'); ?>
		<?php echo $form->textField($model,'customerName'); ?>
		<?php echo $form->error($model,'customerName'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'Phone Number'); ?>
		<?php echo $form->textField($model,'phoneNumber'); ?>
		<?php echo $form->error($model,'phoneNumber'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->