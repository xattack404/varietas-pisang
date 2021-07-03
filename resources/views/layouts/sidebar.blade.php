<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Varietas Pisang</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home')}}">Varietas Pisang</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <li class="menu-header">Data </li>
            <li class="">
                <a class="nav-link" href="{{ route('jenispisang.index') }}"><i class="fas fa-newspaper"></i> <span>Jenis Pisang</span></a>
            </li>
            <li class="">
                <a class="nav-link" href="{{ route('varietas.index') }}"><i class="fas fa-newspaper"></i> <span>Varietas</span></a>
            </li>
            <li class="menu-header">Data 2</li>
            <li class="">
                <a class="nav-link" href="#"><i class="fas fa-money-check-alt"></i> <span>Data B</span></a>
            </li>
        </ul>
    </aside>
</div>