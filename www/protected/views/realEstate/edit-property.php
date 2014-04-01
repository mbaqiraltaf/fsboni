<?php
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/SpryTabbedPanels.css');
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/tab.css');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/SpryTabbedPanels.js');
?>

<div class="left_container">
    <h3>Property Edit</h3>
    <div class="clear">&nbsp;</div>

    <div class="contact_row_new">
        <div class="left_area_new">FSBONI ID</div>
        <div class="right_area_new">
            <span id="ContentPlaceHolder1_Label2"><?php echo $property_data->fsboni_property_id; ?></span>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
    <!-- tab start here -->                        

    <div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">

        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Property</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Interior</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Exterior</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-4">Virtual Tour</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-5">Photos</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-6">Optional Services</a></li>
        </ul>

        <div class="TabbedPanelsContentGroupX">
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvBasic">
                <div>&nbsp;</div>
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

                <p class="required">Fields Marked as (*) are mandatory</p>

                <?php echo $form->errorSummary($property_data); ?>
                <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                    <h3>Property Listing Info</h3>
                    <div>&nbsp;</div>                         


                    <div class="contact_row_new">
                        <div class="left_area_new"> Select one</div>
                        <div class="right_area_new">
                            <input type="radio" checked="checked" class="middle" id="ContentPlaceHolder1_rd_own" name="ctl00$ContentPlaceHolder1$type" value="rd_own"> <span class="middle">Personal Residence</span>
                            <input type="radio" class="middle ml20" id="ContentPlaceHolder1_rd_invest" name="ctl00$ContentPlaceHolder1$type" value="rd_invest"> <span class="middle">Investment property </span>                   
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_number'); ?></div>
                        <div class="right_area_new"><?php echo $form->textField($property_data, 'street_number', array()); ?></div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'compas_point'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'compas_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array()); ?>
                        </div>
                    </div>  

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_name'); ?></div>

                        <div class="right_area_new"><?php echo $form->textField($property_data, 'street_name', array()); ?></div>
                    </div>


                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_suffix'); ?></div>
                        <div class="right_area_new">
                            <?php
                            $street_suffix = array('' => '', 'AVE' => 'AVE', 'BLVD' => 'BLVD', 'CIR' => 'CIR', 'CT' => 'CT', 'DR' => 'DR', 'HWY' => 'HWY', 'LN' => 'LN', 'PKWY' => 'PKWY', 'PL' => 'PL', 'PLZ' => 'PLZ', 'PT' => 'PT', 'RD' => 'RD', 'SQ' => 'SQ', 'ST' => 'ST', 'TER' => 'TER', 'TRL' => 'TRL', 'WAY' => 'WAY', 'NONE' => 'NONE');
                            echo $form->dropDownList($property_data, 'street_suffix', $street_suffix, array());
                            ?></div>
                    </div>

                    <div class="contact_row_new">

                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'state'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'city'); ?></div>
                        <div class="right_area_new">                            
                            <?php echo $form->textField($property_data, 'city', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'county'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'county', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'neighbourhood'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'neighbourhood', array()); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'zip_code'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'zip_code', array()); ?>
                        </div>

                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'price_range'); ?></div>
                        <div class="right_area_new">$ <?php echo $form->textField($property_data, 'price_range', array('class' => 'w85 digit-format')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prop_type'); ?></div>
                        <div class="right_area_new">    
                            <?php echo $form->dropDownList($property_data, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '')); ?> </div>
                    </div>                    
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'numbr_bedroom'); ?></div>

                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'numbr_bedroom', CHtml::listData(FsNoBedroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'numbr_bathroom'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'numbr_bathroom', CHtml::listData(FsNoBathroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div> 
                    <div class="contact_row_new">

                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prop_size'); ?></div>
                        <div class="right_area_new"> 
                            <?php
                            $prop_size = array();
                            for ($i = 100; $i <= 5000; $i+=100) {
                                $prop_size[$i] = $i . ' sqft';
                            }
                            echo $form->dropDownList($property_data, 'prop_size', $prop_size, array('prompt' => '-Select-', 'style' => 'width: 130px;'));
                            ?>
                        </div>


                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'property_taxes'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <strong>$</strong><?php echo $form->textField($property_data, 'property_taxes', array('class' => 'w70 digit-format')); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'tax_year'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <?php echo $form->textField($property_data, 'tax_year', array('class' => 'four_digit')); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'assessment'); ?>
                        </div>
                        <div class="right_area_new"> 
                            $ <?php echo $form->textField($property_data, 'assessment', array()); ?>
                        </div> </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'frequency'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <?php echo $form->dropDownList($property_data, 'frequency', array('' => 'None', 'Monthly' => 'Monthly', 'Annually' => 'Annually'), array()); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prp_desc'); ?></div>

                        <div class="right_area_new">

                            <?php echo $form->textArea($property_data, 'prp_desc', array('class' => '', 'onkeyup' => 'countChar(this)')); ?></div>
                        <div id="lblMsg1" class="char-count" style="text-align:right">1000 characters left</div>
                    </div>
                </div>

                <div class="clear">&nbsp;</div>
                <div align="center">
                    <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'update_property')); ?>

                </div>

            </div>  </div>
        <!-- Interior content goes here -->
        <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvInterior">
                <div>&nbsp;</div>
                <h3>Interior Features</h3>
                <div>&nbsp;</div>


                <div style="display:none;" id="ContentPlaceHolder1_dvAlert_Interior">
                    <span><span style="display:none;" id="ContentPlaceHolder1_kitchDimCustom">Please fill both Min and Max Fields in respective area with positive numbers only. !!!</span></span><br>

                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegKtchnDimMax">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator1_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator2_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator3_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator4_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator5_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator6_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator7_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator8_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator9_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator10_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator11_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator12_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator13_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator14_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator15_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator16_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator17_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator18_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator19_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>                    
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator20_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator21_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator22_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>
                    <span> <span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator23_Interior">Please enter only numeric value in maximum and minimum dimension fields.  </span></span><br>


                    <span style="color:Red;" id="ContentPlaceHolder1_span1"></span><br>


                </div>


                <div class="contact_row_new">
                    <div class="left_area_new">  Living Room</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtLivngMin" value="30" name="ctl00$ContentPlaceHolder1$txtLivngMin">
                        <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtLivngMax" value="25" name="ctl00$ContentPlaceHolder1$txtLivngMax">
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlLivngFloor" name="ctl00$ContentPlaceHolder1$ddlLivngFloor">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" checked="checked" name="ctl00$ContentPlaceHolder1$rdoLivngFire" id="ContentPlaceHolder1_rdoLivngFire"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlLivingFlooring" name="ctl00$ContentPlaceHolder1$ddlLivingFlooring">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>
                    </div>
                </div>

                <div class="contact_row_new">
                    <div class="left_area_new">Dining Room Dimensions</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtMaxDinnDime" maxlength="4" value="10" name="ctl00$ContentPlaceHolder1$txtMaxDinnDime"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtMinDinnDime" maxlength="4" value="10" name="ctl00$ContentPlaceHolder1$txtMinDinnDime">
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlDingRoom" name="ctl00$ContentPlaceHolder1$ddlDingRoom">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoDinngFire" id="ContentPlaceHolder1_rdoDinngFire"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringDiningRoom" name="ctl00$ContentPlaceHolder1$ddlFlooringDiningRoom">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>   
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Family Room</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtFamilyMin" maxlength="4" name="ctl00$ContentPlaceHolder1$txtFamilyMin"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtFamilyMax" maxlength="4" name="ctl00$ContentPlaceHolder1$txtFamilyMax">
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlFamilyRoom" name="ctl00$ContentPlaceHolder1$ddlFamilyRoom">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoFamilyFire" id="ContentPlaceHolder1_rdoFamilyFire">    &nbsp;&nbsp; 

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringFamilyRoom" name="ctl00$ContentPlaceHolder1$ddlFlooringFamilyRoom">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>     

                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Kitchen Dimensions</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtMaxKitchnDime" maxlength="4" value="15" name="ctl00$ContentPlaceHolder1$txtMaxKitchnDime"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtminkitchnDime" maxlength="4" value="10" name="ctl00$ContentPlaceHolder1$txtminkitchnDime">
                        <span class="ml10"> Level</span> 
                        <select class="w100" id="ContentPlaceHolder1_ddlKitchenRoom" name="ctl00$ContentPlaceHolder1$ddlKitchenRoom">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoKitchenFire" id="ContentPlaceHolder1_rdoKitchenFire"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringKitchen" name="ctl00$ContentPlaceHolder1$ddlFlooringKitchen">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>        
                    </div>
                </div>


                <div class="contact_row_new">
                    <div class="left_area_new">Master Bedroom</div><div class="right_area_new">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtMastrBedMax" maxlength="4" value="15" name="ctl00$ContentPlaceHolder1$txtMastrBedMax"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtMastrBedMin" maxlength="4" value="15" name="ctl00$ContentPlaceHolder1$txtMastrBedMin"> 
                        <span class="ml10"> Level</span>  <select class="w100" id="ContentPlaceHolder1_ddlMastBedRoom" name="ctl00$ContentPlaceHolder1$ddlMastBedRoom">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>

                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoMastBedRFire" id="ContentPlaceHolder1_rdoMastBedRFire"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringMastrBedroom" name="ctl00$ContentPlaceHolder1$ddlFlooringMastrBedroom">
                            <option value="h">Hardwood</option>
                            <option value="c" selected="selected">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>   
                    </div>
                </div>


                <div class="contact_row_new"><div class="left_area_new">Bedroom1</div><div class="right_area_new">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed1Max" maxlength="4" value="12" name="ctl00$ContentPlaceHolder1$txtBed1Max"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10"> <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed1Min" maxlength="4" value="10" name="ctl00$ContentPlaceHolder1$txtBed1Min"> 
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlBed_1_Room" name="ctl00$ContentPlaceHolder1$ddlBed_1_Room">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp; Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdo_Bed_1_Fire" id="ContentPlaceHolder1_rdo_Bed_1_Fire"> &nbsp;&nbsp;
                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBedroom1" name="ctl00$ContentPlaceHolder1$ddlFlooringBedroom1">
                            <option value="h">Hardwood</option>
                            <option value="c" selected="selected">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>    
                    </div>
                </div>
                <div class="contact_row_new"><div class="left_area_new">Bedroom2</div><div class="right_area_new">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed2Max" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed2Max"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10"> <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed2Min" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed2Min">
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddl_Bed2_Room" name="ctl00$ContentPlaceHolder1$ddl_Bed2_Room">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdo_Bed_2_Fire" id="ContentPlaceHolder1_rdo_Bed_2_Fire"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBedroom2" name="ctl00$ContentPlaceHolder1$ddlFlooringBedroom2">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>  
                    </div>
                </div>

                <div class="contact_row_new"><div class="left_area_new">Bedroom3</div><div class="right_area_new">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed3Max" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed3Max"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10"> <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed3Min" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed3Min">
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlBed3_Room" name="ctl00$ContentPlaceHolder1$ddlBed3_Room">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoBed_3_Fire" id="ContentPlaceHolder1_rdoBed_3_Fire"> &nbsp;&nbsp;
                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBedroom3" name="ctl00$ContentPlaceHolder1$ddlFlooringBedroom3">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>   
                    </div>
                </div>


                <div class="contact_row_new"><div class="left_area_new">Bedroom4</div> <div class="right_area_new"><input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed4Max" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed4Max"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed4Min" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed4Min"> 
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlBed4_Rooms" name="ctl00$ContentPlaceHolder1$ddlBed4_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoBed_4_Fire" id="ContentPlaceHolder1_rdoBed_4_Fire"> &nbsp;&nbsp;
                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBedroom4" name="ctl00$ContentPlaceHolder1$ddlFlooringBedroom4">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new"><div class="left_area_new">Bedroom5</div> <div class="right_area_new"><input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed5_Max" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed5_Max"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBed_5_Min" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBed_5_Min"> 
                        <span class="ml10"> Level</span>
                        <select class="w100" id="ContentPlaceHolder1_ddlBed_5_Rooms" name="ctl00$ContentPlaceHolder1$ddlBed_5_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;&nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoBed_5_Fire" id="ContentPlaceHolder1_rdoBed_5_Fire">&nbsp;&nbsp;
                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBedroom5" name="ctl00$ContentPlaceHolder1$ddlFlooringBedroom5">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>
                    </div>
                </div>


                <div class="contact_row_new">
                    <div class="left_area_new">Den/Loft/Office</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtDenMax" maxlength="4" name="ctl00$ContentPlaceHolder1$txtDenMax"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtDenMin" maxlength="4" name="ctl00$ContentPlaceHolder1$txtDenMin">
                        <span class="ml10"> Level</span> 
                        <select class="w100" id="ContentPlaceHolder1_ddlDen_Rooms" name="ctl00$ContentPlaceHolder1$ddlDen_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoDen_fire" id="ContentPlaceHolder1_rdoDen_fire"> &nbsp; &nbsp;


                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringDen" name="ctl00$ContentPlaceHolder1$ddlFlooringDen">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>      
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Laundry Room</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtLaundryMax" maxlength="4" value="5" name="ctl00$ContentPlaceHolder1$txtLaundryMax"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtLaundryMin" maxlength="4" value="5" name="ctl00$ContentPlaceHolder1$txtLaundryMin">
                        <span class="ml10"> Level</span> 
                        <select class="w100" id="ContentPlaceHolder1_ddlLaundry_Rooms" name="ctl00$ContentPlaceHolder1$ddlLaundry_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoLaundry_Fires" id="ContentPlaceHolder1_rdoLaundry_Fires"> &nbsp;&nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringLaundry" name="ctl00$ContentPlaceHolder1$ddlFlooringLaundry">
                            <option value="h">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o" selected="selected">Other</option>

                        </select>        
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Deck/Balcony</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBalconyMax" maxlength="4" value="19" name="ctl00$ContentPlaceHolder1$txtBalconyMax"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBalconyMin" maxlength="4" value="10" name="ctl00$ContentPlaceHolder1$txtBalconyMin">
                        <span class="ml10"> Level</span> 
                        <select class="w100" id="ContentPlaceHolder1_ddlBalcony_Rooms" name="ctl00$ContentPlaceHolder1$ddlBalcony_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13" selected="selected">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;Fire Place &nbsp;
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoBalcony_Fire" id="ContentPlaceHolder1_rdoBalcony_Fire"> &nbsp; &nbsp;
                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBalcony" name="ctl00$ContentPlaceHolder1$ddlFlooringBalcony">
                            <option value="h">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o" selected="selected">Other</option>

                        </select>          
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Bonus Room</div>
                    <div class="right_area_new">
                        <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBonusMax" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBonusMax"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" onkeypress="return isNumberKey(event)" class="w30" id="ContentPlaceHolder1_txtBonusMin" maxlength="4" name="ctl00$ContentPlaceHolder1$txtBonusMin">
                        <span class="ml10"> Level</span> 
                        <select class="w100" id="ContentPlaceHolder1_ddlBonus_Rooms" name="ctl00$ContentPlaceHolder1$ddlBonus_Rooms">
                            <option value=""></option>
                            <option value="M">Main</option>
                            <option value="L">Lower Level</option>
                            <option value="U">Upper Level</option>
                            <option value="4">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">5</option>
                            <option value="9">6</option>
                            <option value="10">7</option>
                            <option value="11">8</option>
                            <option value="12">9</option>
                            <option value="13">10</option>
                            <option value="14">11</option>
                            <option value="15">12</option>
                            <option value="16">13</option>
                            <option value="17">14</option>
                            <option value="18">15</option>
                            <option value="19">16</option>
                            <option value="20">17</option>
                            <option value="21">18</option>
                            <option value="22">19</option>
                            <option value="23">20</option>
                            <option value="24">21</option>
                            <option value="25">22</option>
                            <option value="26">23</option>
                            <option value="27">24</option>
                            <option value="28">25</option>
                            <option value="29">26</option>
                            <option value="30">27</option>
                            <option value="31">28</option>
                            <option value="32">29</option>
                            <option value="33">30</option>
                            <option value="34">31</option>
                            <option value="35">32</option>
                            <option value="36">33</option>
                            <option value="37">34</option>
                            <option value="38">35</option>
                            <option value="39">36</option>
                            <option value="40">37</option>
                            <option value="41">38</option>
                            <option value="42">39</option>
                            <option value="43">40</option>
                            <option value="44">41</option>
                            <option value="45">42</option>
                            <option value="46">43</option>
                            <option value="47">44</option>
                            <option value="48">45</option>
                            <option value="49">46</option>
                            <option value="50">47</option>
                            <option value="51">48</option>
                            <option value="52">49</option>
                            <option value="53">50</option>
                            <option value="54">51</option>
                            <option value="55">52</option>
                            <option value="56">53</option>
                            <option value="57">54</option>
                            <option value="58">55</option>
                            <option value="59">56</option>
                            <option value="60">57</option>
                            <option value="61">58</option>
                            <option value="62">59</option>
                            <option value="63">60</option>
                            <option value="64">61</option>
                            <option value="65">62</option>
                            <option value="66">63</option>
                            <option value="67">64</option>
                            <option value="68">65</option>
                            <option value="69">66</option>
                            <option value="70">67</option>
                            <option value="71">68</option>
                            <option value="72">69</option>
                            <option value="73">70</option>
                            <option value="74">71</option>
                            <option value="75">72</option>
                            <option value="76">73</option>
                            <option value="77">74</option>
                            <option value="78">75</option>
                            <option value="79">76</option>
                            <option value="80">77</option>
                            <option value="81">78</option>
                            <option value="82">79</option>
                            <option value="83">80</option>
                            <option value="84">81</option>
                            <option value="85">82</option>
                            <option value="86">83</option>
                            <option value="87">84</option>
                            <option value="88">85</option>
                            <option value="89">86</option>
                            <option value="90">87</option>
                            <option value="91">88</option>
                            <option value="92">89</option>
                            <option value="93">90</option>
                            <option value="94">91</option>
                            <option value="95">92</option>
                            <option value="96">93</option>
                            <option value="97">94</option>
                            <option value="98">95</option>
                            <option value="99">96</option>
                            <option value="100">97</option>
                            <option value="101">98</option>
                            <option value="102">99</option>
                            <option value="103">100</option>

                        </select>
                        &nbsp;Fire Place &nbsp; 
                        <input type="checkbox" name="ctl00$ContentPlaceHolder1$rdoBonus_Fire" id="ContentPlaceHolder1_rdoBonus_Fire"> &nbsp; &nbsp;

                        Flooring
                        <select style="width:95px;" id="ContentPlaceHolder1_ddlFlooringBonus" name="ctl00$ContentPlaceHolder1$ddlFlooringBonus">
                            <option value="h" selected="selected">Hardwood</option>
                            <option value="c">Carpet</option>
                            <option value="t">Tile</option>
                            <option value="o">Other</option>

                        </select>          
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Interior Property Features</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkintpropfeature">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkintpropfeature$0" id="ContentPlaceHolder1_chkintpropfeature_0"><label for="ContentPlaceHolder1_chkintpropfeature_0">Skylights</label></td><td><input type="checkbox" value="2" checked="checked" name="ctl00$ContentPlaceHolder1$chkintpropfeature$1" id="ContentPlaceHolder1_chkintpropfeature_1"><label for="ContentPlaceHolder1_chkintpropfeature_1">9'Ceilings</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkintpropfeature$2" id="ContentPlaceHolder1_chkintpropfeature_2"><label for="ContentPlaceHolder1_chkintpropfeature_2">Vaulted ceilings</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkintpropfeature$3" id="ContentPlaceHolder1_chkintpropfeature_3"><label for="ContentPlaceHolder1_chkintpropfeature_3">Soaring ceilings</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkintpropfeature$4" id="ContentPlaceHolder1_chkintpropfeature_4"><label for="ContentPlaceHolder1_chkintpropfeature_4">Architectural Trim</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkintpropfeature$5" id="ContentPlaceHolder1_chkintpropfeature_5"><label for="ContentPlaceHolder1_chkintpropfeature_5">Tray ceiling</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkintpropfeature$6" id="ContentPlaceHolder1_chkintpropfeature_6"><label for="ContentPlaceHolder1_chkintpropfeature_6">Crown mouldings</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkintpropfeature$7" id="ContentPlaceHolder1_chkintpropfeature_7"><label for="ContentPlaceHolder1_chkintpropfeature_7">Cove mouldings</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkintpropfeature$8" id="ContentPlaceHolder1_chkintpropfeature_8"><label for="ContentPlaceHolder1_chkintpropfeature_8">Wainscoting</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkintpropfeature$9" id="ContentPlaceHolder1_chkintpropfeature_9"><label for="ContentPlaceHolder1_chkintpropfeature_9">Beaded Board</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkintpropfeature$10" id="ContentPlaceHolder1_chkintpropfeature_10"><label for="ContentPlaceHolder1_chkintpropfeature_10">Coffers-Beams</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkintpropfeature$11" id="ContentPlaceHolder1_chkintpropfeature_11"><label for="ContentPlaceHolder1_chkintpropfeature_11">Recessed Art Niche</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Air Conditioning</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlairconditioning" name="ctl00$ContentPlaceHolder1$ddlairconditioning">
                            <option value=""></option>
                            <option value="3">2-Zoned</option>
                            <option value="4">Air Tubes</option>
                            <option value="1" selected="selected">Central Air</option>
                            <option value="2">Wall Unit(s)</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Heating</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlHeating" name="ctl00$ContentPlaceHolder1$ddlHeating">
                            <option value=""></option>
                            <option value="1">Gas</option>
                            <option value="2" selected="selected">Forced</option>
                            <option value="3">Radiant</option>
                            <option value="4">Base board</option>
                            <option value="5">Steam</option>
                            <option value="6">Electric</option>
                            <option value="7">Propane</option>
                            <option value="8">Solar Heating</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Kitchen Features</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkKitchen">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" checked="checked" name="ctl00$ContentPlaceHolder1$chkKitchen$0" id="ContentPlaceHolder1_chkKitchen_0"><label for="ContentPlaceHolder1_chkKitchen_0">Eating Area-Breakfast Bar</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkKitchen$1" id="ContentPlaceHolder1_chkKitchen_1"><label for="ContentPlaceHolder1_chkKitchen_1">Eating Area-Table Space</label></td><td><input type="checkbox" value="3" checked="checked" name="ctl00$ContentPlaceHolder1$chkKitchen$2" id="ContentPlaceHolder1_chkKitchen_2"><label for="ContentPlaceHolder1_chkKitchen_2">Island</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkKitchen$3" id="ContentPlaceHolder1_chkKitchen_3"><label for="ContentPlaceHolder1_chkKitchen_3">Walk-in Pantry</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkKitchen$4" id="ContentPlaceHolder1_chkKitchen_4"><label for="ContentPlaceHolder1_chkKitchen_4">Closet</label></td><td></td><td></td><td></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Appliances</div>
                    <div class="right_area_new">

                        <table id="ContentPlaceHolder1_chkAppliances">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkAppliances$0" id="ContentPlaceHolder1_chkAppliances_0"><label for="ContentPlaceHolder1_chkAppliances_0">Oven-double</label></td><td><input type="checkbox" value="2" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$1" id="ContentPlaceHolder1_chkAppliances_1"><label for="ContentPlaceHolder1_chkAppliances_1">Oven/Range</label></td><td><input type="checkbox" value="3" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$2" id="ContentPlaceHolder1_chkAppliances_2"><label for="ContentPlaceHolder1_chkAppliances_2">Microwave</label></td><td><input type="checkbox" value="4" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$3" id="ContentPlaceHolder1_chkAppliances_3"><label for="ContentPlaceHolder1_chkAppliances_3">Dishwasher</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$4" id="ContentPlaceHolder1_chkAppliances_4"><label for="ContentPlaceHolder1_chkAppliances_4">Refrigerator</label></td><td><input type="checkbox" value="6" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$5" id="ContentPlaceHolder1_chkAppliances_5"><label for="ContentPlaceHolder1_chkAppliances_5">Washer</label></td><td><input type="checkbox" value="7" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$6" id="ContentPlaceHolder1_chkAppliances_6"><label for="ContentPlaceHolder1_chkAppliances_6">Dryer</label></td><td><input type="checkbox" value="8" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$7" id="ContentPlaceHolder1_chkAppliances_7"><label for="ContentPlaceHolder1_chkAppliances_7">Disposal</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAppliances$8" id="ContentPlaceHolder1_chkAppliances_8"><label for="ContentPlaceHolder1_chkAppliances_8">Sub-Zero Refrigerator</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAppliances$9" id="ContentPlaceHolder1_chkAppliances_9"><label for="ContentPlaceHolder1_chkAppliances_9">Cook-top</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAppliances$10" id="ContentPlaceHolder1_chkAppliances_10"><label for="ContentPlaceHolder1_chkAppliances_10">Built-in Oven</label></td><td><input type="checkbox" value="12" checked="checked" name="ctl00$ContentPlaceHolder1$chkAppliances$11" id="ContentPlaceHolder1_chkAppliances_11"><label for="ContentPlaceHolder1_chkAppliances_11">Built-in Microwave</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$chkAppliances$12" id="ContentPlaceHolder1_chkAppliances_12"><label for="ContentPlaceHolder1_chkAppliances_12">Wine Cooler</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$chkAppliances$13" id="ContentPlaceHolder1_chkAppliances_13"><label for="ContentPlaceHolder1_chkAppliances_13">Wet bar</label></td><td><input type="checkbox" value="15" name="ctl00$ContentPlaceHolder1$chkAppliances$14" id="ContentPlaceHolder1_chkAppliances_14"><label for="ContentPlaceHolder1_chkAppliances_14">Commercial grade stove</label></td><td><input type="checkbox" value="16" name="ctl00$ContentPlaceHolder1$chkAppliances$15" id="ContentPlaceHolder1_chkAppliances_15"><label for="ContentPlaceHolder1_chkAppliances_15">Trash compactor</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Dining</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlDinning" name="ctl00$ContentPlaceHolder1$ddlDinning">
                            <option value=""></option>
                            <option value="1" selected="selected">Separate</option>
                            <option value="2">Combined with Kitchen</option>
                            <option value="3">Combined with Living Room</option>
                            <option value="4">Butler's Pantry</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Attic (Detached Only)</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlAttic" name="ctl00$ContentPlaceHolder1$ddlAttic">
                            <option value="" selected="selected"></option>
                            <option value="1">Dormer</option>
                            <option value="2">Pull Down Stair</option>
                            <option value="3">Unfinished</option>
                            <option value="4">Finished</option>
                            <option value="5">Bonus room</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Basement Details</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlBaesementDetails" name="ctl00$ContentPlaceHolder1$ddlBaesementDetails">
                            <option value="" selected="selected"></option>
                            <option value="1">Finished</option>
                            <option value="2">Unfinished</option>
                            <option value="3">English</option>
                            <option value="4">Walk-out</option>
                            <option value="5">Full</option>
                            <option value="6">Partial</option>
                            <option value="7">Crawl</option>
                            <option value="8">Slab</option>
                            <option value="9"> Community Washer Dryers</option>
                            <option value="10">Full-Finished</option>
                            <option value="11">Full-Unfinished</option>
                            <option value="12">Partial-Finished</option>
                            <option value="13">Partial-Unfinished</option>
                            <option value="14">Walkout-Finished</option>
                            <option value="15">Walkout-Unfinished</option>
                            <option value="16">English-Finisher</option>
                            <option value="17">English-Unfinished</option>
                            <option value="18">Sub-Finished</option>
                            <option value="19">Celler</option>
                            <option value="20">Community Washer</option>
                            <option value="21">Dryer and Storage</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Bathroom Amenities</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkBathroomAmenities">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" checked="checked" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$0" id="ContentPlaceHolder1_chkBathroomAmenities_0"><label for="ContentPlaceHolder1_chkBathroomAmenities_0">Whirlpool</label></td><td><input type="checkbox" value="2" checked="checked" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$1" id="ContentPlaceHolder1_chkBathroomAmenities_1"><label for="ContentPlaceHolder1_chkBathroomAmenities_1">Spa Soaking Tub</label></td><td><input type="checkbox" value="3" checked="checked" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$2" id="ContentPlaceHolder1_chkBathroomAmenities_2"><label for="ContentPlaceHolder1_chkBathroomAmenities_2">Separate Shower </label></td><td><input type="checkbox" value="4" checked="checked" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$3" id="ContentPlaceHolder1_chkBathroomAmenities_3"><label for="ContentPlaceHolder1_chkBathroomAmenities_3">Double Sink</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$4" id="ContentPlaceHolder1_chkBathroomAmenities_4"><label for="ContentPlaceHolder1_chkBathroomAmenities_4">Closet</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$5" id="ContentPlaceHolder1_chkBathroomAmenities_5"><label for="ContentPlaceHolder1_chkBathroomAmenities_5">Sauna</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$6" id="ContentPlaceHolder1_chkBathroomAmenities_6"><label for="ContentPlaceHolder1_chkBathroomAmenities_6">Steam Shower</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkBathroomAmenities$7" id="ContentPlaceHolder1_chkBathroomAmenities_7"><label for="ContentPlaceHolder1_chkBathroomAmenities_7">Double Shower Heads</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Additional Rooms</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkAdditionalRooms">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$0" id="ContentPlaceHolder1_chkAdditionalRooms_0"><label for="ContentPlaceHolder1_chkAdditionalRooms_0">Roof-top Deck</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$1" id="ContentPlaceHolder1_chkAdditionalRooms_1"><label for="ContentPlaceHolder1_chkAdditionalRooms_1">Loft</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$2" id="ContentPlaceHolder1_chkAdditionalRooms_2"><label for="ContentPlaceHolder1_chkAdditionalRooms_2">Bonus Room</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$3" id="ContentPlaceHolder1_chkAdditionalRooms_3"><label for="ContentPlaceHolder1_chkAdditionalRooms_3">Breakfast Room</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$4" id="ContentPlaceHolder1_chkAdditionalRooms_4"><label for="ContentPlaceHolder1_chkAdditionalRooms_4">Butler's Pantry</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$5" id="ContentPlaceHolder1_chkAdditionalRooms_5"><label for="ContentPlaceHolder1_chkAdditionalRooms_5">Library</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$6" id="ContentPlaceHolder1_chkAdditionalRooms_6"><label for="ContentPlaceHolder1_chkAdditionalRooms_6">Den</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$7" id="ContentPlaceHolder1_chkAdditionalRooms_7"><label for="ContentPlaceHolder1_chkAdditionalRooms_7">Laundry</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$8" id="ContentPlaceHolder1_chkAdditionalRooms_8"><label for="ContentPlaceHolder1_chkAdditionalRooms_8">Foyer</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$9" id="ContentPlaceHolder1_chkAdditionalRooms_9"><label for="ContentPlaceHolder1_chkAdditionalRooms_9">Vestibule</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$10" id="ContentPlaceHolder1_chkAdditionalRooms_10"><label for="ContentPlaceHolder1_chkAdditionalRooms_10">Breezeway</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$11" id="ContentPlaceHolder1_chkAdditionalRooms_11"><label for="ContentPlaceHolder1_chkAdditionalRooms_11">Atrium</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$12" id="ContentPlaceHolder1_chkAdditionalRooms_12"><label for="ContentPlaceHolder1_chkAdditionalRooms_12">Patio</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$13" id="ContentPlaceHolder1_chkAdditionalRooms_13"><label for="ContentPlaceHolder1_chkAdditionalRooms_13">Porch</label></td><td><input type="checkbox" value="15" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$14" id="ContentPlaceHolder1_chkAdditionalRooms_14"><label for="ContentPlaceHolder1_chkAdditionalRooms_14">Lanai</label></td><td><input type="checkbox" value="16" name="ctl00$ContentPlaceHolder1$chkAdditionalRooms$15" id="ContentPlaceHolder1_chkAdditionalRooms_15"><label for="ContentPlaceHolder1_chkAdditionalRooms_15">In-Law/Au Pair living quarters</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Electricity</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoElectricity">
                            <tbody><tr>
                                    <td><input type="radio" value="c" name="ctl00$ContentPlaceHolder1$rdoElectricity" id="ContentPlaceHolder1_rdoElectricity_0"><label for="ContentPlaceHolder1_rdoElectricity_0">Circuit Breakers</label></td><td><input type="radio" value="a" name="ctl00$ContentPlaceHolder1$rdoElectricity" id="ContentPlaceHolder1_rdoElectricity_1"><label for="ContentPlaceHolder1_rdoElectricity_1">200+ Amp Service</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Equipment</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkEquipment">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" checked="checked" name="ctl00$ContentPlaceHolder1$chkEquipment$0" id="ContentPlaceHolder1_chkEquipment_0"><label for="ContentPlaceHolder1_chkEquipment_0">Air-Filter</label></td><td><input type="checkbox" value="2" checked="checked" name="ctl00$ContentPlaceHolder1$chkEquipment$1" id="ContentPlaceHolder1_chkEquipment_1"><label for="ContentPlaceHolder1_chkEquipment_1">Humidifier</label></td><td><input type="checkbox" value="3" checked="checked" name="ctl00$ContentPlaceHolder1$chkEquipment$2" id="ContentPlaceHolder1_chkEquipment_2"><label for="ContentPlaceHolder1_chkEquipment_2">Security System</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkEquipment$3" id="ContentPlaceHolder1_chkEquipment_3"><label for="ContentPlaceHolder1_chkEquipment_3">Sprinkler-Lawn</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" checked="checked" name="ctl00$ContentPlaceHolder1$chkEquipment$4" id="ContentPlaceHolder1_chkEquipment_4"><label for="ContentPlaceHolder1_chkEquipment_4">Cable ready</label></td><td></td><td></td><td></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>










                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Attic Dimensions</div>
                    <div class="right_area_new">
                        <input type="text" class="w30" id="ContentPlaceHolder1_txtMaxAtticDime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMaxAtticDime"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" class="w30" id="ContentPlaceHolder1_txtMinAtticDime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMinAtticDime">
                    </div>
                </div>

                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Basement Dimensions</div>
                    <div class="right_area_new">
                        <input type="text" class="w30" id="ContentPlaceHolder1_txtMaxBasementDime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMaxBasementDime"> <img width="8" height="9" src="images/x_icon.gif" alt="" class="mlr10">  <input type="text" id="ContentPlaceHolder1_txtMinBasementDime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMinBasementDime">
                    </div>
                </div>

                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Bathroom Dimensions</div>
                    <div class="right_area_new">
                        <div>&nbsp;</div>
                        <div><span class="mr33">Bathroom1</span>   <input type="text" class="w30" id="ContentPlaceHolder1_txtMaxBath1Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMaxBath1Dime"> <img width="8" height="9" class="mlr10" alt="" src="images/x_icon.gif"><input type="text" class="w30" id="ContentPlaceHolder1_txtMinBath1Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMinBath1Dime"> </div>
                        <div class="roomdi"><span class="mr33">Bathroom2</span> <input type="text" class="w30" id="ContentPlaceHolder1_txtMaxBath2Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMaxBath2Dime"> <img width="8" height="9" class="mlr10" alt="" src="images/x_icon.gif"> <input type="text" class="w30" id="ContentPlaceHolder1_txtMinBath2Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMinBath2Dime"> </div>
                        <div class="roomdi"><span class="mr33">Bathroom3</span>  <input type="text" class="w30" id="ContentPlaceHolder1_txtMaxBath3Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMaxBath3Dime"> <img width="8" height="9" class="mlr10" alt="" src="images/x_icon.gif"> <input type="text" class="w30" id="ContentPlaceHolder1_txtMinBath3Dime" maxlength="4" name="ctl00$ContentPlaceHolder1$txtMinBath3Dime"> </div>
                    </div></div>


                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Fireplace Details</div>
                    <div class="right_area_new">
                        <textarea style="height:82px;width:219px;" id="ContentPlaceHolder1_txtFirePlaceDetails" cols="20" rows="2" name="ctl00$ContentPlaceHolder1$txtFirePlaceDetails"></textarea>
                    </div>
                </div>
                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Fireplace Location</div>

                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlFireplaceLoc" name="ctl00$ContentPlaceHolder1$ddlFireplaceLoc">
                            <option value="" selected="selected"></option>
                            <option value="1">Living Room</option>
                            <option value="2">Family Room</option>
                            <option value="3">Master Bedroom</option>
                            <option value="4">Other</option>

                        </select>
                    </div>
                </div>


                <div class="clear">&nbsp;</div>
                <div align="center">

                    <input type="image" onclick="showAlert_Interior(); WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$ContentPlaceHolder1$btnNext_exterior & quot; , & quot; & quot; , true, & quot; content & quot; , & quot; & quot; , false, false))" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnNext_exterior" name="ctl00$ContentPlaceHolder1$btnNext_exterior">

                </div></div>





        </div>
        <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvExterior">
                <div>&nbsp;</div>
                <h3>Exterior Features</h3>
                <div>&nbsp;</div>                          
                <div style="display:none;" id="ContentPlaceHolder1_dvAlert_exterior">
                    <span style="color:Red;" id="ContentPlaceHolder1_Label1">You have selected Frequency as ANNUALLY, now can pick up to 7 choices at most!!</span>

                    <span style="color:Red;" id="ContentPlaceHolder1_span_exterior"></span><br>
                </div>


                <div class="contact_row_new">
                    <div class="left_area_new">Exterior Construction</div>          
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkExteriorConstr">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" checked="checked" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$0" id="ContentPlaceHolder1_chkExteriorConstr_0"><label for="ContentPlaceHolder1_chkExteriorConstr_0">Brick</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$1" id="ContentPlaceHolder1_chkExteriorConstr_1"><label for="ContentPlaceHolder1_chkExteriorConstr_1">Block</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$2" id="ContentPlaceHolder1_chkExteriorConstr_2"><label for="ContentPlaceHolder1_chkExteriorConstr_2">Stone</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$3" id="ContentPlaceHolder1_chkExteriorConstr_3"><label for="ContentPlaceHolder1_chkExteriorConstr_3">Frame</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$4" id="ContentPlaceHolder1_chkExteriorConstr_4"><label for="ContentPlaceHolder1_chkExteriorConstr_4">Aluminum</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$5" id="ContentPlaceHolder1_chkExteriorConstr_5"><label for="ContentPlaceHolder1_chkExteriorConstr_5">Vinyl</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$6" id="ContentPlaceHolder1_chkExteriorConstr_6"><label for="ContentPlaceHolder1_chkExteriorConstr_6">Concrete</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$7" id="ContentPlaceHolder1_chkExteriorConstr_7"><label for="ContentPlaceHolder1_chkExteriorConstr_7">Stucco</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$8" id="ContentPlaceHolder1_chkExteriorConstr_8"><label for="ContentPlaceHolder1_chkExteriorConstr_8">Dryvit</label></td><td></td><td></td><td></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Garage Ownership</div>
                    <div class="right_area_new">

                        <select textalign="Right" repeatdirection="Horizontal" id="ContentPlaceHolder1_rdoGarageOwnrshp" name="ctl00$ContentPlaceHolder1$rdoGarageOwnrshp">
                            <option value=""></option>
                            <option value="f" selected="selected">Fee/Leases</option>
                            <option value="o">Owned/No Fee</option>
                            <option value="r">Renttal only</option>

                        </select>
                    </div></div>

                <div class="contact_row_new">
                    <div class="left_area_new">Garage Type</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlGarageType" name="ctl00$ContentPlaceHolder1$ddlGarageType">
                            <option value=""></option>
                            <option value="1">Detached</option>
                            <option value="10">Indoor Leased</option>
                            <option value="11">Out Door Owned</option>
                            <option value="12">Out Door Fee Simple</option>
                            <option value="13">Outdoor Leased</option>
                            <option value="14">1- Car Detached</option>
                            <option value="15">1-Car Attached</option>
                            <option value="16">2-Car Detached</option>
                            <option value="17">2-Car Attached</option>
                            <option value="18">3-Car Detached</option>
                            <option value="19">3- Car Attached</option>
                            <option value="2" selected="selected">Attached</option>
                            <option value="20">4-Car Detached</option>
                            <option value="21">4-Car Attached</option>
                            <option value="22">Car Port</option>
                            <option value="23">Stacked parking</option>
                            <option value="24">Fenced in parking</option>
                            <option value="25">Parking Space</option>
                            <option value="26">Assigned Parking</option>
                            <option value="27">Valet Parking</option>
                            <option value="3">Space</option>
                            <option value="4">Deeded</option>
                            <option value="5">Leased</option>
                            <option value="6">Off Alley</option>
                            <option value="7">Garage Parking</option>
                            <option value="8">Indoor Owned</option>
                            <option value="9">Indoor Fee Simple</option>

                        </select>                    
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Disability Access</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoDisabilityAccess">
                            <tbody><tr>
                                    <td><input type="radio" value="y" name="ctl00$ContentPlaceHolder1$rdoDisabilityAccess" id="ContentPlaceHolder1_rdoDisabilityAccess_0"><label for="ContentPlaceHolder1_rdoDisabilityAccess_0">Yes</label></td><td><input type="radio" checked="checked" value="n" name="ctl00$ContentPlaceHolder1$rdoDisabilityAccess" id="ContentPlaceHolder1_rdoDisabilityAccess_1"><label for="ContentPlaceHolder1_rdoDisabilityAccess_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div></div>
                <div class="contact_row_new">
                    <div class="left_area_new">Elevator Building</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoElevatorBuilding">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoElevatorBuilding" id="ContentPlaceHolder1_rdoElevatorBuilding_0"><label for="ContentPlaceHolder1_rdoElevatorBuilding_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoElevatorBuilding" id="ContentPlaceHolder1_rdoElevatorBuilding_1"><label for="ContentPlaceHolder1_rdoElevatorBuilding_1">No</label></td>
                                </tr>
                            </tbody></table>

                    </div></div>
                <div class="contact_row_new">
                    <div class="left_area_new">Sewer</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoSewer">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="p" name="ctl00$ContentPlaceHolder1$rdoSewer" id="ContentPlaceHolder1_rdoSewer_0"><label for="ContentPlaceHolder1_rdoSewer_0">Public Sewer</label></td><td><input type="radio" value="s" name="ctl00$ContentPlaceHolder1$rdoSewer" id="ContentPlaceHolder1_rdoSewer_1"><label for="ContentPlaceHolder1_rdoSewer_1">Septic</label></td>
                                </tr>
                            </tbody></table>
                    </div></div>
                <div class="contact_row_new">
                    <div class="left_area_new">Water</div>
                    <div class="right_area_new">
                        <select id="ContentPlaceHolder1_ddlWater" name="ctl00$ContentPlaceHolder1$ddlWater">
                            <option value=""></option>
                            <option value="5">City Water</option>
                            <option value="4">Community Well</option>
                            <option value="1" selected="selected">Lake Michigan</option>
                            <option value="6">Lake Water</option>
                            <option value="8">Municipal Water</option>
                            <option value="3">Private Well</option>
                            <option value="2">Public</option>
                            <option value="9">Public Works</option>
                            <option value="7">Treated Water</option>

                        </select>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Amenities</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkAmenities">
                            <tbody><tr>
                                    <td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkAmenities$0" id="ContentPlaceHolder1_chkAmenities_0"><label for="ContentPlaceHolder1_chkAmenities_0">Park/Playground</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkAmenities$1" id="ContentPlaceHolder1_chkAmenities_1"><label for="ContentPlaceHolder1_chkAmenities_1">Pond/Lake</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkAmenities$2" id="ContentPlaceHolder1_chkAmenities_2"><label for="ContentPlaceHolder1_chkAmenities_2">Curbs/Gutters</label></td><td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkAmenities$3" id="ContentPlaceHolder1_chkAmenities_3"><label for="ContentPlaceHolder1_chkAmenities_3">Sidewalks</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkAmenities$4" id="ContentPlaceHolder1_chkAmenities_4"><label for="ContentPlaceHolder1_chkAmenities_4">Steet Lights</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkAmenities$5" id="ContentPlaceHolder1_chkAmenities_5"><label for="ContentPlaceHolder1_chkAmenities_5">Street Paved</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkAmenities$6" id="ContentPlaceHolder1_chkAmenities_6"><label for="ContentPlaceHolder1_chkAmenities_6">Lakefront</label></td><td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAmenities$7" id="ContentPlaceHolder1_chkAmenities_7"><label for="ContentPlaceHolder1_chkAmenities_7">Waterfront</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAmenities$8" id="ContentPlaceHolder1_chkAmenities_8"><label for="ContentPlaceHolder1_chkAmenities_8">Storage</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAmenities$9" id="ContentPlaceHolder1_chkAmenities_9"><label for="ContentPlaceHolder1_chkAmenities_9">Bike room</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkAmenities$10" id="ContentPlaceHolder1_chkAmenities_10"><label for="ContentPlaceHolder1_chkAmenities_10">Walking Paths</label></td><td><input type="checkbox" value="16" name="ctl00$ContentPlaceHolder1$chkAmenities$11" id="ContentPlaceHolder1_chkAmenities_11"><label for="ContentPlaceHolder1_chkAmenities_11">Pool</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="17" name="ctl00$ContentPlaceHolder1$chkAmenities$12" id="ContentPlaceHolder1_chkAmenities_12"><label for="ContentPlaceHolder1_chkAmenities_12">Weight room</label></td><td><input type="checkbox" value="18" name="ctl00$ContentPlaceHolder1$chkAmenities$13" id="ContentPlaceHolder1_chkAmenities_13"><label for="ContentPlaceHolder1_chkAmenities_13">Dog Run</label></td><td><input type="checkbox" value="19" name="ctl00$ContentPlaceHolder1$chkAmenities$14" id="ContentPlaceHolder1_chkAmenities_14"><label for="ContentPlaceHolder1_chkAmenities_14">Party room</label></td><td><input type="checkbox" value="20" name="ctl00$ContentPlaceHolder1$chkAmenities$15" id="ContentPlaceHolder1_chkAmenities_15"><label for="ContentPlaceHolder1_chkAmenities_15">Tennis courts</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>

                <div style="width:649px" class="contact_row">
                    <div class="left_area">ASSESSMENTS INCLUDE</div>
                    <div style="width:450px;" class="right_area">
                        <table class="chkChoice" id="ContentPlaceHolder1_CheckBoxList1">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$CheckBoxList1$0" id="ContentPlaceHolder1_CheckBoxList1_0"><label for="ContentPlaceHolder1_CheckBoxList1_0">Heat</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$CheckBoxList1$1" id="ContentPlaceHolder1_CheckBoxList1_1"><label for="ContentPlaceHolder1_CheckBoxList1_1">Air Conditioning</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$CheckBoxList1$2" id="ContentPlaceHolder1_CheckBoxList1_2"><label for="ContentPlaceHolder1_CheckBoxList1_2">Water</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$CheckBoxList1$3" id="ContentPlaceHolder1_CheckBoxList1_3"><label for="ContentPlaceHolder1_CheckBoxList1_3">Electric</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$CheckBoxList1$4" id="ContentPlaceHolder1_CheckBoxList1_4"><label for="ContentPlaceHolder1_CheckBoxList1_4">Gas</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$CheckBoxList1$5" id="ContentPlaceHolder1_CheckBoxList1_5"><label for="ContentPlaceHolder1_CheckBoxList1_5">Parking</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$CheckBoxList1$6" id="ContentPlaceHolder1_CheckBoxList1_6"><label for="ContentPlaceHolder1_CheckBoxList1_6">Tax</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$CheckBoxList1$7" id="ContentPlaceHolder1_CheckBoxList1_7"><label for="ContentPlaceHolder1_CheckBoxList1_7">Common Insurance</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$CheckBoxList1$8" id="ContentPlaceHolder1_CheckBoxList1_8"><label for="ContentPlaceHolder1_CheckBoxList1_8">Security</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$CheckBoxList1$9" id="ContentPlaceHolder1_CheckBoxList1_9"><label for="ContentPlaceHolder1_CheckBoxList1_9">Security System</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$CheckBoxList1$10" id="ContentPlaceHolder1_CheckBoxList1_10"><label for="ContentPlaceHolder1_CheckBoxList1_10">Doorman</label></td><td><input type="checkbox" value="12" checked="checked" name="ctl00$ContentPlaceHolder1$CheckBoxList1$11" id="ContentPlaceHolder1_CheckBoxList1_11"><label for="ContentPlaceHolder1_CheckBoxList1_11">TV/Cable</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$CheckBoxList1$12" id="ContentPlaceHolder1_CheckBoxList1_12"><label for="ContentPlaceHolder1_CheckBoxList1_12">Clubhouse</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$CheckBoxList1$13" id="ContentPlaceHolder1_CheckBoxList1_13"><label for="ContentPlaceHolder1_CheckBoxList1_13">Exercise Facilities</label></td><td><input type="checkbox" value="15" name="ctl00$ContentPlaceHolder1$CheckBoxList1$14" id="ContentPlaceHolder1_CheckBoxList1_14"><label for="ContentPlaceHolder1_CheckBoxList1_14">Pool</label></td><td><input type="checkbox" value="16" checked="checked" name="ctl00$ContentPlaceHolder1$CheckBoxList1$15" id="ContentPlaceHolder1_CheckBoxList1_15"><label for="ContentPlaceHolder1_CheckBoxList1_15">Exterior Maintenance</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="17" name="ctl00$ContentPlaceHolder1$CheckBoxList1$16" id="ContentPlaceHolder1_CheckBoxList1_16"><label for="ContentPlaceHolder1_CheckBoxList1_16">Lawn Care</label></td><td><input type="checkbox" value="18" name="ctl00$ContentPlaceHolder1$CheckBoxList1$17" id="ContentPlaceHolder1_CheckBoxList1_17"><label for="ContentPlaceHolder1_CheckBoxList1_17">Scavenger</label></td><td><input type="checkbox" value="19" name="ctl00$ContentPlaceHolder1$CheckBoxList1$18" id="ContentPlaceHolder1_CheckBoxList1_18"><label for="ContentPlaceHolder1_CheckBoxList1_18">Snow Removal</label></td><td><input type="checkbox" value="20" name="ctl00$ContentPlaceHolder1$CheckBoxList1$19" id="ContentPlaceHolder1_CheckBoxList1_19"><label for="ContentPlaceHolder1_CheckBoxList1_19">Lake Rights</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="21" name="ctl00$ContentPlaceHolder1$CheckBoxList1$20" id="ContentPlaceHolder1_CheckBoxList1_20"><label for="ContentPlaceHolder1_CheckBoxList1_20">Other</label></td><td><input type="checkbox" value="22" name="ctl00$ContentPlaceHolder1$CheckBoxList1$21" id="ContentPlaceHolder1_CheckBoxList1_21"><label for="ContentPlaceHolder1_CheckBoxList1_21">Wi-Fi</label></td><td><input type="checkbox" value="23" name="ctl00$ContentPlaceHolder1$CheckBoxList1$22" id="ContentPlaceHolder1_CheckBoxList1_22"><label for="ContentPlaceHolder1_CheckBoxList1_22">Internet Access</label></td><td><input type="checkbox" value="24" name="ctl00$ContentPlaceHolder1$CheckBoxList1$23" id="ContentPlaceHolder1_CheckBoxList1_23"><label for="ContentPlaceHolder1_CheckBoxList1_23">None</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div style="width:649px" class="contact_row">
                    <div class="left_area">Pets</div>
                    <div style="width:450px;" class="right_area">
                        <select style="width:70px;" id="ContentPlaceHolder1_rdoPetFriendly" name="ctl00$ContentPlaceHolder1$rdoPetFriendly">
                            <option value="">None</option>
                            <option value="d">Dog</option>
                            <option value="c">Cat</option>
                            <option value="b">Both</option>

                        </select>
                    </div>
                </div>
                <div style="display:none;" class="contact_row_new">
                    <div class="left_area_new">Pet Friendly (Attached Only)</div>
                    <div class="right_area_new">
                        <table onchange="checkpet()" id="ContentPlaceHolder1_rdoPetLIst">
                            <tbody><tr>
                                    <td><input type="radio" value="y" name="ctl00$ContentPlaceHolder1$rdoPetLIst" id="ContentPlaceHolder1_rdoPetLIst_0"><label for="ContentPlaceHolder1_rdoPetLIst_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoPetLIst" id="ContentPlaceHolder1_rdoPetLIst_1"><label for="ContentPlaceHolder1_rdoPetLIst_1">No</label></td>
                                </tr>
                            </tbody></table>
                        <div style="display:none;" id="ContentPlaceHolder1_dvPetType">Pet Type                                

                        </div> 
                    </div></div>

                <div style="display:none;" class="contact_row_new">

                    <div class="left_area_new">Asmt Incl (Rental Only)</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkAsmtIncl">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$0" id="ContentPlaceHolder1_chkAsmtIncl_0"><label for="ContentPlaceHolder1_chkAsmtIncl_0">NoneHeat</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$1" id="ContentPlaceHolder1_chkAsmtIncl_1"><label for="ContentPlaceHolder1_chkAsmtIncl_1">Air-Conditioning</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$2" id="ContentPlaceHolder1_chkAsmtIncl_2"><label for="ContentPlaceHolder1_chkAsmtIncl_2">Water</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$3" id="ContentPlaceHolder1_chkAsmtIncl_3"><label for="ContentPlaceHolder1_chkAsmtIncl_3">Gas</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$4" id="ContentPlaceHolder1_chkAsmtIncl_4"><label for="ContentPlaceHolder1_chkAsmtIncl_4">Electric</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$5" id="ContentPlaceHolder1_chkAsmtIncl_5"><label for="ContentPlaceHolder1_chkAsmtIncl_5">Cable</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$6" id="ContentPlaceHolder1_chkAsmtIncl_6"><label for="ContentPlaceHolder1_chkAsmtIncl_6">Internet</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$7" id="ContentPlaceHolder1_chkAsmtIncl_7"><label for="ContentPlaceHolder1_chkAsmtIncl_7">Indoor Pool</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$8" id="ContentPlaceHolder1_chkAsmtIncl_8"><label for="ContentPlaceHolder1_chkAsmtIncl_8">Outdoor Pool</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$9" id="ContentPlaceHolder1_chkAsmtIncl_9"><label for="ContentPlaceHolder1_chkAsmtIncl_9">Party Room</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$10" id="ContentPlaceHolder1_chkAsmtIncl_10"><label for="ContentPlaceHolder1_chkAsmtIncl_10">Business Center</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$11" id="ContentPlaceHolder1_chkAsmtIncl_11"><label for="ContentPlaceHolder1_chkAsmtIncl_11">Tenni Courts</label></td>
                                </tr><tr>
                                    <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$12" id="ContentPlaceHolder1_chkAsmtIncl_12"><label for="ContentPlaceHolder1_chkAsmtIncl_12">On Site management</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$13" id="ContentPlaceHolder1_chkAsmtIncl_13"><label for="ContentPlaceHolder1_chkAsmtIncl_13">Off site management</label></td><td></td><td></td>
                                </tr>
                            </tbody></table>
                    </div></div>

                <div class="contact_row_new" style="display:none;">
                    <div class="left_area_new">Exposure</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_chkExposure">
                            <tbody><tr>
                                    <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkExposure$0" id="ContentPlaceHolder1_chkExposure_0"><label for="ContentPlaceHolder1_chkExposure_0">S(South) </label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkExposure$1" id="ContentPlaceHolder1_chkExposure_1"><label for="ContentPlaceHolder1_chkExposure_1">E (East) </label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkExposure$2" id="ContentPlaceHolder1_chkExposure_2"><label for="ContentPlaceHolder1_chkExposure_2">W (West)</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkExposure$3" id="ContentPlaceHolder1_chkExposure_3"><label for="ContentPlaceHolder1_chkExposure_3">N (North)</label></td>
                                </tr>
                            </tbody></table>
                    </div></div>
                <div class="clear">&nbsp;</div>
                <div align="center">                     
                    <input type="image" onclick="showAlert_exterior();" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnNext_virtual_tour" name="ctl00$ContentPlaceHolder1$btnNext_virtual_tour">
                </div></div>



        </div>
        <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotoFile">
                <div>&nbsp;</div>    
                <div style="display:none;" id="ContentPlaceHolder1_dvAlert_add_photo">
                    <span><span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator1_addphoto">Upload file(.jpg/.png/.gif/.bmp)only!!</span></span><br>
                    <span><span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator2_addphoto">Upload file(.pdf)only!!</span></span><br>

                    <span style="color:Red;" id="ContentPlaceHolder1_span2_addphoto"></span><br>
                </div>                  
                <div class="contact_row_new">
                    <div class="left_area_new">
                        <div id="ContentPlaceHolder1_trPhoto">
                            <img style="height:55px;width:77px;" src="uploaded_files/prop_gallery/cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg" id="ContentPlaceHolder1_hdIMAGE">  <input type="submit" id="ContentPlaceHolder1_btnDel" onclick="return ConfirmDelete();" value="Remove Image" name="ctl00$ContentPlaceHolder1$btnDel"></div></div>
                    <div class="right_area_new mt18">
                        <input type="file" id="ContentPlaceHolder1_fup_image" name="ctl00$ContentPlaceHolder1$fup_image">
                        <br>
                        Best suited image size(374*322) in pixels. 
                        <input type="hidden" value="cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg" id="ContentPlaceHolder1_hdPhoto" name="ctl00$ContentPlaceHolder1$hdPhoto">
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Upload You Tube Video</div>
                    <div class="right_area_new">http://<input type="text" class="title_area w400" id="ContentPlaceHolder1_txtYoTube" size="30" name="ctl00$ContentPlaceHolder1$txtYoTube"></div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Open House</div>
                    <div class="right_area_new">
                        <select style="width:100px;" id="ContentPlaceHolder1_drp_open_house" name="ctl00$ContentPlaceHolder1$drp_open_house">
                            <option value="">None</option>
                            <option value="today">Today</option>
                            <option value="saturday">Saturday</option>
                            <option value="sunday" selected="selected">Sunday</option>

                        </select>
                        <select style="width:70px;" id="ContentPlaceHolder1_open_house_to_time" name="ctl00$ContentPlaceHolder1$open_house_to_time">
                            <option value="6am" selected="selected">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12am">12pm</option>

                        </select>  to 
                        <select style="width:70px;" id="ContentPlaceHolder1_open_house_from_time" name="ctl00$ContentPlaceHolder1$open_house_from_time">
                            <option value="1pm" selected="selected">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>

                        </select> 
                    </div>
                </div>
                <div style="display:none;" class="contact_row_new">
                    <div class="left_area_new">Print Flyer</div>
                    <div class="right_area_new"> 
                        <input type="file" id="ContentPlaceHolder1_fup_file" name="ctl00$ContentPlaceHolder1$fup_file">
                        <input type="hidden" id="ContentPlaceHolder1_hdPrintFlyer" name="ctl00$ContentPlaceHolder1$hdPrintFlyer">
                        <br><b>Only .pdf</b>  </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">&nbsp;</div>
                    <div class="right_area_new">
                        <input type="image" onclick="showAlert_addphoto(); WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$ContentPlaceHolder1$btnNext_gallery & quot; , & quot; & quot; , true, & quot; photo & quot; , & quot; & quot; , false, false))" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnNext_gallery" name="ctl00$ContentPlaceHolder1$btnNext_gallery"></div>
                </div>
            </div>

            <div class="TabbedPanelsContent" style="display:none;" id="ContentPlaceHolder1_dvOptionalServc">
                <div>&nbsp;</div>    
                <h3>Optional Services</h3>
                <div style="display:none;" id="ContentPlaceHolder1_dvAlert_optional">
                    <span style="color:Red;" id="ContentPlaceHolder1_span_optional"></span>
                </div>


                <div class="clear">&nbsp;</div>
                <div align="center">

                    <input type="image" onclick="showAlert_optional();" alt="Save" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnSave" name="ctl00$ContentPlaceHolder1$btnSave">
                </div>


            </div></div>

        <div id="tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <!-- photos -->
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotos">
                <div>&nbsp;</div>
                <div class="fr"><span id="ContentPlaceHolder1_lbl_add_photo_resize"><a target="_blank" href="http://webresizer.com/resizer/"><img alt="" src="images/add_icon.gif">Free photo resizer tool</a></span>&nbsp;&nbsp;<span id="ContentPlaceHolder1_lbl_add_gallery"><a href="Add_new_gallery.aspx?property_id=NDU%3d-xSk85Em0siY%3d" id="various_add_gallery"><img alt="" src="images/add_icon.gif">Add a new Photo</a><br>(Limit up to 10 photos)</span></div>
                <div class="clear">&nbsp;</div>







                <ul class="photos"><li><a href="listing.aspx?property_id=NDU%3d-xSk85Em0siY%3d"><img src="uploaded_files/prop_gallery/cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg"></a><br><a href="photo_remove.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=118" id="various_remove_gallery0">Remove</a><span class="mlr5">|</span><a href="photo_edit.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=118" id="various_edit_gallery0">Edit</a><br>








                    </li><li><a href="listing.aspx?property_id=NDU%3d-xSk85Em0siY%3d"><img src="uploaded_files/prop_gallery/"></a><br><a href="photo_remove.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=110" id="various_remove_gallery1">Remove</a><span class="mlr5">|</span><a href="photo_edit.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=110" id="various_edit_gallery1">Edit</a><br><a onclick="markByDefault(110)">Mark As Default</a>





                        <!-- pagination -->
                        <div class="pagination mt10" id="ContentPlaceHolder1_pnlPager">

                        </div>
                        <input type="hidden" value="-1" id="ContentPlaceHolder1_hdPgr" name="ctl00$ContentPlaceHolder1$hdPgr">
                        <input type="hidden" id="ContentPlaceHolder1_hdTab" name="ctl00$ContentPlaceHolder1$hdTab">
                        <input type="hidden" id="ContentPlaceHolder1_hdMarkDefalt" name="ctl00$ContentPlaceHolder1$hdMarkDefalt">
                    </li></ul></div></div>

        <div id="tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_div_optional_services">

                <div style="display:none;" id="ContentPlaceHolder1_dvAlert6">
                    <span style="color:Red;" id="ContentPlaceHolder1_spanAlert6"></span>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">List your home in the local Realtor's MLS for a flat fee</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoMls">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoMls" id="ContentPlaceHolder1_rdoMls_0"><label for="ContentPlaceHolder1_rdoMls_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoMls" id="ContentPlaceHolder1_rdoMls_1"><label for="ContentPlaceHolder1_rdoMls_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Virtual tour</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoVirtualTour">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoVirtualTour" id="ContentPlaceHolder1_rdoVirtualTour_0"><label for="ContentPlaceHolder1_rdoVirtualTour_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoVirtualTour" id="ContentPlaceHolder1_rdoVirtualTour_1"><label for="ContentPlaceHolder1_rdoVirtualTour_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Real Estate Attorney</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoRealStateAttorney">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoRealStateAttorney" id="ContentPlaceHolder1_rdoRealStateAttorney_0"><label for="ContentPlaceHolder1_rdoRealStateAttorney_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoRealStateAttorney" id="ContentPlaceHolder1_rdoRealStateAttorney_1"><label for="ContentPlaceHolder1_rdoRealStateAttorney_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Home Warrantee</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoHomeWarrantee">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoHomeWarrantee" id="ContentPlaceHolder1_rdoHomeWarrantee_0"><label for="ContentPlaceHolder1_rdoHomeWarrantee_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoHomeWarrantee" id="ContentPlaceHolder1_rdoHomeWarrantee_1"><label for="ContentPlaceHolder1_rdoHomeWarrantee_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Appraiser</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoAppraiser">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoAppraiser" id="ContentPlaceHolder1_rdoAppraiser_0"><label for="ContentPlaceHolder1_rdoAppraiser_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoAppraiser" id="ContentPlaceHolder1_rdoAppraiser_1"><label for="ContentPlaceHolder1_rdoAppraiser_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="contact_row_new">
                    <div class="left_area_new">Home Inspector</div>
                    <div class="right_area_new">
                        <table id="ContentPlaceHolder1_rdoHomeInspector">
                            <tbody><tr>
                                    <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoHomeInspector" id="ContentPlaceHolder1_rdoHomeInspector_0"><label for="ContentPlaceHolder1_rdoHomeInspector_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoHomeInspector" id="ContentPlaceHolder1_rdoHomeInspector_1"><label for="ContentPlaceHolder1_rdoHomeInspector_1">No</label></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="clear">&nbsp;</div>
                <div align="center">


                    <input type="image" onclick="showAlert6(); WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$ContentPlaceHolder1$btnSave6 & quot; , & quot; & quot; , true, & quot; st & quot; , & quot; & quot; , false, false))" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnSave6" name="ctl00$ContentPlaceHolder1$btnSave6">
                </div> 
            </div>                    
        </div>

        <?php $this->endWidget(); ?>

    </div></div></div>



<?php $this->renderPartial('accountpage-sidebar'); ?>


