<?php

use yii\web\View;

/** @var $this View */
/** @var $url string */
/** @var $redirect bool */
/** @var $url string */

?><!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        <?php
            $code = 'if (window.opener) {';
            $code .= 'window.close();';
            if ($redirect) {
                $code .= 'window.opener.location = \''.addslashes($url).'\';';
            }
            $code .= '}';
            $code .= 'else {';
            if ($redirect) {
                $code .= 'window.location = \''.addslashes($url).'\';';
            }
            $code .= '}';
            $code .= "dataLayer.push({'event' : 'user-signup-success', 'method': '<" . Yii::$app->getRequest()->getQueryParam('service') . ">' });";
            echo $code;
        ?>
    </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WK6P54" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<h2 id="title" style="display:none;">
    <?php echo \Yii::t('eauth', 'Redirecting back to the application...'); ?>
</h2>

<h3 id="link">
    <a href="<?php echo $url; ?>">
        <?php echo \Yii::t('eauth', 'Click here to return to the application.'); ?>
    </a>
</h3>

<script type="text/javascript">
    document.getElementById('title').style.display = '';
    document.getElementById('link').style.display = 'none';
</script>

</body>
</html>