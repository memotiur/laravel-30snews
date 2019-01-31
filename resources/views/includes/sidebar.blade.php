<aside class="aside">

    <nav class="sidebar">
        <ul class="nav">

            <li>
                <div data-toggle="collapse-next" class="item user-block has-submenu">

                    <div class="user-block-picture">
                        <img src="/images/user/{{Session::get('profile_pic')}}" alt="Avatar" width="60" height="60"
                             class="img-thumbnail img-circle">

                        <div class="user-block-status">
                            <div class="point point-success point-lg"></div>
                        </div>
                    </div>

                    <div class="user-block-info">
                        <span class="user-block-name item-text">{{ Session::get('name')}}</span>
                        <span class="user-block-role">{{ Session::get('designation')}}</span>

                    </div>
                </div>
            </li>


            <li class="">
                <a href="/admin-home" title="Dashboard" class="">
                    <em class="fa fa-dashboard"></em>
                    <span class="item-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-users"></em>
                    <span class="item-text">Manage User</span>
                </a>

                <ul class="nav collapse ">
                    <li>
                        <a href="/user/create" title="Data Table" data-toggle="" class="no-submenu">
                            <span class="item-text">New User</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/show" title="Standard" data-toggle="" class="no-submenu">
                            <span class="item-text">All User</span>
                        </a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-users"></em>
                    <span class="item-text">Manage Post</span>
                </a>

                <ul class="nav collapse ">
                    <li>
                        <a href="/post/create" title="Data Table" data-toggle="" class="no-submenu">
                            <span class="item-text">New Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="/post/show" title="Standard" data-toggle="" class="no-submenu">
                            <span class="item-text">All Post</span>
                        </a>
                    </li>
                </ul>

            </li>

            <li class="">
                <a href="/user/profile" title="Dashboard" class="">
                    <em class="fa fa-user"></em>
                    <span class="item-text">My Profile</span>
                </a>
            </li>
            <li class="">
                <a href="/user/profile/edit" title="Dashboard" class="">
                    <em class="fa fa-cog"></em>
                    <span class="item-text">Setting</span>
                </a>
            </li>
            <li class="">
                <a href="/logout" title="Dashboard" class="">
                    <em class="fa fa-sign-out"></em>
                    <span class="item-text">Logout</span>
                </a>
            </li>
            <li class="nav-footer">
                <div class="nav-footer-divider"></div>

                <div class="btn-group text-center">
                    <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
                        <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
                        </em>
                    </button>
                    <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
                        <em class="fa fa-cog text-muted"></em>
                    </button>
                    <button type="button" data-toggle="tooltip" data-title="Logout" class="btn btn-link">
                        <em class="fa fa-sign-out text-muted"></em>
                    </button>
                </div>

            </li>
        </ul>
    </nav>

</aside>