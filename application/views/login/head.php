<!DOCTYPE html>
<html  class='lockscreen'>
    <head>
        <meta charset="UTF-8">
        <title>PointOne</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">
        <?php
            if(isset($css))
                echo $css;
        ?>
        <?php
            if(isset($add_css)){
                if(is_array($add_css)){
                    foreach ($add_css as $path) {
                        echo "<link href='".base_url().$path."' rel='stylesheet'>\n";
                    }
                }
                else
                    echo "<link href='".base_url().$add_css."' rel='stylesheet'>\n";
            }
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
        <script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="../layout/scripts/jquery.ui.min.js"></script>
        <script type="text/javascript" src="../layout/scripts/jquery.defaultvalue.js"></script>
        <script type="text/javascript" src="../layout/scripts/jquery.scrollTo-min.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $("#fullname, #validemail, #message").defaultvalue("Full Name", "Email Address", "Message");
            $('#shout a').click(function () {
                var to = $(this).attr('href');
                $.scrollTo(to, 1200);
                return false;
            });
            $('a.topOfPage').click(function () {
                $.scrollTo(0, 1200);
                return false;
            });
            $("#tabcontainer").tabs({
                event: "click"
            });
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'dark_rounded'
            });
        });
        </script>
        <!-- prettyPhoto -->
        <link rel="stylesheet" href="../layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
        <script type="text/javascript" src="../layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'dark_rounded',
                overlay_gallery: false,
                social_tools: false
            });
        });
</script>

    </head>