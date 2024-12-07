<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="icon" href="https://www.luavietours.com/assets/img/common/icon/favicon.ico" type="image/vnd.microsoft.icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <!-- Include Stylesheet -->
    @include ('backend.components.styles')
    <!-- End Include Stylesheet -->
</head>

<body>
    <section class="admin" id="admin_main">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <a href="/admin"><img src="{{ asset('frontend/assets/imgs/logo.jpg') }}" alt=""></a>
                </div>
                <div class="admin-sidebar-content">
                    <ul>
                        <li><a href=""><i class="ri-dashboard-line"></i> Dashboard<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href="/admin"><i class="ri-arrow-right-s-fill"></i>Tổng quan</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Đơn Hàng<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href="/admin/order_list"><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Tour<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href="/admin/product_list"><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                    <li><a href="/admin/product_add"><i class="ri-arrow-right-s-fill"></i>Thêm</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Ưu đãi<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href="/admin/endow_list"><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                    <li><a href="/admin/endow_add"><i class="ri-arrow-right-s-fill"></i>Thêm</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Tin tức và Sự kiện<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href="/admin/new_event_list"><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                    <li><a href="/admin/new_event_add"><i class="ri-arrow-right-s-fill"></i>Thêm</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    <div class="admin-content-top-left">
                        <ul class="flex-box">
                            <li>
                                <i class="ri-search-line"></i>
                            </li>
                            <li>
                                <i class="ri-drag-move-line"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="admin-content-top-right">
                        <ul class="flex-box">
                            <!-- ... (các phần tử khác) -->
                            <li class="flex-box user-dropdown">
                                <img style="width: 25px; margin-left: 16px;" src="{{asset('frontend/assets/imgs/user.png')}}" alt="" style="width: 50px;">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <p>@yield('nameAdmin')<i class="ri-arrow-down-s-fill"></i></p>
                                </div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                @yield ('content')
                <footer class="footer">
                    <p>KienTrucHau@ Nhóm7 21CN1</p>
                </footer>
            </div>
        </div>
    </section>
    <script>
        const menuLi = document.querySelectorAll('.admin-sidebar-content > ul > li > a')
        const subMenu = document.querySelectorAll('.sub-menu')

        for (let index = 0; index < menuLi.length; index++) {
            menuLi[index].addEventListener('click', (e) => {
                e.preventDefault()
                // menuLi[index].parentNode.querySelector('ul').classList.toggle('active')
                for (let i = 0; i < subMenu.length; i++) {
                    subMenu[i].setAttribute("style", "height: 0px")
                }
                const submenuHeight = menuLi[index].parentNode.querySelector('ul .sub-menu-items').offsetHeight
                menuLi[index].parentNode.querySelector('ul').setAttribute('style', 'height:' + submenuHeight + "px")
            });
        }

        // Thêm JavaScript để xử lý click
        var dropdownToggle = document.querySelector('.dropdown-toggle');
        var dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });


        // Đóng dropdown khi click ra ngoài
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.user-dropdown')) {
                dropdownMenu.style.display = 'none';
            }
        });
    </script>
    @include ('backend.components.javascript')
</body>

</html>