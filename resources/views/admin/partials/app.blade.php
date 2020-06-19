<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--==** Bootstrap CDN Link **==-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--==** DataTable CSS **==-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backEnd/css/dataTables.bootstrap4.min.css')}}">
    <!--==** Ajax CDN Link **==-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--==** Jquery Link **==-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--==** Font Awesome Link **==-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!--==** Logo **==-->
    <link rel="icon" href="{{asset('assets/frontEnd/images/home_page/Dc_Logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backEnd/css/main.css')}}" />
</head>
<body class="app sidebar-mini rtl">
  @include('admin.partials.header')
  @include('admin.partials.sidebar')
  <main class="app-content" id="app">
    @yield('content')
  </main>
  <!--==*** Script  Link **==-->
  <!-- Essential javascripts for application to work-->
  <script src="{{asset('assets/backEnd/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/backEnd/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/backEnd/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/backEnd/js/main.js')}}"></script>
  <!--  DataTable Js  -->
  <script src="{{asset('assets/backEnd/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/backEnd/js/dataTables.bootstrap4.min.js')}}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{asset('assets/backEnd/js/plugins/pace.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/chart.js')}}"></script>
  <!-- Page specific javascripts-->

  @yield ('js')
  <script type="text/javascript">
    var data = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86]
        }
      ]
    };
    var pdata = [
      {
        value: 300,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Complete"
      },
      {
        value: 50,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "In-Progress"
      }
    ]
    
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);
    
    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>

  <!--==*** Script  Link **==-->
</body>
</html>