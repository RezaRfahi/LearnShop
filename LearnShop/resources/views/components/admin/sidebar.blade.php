<div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.dashboard')}}" class="brand-link">
          <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
          <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{\Illuminate\Support\Facades\Auth::user()->getProfilePhotoUrlAttribute()}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href={{ route('profile.show') }} class="d-block">{{auth()->user()->name}}</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <x-side-bar-item href="{{route('admin.dashboard')}}" :active="request()->routeIs('admin.dashboard')">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>داشبورد</p>
                        </x-side-bar-item>
                    </ul>
                </li>
                <li class="nav-item">
                  <x-side-bar-item href="{{route('admin.users')}}" :active="request()->routeIs('admin.users')">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                      کاربران
                    </p>
                  </x-side-bar-item>
                </li>
                <li class="nav-item has-treeview">
                    <x-side-bar-item href="{{route('admin.articles')}}" :active="request()->routeIs('admin.articles')">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            مقالات
                        </p>
                    </x-side-bar-item>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>
                      فرم‌ها
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/forms/general.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>اجزا عمومی</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/advanced.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>پیشرفته</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/editors.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ویشرایشگر</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-table"></i>
                    <p>
                      جداول
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/tables/simple.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>جداول ساده</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/data.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>جداول داده</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">مثال‌ها</li>
                <li class="nav-item">
                  <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fa fa-calendar"></i>
                    <p>
                      تقویم
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-envelope-o"></i>
                    <p>
                      ایمیل‌ باکس
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/mailbox/mailbox.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>اینباکس</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/mailbox/compose.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ایجاد</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/mailbox/read-mail.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>خواندن</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                      صفحات
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>سفارشات</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/profile.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>پروفایل</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/login.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>صفحه ورود</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/register.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>صفحه عضویت</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/lockscreen.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>قفل صفحه</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-plus-square-o"></i>
                    <p>
                      بیشتر
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/404.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ارور 404</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/500.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ارور 500</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/blank.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>صفحه خالی</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="starter.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>صفحه شروع</p>
                      </a>
                    </li>
                  </ul>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
        </div>
        <!-- /.sidebar -->
      </aside>
</div>
