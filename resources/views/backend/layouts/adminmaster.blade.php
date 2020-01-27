<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Platinum Gadget</title> {{-- untuk pemberian nama diweb --}}
        <link type="text/css" href="adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="adminlte/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="adminlte/css/theme.css" rel="stylesheet">
        <link type="text/css" href="adminlte/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>

    @include('backend.layouts.adminheader')

    @yield('content')

    @include('backend.layouts.adminfooter')

    <script src="adminlte/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="adminlte/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="adminlte/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="adminlte/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="adminlte/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="adminlte/scripts/common.js" type="text/javascript"></script>

</body>
