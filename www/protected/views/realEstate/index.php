<div class="freeTickects">
    <h3><span id="ContentPlaceHolder1_lbl_reffal_title">Register to Win Free AMC theater tickets</span></h3>

    <div class="box" style="margin-bottom: 20px;">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/raffle_image/9aa4be78c00b477abbbdf0d2fdf233f4free_ticket.jpg', 'image', array('class' => 'pic', 'id' => 'ContentPlaceHolder1_reff_image')); ?>
        <a href="#">
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/btn_guess.png'); ?></a>
    </div>
    <div style="padding: 0 50px;">
        <a href="https://twitter.com/intent/tweet?button_hashtag=TwitterStories" class="twitter-hashtag-button" data-size="large" data-related="yhtak4fun" data-url="http://fsboni.com">Tweet #TwitterStories</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
</div>
<div class="BuySellHome">
    <div class="center"><h3 class="hhheading">List Your Home For Free</h3></div>
    <span id="ContentPlaceHolder1_lbl_sell_home"> <a
            href="<?php echo $this->createUrl('realEstate/sellerRegistration'); ?>">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/sell_a_home.jpg'); ?>
        </a></span>
    <a title="Buy A Home" href="<?php echo $this->createUrl('realEstate/search'); ?>">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/buy_a_home.jpg', 'Buy A Home', array('width' => '276', 'height' => '255')); ?>
    </a>

    <div class="news">
        <h3>Mortgage Newsletter</h3>

        <div><span id="ContentPlaceHolder1_lbl_mortgage_title">As we closed last week, the stock market had posted weekly declines for the last 6 weeks straight, which means that mortgage rates continue to be very strong. Last week alone, stocks fell 2.2%, a</span>...<br><a
                href="<?php echo $this->createUrl('realEstate/mortgageNewsletter'); ?>">Read More</a></div>
    </div>
</div>

<div class="my_marquee">
    <div id="m1">
        <span>"Free By-Owner Listings" Search Real Estate, 4-Sale, Rent or Swap! It's easy to use, free marketing, linked to local websites, real estate news, &amp; social networks.</span>
    </div>
</div>

<?php
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/slider1.css');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/easySlider.js');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/jquery.bxSlider.min.js');
?>
<div id="slider">
    <div class="left_curve"></div>
    <div class="strip">
        <ul id="slider1" class="multiple">

            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11002')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home2.jpg" alt=""/></a></li>
            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11003')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home3.jpg" alt=""/></a></li>
            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11004')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home4.jpg" alt=""/></a></li>
            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11005')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home5.jpg" alt=""/></a></li>
            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11006')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home4.jpg" alt=""/></a></li>
            <li><a href="<?php echo $this->createUrl('realEstate/search', array('prop_id' => 'F11011')); ?>"><img
                        src="<?php echo Yii::app()->baseUrl ?>/images/home5.jpg" alt=""/></a></li>
            --%>
        </ul>
    </div>
    <div class="right_curve"></div>
</div> <!-- slider end here -->
<div id="footer">
    <div class="left_sec">
        <p>FSBONI.COM Selling Real Estate &nbsp; <b>F</b>or <b>S</b>ale <b>B</b>y- <b>O</b>wner, No Fee, It's
            "Free"
        </p>

        <p><a href="<?php echo $this->createUrl('realEstate/index'); ?>">Home</a> | <a
                href="<?php echo $this->createUrl('realEstate/aboutUs'); ?>">About Us</a> | <a
                href="<?php echo $this->createUrl('realEstate/mortgages'); ?>">Mortgages</a> |
            <a href="<?php echo $this->createUrl('realEstate/agent'); ?>">Agent</a> | <a
                href="<?php echo $this->createUrl('realEstate/flatFee'); ?>">Flat-Fee MLS</a> |
            <span id="ContentPlaceHolder1_hide"> <a href="<?php echo $this->createUrl('realEstate/search'); ?>">Buy
                    A Home</a> | <a href="<?php echo $this->createUrl('realEstate/sellerRegistration'); ?>">Sell
                    A Home</a> | </span> <a href="<?php echo $this->createUrl('realEstate/contactUs'); ?>">Contact
                Us</a> | <a href="<?php echo $this->createUrl('realEstate/communities'); ?>">Communities</a>
        </p>

        <p><a href="<?php echo $this->createUrl('realEstate/testinomials'); ?>">Testimonials</a> |
            <a target="_blank" href="http://www.kruegerrealestate.com/">Krueger Real Estate</a> | <a
                href="<?php echo $this->createUrl('realEstate/links'); ?>">Links</a> <a style="display:none;"
                href="termsofuse.aspx">Terms of
                Use</a> | <a
                href="<?php echo $this->createUrl('realEstate/privacyPolicy'); ?>">Privacy Policies</a> |
            <a href="<?php echo $this->createUrl('realEstate/termsConditions'); ?>">Terms and Conditions</a> | <a
                href="<?php echo $this->createUrl('realEstate/mortgageNewsletter'); ?>">Mortgage
                Newsletter</a>
            

        </p>
    </div>
</div>