<script>
    $(document).ready(function () {
        $('.advanced-search').hide();
        $('.show-quick').click(function () {
            $('.search_results').hide();
            $(this).addClass('TabbedPanelsTabSelected');
            $('.show-advanced').removeClass('TabbedPanelsTabSelected');
            $('.normal-search').show();
            $('.advanced-search').hide();
        });

        $('.show-advanced').click(function () {
            $('.search_results').hide();
            $(this).addClass('TabbedPanelsTabSelected');
            $('.show-quick').removeClass('TabbedPanelsTabSelected');
            $('.normal-search').hide();
            $('.advanced-search').show();
        });

        $('.search-button').live('click', function () {
            if (!($('.specific-div').length > 0))
                $('.search_results').show();
        });
    });
</script>
<?php echo CHtml::cssFile(Yii::app()->baseUrl . '/css/SpryTabbedPanels.css');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/SpryTabbedPanels.js');
?>
<div class="search_row">
<div class="search_box_n">
<div class="top"></div>
<div class="mid">
<div id="TabbedPanels1" class="TabbedPanels">
<ul class="TabbedPanelsTabGroup tab_border">
    <li class="TabbedPanelsTab show-quick TabbedPanelsTabSelected">Quick Search</li>
    <li class="TabbedPanelsTab show-advanced">Advanced Search</li>
</ul>


<div class="TabbedPanelsContentGroup">
<div id="dvS" class="TabbedPanelsContent">
<div class="form normal-search">
<div class="clear">&nbsp;</div>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'fs-search-criteria-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
)); ?>

<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'prop_id'); ?>
        <?php
        if (isset($property_details)) {
            echo $form->textField($model, 'prop_id', array('size' => 60, 'maxlength' => 255, 'style' => 'width : 110px;', 'value' => $property_details->fsboni_property_id));
        } else {
            echo $form->textField($model, 'prop_id', array('size' => 60, 'maxlength' => 255, 'style' => 'width : 110px;'));
        }
        ?>
    </div>
</div>
<div class="city_row" style="display:none;">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'compass_point'); ?>
        <?php echo $form->radioButtonList($model, 'compass_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array('class' => 'mt5')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'street_name'); ?>
        <br/>
        <?php echo $form->textField($model, 'street_name', array('size' => 50, 'maxlength' => 50)); ?>
    </div>
</div>
<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'state'); ?> <br/>
        <?php echo $form->dropDownList($model, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'city'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'city',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '2',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCities') . '",
                                    dataType: "json",
                                    data: {
                                        state_id: $("#FsSearchCriteria_state").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            //'source'=>$this->createUrl("realEstate/loadCities"),
            'htmlOptions' => array(
                'style' => 'width : 150px;'
            ),
        ));
        ?>
    </div>

    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'county'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'county',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCounties') . '",
                                    dataType: "json",
                                    data: {
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            'htmlOptions' => array(
                'style' => 'width : 150px;'
            ),
        ));
        ?>
    </div>
    <div class="search_float_box">
        <div id="dvSampleMap1" style="display:none;"></div>
    </div>

    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'neighbourhood'); ?> <br/>
        <?php echo $form->listBox($model, 'neighbourhood', array(), array('style' => 'width : 217px;')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'zip'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'zip',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadZipCode') . '",
                                    dataType: "json",
                                    data: {
                                         county_name : $("#FsProperty_county").val(),
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            'htmlOptions' => array(
                'class' => 'w40'
            ),
        ));
        ?>
    </div>
</div>

<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'prop_type'); ?><br/>
        <?php echo $form->dropDownList($model, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '', 'style' => 'width: 180px;')); ?>

    </div>
    <div class="search_float_box w240">
        <span><?php echo $form->labelEx($model, 'property_style'); ?></span><br/>
        <?php echo $form->dropDownList($model, 'property_style', array('a' => 'Attached', 'd' => 'Detached', 'l' => 'All'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
    </div>

</div>
<div class="city_row">

    <div class="search_float_box mr0">
        <?php echo $form->labelEx($model, 'price_range_min'); ?><br/>
        <?php
        echo $form->dropDownList($model, 'price_range_min', CHtml::listData(FsPriceRange::model()->findAll(), 'VALUE', 'title'), array('prompt' => '', 'style' => 'width : 150px;')); ?>
        <span class="mlr10">to</span>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'price_range_max'); ?><br/>
        <?php
        echo $form->dropDownList($model, 'price_range_max', CHtml::listData(FsPriceRange::model()->findAll(), 'VALUE', 'title'), array('prompt' => '', 'style' => 'width : 150px;')); ?>

    </div>


</div>
<div class="city_row">
    <div class="left_col" style="width:70px;"><?php echo $form->labelEx($model, 'bed_room_range_min'); ?></div>
    <div class="right_col_new">
        <div class="search_float_box ml0">
            <?php
            echo $form->dropDownList($model, 'bed_room_range_min', CHtml::listData(FsNoBedroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'search_box_range two_digit')); ?>
            <span class="mlr10">to</span>
            <?php
            echo $form->dropDownList($model, 'bed_room_range_max', CHtml::listData(FsNoBedroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'search_box_range two_digit')); ?>
        </div>
        <div class="search_float_box"><span
                class="mlr_15"><?php echo $form->labelEx($model, 'bath_room_range_min'); ?></span>
            <?php
            echo $form->dropDownList($model, 'bath_room_range_min', CHtml::listData(FsNoBathroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'price_select two_digit')); ?>
            <span class="mlr10">to</span>
            <?php
            echo $form->dropDownList($model, 'bath_room_range_max', CHtml::listData(FsNoBathroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'price_select two_digit')); ?>
        </div>

        <div class="search_float_box"><span class="mlr10"><?php echo $form->labelEx($model, 'size_min'); ?></span>
            <?php
            $prop_size = array();
            for ($i = 100; $i <= 5000; $i += 100) {
                $prop_size[$i] = $i . ' sqft';
            }
            echo $form->dropDownList($model, 'size_min', $prop_size, array('prompt' => 'All', 'class' => 'square_feet')); ?>

            <span class="mlr10">to</span>
            <?php echo $form->dropDownList($model, 'size_max', $prop_size, array('prompt' => 'All', 'class' => 'square_feet')); ?>
        </div>
        <div>
            <?php echo CHtml::button('Search', array('class' => 'search-button')); ?>


        </div>
    </div>


</div>


<?php $this->endWidget(); ?>

</div>


<div class="form advanced-search">
<div class="clear">&nbsp;</div>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'fs-search-criteria-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
)); ?>

<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'prop_id'); ?>
        <?php echo $form->textField($model, 'prop_id', array('size' => 60, 'maxlength' => 255, 'style' => 'width : 110px;')); ?>
    </div>
</div>
<div class="city_row" style="">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'compass_point'); ?>
        <?php echo $form->dropDownList($model, 'compass_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array('class' => 'mt5', 'style' => 'width: 50px;')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'street_name'); ?>
        <?php echo $form->textField($model, 'street_name', array('size' => 50, 'maxlength' => 50)); ?>
    </div>
</div>
<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'state'); ?> <br/>
        <?php echo $form->dropDownList($model, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'city'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'city',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '2',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCities') . '",
                                    dataType: "json",
                                    data: {
                                        state_id: $("#FsSearchCriteria_state").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            //'source'=>$this->createUrl("realEstate/loadCities"),
            'htmlOptions' => array(
                'style' => 'width : 150px;'
            ),
        ));
        ?>
    </div>

    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'county'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'county',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCounties') . '",
                                    dataType: "json",
                                    data: {
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            'htmlOptions' => array(
                'style' => 'width : 150px;'
            ),
        ));
        ?>
    </div>
    <div class="search_float_box">
        <div id="dvSampleMap1" style="display:none;"></div>
    </div>

    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'neighbourhood'); ?> <br/>
        <?php echo $form->listBox($model, 'neighbourhood', array(), array('style' => 'width : 217px;')); ?>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'zip'); ?> <br/>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'zip',
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
            ),
            'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadZipCode') . '",
                                    dataType: "json",
                                    data: {
                                         county_name : $("#FsProperty_county").val(),
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
            'htmlOptions' => array(
                'class' => 'w40'
            ),
        ));
        ?>
    </div>
</div>

<div class="city_row">
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'prop_type'); ?><br/>
        <?php echo $form->dropDownList($model, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '', 'style' => 'width: 180px;')); ?>

    </div>
    <div class="search_float_box w240">
        <span><?php echo $form->labelEx($model, 'property_style'); ?></span><br/>
        <?php echo $form->dropDownList($model, 'property_style', array('a' => 'Attached', 'd' => 'Detached', 'l' => 'All'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
    </div>

</div>
<div class="city_row">

    <div class="search_float_box mr0">
        <?php echo $form->labelEx($model, 'price_range_min'); ?><br/>
        <?php
        echo $form->dropDownList($model, 'price_range_min', CHtml::listData(FsPriceRange::model()->findAll(), 'VALUE', 'title'), array('prompt' => '')); ?>
        <span class="mlr10">to</span>
    </div>
    <div class="search_float_box">
        <?php echo $form->labelEx($model, 'price_range_max'); ?><br/>
        <?php
        echo $form->dropDownList($model, 'price_range_max', CHtml::listData(FsPriceRange::model()->findAll(), 'VALUE', 'title'), array('prompt' => '')); ?>

    </div>


</div>
<div class="city_row">
    <div class="left_col" style="width:70px;"><?php echo $form->labelEx($model, 'bed_room_range_min'); ?></div>
    <div class="right_col">
        <div class="search_float_box ml0">
            <?php
            echo $form->dropDownList($model, 'bed_room_range_min', CHtml::listData(FsNoBedroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'search_box_range two_digit')); ?>
            <span class="mlr10">to</span>
            <?php
            echo $form->dropDownList($model, 'bed_room_range_max', CHtml::listData(FsNoBedroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'search_box_range two_digit')); ?>
        </div>
        <div class="search_float_box"><span
                class="mlr_15"><?php echo $form->labelEx($model, 'bath_room_range_min'); ?></span>
            <?php
            echo $form->dropDownList($model, 'bath_room_range_min', CHtml::listData(FsNoBathroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'price_select two_digit')); ?>
            <span class="mlr10">to</span>
            <?php
            echo $form->dropDownList($model, 'bath_room_range_max', CHtml::listData(FsNoBathroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'price_select two_digit')); ?>
        </div>
        <div class="search_float_box"><span class="mlr10"><?php echo $form->labelEx($model, 'size_min'); ?></span>
            <?php
            $prop_size = array();
            for ($i = 100; $i <= 5000; $i += 100) {
                $prop_size[$i] = $i . ' sqft';
            }
            echo $form->dropDownList($model, 'size_min', $prop_size, array('prompt' => 'All', 'class' => 'square_feet')); ?>

            <span class="mlr10">to</span>
            <?php echo $form->dropDownList($model, 'size_max', $prop_size, array('prompt' => 'All', 'class' => 'square_feet')); ?>
        </div>
    </div>
</div>


<div class="city_row">
    <div class="search_float_box ml0" style="padding-top:4px;">Listings With
        <?php
        echo $form->checkBox($model, 'listing_with_virtual', array('class' => 'middle')); ?>
        <?php echo $form->labelEx($model, 'listing_with_virtual'); ?>
        <?php
        echo $form->checkBox($model, 'listing_with_photo', array('class' => 'middle ml30')); ?>
        <?php echo $form->labelEx($model, 'listing_with_photo'); ?>
    </div>


    <div id="dvPetType" class="search_float_box" runat="server"><?php echo $form->labelEx($model, 'pet_friendly'); ?>
        <?php echo $form->dropDownList($model, 'pet_friendly', array('' => 'None', 'd' => 'Dog', 'c' => 'Cat', 'b' => 'Both'), array('class' => 'w70')); ?>
    </div>
    <div class="search_float_box"><?php echo $form->labelEx($model, 'open_house'); ?>
        <?php echo $form->dropDownList($model, 'open_house', array('today' => 'Today', 'saturday' => 'Saturday', 'sunday' => 'Sunday'), array('prompt' => 'None', 'class' => 'w100')); ?>

        <?php echo $form->dropDownList($model, 'open_house_to_time', array('6am' => '6am', '7am' => '7am', '8am' => '8am', '9am' => '9am', '10am' => '10am', '11am' => '11am', '12am' => '12am'), array('class' => 'w70')); ?>
        to
        <?php echo $form->dropDownList($model, 'open_house_from_time', array('1pm' => '1pm', '2pm' => '2pm', '3pm' => '3pm', '4pm' => '4pm', '5pm' => '5pm', '6pm' => '6pm', '7pm' => '7pm', '8pm' => '8pm', '9pm' => '9pm'), array('class' => 'w70')); ?>

    </div>
    <?php echo CHtml::button('Search', array('class' => 'middle fr search-button')); ?>

</div>


</div>


<?php $this->endWidget(); ?>

</div>
<br/>
<?php if (isset($property_details)) {
    ?>
    <div class="property_area_n specific-div">
        <div class="top"></div>
        <div class="mid">
            <h3>All Properties</h3>

            <div class="clear">&nbsp;</div>


            <ul class="prop_row">
                <li>
                    <div class="pro_details">
                        <div class="img_sec"><img width="136" height="141"
                                                  src="<?php echo Yii::app()->baseUrl . '/images/prop_gallery/' . $image->image_name; ?>">
                        </div>
                        <div class="prop_details">
                            <div class="sale"> $<?php echo $property_details->price_range; ?></div>
                            <br> <br> FSBONI<br>ID# : <?php echo $property_details->fsboni_property_id; ?><br>Bedrooms
                            : <?php echo $property_details->numbr_bedroom; ?><br>Bathrooms
                            : <?php echo $property_details->numbr_bathroom; ?><br>Sq. Ft.
                            : <?php echo $property_details->prop_size; ?><br><br>

                            <div><a id="prpd0" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                                    Full Property Listing </a></div>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <div class="bottom"></div>

    </div>

<?php } ?>



<div class="search_row search_results" style="display:none;" id="ContentPlaceHolder1_dvReslt">
<div class="property_area_n">
<div class="top"></div>
<div class="mid">
<h3>All Properties</h3>

<div class="clear">&nbsp;</div>


<ul class="prop_row">
    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/home.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $350000</div>
                <br> <br> FSBONI<br>ID# : F11041<br>Bedrooms : 3<br>Bathrooms : 2<br>Sq. Ft. : 1500<br><br>

                <div><a id="prpd0" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/58079076ddc94975a0cbb598b8f947d8fsboni_house_image.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $123456</div>
                <br> <br> FSBONI<br>ID# : F11038<br>Bedrooms : 6<br>Bathrooms : 2<br>Sq. Ft. : 1500<br><br>

                <div><a id="prpd1" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $340000</div>
                <br> <br> FSBONI<br>ID# : F11037<br>Bedrooms : 2<br>Bathrooms : 2<br>Sq. Ft. : 1500<br><br>

                <div><a id="prpd2" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

</ul>


<ul class="prop_row">
    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/4abc6a6af11d42e689f9f063a4e6de58373-321.jpeg">
            </div>
            <div class="prop_details">
                <div class="sale"> $344343</div>
                <br> <br> FSBONI<br>ID# : F11011<br>Bedrooms : 3<br>Bathrooms : 2<br>Sq. Ft. : 1000<br><br>

                <div><a id="prpd3" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/f71b81c5464b4d3996f520be959067b8373-321.jpeg">
            </div>
            <div class="prop_details">
                <div class="sale"> $213</div>
                <br> <br> FSBONI<br>ID# : F11010<br>Bedrooms : 2<br>Bathrooms : 2<br>Sq. Ft. : 4500<br><br>

                <div><a id="prpd4" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/542487470d164ba09ab0cafd173b0d6614629.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $21324</div>
                <br> <br> FSBONI<br>ID# : F11009<br>Bedrooms : 3<br>Bathrooms : 4<br>Sq. Ft. : 1000<br><br>

                <div><a id="prpd5" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

</ul>


<ul class="prop_row">
    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/home.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $1</div>
                <br> <br> FSBONI<br>ID# : F11007<br>Bedrooms : 1<br>Bathrooms : 1<br>Sq. Ft. : 23456<br><br>

                <div><a id="prpd6" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/59c9d7a5e6bd42c29ba6a3f5a7fa6207home5.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $2</div>
                <br> <br> FSBONI<br>ID# : F11006<br>Bedrooms : 3<br>Bathrooms : 2<br>Sq. Ft. : 1000<br><br>

                <div><a id="prpd7" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/b2acbd33b14e4382ba1c04c110ef11achome5.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $10</div>
                <br> <br> FSBONI<br>ID# : F11005<br>Bedrooms : 6<br>Bathrooms : 6<br>Sq. Ft. : 20<br><br>

                <div><a id="prpd8" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

</ul>


<ul class="prop_row">
    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/90d3f36a56c34a0190da702d49146b50home4.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $13</div>
                <br> <br> FSBONI<br>ID# : F11004<br>Bedrooms : 7<br>Bathrooms : 6<br>Sq. Ft. : 2000<br><br>

                <div><a id="prpd9" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/239cfb80e8434128a097d9305fe2f641home3.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $9</div>
                <br> <br> FSBONI<br>ID# : F11003<br>Bedrooms : 2<br>Bathrooms : 2<br>Sq. Ft. : 3000<br><br>

                <div><a id="prpd10" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/ae2e906171cd4921847fac982cd9b417home2.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $3</div>
                <br> <br> FSBONI<br>ID# : F11002<br>Bedrooms : 2<br>Bathrooms : 2<br>Sq. Ft. : 1500<br><br>

                <div><a id="prpd11" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>

</ul>


<ul class="prop_row">
    <li>
        <div class="pro_details">
            <div class="img_sec"><img width="136" height="141"
                                      src="<?php echo Yii::app()->baseUrl . '/images'; ?>/prop_gallery/9f1518c9cdac4d068b0adefba49384f2222-east-9th-street-san-bernardino-ca-92410.jpg">
            </div>
            <div class="prop_details">
                <div class="sale"> $2</div>
                <br> <br> FSBONI<br>ID# : F11001<br>Bedrooms : 2<br>Bathrooms : 3<br>Sq. Ft. : 5.2<br><br>

                <div><a id="prpd12" href="<?php echo $this->createUrl('realEstate/fullPageListing'); ?>">View
                        Full Property Listing </a></div>
            </div>
        </div>
    </li>


</ul>
</div>
<div class="bottom"></div>

</div>
<div class="pagination" id="ContentPlaceHolder1_pnlPager">

</div>
<input type="hidden" value="-1" id="ContentPlaceHolder1_hdPgr" name="ctl00$ContentPlaceHolder1$hdPgr">
</div>

</div>
</div>
</div>
</div>
</div>
</div>


