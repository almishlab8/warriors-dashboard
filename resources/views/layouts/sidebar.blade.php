
    <!-- main menu-->
<div
        data-scroll-to-active="true"
        class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
        <!-- main menu header-->
        <div class="main-menu-header">
            <input type="text" placeholder="Search" class="menu-search form-control round"/>
        </div>
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="main-menu-content">
            <ul
                id="main-menu-navigation"
                data-menu="menu-navigation"
                class="navigation navigation-main">
                <li class=" nav-item">
                    <a href="index.html">
                        <i class="icon-home3"></i>
                        <span data-i18n="nav.dash.main" class="menu-title">الاخبار
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="active">
                            <a href="#" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-home3"></i>اضافة 
                            </a>
                        </li>
                        
                </ul>
            </li>


            

            @can('isSuperAdmin')
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-users"></i>
                    <span data-i18n="nav.page_layouts.main" class="menu-title">المدير
                    </span>
                </a>
                <ul class="menu-content">

                    <li class=" nav-item">
                        <a href="users">
        
                            <span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-calendar4"></i> اضافة </span></a>
                        
                    </li>
            
                </ul>
            </li>
            @endcan




            <li class=" nav-item">
                <a href="#">
                    <i class="icon-stack-2"></i>
                    <span data-i18n="nav.page_layouts.main" class="menu-title">الطالب
                    </span>
                </a>
                <ul class="menu-content">

                    <li class=" nav-item">
                        <a href="#">
        
                            <span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-calendar4"></i> اضافة </span></a>
                        
                    </li>
            
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-briefcase4"></i>
                    <span data-i18n="nav.project.main" class="menu-title">الاساتذة
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a
                            href="#"
                            data-i18n="nav.invoice.invoice_template"
                            class="menu-item"> <i class="icon-newspaper-o"></i> اضافة
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-ios-albums-outline"></i>
                    <span data-i18n="nav.cards.main" class="menu-title">التبلغات 
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a
                            href="#"
                            data-i18n="nav.cards.card_bootstrap"
                            class="menu-item"> <i class="icon-book2"></i> الرسائل
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            data-i18n="nav.cards.card_actions"
                            class="menu-item"> <i class="icon-volume-up"></i>الفيديو
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-whatshot"></i>
                    <span data-i18n="nav.advance_cards.main" class="menu-title">
                        معرض الصور
                    </span>
                </a>
                <ul class="menu-content">
                    
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-compass3"></i>
                    <span data-i18n="nav.content.main" class="menu-title">
                        الدعم الفني
                    </span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-grid2"></i>
                    <span data-i18n="nav.components.main" class="menu-title">التعليمات
                    </span>
                </a>

            </li>

        </ul>
    </div>

</div>
<!-- / main menu-->



