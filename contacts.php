

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <!-- style css php -->
    <?php include_once 'css_style/style.php';?>
    <link href="css/profile_style.css" rel="stylesheet">
    <!-- end style css php -->
<body>
    <div id="wrapper">
        <!-- nav -->
        <?php include_once 'sidebar/nav_dashboard.php';?>
        <!-- end nav -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- navbar -->
            <?php include_once 'sidebar/navbar.php';?>
            <!-- end navbar -->
            <div class="wrapper wrapper-content">
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Contacts</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="welcome.php">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a>Extra Pages</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <strong>Contacts</strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <br>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a class="row" href="profile.php">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="master/img/youssef.jpeg">
                                            <div class="m-t-xs font-bold">élève ingénieur d'etat </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3><strong>YOUSSEF RABI</strong></h3>
                                        <p><i class="fa fa-map-marker"></i> MAARIF CASABLANCA</p>
                                        <address>
                                            <strong>CONTACTS</strong><br>
                                            youssefrabi32@gmail.com<br>
                                           78 Quartier safa bloc 1 beni mellal<br>
                                            <abbr title="Phone">Portable:</abbr>+212-667091152 /0642020308
                                        </address>
                                    </div>
                                </a>
                            </div>
                        </div>
                       
                        
                       
                     
                       
                        
                       
                        
                       
                    </div>
                </div>
            </div>
            <!-- foodter -->
            <?php include_once 'foodter/foodter.php';?>
            <!-- end foodter -->
        </div>
        <!-- chart -->
        <?php include_once 'chart/chart.php'; ?>
        <!-- end chart -->
    </div>
    <!-- <script> js php import</script> -->
    <?php include_once 'script/js.php';?>
    <!-- <script>Library</script> -->
    <!-- <script> import</script> -->
</body>
</html>