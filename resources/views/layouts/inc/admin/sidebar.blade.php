<aside class="left-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <!-- User Profile-->
            <li class="sidebar-item pt-2">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.dashboard')}}" aria-expanded="false">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.university.index') }}" aria-expanded="false">
                    <i class="far fa-registered" aria-hidden="true"></i>
                    <span class="hide-menu">Их Сургууль</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.university.create') }}" aria-expanded="false">
                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                    <span class="hide-menu">Сургууль Нэмэх</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.department.index') }}" aria-expanded="false">
                    <i class="fas fa-building" aria-hidden="true"></i>
                    <span class="hide-menu">Салбар</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.department.create') }}" aria-expanded="false">
                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                    <span class="hide-menu">Салбар Нэмэх</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.course.index') }}" aria-expanded="false">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    <span class="hide-menu">Сургалт Хөтөлбөрүүд</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.course.create') }}" aria-expanded="false">
                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                    <span class="hide-menu">Сургалт Нэмэх</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.tuition.index') }}" aria-expanded="false">
                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                    <span class="hide-menu">Төлбөр</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.tuition.create') }}" aria-expanded="false">
                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                    <span class="hide-menu">Төлбөр Нэмэх</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.scholarship.index') }}" aria-expanded="false">
                    <i class="fas fa-gift" aria-hidden="true"></i>
                    <span class="hide-menu">Тэтгэлэгүүд</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.scholarship.create') }}" aria-expanded="false">
                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                    <span class="hide-menu">Тэтгэлэг Нэмэх</span>
                </a>
            </li>
            <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('universities.index') }}" aria-expanded="false">
                    <i class="far fa-clock" aria-hidden="true"></i>
                    <span class="hide-menu">Welcome Page</span>
                </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>