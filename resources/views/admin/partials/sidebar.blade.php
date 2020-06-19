<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar">
</div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <img class="app-sidebar__user-avatar"src="{{asset('assets/backEnd/images/Nayeem-Khan-President .png')}}" alt="admin-image">
    <div>
      <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
      <p class="app-sidebar__user-designation">{{ auth()->user()->email }}</p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item {{ Request::is('admin/dashboard') ? "active" : ""}}"  href="{{route('dashboard')}}">
        <i class="app-menu__icon fas fa-tachometer-alt"></i><span class="app-menu__label">Dashboard</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="{{route('service')}}">
        <i class="app-menu__icon far fa-sun"></i><span class="app-menu__label">Services</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="{{route('contact.admin')}}">
        <i class="app-menu__icon fas fa-id-badge"></i><span class="app-menu__label">Contact</span>
      </a>
    </li>

    <li>
      <a class="app-menu__item {{ Request::is('admin/quote') ? "active" : ""}}"  href="{{route('quote')}}">
        <i class="app-menu__icon fas fa-id-badge"></i><span class="app-menu__label">Quote</span>
      </a>
    </li>


    <li>
      <a class="app-menu__item" href="charts.html"><i class="app-menu__icon  fas fa-chart-pie"></i><span class="app-menu__label">Charts</span></a>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="form-components.html">
            <i class="icon fa fa-circle-o"></i> Form Components</a>
        </li>
        <li>
          <a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components
          </a>
        </li>
        <li>
          <a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples
          </a>
        </li>
        <li>
          <a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form
              Notifications
          </a>
        </li>
      </ul>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span   class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a>
        </li>
        <li>
          <a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data
          Tables</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="app-menu__item" href="docs.html"><i class="app-menu__icon far fa-file-alt"></i><span
      class="app-menu__label">Docs</span></a>
    </li>
  </ul>
</aside>