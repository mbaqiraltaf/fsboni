<h3>Page 6 of 6 - Optional Services</h3>
<div class="clear">&nbsp;</div>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'fs-property-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'stateful'=>true,
    )); ?>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'list_home_inMls'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'list_home_inMls', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'virtual_tour'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'virtual_tour', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'real_estate_attorney'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'real_estate_attorney', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'home_warantee'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'home_warantee', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'appraiser'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'appraiser', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'home_inspector'); ?></div>
        <div class="right_area">
            <?php echo $form->radioButtonList($model, 'home_inspector', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="clear">&nbsp;</div>

    <div align="center">
        <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'save')); ?>

    </div>

    <?php $this->endWidget(); ?>

</div>
