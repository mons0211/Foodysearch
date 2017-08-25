<div class="side-menu">
    
    <nav class="navbar navbar-default navbar-color" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="/admin"><i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard</a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default ">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">
            
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl0">
                    <img src="img/mxcpGProxpt.jpg" class="img-circle" style="width: 32px; height:32px; margin-right: 5px"><span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl0" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="/profile"><i class="fa fa-id-card-o" aria-hidden="true"></i>  Profile</a></li>
                            <li><a href="/settings"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                            
                        </ul>
                    </div>
                </div>
            </li>
            <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1_1">
                    <i class="fa fa-th-list" aria-hidden="true"></i> Restaurant Info <span class="caret"></span>
                </a>
                <div id="dropdown-lvl1_1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i>  Create Info</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <i class="fa fa-cutlery" aria-hidden="true"></i> Food item's <span class="caret"></span>
                </a>
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i>  Add product Categories</a></li>
                        </ul>
                    </div>
                </div>
            </li>           
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl2">
                    <i class="fa fa-users"></i>  Customers<span class="caret"></span>
                </a>
                <div id="dropdown-lvl2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#">  New</a></li>
                            <li><a href="#">  Old</a></li>
                            <li><a href="#">  Regular</a></li>
                            <li><a href="#">  premium </a></li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
    </nav>
    
    </div>
        