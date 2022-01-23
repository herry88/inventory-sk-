<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Inventory</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AU</a>
        </div>
        @if (Auth::user()->level == 'admin')
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>

                </li>
                <li class="menu-header">Main Menu</li>

                <li><a class="nav-link" href="{{ route('category.index') }}"><i class="far fa-square"></i>
                        <span>Category</span></a></li>
                <li><a class="nav-link" href="{{ route('mitra.index') }}"><i class="far fa-square"></i>
                        <span>Mitra</span></a></li>
                <li><a class="nav-link" href="{{ route('product.index') }}"><i class="far fa-square"></i>
                        <span>Product</span></a></li>
                <li><a class="nav-link" href="{{ route('product-masuk.index') }}"><i class="far fa-square"></i>
                        <span>Produk Masuk</span></a></li>
                <li><a class="nav-link" href="{{ route('product-keluar.index') }}"><i
                            class="far fa-square"></i>
                        <span>Produk Keluar</span></a></li>
            </ul>
        @else
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>

                </li>
                <li class="menu-header">Main Menu</li>
                <li><a class="nav-link" href="{{ route('product-masuk.index') }}"><i class="far fa-square"></i>
                        <span>Produk Masuk</span></a></li>
                <li><a class="nav-link" href="{{ route('product-keluar.index') }}"><i
                            class="far fa-square"></i>
                        <span>Produk Keluar</span></a></li>
            </ul>
        @endif
    </aside>
</div>
