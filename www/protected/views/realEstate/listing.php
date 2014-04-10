<div class="left_container">
    <!-- My Recent Properties -->
    <div class="top_row">
        <div class="heading_new"><span id="ContentPlaceHolder1_page_title">My Listings</span></div>
        <div class="add_pro"><a href="<?php echo $this->createUrl('realEstate/sellHome', array('uid' => Yii::app()->user->getId())); ?>" class="font16"><img width="12" height="12" src="images/add_icon.gif" alt="Add Property">Add new Listing</a></div>
    </div>     
    <div class="top_row">        
    </div>                    
    <div class="heading">   
        <div class="title">Title</div>
        <div class="view_pro">View Count</div>
        <div class="view_pro">Edit/View</div>
    </div>
    <div style="clear:both"></div>
    <div>
        <table cellspacing="0" style="border-width:0px;border-style:None;width:100%;border-collapse:collapse;" id="ContentPlaceHolder1_gdvAllprop">
            <tbody><tr>
                    <th scope="col">&nbsp;</th>
                </tr>
                <?php foreach ($properties as $property) {
                    ?>

                    <tr>
                        <td>
                            <div class="pro_row"><div class="title"><?php echo $property->fsboni_property_id; ?></div><div class="view_pro">0</div><div class="view_pro">
                                    <a
                                        href="<?php echo $this->createUrl('realEstate/editproperty', array('prop_id' => $property->fsboni_property_id)); ?>">Edit</a> | 
                                    <a
                                        href="<?php echo $this->createUrl('realEstate/fullPageListing', array('prop_id' => $property->fsboni_property_id)); ?>">View</a></div></div>
                        </td>
                    </tr>
                <?php } ?>

            </tbody></table>
    </div>

</div>


<?php $this->renderPartial('accountpage-sidebar'); ?>