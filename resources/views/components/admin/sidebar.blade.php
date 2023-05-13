<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dash', auth()->user()->id) }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Account Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin-profile', 1) }}"> Profile </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('update-admin-password-form', auth()->user()->id) }}"> Security </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Pending</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('unconfirmed') }}">Donations
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('unconfirmed_blogs') }}"> Blogs
                        </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
