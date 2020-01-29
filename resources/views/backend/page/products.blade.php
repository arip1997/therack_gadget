@extends('backend.layouts.adminmaster')

@section('title')
Products
@endsection

@section('content')

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                            {{-- <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul> --}}
                            <!--/.widget-nav-->

                    <ul class="widget widget-menu unstyled">
                        <li><a href=" {{ route('products') }} "><i class="menu-icon icon-shopping-cart"></i> Products </a></li>
                        <li><a href="ui-typography.html"><i class="menu-icon icon-list"></i>Categories </a></li>
                        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Roles </a></li>
                        <li><a href="table.html"><i class="menu-icon icon-table"></i>Users </a></li>
                        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Transaction </a></li>
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
            </div>

            <!--/.sidebar-->
            <div class="span9">
                <div class="content">

                    <div class="module">
                        <div class="module-head">
                            <h3> Data Product </h3>
                        </div>

                        <div class="module-body">





                        </div>
        </div>
        </div>
        </div>
        </div>


    </div><!--/.content-->
</div><!--/.span3-->



@endsection



