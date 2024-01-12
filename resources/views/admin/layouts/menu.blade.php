<div id="layoutSidenav">
    <style>
        .nav-link.selected {
    background-color: #00ffc8; /* Màu nền khi đã chọn */
    color: #ffffff; /* Màu chữ khi đã chọn */
}
    </style>
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav">
             
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Dashboards
                        <div class="sidenav-collapse-arrow"></div>
                    </a>
                   
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
                                   
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                        <div class="nav-link-icon">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                        Dữ liệu thuộc tính
                                        {{-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                    </a>
                                  
                                </nav>
                            </div>
                           
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
                            <a class="nav-link collapsed" href="{{route('admin.species')}}" >
                                <div class="nav-link-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                Loài
                            </a>
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
                
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapseDocs" aria-expanded="false" aria-controls="appsCollapseDocs">
                        <div class="nav-link-icon"><i data-feather="file"></i></div>
                        Tài liệu
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="appsCollapseDocs" data-bs-parent="#accordionSidenavAppsMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.document')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-file"></i>
                                </div>
                                Văn bản
                            </a>
                            <a class="nav-link" href="{{route('videos.index')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-video"></i>
                                </div>
                                Video
                            </a>
                        </nav>
                    </div>
                    
                    <a class="nav-link collapsed" href="{{route('admin.helplist')}}" >
                        <div class="nav-link-icon"><i class="fas fa-question-circle"></i></div>
                        Danh mục trợ giúp
                    </a>
                    <a class="nav-link collapsed" href="{{route('admin.contactlist')}}" >
                        <div class="nav-link-icon"><i class="fas fa-phone"></i></div>
                        Danh mục liên hệ
                    </a>
                    
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#appsCollapseAccounts" aria-expanded="false" aria-controls="appsCollapseAccounts">
                        <div class="nav-link-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        Tài khoản
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="appsCollapseAccounts" data-bs-parent="#accordionSidenavAppsMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.account')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                Cập nhật
                            </a>
                            <a class="nav-link" href="{{route('admin.role')}}">
                                <div class="nav-link-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                Phân quyền
                            </a>
                        </nav>
                    </div>
                   
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
    
            // Kiểm tra nếu đã có một liên kết được chọn từ trước (lưu trong localStorage)
            const selectedLinkIndex = localStorage.getItem('selectedLinkIndex');
            if (selectedLinkIndex !== null) {
                navLinks[selectedLinkIndex].classList.add('selected');
            }
    
            navLinks.forEach(function (link, index) {
                link.addEventListener('click', function () {
                    navLinks.forEach(function (navLink) {
                        navLink.classList.remove('selected');
                    });
    
                    link.classList.add('selected');
    
                    // Lưu trạng thái của liên kết đã chọn vào localStorage
                    localStorage.setItem('selectedLinkIndex', index.toString());
                });
            });
        });
    </script>
    @yield('main-content')
</div>