<?php

class EmailHelper
{

    function sendActivationEmail($recipient, $url, $name, $password)
    {
        $subject = 'Account Activation on FSBONI';
        $body = $this->getActivationEmailHtml($url, $name, $password);
        $this->sendEMail($subject, $body, $recipient);
    }

    function sendPassword($recipient, $name, $password)
    {
        $subject = 'Remind Password';
        $body = $this->getPasswordEmailHtml($name, $password, $recipient);
        $this->sendEMail($subject, $body, $recipient);
    }

    function sendEmail($subject, $body, $recipient)
    {
        $message = new YiiMailMessage;
        $message->setBody($body, 'text/html');
        $message->subject = $subject;
        $message->addTo($recipient);
        $message->from = Yii::app()->params['adminEmail'];
        Yii::app()->mail->send($message);
    }

    function getActivationEmailHtml($url, $name, $password)
    {
		$body = '<h1><a href="http://test.hostrayatech.com/www/index.php?r=realEstate/index" title="FSBONI"><img alt="FSBONI" src="http://test.hostrayatech.com/www/images/logo.png"></a></h1>';
        $body .= "<div style='overflow: hidden;' id=':nm'><p>Dear $name,</p>";
		$body .= "<p><b>Thank you for visiting FSBONI.com</b></p>";
		$body .= "<p>Here is your link to return to our site <a target='_blank' href='" . $url . "'>$url</a></p>";
        $body .= "<p>This will take you to your private membership page where you can take advantage of our free services such as searches for properties and listing your home 'for sale by owner'. You can also opt to receive notifications of new listings and open houses of homes that match your saved search criteria. </p>";
        $body .= "<p>The membership page is your point of reference and keeps track of the homes you have saved, multi-searches, and your listings</p>";
		$body .= "<p>We never post your street numbers of your address , the buyers point of contact must be made directly to the seller through our website for you and your families safety.</p>";
		$body .= "<p>Thank you again for visiting</p>";
		$body .= "<p>FSBONI your top-real estate website, see us on Facebook.</p>";        
        $body .= "<div class='adL'></div></div>";
        return $body;
    }

    function getPasswordEmailHtml($name, $password, $email)
    {
        $homeUrl = Yii::app()->createUrl('realEstate/index');
        $body = "<div style='overflow: hidden;' id=':nm'><p>Dear $name,</p>";
        $body .= "<p>&nbsp;</p>";
        $body .= "<p>As requested by you below are your login details for <a target='_blank' href='" . $homeUrl  . "'>www.fsboni.com</a>: -</p>";
        $body .= "<p>&nbsp;</p>";
        $body .= "<p>Username - $email </p>";
        $body .= "<p>&nbsp;</p>";
        $body .= "<p>Password - $password</p>";
        $body .= "<p>&nbsp;</p>";
        $body .= "<p>Kind regards</p></div>";
        return $body;
    }

}