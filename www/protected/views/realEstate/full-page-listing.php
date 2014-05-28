<style>
    .fields-span{margin-right: 25px;}
</style>

<div class="listing">
    <div style="float:left;">
        <div class="img_frame" id="ContentPlaceHolder1_imgFrame">
            <div class="top_bg"></div>
            <div class="mid_bg">
                <a href="#" rel="bigImage" id="bigImagexx">
                    <?php if (count($image) > 0) : ?>
                        <img src="<?php echo Yii::app()->baseUrl . '/images/propertyimages/' .$property_details->id . '/' .  $image[count($image) - 1]->image_name; ?>">
                    <?php else: ?>
                        <img src="<?php echo Yii::app()->baseUrl . '/images/prop_gallery/home.jpg'; ?>">
                    <?php endif; ?>
                </a>   

            </div>
            <div class="bottom_bg"></div>
            <div class="links_thumb">

                <span id="ContentPlaceHolder1_dvprint"><img class="middle" alt="" src="images/demo.gif">
                    <span id="ContentPlaceHolder1_print2"><a class="change_pass" href="printflyer.aspx?property_id=MTI=-wnBs6 lkshc=" id="print">Print Flyer</a></span>&nbsp;</span>                           

            </div>
        </div>
        <div class="property_info">
            <p><b>Sales Price:</b> <b style="color:red;"> <span id="ContentPlaceHolder1_property_price">$<?php echo $property_details->price_range; ?></span></b></p>
            <p><b><span id="ContentPlaceHolder1_dvNumBedroom">Bedrooms:</span></b> <span id="ContentPlaceHolder1_lblNoofBedroom"><?php echo $property_details->numbr_bedroom; ?></span></p>
            <p><b><span id="ContentPlaceHolder1_dvNumberBathroom">Bathrooms:</span></b> <span id="ContentPlaceHolder1_lblNoOfBathrooms"><?php echo $property_details->numbr_bathroom; ?></span></p>
            <p><b>Sq. Ft.:</b> <?php echo $property_details->prop_size; ?></p>
            <p><b style="padding:2px 5px; display:block; background:#d2d2d2;"><span id="ContentPlaceHolder1_property_title">FSBONI ID#<?php echo $property_details->fsboni_property_id; ?></span></b></p>
        </div>
        <div class="list_details">



            <div class="left_box2">
                <div class="new_row2 first">
                    <div class="left_part2X">
                        <a id="dmn" href="#"  onclick = '$("#dims").dialog("open");
                                return false;'><img src="images/btn_rd.jpg"></a>&nbsp; <a id="if" href="#" onclick = '$("#ifs").dialog("open");
                                        return false;'><img src="images/btn_if.jpg"></a>&nbsp; <a id="ef" href="#" onclick = '$("#efs").dialog("open");
                                                return false;'><img src="images/btn_ef.jpg"></a>
                    </div>
                </div>
                <div class="new_row2">
                    <div class="left_part2"><img class="middle" alt="" src="images/icon2.gif">
                        <a href="property_map.aspx?stat=Alaska&amp;cit=ANAKTUVUK+PASS&amp;add=center=ANAKTUVUK+PASS,Alaska" id="dvg1">Property Maps</a>
                        <img width="16" height="16" class="middle" alt="" src="images/help.gif"> <a href="#nearby_school" id="nearby_schools">Nearby Schools</a><span style="display:;width:auto;margin-right:56px;" id="ContentPlaceHolder1_dvVirtShw">
                            <img width="15" height="15" class="middle" alt="" src="images/demo.gif"> Virtual Tour
                        </span>
                        <span style="width:auto;float:right;margin-right:56px;display:none;" id="ContentPlaceHolder1_dvVirtl">
                            <img width="15" height="15" class="middle" alt="" src="images/demo.gif">  <a id="you_tube" href="#video">Virtual Tour</a>
                        </span>
                    </div>
                </div>
                <div class="new_row2">
                    <div class="left_part2"><img class="middle" alt="" src="images/Home-icon.png"> <a class="change_pass info" href="#">Average Home Price<span>0</span></a>&nbsp;&nbsp;&nbsp;<img class="middle" alt="" src="images/coins-icon.png"> <a class="change_pass info" href="#">Average Income<span>0</span></a>&nbsp; 
                        <img class="middle" alt="Key" src="images/loan_icon.gif"> <a href="#" id="calculator" onclick = '$("#loan_cal").dialog("open");
                                return false;'>Mortgage Calculator</a>
                    </div>
                </div>

            </div>
            <div class="clear"></div>

        </div>
    </div>
    <div class="clear"></div>

    <div class="main_row">
        <div class="top_curve"></div>
        <div class="mid_strip">
            <div class="listing_row">
                <div class="left_part2">
                    <span class="fields-span">
                        <b>Compass Point : </b>
                        <?php echo $property_details->compas_point; ?>

                    </span>


                    <span class="fields-span">
                        <b>Street Name : </b>
                        <?php echo $property_details->street_name; ?>
                    </span> &nbsp;
                    <?php if (isset($property_details->city)) : ?>
                    <span class="fields-span"><b> City : </b><?php echo $property_details->city; ?></span>
                    <?php endif; ?>
                    <span class="fields-span"><b>State : </b><?php echo $property_details->state0->state_name; ?></span>
                    <span class="fields-span"><b>Zip Code : </b><?php echo $property_details->zip_code; ?></span>

                </div></div>

            <div class="listing_row">
                <div style="border-color:Red;" class="left_part2">
                    <span class="fields-span"><b>Property Type : </b> <?php echo $property_details->prop_type; ?></span>
                    <span class="fields-span"><b>Property Style :</b>  <?php echo $property_details->prop_style; ?></span>
                </div>
            </div>
            <div class="listing_row">
                <div class="left_part2">
                    <span class="fields-span"><b>County : </b><?php echo $property_details->county; ?></span>
                    <span class="fields-span"><b>Property Taxes :</b> <?php echo $property_details->property_taxes; ?></span>
                    <span class="fields-span"><b>Tax Year :</b> <?php echo $property_details->tax_year; ?></span>
                    <span class="fields-span"><b>Assessment : </b><?php echo $property_details->assessment; ?></span>
                    <span class="fields-span"><b>Frequency :</b>  <span id="ContentPlaceHolder1_lblFreequency"><?php echo $property_details->frequency; ?></span></span>
                </div>
            </div>
            <div class="listing_row">
                <div class="left_part2">

                    <span style="display:inline-block;border-width:0px;width:100%;" id="ContentPlaceHolder1_lblPropDesc"><?php echo $property_details->prp_desc; ?></span>
                </div>
            </div>
            <div class="listing_row">
                <div class="left_part2">
                    <b>Disclaimer:</b> "Information is deemed reliable, but not guaranteed and the information has not been verified. You are responsible to verify.&nbsp;"The information is furnished as a courtesy only to sellers not associated with&nbsp;our website, therefore, FSBONI is&nbsp;not responsible for its accuracy.
                </div>
            </div>

        </div>
        <div class="bottom_curve"></div>
    </div><!--main_row end -->
</div>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'ifs',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Interior Features',
        'autoOpen' => false,
        'width' => 'auto',
        'height' => 'auto'
    ),
));
?>

<div style="line-height:20px;" class="register_cont" id="ifs">
    <div class="clear">&nbsp;</div>
    <p>
        <?php
        if (isset($property_details->fsInteriorPropRelations)) {
            echo Helper::showDropDownValues($property_details->fsInteriorPropRelations, 'Interior Property Features', 'title', 'interiorPropFeatur');
        }

        if (isset($property_details->airConditioning)) {
            echo Helper::showDropDownValues($property_details->airConditioning, 'Air Conditioning', 'title');
        }

        if (isset($property_details->heating0)) {
            echo Helper::showDropDownValues($property_details->heating0, 'Heating', 'title');
        }

        if (isset($property_details->fsKitchenRelations)) {
            echo Helper::showDropDownValues($property_details->fsKitchenRelations, 'Kitchen Features', 'title', 'kitchen');
        }

        if (isset($property_details->fsAppliancesRelations)) {
            echo Helper::showDropDownValues($property_details->fsAppliancesRelations, 'Appliances', 'title', 'appliances');
        }

        if (isset($property_details->dinning0)) {
            echo Helper::showDropDownValues($property_details->dinning0, 'Dining', 'title');
        }

        if (isset($property_details->attic0)) {
            echo Helper::showDropDownValues($property_details->attic0, 'Attic (Detached Only)', 'title');
        }

        if (isset($property_details->basementDetails)) {
            echo Helper::showDropDownValues($property_details->basementDetails, 'Basement Details', 'title');
        }

        if (isset($property_details->fsBathroomAmenitiesRelations)) {
            echo Helper::showDropDownValues($property_details->fsBathroomAmenitiesRelations, 'Bathroom Amenities', 'title', 'bathAmenities');
        }

        if (isset($property_details->fsAdditionalRoomsRelations)) {
            echo Helper::showDropDownValues($property_details->fsAdditionalRoomsRelations, 'Additinal Rooms', 'title', 'addiRooms');
        }

        echo Helper::showDropDownValues($property_details, 'Electricity', 'electricity');

        if (isset($property_details->fsEquipmentRelations)) {
            echo Helper::showDropDownValues($property_details->fsEquipmentRelations, 'Equipment', 'title', 'equipment');
        }
        ?>
    </p>
</div>

<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'efs',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'External Features',
        'autoOpen' => false,
        'width' => 'auto',
        'height' => 'auto'
    ),
));
?>


<div style="line-height:20px; width:400px;" class="register_cont" id="efs">

    <div class="clear">&nbsp;</div>    
    <p>
        <?php
        if (isset($property_details->fsExteriorConstrRelations)) {
            echo Helper::showDropDownValues($property_details->fsExteriorConstrRelations, 'Exterior Construction', 'title', 'exteriorConstr');
        }

        echo Helper::showDropDownValues($property_details, 'Garage Ownership', 'garage_ownrship');

        if (isset($property_details->garageType)) {
            echo Helper::showDropDownValues($property_details->garageType, 'Garage Type', 'title');
        }

        echo Helper::showDropDownValues($property_details, 'Disability Access', 'disability_access');

        echo Helper::showDropDownValues($property_details, 'Elevatory Building', 'elevatory_building');

        echo Helper::showDropDownValues($property_details, 'Sewer', 'sewer');

        if (isset($property_details->water0)) {
            echo Helper::showDropDownValues($property_details->water0, 'Water', 'title');
        }

        if (isset($property_details->fsAmenitiesRelations)) {
            echo Helper::showDropDownValues($property_details->fsAmenitiesRelations, 'Amenities', 'title', 'amenities');
        }

        if (isset($property_details->fsAssessnicRelations)) {
            echo Helper::showDropDownValues($property_details->fsAssessnicRelations, 'ASSESSMENTS INCLUDE', 'title', 'assinc');
        }

        echo Helper::showDropDownValues($property_details, 'Pets', 'pet_friendly');
        ?>

        <br>

    </p>
</div>

<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'loan_cal',
    // additional javascript options for the dialog plugin
    'options' => array(
        'autoOpen' => false,
        'width' => 'auto',
        'height' => 'auto'
    ),
));
?>

<div id="loan_cal">
    <iframe width="680" scrolling="no" height="350" frameborder="0" src="http://www.guaranteedrate.com/rcemail/grate_iframe.php?C_LN=07678484&amp;RID=330">
    </iframe>
</div>

<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dims',
    // additional javascript options for the dialog plugin
    'options' => array(
        'autoOpen' => false,
        'width' => 'auto',
        'height' => 'auto'
    ),
));
?>
<h3>Dimensions:</h3><br><br>
L.R:25*30 Level : 7Fireplace  Other<br><br> D.R 10*10 Level : 7 Fireplace Other <br><br> KIT 15*10 Level : 7Fireplace  Other <br><br> M-BED 15*15 Level : 7Fireplace  Other <br><br> 1-BED 12*10 Level : 7Fireplace  Other <br><br>Laundry Room 5*5 Level : 7 Fireplace  Other <br><br>Deck/Balcony 19*10 Level : 7Fireplace  Other <br><br>


<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>
