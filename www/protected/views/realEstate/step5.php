<h3>Page 5 of 6 - Add photos and virtual tour</h3>
<div style="text-align:right;"><b>Property Listing- Free Full page Listings for all FSBONI Members</b></div>
<div class="clear">&nbsp;</div>
 <div class="contact_row"> <p>Upload 4 photos now. You will be able to upload up to 10 total photos per listing</p></div>
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
               
                  <div class="left_area">Upload Photo<div> 
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
				
				<div class="contact_row">
               
                  <div class="left_area">Upload Additional Photos<div> 
                  </div></div>
                  <div class="right_area"> <?php echo $form->fileField($model, 'att_dett_style'); ?>
                             <br />
                             Best suited image size(374*322) in pixels.
                            </div>
                             
                </div>
				
				<div class="contact_row">
                  <div class="left_area"><?php echo $form->labelEx($model,'youtube'); ?></div>
                  <div class="right_area">  http:// <?php echo $form->textField($model,'youtube',array()); ?></div>
                          </div> 
						  
						  <div class="contact_row">
                  <div class="left_area"><?php echo $form->labelEx($model,'open_house'); ?></div>
                  <div class="right_area">
				  <?php echo $form->dropDownList($model, 'open_house', array('today' => 'Today', 'saturday' => 'Saturday', 'sunday' => 'Sunday'), array('prompt' => 'None', 'class' => 'w100')); ?>
				  
				  <?php echo $form->dropDownList($model, 'open_house_to_time', array('6am' => '6am', '7am' => '7am', '8am' => '8am', '9am' => '9am', '10am' => '10am', '11am' => '11am', '12am' => '12am'), array('class' => 'w70')); ?>
                    to
					<?php echo $form->dropDownList($model, 'open_house_from_time', array('1pm' => '1pm', '2pm' => '2pm', '3pm' => '3pm', '4pm' => '4pm', '5pm' => '5pm', '6pm' => '6pm', '7pm' => '7pm', '8pm' => '8pm', '9pm' => '9pm'), array('class' => 'w70')); ?>
                  </div> 
                </div>

    <div class="clear">&nbsp;</div>

    <div align="center">
        <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/optional.png', array('class' => 'mlr10', 'name' => 'step6')); ?>

    </div>



    <?php $this->endWidget(); ?>

</div>

