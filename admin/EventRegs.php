<?php
session_start();

require_once '../api/global.php';
require_once '../api/utils.php';
require_once '../api/VSLogin.php';
require_once '../api/VSEvents.php';
require_once '../api/VSAdmins.php';
require_once '../api/VSSession.php';
require_once '../api/VSEventReg.php';
require_once '../api/VSParticipants.php';

if (!isset($_SESSION['login_user']) || !isset($_SESSION['apikey'])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET["Logout"]) || $GLOBALS['Maintenance'] == true) {
    session_unset();
    header("Location: index.php");
    exit();
}

$email = $_SESSION['login_user'];
$apikey = $_SESSION['apikey'];
$admin = getAdmin($email);

if ($email != "visvesmruti.rngpit@gmail.com" || $admin[0]["EventID"] != null || $admin[0]["Department"] != "All") {
    header("Location: index.php");
    exit();
}

/*$logindata = getLoginByToken($apikey);
if (empty($logindata)) {
    header("Location: index.php");
    exit();
}*/

$eventregs = getAllRegistrations();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Event Registrations | Visvesmruti - Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">const filename = "VSData-Event-Registrations"</script>
</head>

<body>
<!-- Header top area start-->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="admin-logo">
                    <a href=""><img src="img/logo/log.png" alt=""/>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-0 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav mai-top-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-9 col-sm-6 col-xs-12">
                <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                               class="nav-link dropdown-toggle">
                                <span class="admin-name"><?php echo $admin[0]['Name']; ?></span>
                                <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                <li><a href="EventRegs.php?Logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- income order visit user Start -->
<div class="income-order-visit-user-area mg-t-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Event Registrations</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter"><?php echo count($eventregs); ?></span></h3>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Event Registrations</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area mg-b-40">
    <div class="container  tab-content">
        <div class="row tab-pane in active" id="all">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Event Registrations List</h1>
                            <div class="sparkline8-outline-icon">
                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                   data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false"
                                   data-key-events="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                   data-toolbar="#toolbar">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="evid">Event ID</th>
                                    <th data-field="fcode">FCode</th>
                                    <th data-field="name">Participant Name</th>
                                    <th data-field="email">Email</th>
                                    <th data-field="phone">Phone</th>
                                    <th data-field="event">Event Name</th>
                                    <th data-field="eventdept">Event Department</th>
                                    <th data-field="regadmin">Registrant</th>
                                    <th data-field="fee">Fee Paid</th>
                                    <th data-field="feeadmin">Fee Paid Admin</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($eventregs as $regs) {
                                    $parti = getParticipantByID($regs["PID"]);
                                    $event = getEventByID($regs["EVID"]);
                                    echo "<tr>" .
                                        "<td>" . $regs["ERID"] . "</td>" .
                                        "<td>" . $regs["ERCode"] . "</td>" .
                                        "<td>" . $regs["FCode"] . "</td>" .
                                        "<td>" . $parti[0]["FirstName"] . " " . $parti[0]["LastName"] . "</td>" .
                                        "<td>" . $parti[0]["EMail"] . "</td>" .
                                        "<td>" . $parti[0]["Mobile"] . "</td>" .
                                        "<td>" . $event[0]["EVName"] . "</td>" .
                                        "<td>" . $event[0]["EVDepartment"] . "</td>" .
                                        "<td>" . ($regs["RegAdmin"] > 1 ? getAdminByID($regs["RegAdmin"])[0]["EMail"] : "Website") . "</td>" .
                                        '<td class="datatable-ct"><i class="' . ($regs["isPaid"] == 1 ? 'fa fa-check' : 'fa fa-times') . '"></i></td>' .
                                        "<td>" . ($regs["PayAdmin"] > 1 ? getAdminByID($regs["PayAdmin"])[0]["EMail"] : "-") . "</td>" .
                                        "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data table area End-->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/wow/wow.min.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<!-- jvectormap JS
    ============================================ -->
<script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/jvectormap/jvectormap-active.js"></script>
<!-- peity JS
    ============================================ -->
<script src="js/peity/jquery.peity.min.js"></script>
<script src="js/peity/peity-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/flot/jquery.flot.spline.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/jquery.flot.pie.js"></script>
<script src="js/flot/jquery.flot.symbol.js"></script>
<script src="js/flot/jquery.flot.time.js"></script>
<script src="js/flot/dashtwo-flot-active.js"></script>
<!-- data table JS
    ============================================ -->
<script src="js/data-table/bootstrap-table.js"></script>
<script src="js/data-table/tableExport.js"></script>
<script src="js/data-table/data-table-active.js"></script>
<script src="js/data-table/bootstrap-table-editable.js"></script>
<script src="js/data-table/bootstrap-editable.js"></script>
<script src="js/data-table/bootstrap-table-resizable.js"></script>
<script src="js/data-table/colResizable-1.5.source.js"></script>
<script src="js/data-table/bootstrap-table-export.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
</body>

</html>