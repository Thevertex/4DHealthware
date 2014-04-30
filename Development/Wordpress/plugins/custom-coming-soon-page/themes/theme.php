<?php 
require_once('theme_functions.php'); 
if(nccsf_top('color_scheme') == ''){
    $color_scheme = 'blue';
}else{
    $color_scheme = nccsf_top('color_scheme');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="4D Healthware">
  <meta name="author" content="Mare Greyling">
  <link rel="shortcut icon" href="<?php echo nccsf_product_info('extend_url'); ?>/themes/images/ico/favicon.ico">

  <title>4D Healthware</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo nccsf_product_info('extend_url'); ?>/themes/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo nccsf_product_info('extend_url'); ?>/themes/css/4d.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="container">
    <div style="padding-top:15%" class="visible-lg">&nbsp;</div>
    <div class="row signup-btn">
        <div class="col-md-6">
            <div class="left logo"><img src="<?php echo nccsf_product_info('extend_url'); ?>/themes/images/icn-arrow.png" class="img-responsive center-block" /></div>
            <script type="text/javascript">
                    //<![CDATA[
                    if (typeof newsletter_check !== "function") {
                        window.newsletter_check = function(f) {
                            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                            if (!re.test(f.elements["ne"].value)) {
                                alert("The email is not correct");
                                return false;
                            }
                            if (f.elements["ny"] && !f.elements["ny"].checked) {
                                alert("You must accept the privacy statement");
                                return false;
                            }

                            $.ajax({
                                type: "POST",
                                url: '/wp-content/plugins/newsletter/do/subscribe.php',
                                data: $('#subscribe-form').serialize(),
                                success: function(){
                                    alert("Thanks, you have been subscribed");
                                    $('.newsletter-email').val("");
                                },
                                dataType: 'html'
                            });
                            
                            return false;
                        }
                    }
                     //]]>
                </script>

                <div id="email_subscription" class="newsletter newsletter-subscription">
                    <form method="post" action="http://4d.frango.co.za/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                        <div class="left"><input class="newsletter-email form-control" type="email" name="ne" size="30" placeholder="Enter e-mail" style="height:47px;" required></div>
                        <div class="left"><button class="newsletter-submit" type="submit" class="btn btn-default">Subscribe</button></div>
                    </form>
                </div>
        </div>
        <div class="col-md-6">
        &nbsp;    
        </div>
    </div>
    <div class="row logoandtext">
      <div class="col-md-6">
         <div class="logo-banner"><img src="<?php echo nccsf_product_info('extend_url'); ?>/themes/images/logo.png" class="img-responsive"/></div>
      </div>
      <div class="col-md-6">
         <div class="main-banner"><img src="<?php echo nccsf_product_info('extend_url'); ?>/themes/images/uc.png" class="img-responsive"/></div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo nccsf_product_info('extend_url'); ?>/themes/js/bootstrap.min.js"></script>
    <script src="<?php echo nccsf_product_info('extend_url'); ?>/themes/js/4d.js"></script>
</body>

</html>