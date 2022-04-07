<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Gestion immobilière</title>

  <!-- Favicons -->
  <link rel="icon" href="{{secure_asset('assets/img/favicon.png')}}"/>
  <link rel="apple-touch-icon" href="{{secure_asset('assets/img/apple-touch-icon.png')}}"/>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{secure_asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
  <!--external css-->
  <link rel="stylesheet" href="{{secure_asset('assets/lib/font-awesome/css/font-awesome.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{secure_asset('assets/css/style.css')}}" >
  <link rel="stylesheet" href="{{secure_asset('assets/css/style-responsive.css')}}" >
  <script src="{{secure_asset('assets/lib/chart-master/Chart.js')}}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="/" class="logo"><b>TS_<span>IMMO</span></b></a>
            
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{secure_asset('assets/login.html')}}">Logout</a></li>
                </ul>
            </div>
        </header>
    

    <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="{{secure_asset('assets/img/Tasnim.jpeg')}}" class="img-circle" width="80"></a></p>
                    <!-- <h5 class="centered">Sam Soffes</h5> -->
                    <li class="mt">
                        <a class="active" href="/">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gestion des propriétaires</span>
                        </a>
                        <ul class="sub">
                        <li><a href="add-proprietaire">Ajout des propriétaires</a></li>
                        <li><a href="/proprietaire">Liste des propriétaires </a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gestion des quartiers</span>
                        </a>
                        <ul class="sub">
                        <li><a href="add-quartier">Ajout des quartiers</a></li>
                        <li><a href="/quartier">Liste des quartiers </a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gestion des propriétés</span>
                        </a>
                        <ul class="sub">
                        <li><a href="add-propriete">Ajout des propriétés</a></li>
                        <li><a href="/propriete">Liste des propriétés </a></li>
                        </ul>
                    </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>

            @section('script')
                <script src="{{secure_asset('assets/lib/jquery/jquery.min.js')}}"></script>

                <script src="{{secure_asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
                <script class="include" type="text/javascript" src="{{secure_asset('assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
                <script src="{{secure_asset('assets/lib/jquery.scrollTo.min.js')}}"></script>
                <script src="{{secure_asset('assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
                <script src="{{secure_asset('assets/lib/jquery.sparkline.js')}}"></script>
                <!--common script for all pages-->
                <script src="{{secure_asset('assets/lib/common-scripts.js')}}"></script>
                <script type="text/javascript" src="{{secure_asset('assets/lib/gritter/js/jquery.gritter.js')}}"></script>
                <script type="text/javascript" src="{{secure_asset('assets/lib/gritter-conf.js')}}"></script>
                <!--script for this page-->
                <script src="{{secure_asset('assets/lib/sparkline-chart.js')}}"></script>
                <script src="{{secure_asset('assets/lib/zabuto_calendar.js')}}"></script>
                <script type="text/javascript">
                $(document).ready(function() {
                    var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Welcome to Dashio!',
                    // (string | mandatory) the text inside the notification
                    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
                    // (string | optional) the image to display on the left
                    image: 'img/ui-sam.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: false,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: 8000,
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                    });

                    return false;
                });
                </script>
                <script type="application/javascript">
                $(document).ready(function() {
                    $("#date-popover").popover({
                    html: true,
                    trigger: "manual"
                    });
                    $("#date-popover").hide();
                    $("#date-popover").click(function(e) {
                    $(this).hide();
                    });

                    $("#my-calendar").zabuto_calendar({
                    action: function() {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function() {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [{
                        type: "text",
                        label: "Special event",
                        badge: "00"
                        },
                        {
                        type: "block",
                        label: "Regular event",
                        }
                    ]
                    });
                });

                // function myNavFunction(id) {
                //     $("#date-popover").hide();
                //     var nav = $("#" + id).data("navigation");
                //     var to = $("#" + id).data("to");
                //     console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                // }
                </script>
            @endsection
    <!--header end-->
    @yield('section')

    </section>
 
  <!-- SCRIPT POUR JS -->
  @yield('script')
</body>

</html>
