<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="{{ route('dashboard') }}" aria-label="adminHMD dashboard">
            <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
            <span class="brand-copy">
                <span class="brand-title">Dashboard</span>
                <span class="brand-subtitle">Admin</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-current="page">
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link {{ request()->routeIs('category.*') ? 'active' : '' }}" href="{{ route('category.index') }}">
            <span class="nav-icon"><i class="bi bi-tags-fill" aria-hidden="true"></i></span>
            <span class="nav-text">Category</span>
        </a>
        {{-- <a class="nav-link {{ request()->routeIs('product*') ? 'active' : '' }}" href="{{ route('product') }}">
            <span class="nav-icon"><i class="bi bi-cart-check-fill" aria-hidden="true"></i></span>
            <span class="nav-text">Product</span>
        </a> --}}
    </nav>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>