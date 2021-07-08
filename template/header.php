<header id="header">
    <h1><a href="<?= home_url( '/' ); ?>"><?= bloginfo( "name" ); ?></a></h1>
    <nav class="links">
        <ul>
        <?php foreach(wp_get_nav_menu_items("Principal") as $page): ?>
            <li><a href="<?= $page->url; ?>"><?= $page->title; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </nav>
    <nav class="main">
        <ul>
            <li class="search">
                <a class="fa-search" href="#search">Search</a>
                <form id="search" method="get" action="/">
                    <input type="text" name="s" placeholder="Search" />
                </form>
            </li>
            <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>
</header>