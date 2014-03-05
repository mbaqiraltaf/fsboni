
    <div class="right_container">
        <div style="display:block;" class="seller_sec" id="ContentPlaceHolder1_user_link_seller_right">
            <div class="dashboard"><a href="<?php echo $this->createUrl('realEstate/myAccount'); ?>">Seller Options</a></div>
            <ul>
                <li><a href="<?php echo $this->createUrl('realEstate/listing'); ?>">My Listings</a></li>
                
                <li><a href="<?php echo $this->createUrl('realEstate/inquiryMadeByBuyers'); ?>">Inquiries- made by buyers</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/sellHome', array('uid' => Yii::app()->user->getId())); ?>">Add Listing</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/listing'); ?>">Edit Listing</a></li>                
            </ul>
        </div>
        <div style="display:block;" class="seller_sec" id="ContentPlaceHolder1_user_link_buyers_right">
            <div class="dashboard"><a href="<?php echo $this->createUrl('realEstate/myAccount'); ?>">Buyer Options</a></div>
            <ul>
                <li><a href="<?php echo $this->createUrl('realEstate/search'); ?>">Search Listings</a></li>                
                <li><a href="<?php echo $this->createUrl('realEstate/savedSearches'); ?>">Saved Searches</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/inquiriesMadeToSellers'); ?>">Inquiries-made to sellers</a></li>
                <li><a href="<?php echo $this->createUrl('realEstate/contactUs'); ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>