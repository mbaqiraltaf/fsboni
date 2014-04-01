
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
                        <div class="view_pro">0</div>
                        <div class="view_pro"> 
                            <a
                                href="<?php echo $this->createUrl('realEstate/editproperty', array('prop_id' => $property->fsboni_property_id)); ?>">Edit</a> | 
                            <a
                                href="<?php echo $this->createUrl('realEstate/fullPageListing', array('prop_id' => $property->fsboni_property_id)); ?>">View</a>
                        </div>

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

<?php $this->renderPartial('accountpage-sidebar'); ?>

