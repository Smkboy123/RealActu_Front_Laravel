<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">RealActu</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="menu-toggle-icon d-xl-block align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <!-- <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Dashboards">Tableau de bord</div>
            </a> -->
            <ul class="menu-sub">
                <li class="menu-item active">
                    <a href="/dashboard" class="menu-link">
                        <div data-i18n="Analytics">Tableau de bord</div>
                        <div class="badge bg-danger rounded-pill ms-auto">.</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Layouts -->
        <!-- Front Pages -->
        <li class="menu-header mt-7">
            <span class="menu-header-text">Menu</span>
        </li>
        <!-- Apps -->


        <!-- Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-layout-left-line"></i>
                <div data-i18n="Account Settings">Categories</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <div data-i18n="Account">liste des Categorie</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('categories.create') }}" class="menu-link">
                        <div data-i18n="Account">Nouvelle Categorie</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-layout-left-line"></i>
                <div data-i18n="Account Settings">Articles</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('articles.index') }}" class="menu-link">
                        <div data-i18n="Account">Listes des Articles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('articles.create') }}" class="menu-link">
                        <div data-i18n="Account">Nouvelle articles</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-shield-keyhole-line"></i>
                <div data-i18n="Authentications">Utilisateurs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.index') }}" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Listes des utilisateurs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('users.create') }}" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Nouvelles Utilisateurs</div>
                    </a>
                </li>
            </ul>
        </li>
        
                
            </ul>
        </li>

        <!-- Extended components -->
        

        <!-- Icons -->
        <!-- <li class="menu-item">
            <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Icons</div>
            </a>
        </li> -->

        <!-- Forms & Tables -->
        
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->
