<div class="sidebar-wrapper">
  <div>
    <div class="logo-wrapper">
      <a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title {{ Route::currentRouteName()=='dashboard' ? 'active' : '' }}" href="{{route('dashboard')}}"><i data-feather="home"></i><span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="users"></i><span>Users</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="message-circle"></i><span>Chat</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="paperclip"></i><span>Report</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="clock"></i><span>Timeline</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="check-square"></i><span>Tasks</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="at-sign"></i><span>Seller</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title {{ Route::currentRouteName()=='ecommerce-graph-report' ? 'active' : '' }}" href="{{route('ecommerce-graph-report')}}"><i data-feather="shopping-bag"></i><span>Ecommerce</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="mail"></i><span>Email</span>
              </a>
          </li>
          <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><label class="badge badge-secondary">off</label><i data-feather="info"></i><span>About</span>
              </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='faq' ? 'active' : '' }}" href="{{route('faq')}}"><label class="badge badge-secondary">off</label><i data-feather="help-circle"> </i><span>FAQ</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>