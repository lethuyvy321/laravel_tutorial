<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="{{ request()->is('pages') ? 'active' : '' }}" href="/pages">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('news') ? 'active' : '' }}" href="/news">Tin Tức</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('contacts') ? 'active' : '' }}" href="/contacts">Liên Hệ</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">Về Chúng Tôi</a>
            </li>
        </ul>
    </div>
</header>

