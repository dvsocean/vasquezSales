<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/9/18
 * Time: 6:23 PM
 */
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--GOOGLE CHART API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--GOOGLE CHART API-->

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('assets/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/startmin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<?php
use Illuminate\Support\Facades\Auth;

$signedIn = Auth::check();
$user = Auth::user();
?>

<div id="wrapper">

    <!--NAV BAR STYLES-->
    @include('includes.admin_page_styling.admin_styles')
    <!--NAV BAR STYLES-->

    <!-- Navigation -->
    <nav id="nav-top" class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><!--PLACEHOLDER--></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="/" id="top-home"><i class="fa fa-home fa-fw"></i> Home</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="drop-bell">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"  id="drop-top">
                    <i class="fa fa-user fa-fw"></i> {{ucfirst($user->name)}} <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/profile"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-fw"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#" class="active side_nav"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('editSliders')}}" class="side_nav"><i class="fa fa-camera-retro fa-fw"></i> Slides</a>
                    </li>
                    <li>
                        <a href="{{route('front_page_content')}}" class="side_nav"><i class="fa fa-desktop fa-fw"></i> Front page content</a>
                    </li>
                    <li>
                        <a href="{{route('quad_content')}}" class="side_nav"><i class="fa fa-th-large fa-fw"></i> Quad content</a>
                    </li>
                    <li>
                        <a href="#" class="side_nav"><i class="fa fa-font fa-fw"></i> Button labels</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END NAV END -->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-pencil fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">2</div>
                                <div>Posts</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-play-circle fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">1</div>
                                <div>Videos</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-picture-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">8</div>
                                <div>Pictures</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">5</div>
                                <div>Comments</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Trucks 4 sale activity
                    </div>

                    <div class="panel-body">
                        @include('includes.charts_api.chart')
                        @include('includes.charts_api.charts_api')
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> Notifications Panel
                    </div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-pencil fa-fw"></i> User posts
                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i> Comments
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-picture-o fa-fw"></i> Pictures
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-play-circle fa-fw"></i> Videos (TBD)
                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-file"></i> Files
                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                            </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                            </span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('assets/js/raphael.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/js/startmin.js')}}"></script>

</body>
</html>
