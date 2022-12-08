<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-lg-5 mt-md-5 pt-lg-2 pt-md-3" style="margin-top: -60px;">
    <div class="container-fluid">
        <div class="position-sticky sidebar-sticky pl-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} px-lg-3" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Posts
                    </a>
                </li>
            </ul>
            @can('admin')            
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
                        <span data-feather="grid"></span>
                        Posts Categories
                    </a>
                </li>
            </ul>
            @endcan    
        </div>
    </div>
</nav>