<header class="navbar navbar-expand-lg navbar-light sticky-top bg-primary p-0 shadow-sm py-2 my-0 mx-md-3 mx-lg-auto">
    <div class="container-fluid mx-lg-3">
        <button class="navbar-toggler border-0 px-0" style="margin-right: 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-justify text-white fs-1"></i>
        </button>
        <a class="navbar-brand text-white shadow-none py-0 mx-0 bg-primary" href="/">YUDHA<span style="font-family: 'Barlow Semi Condensed', sans-serif; font-weight:100;">Blog</span></a>        
        <div class="navbar-nav ms-auto">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link border-0 text-white p-0 bg-primary logout">
                       <span data-feather="log-out"></span> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>