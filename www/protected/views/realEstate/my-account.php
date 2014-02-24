<div class="appintment">
    <div class="left_container">
        <div style="display:block;" id="ContentPlaceHolder1_seller_account">
            <h2><img width="15" height="21" class="middle" alt="Seller" src="images/seller_icon.jpg"> Seller Options
            </h2>

            <h3>Inquiries-made by buyers</h3>

            <span style="color:Red;display:block;" id="ContentPlaceHolder1_spanSellerEnqu">No record found. !!!</span>


            <div class="view"><span id="ContentPlaceHolder1_lbl_rqst_appt"></span></div>
            <div class="clear">&nbsp;</div>
            <!-- My Recent Properties -->
            <h3>My Listings</h3>

            <span style="color:Red; display:none;" id="ContentPlaceHolder1_spanSlrProp"></span>

            <span id="ContentPlaceHolder1_Prop_list"><span>
                    <div class="heading">
                        <div class="title">FSBONI ID#</div>
                        <div class="view_pro">View Count</div>
                        <div class="view_pro">Edit/View</div>
                    </div>
                </span><br><span>
                    <?php foreach ($properties as $property) {
                        ?>

                        <div class="pro_row">
                            <div class="title"><?php echo $property->fsboni_property_id; ?></div>
                            <div class="view_pro"></div>
                            <!--                            <div class="view_pro"><a-->
                            <!--                                        href="properties_edit.aspx?userid=OTM=-8DDpOYL9s9Q=&amp;property_id=ODM%3d-NumP1XOOFxI%3d">Edit</a><span-->
                            <!--                                    class="mlr5">|</span> <a-->
                            <!--                                        href="listing.aspx?userid=OTM=-8DDpOYL9s9Q=&amp;property_id=ODM%3d-NumP1XOOFxI%3d">View</a>-->
                            <!--                            </div>-->

                        </div>
                    <?php } ?>
                </span></span>

            <div class="view"><span id="ContentPlaceHolder1_lbl_view_all"></span></div>
        </div>

        <!-- Buyer section -->
        <div class="clear">&nbsp;</div>


        <div style="display:block;" id="ContentPlaceHolder1_buyer_account">
            <h2 class="mt10"><img width="15" height="21" class="middle" alt="" src="images/buyer_icon.jpg"> Buyer
                Options</h2>

            <h3>Inquiries-made to sellers</h3>


            <div class="heading">
                <div class="date_col">Name</div>
                <div class="col">FSBONI #</div>
                <div class="date_col">Request Date</div>
            </div>

            <span style="display:block;color:Red;" id="ContentPlaceHolder1_spanBuyrAppnt">No record found. !!!</span>

            <div style="clear:both"></div>
            <div>

            </div>

            <div class="view" style="display:none;" id="ContentPlaceHolder1_dvbuyrAppointments"><a
                    href="buyer_appointments.aspx">View All</a></div>


            <div class="clear">&nbsp;</div>
            <h3>Saved Searches</h3>

            <div class="heading">
                <div class="col_search_new">State</div>
                <div class="col_search_new">City</div>
                <div class="col_search_new">Street Name</div>
                <div class="col_search_new">Sales Price</div>
                <div class="search_on">Search On</div>
                <div class="col_search_right">Delete/Search Result</div>
            </div>
            <span style="color:Red;display:block;" id="ContentPlaceHolder1_spanBuyrSearch">No record found. !!!</span>

            <div style="clear:both"></div>
            <div>

            </div>

            <div class="view" style="display:none;" id="ContentPlaceHolder1_dvSaveSearch"><a href="saved_search.aspx">View
                    All</a></div>


            <!-- Buyer section end-->
        </div>
        <!-- left_container end here -->
    </div>


    <div class="right_container">
        <div style="display:block;" class="seller_sec" id="ContentPlaceHolder1_user_link_seller_right">
            <div class="dashboard"><a href="my_account.aspx">Seller Options</a></div>
            <ul>
                <li><a href="<?php echo $this->createUrl('realEstate/listing'); ?>">My Listings</a></li>
                <li><a href="request_appont.aspx">Inquiries- made by buyers</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/sellHome'); ?>">Add Listing</a></li>
                <li><a href="recent_pro.aspx?action=edit">Edit Listing</a></li>
                <li style="display:none"><a href="edit_profile.aspx">Edit Seller Profile</a></li>
            </ul>
        </div>
        <div style="display:block;" class="seller_sec" id="ContentPlaceHolder1_user_link_buyers_right">
            <div class="dashboard"><a href="my_account.aspx">Buyer Options</a></div>
            <ul>
                <li><a href="<?php echo $this->createUrl('realEstate/search'); ?>">Search Listings</a></li>
                <li><a href="saved_search.aspx">Saved Searches</a></li>
                <li><a href="buyer_appointments.aspx">Inquiries-made to sellers</a></li>
                <li style="display:none"><a href="edit_buyer_profile.aspx">Edit Buyer Profile</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/contactUs'); ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- right_container end here -->
</div>
