<!doctype html>
<html lang="en" ng-app="php_recipe" ng-controller="BaseController">
    <head>
        <meta charset="utf-8">
        <title ng-bind="title">My Recipe Box</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css"/>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="public/css/app.css"/>

        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-route/angular-route.js"></script>
        <script src="bower_components/angular-cookies/angular-cookies.min.js"></script>
        <script src="bower_components/angularLocalStorage/src/angularLocalStorage.js"></script>
        <script src="bower_components/underscore/underscore.js"></script>
        <script src="bower_components/restangular/dist/restangular.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#/home">My Recipe Box</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="" ><a href="#/recipes">All Recipes</a></li>
                         <li class=""><a href="#/add-recipe">Add New Recipe</a></li>
                         <li class=""><a href="#/home">My Account</a></li>
                         <li class=""><a href="#/recipes">Admin</a></li>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div ng-view></div>

        <div><a href="javascript:void(0);" ng-click="doLogout();">Logout</a></div>

        <!-- Our Angular scripts that we've created -->
        <script src="public/js/app.js"></script>
        <script src="public/js/services.js"></script>
        <script src="public/js/controllers.js"></script>
        <script src="public/js/constants.js"></script>
        <script src="public/js/filters.js"></script>
        <script src="public/js/directives.js"></script>

        <!-- More library js includes -->
        <script src="bower_components/lib/jquery/dist/jquery.js"></script>
        <script src="bower_components/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/lib/angular-bootstrap/ui-bootstrap.min.js"></script>
        <script src="bower_components/lib/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    </body>
</html>