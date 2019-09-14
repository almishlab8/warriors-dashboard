
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
                        <i class="icon-newspaper"></i>
                        <span data-i18n="nav.dash.main" class="menu-title">الاخبار
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="{{ Request::is('news/create') ? 'active' : '' }}">
                            <a href="{{ route('news.create') }}" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-plus"></i>اضافة
                            </a>
                        </li>
                        <li class="{{ Request::is('news') ? 'active' : '' }}">
                            <a href="{{ route('news.index') }}" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-cast"></i>عرض
                            </a>
                        </li>
                    </ul>
            </li>




            @can('isSuperAdmin')
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-user-tie"></i>
                    <span data-i18n="nav.page_layouts.main" class="menu-title">المدير
                    </span>
                </a>
                <ul class="menu-content">

                    <li class=" nav-item">
                    <a href="#" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-cast"></i>عرض
                            </a>
                        <a href="users">

                            <span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-plus"></i> اضافة </span></a>

                    </li>

                </ul>
            </li>
            @endcan




            <li class=" nav-item">
                <a href="#">
                    <i class="icon-users2"></i>
                    <span data-i18n="nav.page_layouts.main" class="menu-title">الطلاب
                    </span>
                </a>
                <ul class="menu-content">

                    <li class=" nav-item">
                        <a href="{{route('students.index')}}"><span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-cast"></i> عرض كل الطلاب </span></a>
                        <a href="{{route('students.create')}}"><span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-user-plus"></i> اضافة طالب جديد </span></a>
                        <a href="{{route ('students.merge') }}"><span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-plus"></i>  اضافة طالب الى صف </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-user"></i>
                    <span data-i18n="nav.project.main" class="menu-title">الاساتذة
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                    <a href="{{route('teachers.index')}}" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-cast"></i>عرض
                            </a>
                        <a
                            href="{{route('teachers.create')}}"
                            data-i18n="nav.invoice.invoice_template"
                            class="menu-item"> <i class="icon-plus"></i> اضافة
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-home"></i>
                    <span data-i18n="nav.project.main" class="menu-title">الصفوف
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                    <a href="{{route('classes.showclasses')}}" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-cast"></i> عرض الصفوف
                            </a>
                        <a
                        href="{{route('classes.addclass')}}"
                            data-i18n="nav.invoice.invoice_template"
                            class="menu-item"> <i class="icon-plus"></i> اضافة صف
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-ios-albums-outline"></i>
                    <span data-i18n="nav.cards.main" class="menu-title">الوسائط
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="/image_gallery"
                            data-i18n="nav.cards.card_bootstrap"
                            class="menu-item"> <i class="icon-images2"></i> معرض الصور
                        </a>
                    </li>
                    <li>
                        <a href="{{route('videos.index')}}"
                            data-i18n="nav.cards.card_actions"
                            class="menu-item"> <i class="icon-film"></i>الفيديو
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-pen"></i>
                    <span data-i18n="nav.project.main" class="menu-title">الواجبات
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                    <a href="{{route('class_homeworks.index')}}" data-i18n="nav.dash.main" class="menu-item">
                                <i class="icon-pen"></i> واجبات الصفوف
                            </a>
                        <a
                        href="{{route('student_homeworks.index')}}"
                            data-i18n="nav.invoice.invoice_template"
                            class="menu-item"> <i class="icon-pen"></i> واجبات الطلاب
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="icon-bubbles3"></i>
                    <span data-i18n="nav.advance_cards.main" class="menu-title">
                        الرسائل
                    </span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="{{route('materials.index')}}">
                    <i class="icon-books"></i>
                    <span data-i18n="nav.advance_cards.main" class="menu-title">
                        المواد الدراسية
                    </span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="{{route('alerts.index')}}">
                    <i class="icon-bullhorn"></i>
                    <span data-i18n="nav.advance_cards.main" class="menu-title">
                        التبليغات
                    </span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="{{route('tables.index')}}">
                    <i class="icon-table"></i>
                    <span data-i18n="nav.content.main" class="menu-title">
                        الجدول الاسبوعي
                    </span>
                </a>

            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="icon-clipboard2"></i>
                    <span data-i18n="nav.content.main" class="menu-title">
                       تقييم الطلبة
                    </span>
                </a>
                <ul class="menu-content">

                    <li class=" nav-item">
                        <a href="{{ route('students_evaluated.index') }}"><span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-cast"></i> عرض تقييم الطلاب </span></a>
                        <a href="{{route('students_evaluated.create')}}"><span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-user-plus"></i>  اضافة تقييم للطالب  </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('attendance.index')}}">
                    <i class="icon-user-check"></i>
                    <span data-i18n="nav.components.main" class="menu-title">الحظور والغياب
                    </span>
                </a>

            </li>

        </ul>
    </div>

</div>
<!-- / main menu-->



