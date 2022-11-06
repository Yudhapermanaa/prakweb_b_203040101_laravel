<nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-4 py-3 px-2 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">WPU Blog</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-item">{{ auth()->user()->name }}</li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item" >
                        <button class="btn btn-dark px-lg-4 px-5 py-lg-0 py-0 my-lg-0 my-2 rounded-0">
                            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} text-white" style="padding: 7px;"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </button>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
