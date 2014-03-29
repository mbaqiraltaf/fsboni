<h3>Add Additional Photos</h3>
<div style="text-align:right;"><b>Property Listing- Free Full page Listings for all FSBONI Members</b></div>
<div class="clear">&nbsp;</div>
<div class="contact_row"> <p>Upload 3 photos now. You will be able to upload up to 10 total photos per listing</p></div>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'fs-property-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'stateful' => true,
    ));
    ?>

    <div class="contact_row">

        <div class="left_area">Upload Additional Photos<div> 
            </div></div>
        <div class="right_area"> <?php echo $form->fileField($model, 'att_dett_style'); ?>
            <br />
            Best suited image size(374*322) in pixels.
        </div>

    </div>

    <div class="contact_row">

        <div class="left_area">Upload Additional Photos<div> 
            </div></div>
        <div class="right_area"> <?php echo $form->fileField($model, 'att_dett_style'); ?>
            <br />
            Best suited image size(374*322) in pixels.
        </div>

    </div>

    <div class="contact_row">

        <div class="left_area">Upload Additional Photos<div> 
            </div></div>
        <div class="right_area"> <?php echo $form->fileField($model, 'att_dett_style'); ?>
            <br />
            Best suited image size(374*322) in pixels.
        </div>

    </div>    

    <div class="clear">&nbsp;</div>

    <div align="center">
<?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/optional.png', array('class' => 'mlr10', 'name' => 'step6')); ?>

    </div>

<?php $this->endWidget(); ?>

</div>

