<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="Index.php?dashboard" class="navbar-brand"Admin Area></a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> Mrghie <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="Index.php?user_profile">
                        <i class="fa fa-fw fa-user"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="Index.php?view_products">
                        <i class="fa fa-fw fa-envelope"></i> Products
                        <span class="badge">7</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?view_customers">
                        <i class="fa fa-fw fa-users"></i> Customers
                        <span class="badge">11</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?view_cats">
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        <span class="badge">4</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="Index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="products">
                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="products" class="collapse">
                    <li>
                        <a href="Index.php?insert_product">Insert Product </a>
                        <a href="Index.php?view_products">View Products </a>
                    </li>
                </ul>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="p_cat" class="collapse">
                    <li>
                        <a href="Index.php?insert_p_cat">Insert Product Category </a>
                    </li>
                    <li>
                        <a href="Index.php?view_p_cats">View Products Categories</a>
                    </li>
                </ul>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <i class="fa fa-fw fa-book"></i> Categories
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="cat" class="collapse">
                    <li>
                        <a href="Index.php?insert_cat">Insert Category </a>
                    </li>
                    <li>
                        <a href="Index.php?view_cats">View Categories</a>
                    </li>
                </ul>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="slides" class="collapse">
                    <li>
                        <a href="Index.php?insert_slide">Insert Slide </a>
                    </li>
                    <li>
                        <a href="Index.php?view_slides">View Slides</a>
                    </li>
                </ul>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i> View Orders
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_payments">
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                    <i class="fa fa-fw fa-users"></i> Users
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="Index.php?insert_user">Insert User </a>
                    </li>
                    <li>
                        <a href="Index.php?view_users">View Users</a>
                    </li>
                    <li>
                        <a href="Index.php?user_profile">Edit User Profile</a>
                    </li>
                </ul>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
        </ul>
    </div>
</nav>