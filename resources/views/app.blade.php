<html lang="en">
<head>
    <title>Items Management</title>

    <!-- Angular and Bootstrap JS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/app/packages/external/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <script src="{{ asset('/app/packages/external/jquery.min.js') }}"></script>
    <script src="{{ asset('/app/packages/external/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app/packages/external/angular.min.js') }}"></script>
    <script src="{{ asset('/app/packages/external/angular-route.min.js') }}"></script>

    <!-- MY App -->
    <script src="{{ asset('/app/packages/dirPagination.js') }}"></script>
    <script src="{{ asset('/app/routes.js') }}"></script>
    <script src="{{ asset('/app/packages/myServices.js') }}"></script>
    <script src="{{ asset('/app/helper/myHelper.js') }}"></script>
    <!-- App Controller -->
    <script src="{{ asset('/app/controllers/ItemController.js') }}"></script>
</head>
<body ng-app="main-app">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Item Management</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#/">Home</a></li>
                <li><a href="#/items">Item</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <ng-view></ng-view>
</div>
</body>
</html>