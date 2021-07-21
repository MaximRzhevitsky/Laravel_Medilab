<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="{{'/admin'}}">
        <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
      </a>
    </li>
    <li><a href="{{'admin/doctors'}}"><i class="fa fa-sticky-note-o"></i> <span>Врачи</span></a></li>
    <li><a href="{{'departments'}}"><i class="fa fa-list-ul"></i> <span>Отделения</span></a></li>
    <li>
      <a href="/admin/comments">
        <i class="fa fa-commenting"></i> <span>Записи ко врачам</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">{{'2'}}</small>
        </span>
      </a>
    </li>
    <li><a href="{{'route(users.index)'}}"><i class="fa fa-users"></i> <span>Пациенты</span></a></li>

</ul>
    </section>
    <!-- /.sidebar -->
</aside>
