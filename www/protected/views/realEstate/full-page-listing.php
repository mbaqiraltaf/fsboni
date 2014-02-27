<div class="listing">
    <div style="float:left;">
        <div class="img_frame" id="ContentPlaceHolder1_imgFrame">
            <div class="top_bg"></div>
            <div class="mid_bg">
                <a href="uploaded_files/prop_gallery/4abc6a6af11d42e689f9f063a4e6de58373-321.jpeg" rel="bigImage" id="bigImagexx"><img id="ContentPlaceHolder1_property_img" src="uploaded_files/prop_gallery/4abc6a6af11d42e689f9f063a4e6de58373-321.jpeg"></a>   
            </div>
            <div class="bottom_bg"></div>
            <div class="links_thumb">
                <span id="ContentPlaceHolder1_dvRqst"><img class="middle" alt="" src="images/icon1.gif">
                    <span id="ContentPlaceHolder1_lbl_appt_rqst"><a class="change_pass" href="request_for_appointment.aspx?userid=18" id="pacces1">Contact Seller</a></span></span>
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
                        <a id="dmn" href="#dmns"><img src="images/btn_rd.jpg"></a>&nbsp; <a id="if" href="#ifs"><img src="images/btn_if.jpg"></a>&nbsp; <a id="ef" href="#efs"><img src="images/btn_ef.jpg"></a>
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
                    <div class="left_part2"><img class="middle" alt="" src="images/Home-icon.png"> <a class="change_pass info" href="#">Average Home Price<span>112500</span></a>&nbsp;&nbsp;&nbsp;<img class="middle" alt="" src="images/coins-icon.png"> <a class="change_pass info" href="#">Average Income<span>52500</span></a>&nbsp; 
                        <img class="middle" alt="Key" src="images/loan_icon.gif"> <a href="#loan_cal" id="calculator">Mortgage Calculator</a>
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
                    <span id="ContentPlaceHolder1_dvCompaas">
                        <b>Compass Point : </b>
                        <?php echo $property_details->compas_point; ?>

                    </span>


                    <span id="ContentPlaceHolder1_dvStreetNumber">
                        <b>Street Name : </b>
                        <?php echo $property_details->street_name; ?>
                    </span> &nbsp;
                    <b> City : </b><?php echo $property_details->city0->city; ?>
                    <b>State : </b><?php echo $property_details->state0->state_name; ?>
                    <b>Zip Code : </b><?php echo $property_details->zip_code; ?>

                </div></div>

            <div class="listing_row">
                <div style="border-color:Red;" class="left_part2">
                    <b>Property Type : </b> <span id="ContentPlaceHolder1_lblPropStyle"><?php echo $property_details->prop_type; ?></span>
                    <b>Property Style :</b>  <?php echo $property_details->prop_style; ?>
                    <b> </b>  
                    <span style="color:red;"><b> </b>  </span>
                </div>
            </div>
            <div class="listing_row">
                <div class="left_part2">
                    <span id="ContentPlaceHolder1_dvcounty"><b>County : </b><?php echo $property_details->county; ?></span>
                    <b>Property Taxes :</b> <?php echo $property_details->property_taxes; ?>
                    <b>Tax Year :</b> <?php echo $property_details->tax_year; ?>
                    <span id="ContentPlaceHolder1_dvAssessment"> <b>Assessment : </b><?php echo $property_details->assessment; ?></span>
                    <span id="ContentPlaceHolder1_dvFreequency"><b>Frequency :</b>  <span id="ContentPlaceHolder1_lblFreequency"><?php echo $property_details->frequency; ?></span></span>
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