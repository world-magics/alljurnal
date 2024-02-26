 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <i class="bi bi-grid"></i>
          <span>Asosiy sahifa</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Katalog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.attribute-group.index') }}">
              <i class="bi bi-circle"></i><span>Jadvalning ustun guruhlari</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.attribute.index') }}">
              <i class="bi bi-circle"></i><span>Jadvalning ustunlari</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.category.index') }}">
              <i class="bi bi-circle"></i><span>Jadvalning ustun turlari</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('admin.users.create') }}">
          <i class="bi bi-menu-button-wide"></i><span>Foydalanuvchi qo'shish</span>
        </a>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('admin.journals.index')}}">
          <i class="bx bx-paperclip"></i><span>Jurnallar</span>
        </a>
      </li>
    </ul>
</aside><!-- End Sidebar-->