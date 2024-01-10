<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav">
                          <!-- Sidenav Menu Heading (Account)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    {{-- <div class="sidenav-menu-heading d-sm-none">Account</div> --}}
                    <!-- Sidenav Link (Alerts)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    {{-- <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="bell"></i></div>
                        Alerts
                        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                    </a> --}}
                    <!-- Sidenav Link (Messages)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    {{-- <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Messages
                        <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                    </a> --}}
                    <!-- Sidenav Menu Heading (Core)-->
                    {{-- <div class="sidenav-menu-heading">Core</div> --}}
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Dashboards
                        <div class="sidenav-collapse-arrow"></div>
                    </a>
                    {{-- <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="dashboard-1.html">
                                Default
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                            <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                        </nav>
                    </div> --}}
                    <!-- Sidenav Heading (Custom)-->
                    {{-- <div class="sidenav-menu-heading">Custom</div> --}}
                    <!-- Sidenav Accordion (Pages)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i data-feather="map"></i></div>
                        Bản đồ
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                <div class="nav-link-icon"><i data-feather="eye"></i></div>
                                Hiển thị
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="account-profile.html">
                                        <div class="nav-link-icon"><i class="fas fa-mountain"></i></div>
                                        Địa hình</a>
                                    <a class="nav-link" href="account-billing.html">
                                        <div class="nav-link-icon"><i class="fas fa-car"></i></div>
                                        Giao thông</a>
                                    <a class="nav-link" href="account-security.html">
                                        <div class="nav-link-icon"><i class="fas fa-map-marker"></i></div>
                                        Lớp dữ liệu</a>
                                    
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Pages -> Authentication)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                <div class="nav-link-icon"><i class="fas fa-sync-alt"></i></div>
                                Cập nhật bản đồ
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" data-bs-parent="#accordionSidenavPagesMenu">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                    <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                        Dữ liệu không gian
                                        {{-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                    </a>
                                    {{-- <div class="collapse" id="pagesCollapseAuthBasic" data-bs-parent="#accordionSidenavPagesAuth">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="auth-login-basic.html">Login</a>
                                            <a class="nav-link" href="auth-register-basic.html">Register</a>
                                            <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                        </nav>
                                    </div> --}}
                                    <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                        Dữ liệu thuộc tính
                                        {{-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                    </a>
                                    {{-- <div class="collapse" id="pagesCollapseAuthSocial" data-bs-parent="#accordionSidenavPagesAuth">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="auth-login-social.html">Login</a>
                                            <a class="nav-link" href="auth-register-social.html">Register</a>
                                            <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                        </nav>
                                    </div> --}}
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Pages -> Error)-->
                            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" data-bs-parent="#accordionSidenavPagesMenu">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="error-400.html">400 Error</a>
                                    <a class="nav-link" href="error-401.html">401 Error</a>
                                    <a class="nav-link" href="error-403.html">403 Error</a>
                                    <a class="nav-link" href="error-404-1.html">404 Error 1</a>
                                    <a class="nav-link" href="error-404-2.html">404 Error 2</a>
                                    <a class="nav-link" href="error-500.html">500 Error</a>
                                    <a class="nav-link" href="error-503.html">503 Error</a>
                                    <a class="nav-link" href="error-504.html">504 Error</a>
                                </nav>
                            </div> --}}
                            {{-- <a class="nav-link" href="pricing.html">Pricing</a>
                            <a class="nav-link" href="invoice.html">Invoice</a> --}}
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Applications)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps" id="selectedLink">
                        <div class="nav-link-icon"><i data-feather="database"></i></div>
                        Cập nhật thông tin
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                            <!-- Nested Sidenav Accordion (Apps -> Knowledge Base)-->
                            <a class="nav-link collapsed" href="{{route('admin.phylum')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                Ngành    
                            </a>
                           
                            <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                            <a class="nav-link collapsed" href="{{route('admin.class')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-dna"></i>
                                </div>
                                Lớp
                            </a>
                          
                            <!-- Nested Sidenav Accordion (Apps -> Posts Management)-->
                            <a class="nav-link collapsed" href="{{route('admin.order')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                Bộ
                            </a>  
                            <a class="nav-link collapsed" href="{{route('admin.family')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-dog"></i>
                                </div>
                                Họ
                            </a>
                            <a class="nav-link collapsed" href="{{route('admin.genus')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-fish"></i>
                                </div>
                                Chi
                            </a>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapsePostsManagement" aria-expanded="false" aria-controls="appsCollapsePostsManagement">
                                <div class="nav-link-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                Loài
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="appsCollapsePostsManagement" data-bs-parent="#accordionSidenavAppsMenu">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.species')}}">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-horse"></i>
                                        </div>
                                        Động vật</a>
                                    <a class="nav-link" href="{{route('admin.species')}}">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-tree"></i>
                                        </div>
                                        Thực vật</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Flows)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Thống kê
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                            <!-- Nested Sidenav Accordion (Apps -> Knowledge Base)-->
                            <a class="nav-link collapsed" href="{{route('phylumchart')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                Ngành    
                            </a>
                           
                            <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                            <a class="nav-link collapsed" href="{{route('admin.classstatical')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-dna"></i>
                                </div>
                                Lớp
                            </a>
                          
                            <!-- Nested Sidenav Accordion (Apps -> Posts Management)-->
                            <a class="nav-link collapsed" href="{{route('admin.orderstatical')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                Bộ
                            </a>  
                            <a class="nav-link collapsed" href="{{route('admin.familystatical')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-dog"></i>
                                </div>
                                Họ
                            </a>
                            <a class="nav-link collapsed" href="{{route('admin.genusstatical')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-fish"></i>
                                </div>
                                Chi
                            </a>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapsePostsManagement" aria-expanded="false" aria-controls="appsCollapsePostsManagement">
                                <div class="nav-link-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                Loài
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="appsCollapsePostsManagement" data-bs-parent="#accordionSidenavAppsMenu">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.animalstatical')}}">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-horse"></i>
                                        </div>
                                        Động vật</a>
                                    <a class="nav-link" href="{{route('admin.plantstatical')}}">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-tree"></i>
                                        </div>
                                        Thực vật</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="{{route('admin.habitatstatical')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-hiking"></i>
                                </div>
                                Sinh cảnh sống
                            </a>
                            <a class="nav-link collapsed" href="{{route('admin.conservationvaluestatical')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                Giá trị bảo tồn
                            </a>
                        </nav>
                    </div>
                    <!-- Sidenav Heading (UI Toolkit)-->
                    {{-- <div class="sidenav-menu-heading">UI Toolkit</div> --}}
                    <!-- Sidenav Accordion (Layout)-->
                    <a class="nav-link collapsed" href="{{route('admin.document')}}" >
                        <div class="nav-link-icon"><i data-feather="file"></i></div>
                        Tài liệu
                        {{-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                    </a>
                    <a class="nav-link collapsed" href="{{route('admin.helplist')}}" >
                        <div class="nav-link-icon"><i class="fas fa-question-circle"></i></div>
                        Danh mục trợ giúp
                    </a>
                    <a class="nav-link collapsed" href="{{route('admin.contactlist')}}" >
                        <div class="nav-link-icon"><i class="fas fa-phone"></i></div>
                        Danh mục liên hệ
                    </a>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapsePostsManagement" aria-expanded="false" aria-controls="appsCollapsePostsManagement">
                        <div class="nav-link-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        Tài khoản
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="appsCollapsePostsManagement" data-bs-parent="#accordionSidenavAppsMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.account')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                Cập nhật</a>
                            <a class="nav-link" href="{{route('admin.role')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                Phân quyền</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                            <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                Navigation
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutSidenavVariations" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Sidenav</a>
                                    <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                    <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                </nav>
                            </div> --}}
                            <!-- Nested Sidenav Accordion (Layout -> Container Options)-->
                            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                Container Options
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutContainers" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-boxed.html">Boxed Layout</a>
                                    <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                </nav>
                            </div> --}}
                            <!-- Nested Sidenav Accordion (Layout -> Page Headers)-->
                            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                Page Headers
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsPageHeaders" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="header-simplified.html">Simplified</a>
                                    <a class="nav-link" href="header-compact.html">Compact</a>
                                    <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                    <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                    <a class="nav-link" href="header-light.html">Light</a>
                                </nav>
                            </div> --}}
                            <!-- Nested Sidenav Accordion (Layout -> Starter Layouts)-->
                            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                Starter Layouts
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsStarterTemplates" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="starter-default.html">Default</a>
                                    <a class="nav-link" href="starter-minimal.html">Minimal</a>
                                </nav>
                            </div> --}}
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Components)-->
                    {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                        <div class="nav-link-icon"><i data-feather="package"></i></div>
                        Components
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseComponents" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="alerts.html">Alerts</a>
                            <a class="nav-link" href="avatars.html">Avatars</a>
                            <a class="nav-link" href="badges.html">Badges</a>
                            <a class="nav-link" href="buttons.html">Buttons</a>
                            <a class="nav-link" href="cards.html">
                                Cards
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                            <a class="nav-link" href="forms.html">
                                Forms
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="modals.html">Modals</a>
                            <a class="nav-link" href="navigation.html">Navigation</a>
                            <a class="nav-link" href="progress.html">Progress</a>
                            <a class="nav-link" href="step.html">Step</a>
                            <a class="nav-link" href="timeline.html">Timeline</a>
                            <a class="nav-link" href="toasts.html">Toasts</a>
                            <a class="nav-link" href="tooltips.html">Tooltips</a>
                        </nav>
                    </div> --}}
                    <!-- Sidenav Accordion (Utilities)-->
                    {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                        <div class="nav-link-icon"><i data-feather="tool"></i></div>
                        Utilities
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="animations.html">Animations</a>
                            <a class="nav-link" href="background.html">Background</a>
                            <a class="nav-link" href="borders.html">Borders</a>
                            <a class="nav-link" href="lift.html">Lift</a>
                            <a class="nav-link" href="shadows.html">Shadows</a>
                            <a class="nav-link" href="typography.html">Typography</a>
                        </nav>
                    </div> --}}
                    <!-- Sidenav Heading (Addons)-->
                    {{-- <div class="sidenav-menu-heading">Plugins</div>
                    <!-- Sidenav Link (Charts)-->
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                        Charts
                    </a>
                    <!-- Sidenav Link (Tables)-->
                    <a class="nav-link" href="tables.html">
                        <div class="nav-link-icon"><i data-feather="filter"></i></div>
                        Tables
                    </a> --}}
                </div>
                    </div>
                  
            </div>
            <!-- Sidenav Footer-->
            {{-- <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Valerie Luna</div>
                </div>
            </div> --}}
        </nav>
    </div>
    @yield('main-content')
</div>