<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>
                        <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.cat') }}">Add Category</a></li>
                        <li><a href="{{ route('admin.cat.list') }}">Category List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-ol" aria-hidden="true"></i>
                        <span> Sub-Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.sub.cat') }}">Add Sub-Category</a></li>
                        <li><a href="{{ route('admin.sub.cat.list') }}">Sub-Category List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>
                        <span> Color </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.color') }}">Add Color</a></li>
                        <li><a href="{{ route('admin.color.list') }}">Color List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-scissors" aria-hidden="true"></i>
                        <span> Size </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.size') }}">Add Size</a></li>
                        <li><a href="{{ route('admin.size.list') }}">Size List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span> Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.product') }}">Add Product</a></li>
                        <li><a href="{{ route('admin.product.list') }}">Product List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Ordered Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.pending') }}">Pending Orders</a></li>
                        <li><a href="{{ route('admin.delivered') }}">Delivered Order List</a></li>
                    </ul>
                </li>

                <li class="submenu">

                    <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Front Pages</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.about') }}">About Us</a></li>
                        <li><a href="{{ route('admin.social.link') }}"><i class="fa fa-share-square-o" aria-hidden="true"></i>Social Link</a></li>
                    </ul>

                </li>

            </ul>
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
