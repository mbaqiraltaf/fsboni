<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php
    echo CHtml::metaTag("text/html", null, "Content-Type");
    echo CHtml::metaTag("en", "language");
    echo CHtml::cssFile(Yii::app()->baseUrl . '/css/layout.css');
    echo CHtml::cssFile(Yii::app()->baseUrl . '/css/pro_dropdown.css');
    echo CHtml::cssFile(Yii::app()->baseUrl . '/css/thickbox.css');
    echo CHtml::cssFile(Yii::app()->baseUrl . '/css/real-estate.css');
    echo CHtml::cssFile(Yii::app()->baseUrl . '/css/fancybox/jquery.fancybox-1.3.1.css');

    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/jquery-1.5.1.js');
    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/Maxreachalert.js');
    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/fancybox/jquery.mousewheel-3.0.2.pack.js');
    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/fancybox/jquery.fancybox-1.3.1.js');
    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/thickbox.js');
    echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/real-estate.js');
    ?>
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl ?>/images/favicon.ico" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="wrapper">
    <div id="wrapperBG">

        <div id="header">
            <div class="top">
                <h1><a title="FSBONI"
                       href="<?php echo $this->createUrl('realEstate/index');?>"><?php echo CHtml::image(Yii::app()->baseUrl . '/images/logo.png', 'FSBONI'); ?></a>
                </h1>
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/top_img.jpg', '', array('class' => 'top_img')); ?>
            </div>
            <?php $this->widget('zii.widgets.CMenu', array(
                'encodeLabel'=>false,
                'items' => array(
                    array('label' => '<span>Home</span>', 'url' => array('/realEstate/index')),
                    array('label' => '<span>About Us</span>', 'url' => array('/realEstate/aboutUs')),
                    array('label' => '<span>Mortgages</span>', 'url' => array('/realEstate/mortgages')),
                    array('label' => '<span>Flat-Fee MLS</span>', 'url' => array('/realEstate/flatFee')),
                    array('label' => '<span>Sell a Home</span>', 'url' => array('/realEstate/sellerRegistration'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => '<span>Buy a Home</span>', 'url' => array('/realEstate/search'), 'visible' => Yii::app()->user->isGuest),

                    array('label' => '<span>Login</span>', 'url' => array('/realEstate/login'),'visible' => Yii::app()->user->isGuest),
                    array('label' => '<span>Links</span>', 'url' => array('/realEstate/links')),
                    array('label' => '<span>My Account</span>', 'url' => array('/realEstate/myAccount'), 'items' => array(array('label' => 'Membership Page', 'url' => array('/realEstate/membershipPage')), array('label' => 'Change Password', 'url' => array('/realEstate/changePassword')), array('label' => 'Logout', 'url' => array('/realEstate/logout'))), 'visible' => Yii::app()->user->checkAccess('user')),
					array('label' => '<span>Logout</span>', 'url' => array('/realEstate/logout'), 'visible' => Yii::app()->user->checkAccess('user')),
                ),
                'htmlOptions' => array('class' => 'nav', 'id' => 'drop_down'),
            )); ?>
        </div>
        <!-- mainmenu -->
        <?php if (isset($this->breadcrumbs)): ?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
        <?php endif ?>
        <div id="content_area">
            <?php echo $content; ?>
        </div>

        <div class="clear"></div>

    </div>
</div>
<!-- page -->

</body>
</html>
