@extends('frontend.layouts.adminmaster')

@section('title')
Admin
@endsection

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                        </li>
                        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                            11</b> </a></li>
                        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                            19</b> </a></li>
                    </ul>
                    <!--/.widget-nav-->


                    <ul class="widget widget-menu unstyled">
                        <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                        <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                        <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>More Pages </a>
                            <ul id="togglePages" class="collapse unstyled">
                                <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                    </ul>
                </div>
            </div><!--/.sidebar-->
            <div class="span9">
                <div class="content">

                    <div class="module">
                        <div class="module-head">
                            <h3>News Feed</h3>
                        </div>
                        <div class="module-body">
                            <div class="stream-composer media">
                                <a href="#" class="media-avatar medium pull-left">
                                    <img src="adminlte/images/user.png">
                                </a>
                                <div class="media-body">
                                    <div class="row-fluid">
                                        <textarea class="span12" style="height: 70px; resize: none;"></textarea>
                                    </div>
                                    <div class="clearfix">
                                        <a href="#" class="btn btn-primary pull-right">
                                            Update Status
                                        </a>
                                        <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
                                            <i class="icon-camera shaded"></i>
                                        </a>
                                        <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
                                            <i class="icon-facetime-video shaded"></i>
                                        </a>
                                        <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
                                            <i class="icon-map-marker shaded"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="stream-list">
                                <div class="media stream new-update">
                                    <a href="#">
                                        <i class="icon-refresh shaded"></i>
                                        11 updates
                                    </a>
                                </div>
                                <div class="media stream">

                                    <div class="media-body">
                                        <div class="stream-headline">

                                            <div class="stream-text">

                </div><!--/.content-->

        </div><!--/.span3-->



@endsection
