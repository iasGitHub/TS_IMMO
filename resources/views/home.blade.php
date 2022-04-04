@extends('layouts.app')
@section('section')

<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/Tasnim.jpeg')}}" class="img-circle" width="80"></a></p>
          <!-- <h5 class="centered">Sam Soffes</h5> -->
          <li class="mt">
            <a class="active" href="/">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li> -->
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li> -->
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
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      main
    </section>
    @endsection

    @section('script')
        <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>

        <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{asset('assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('assets/lib/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/lib/jquery.sparkline.js')}}"></script>
        <!--common script for all pages-->
        <script src="{{asset('assets/lib/common-scripts.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/gritter/js/jquery.gritter.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/gritter-conf.js')}}"></script>
        <!--script for this page-->
        <script src="{{asset('assets/lib/sparkline-chart.js')}}"></script>
        <script src="{{asset('assets/lib/zabuto_calendar.js')}}"></script>
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
    

<!-- Route::get('/', function () {
    return view('home');
}); -->