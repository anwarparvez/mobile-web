<!DOCTYPE html>
<html>
    <head>
        <title>Halifax</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <!--calender-->
        <!--
                <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
                <script src="../jquerymobile/jquery-1.8.2.min.js"></script>
                <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
                <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
                <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
                <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
        -->

        <!--jquery mobile -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

        <!-- Date Box-->
        <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>



        <!--/calender-->
        <link rel="stylesheet" href="../include/stylesheet.css" />
        <script src="../include/script.js"></script>
        <!--[if IE]>
        <![endif]-->
    </head>
    <body>

        <div data-role="page">

            <div data-role="header">
                <h1>Halifax</h1>
            </div><!-- /header -->

            <div data-role = "content">
                <?php require_once("expfields_parvez.php"); ?>
                <table>
                    <tr>
                        <td><a href="../excel/xlCreator.php" class="noprint" data-ajax="false" data-role="button" data-icon="gear">Export</a>
                        </td>
                        <td><a href="#" class="noprint" onClick="window.print()" data-role="button" data-icon="star">Print</a>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

    </body>
</html>