<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="font-weight: normal;">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header text-center">QUICK LINKS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('/dashboard' ? "active" : "") }}"><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        @role('support' OR 'admin')
          <li class="treeview">
            <a href="#"><i class="fa fa-th-large"></i> <span>Access Control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
              <li><a href="{{ route('roles.index') }}"><i class="fa fa-user"></i><span>Roles</span></a></li>
              <li><a href="{{ route('permissions.index') }}"><i class="fa fa-unlock-alt"></i>Permissions</a></li>
            </ul>
          </li>
        @endrole
        <li class="{{ Request::is('/profile' ? "active" : "") }}"><a href="{{ url('/profile') }}"><i class="fa fa-eye"></i> <span>View profile</span></a></li>
        @role('support' OR 'admin')
          <li><a href="{{ route('categories.index') }}"><i class="fa fa-bookmark"></i> <span>Categories</span></a></li>
        @endrole
        <li class="treeview">
          <a href="#"><i class="fa fa-sticky-note"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @role('user')
              <li><a href="{{ route('posts.index') }}"><i class="fa fa-briefcase"></i>My Posts</a></li>
              <li><a href="#"><i class="fa fa-comments"></i>My Commented Posts</a></li>
              <li><a href="{{ route('posts.create') }}"><i class="fa fa-pencil"></i>New Post</a></li>
            @else
              <li><a href="{{ route('posts.index') }}"><i class="fa fa-briefcase"></i>All Posts</a></li>
            @endrole
          </ul>
        </li>
        @role('support' OR 'admin')
          <li><a href="{{ route('tags.index') }}"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
        @endrole
        <li><a href="{{ route('emails.index') }}"><i class="fa fa-envelope"></i> <span>Mailbox</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>