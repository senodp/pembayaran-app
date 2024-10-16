<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-header">EXAMPLES</li>
    <li class="nav-item">
    <a href="{{route('operator.beranda')}}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Dashboard
        {{--  <span class="badge badge-info right">2</span>  --}}
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{route('user.index')}}" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>
        User
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="../gallery.html" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>
        -
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="../kanban.html" class="nav-link">
        <i class="nav-icon fas fa-columns"></i>
        <p>
        -
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-envelope"></i>
        <p>
        -
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="../mailbox/mailbox.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Inbox</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../mailbox/compose.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Compose</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../mailbox/read-mail.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Read</p>
        </a>
        </li>
    </ul>
    </li>
    
    
    <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
        -
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="../search/simple.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Simple Search</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../search/enhanced.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Enhanced</p>
        </a>
        </li>
    </ul>
    </li>
    <li class="nav-header">EXIT</li>
    
    <li class="nav-item">
    <a href="{{url('logout')}}" class="nav-link">
        <i class="nav-icon fa fa-power-off"></i>
        <p>Logout</p>
    </a>
    </li>
    
    
    
</ul>
</nav>
<!-- /.sidebar-menu -->