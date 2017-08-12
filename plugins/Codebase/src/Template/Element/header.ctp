<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <strong>SimpleForums</strong>
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown --
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    J. Smith<i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="be_pages_generic_profile.html">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                        <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                        <span class="badge badge-primary">3</span>
                    </a>
                    <a class="dropdown-item" href="be_pages_generic_invoice.html">
                        <i class="si si-note mr-5"></i> Invoices
                    </a>
                    <div class="dropdown-divider"></div>

                    <!-- Toggle Side Overlay --
                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="si si-wrench mr-5"></i> Settings
                    </a>
                    <!-- END Side Overlay --

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="op_auth_signin.html">
                        <i class="si si-logout mr-5"></i> Sign Out
                    </a>
                </div>
            </div>
            <!-- END User Dropdown -->

            <a href="http://backend.mz/nodes/add" class="btn btn-rounded btn-dual-secondary">Login</a>
            <a href="http://backend.mz/nodes/add" class="btn btn-rounded btn-dual-secondary">Register</a>

            <!-- Open Search Section -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <a href="http://backend.mz/nodes/add" class="btn btn-rounded btn-dual-secondary"><i class="fa fa-plus"></i></a>
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form action="be_pages_generic_search.html" method="post">
                <div class="input-group">
                    <span class="input-group-btn">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                    </span>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->
</header>
<!-- END Header -->
