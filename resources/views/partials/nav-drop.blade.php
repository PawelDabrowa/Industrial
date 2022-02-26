@if (has_nav_menu('primary_navigation'))
<div class="wrapper-nav">
  <div class="container">
    <div id="custom-nav">
      <div class="menu-container"> 
        <div class="navbar-brand">
          <a class="brand navbar-item" href="{{ home_url('/') }}">
            @if(get_field('logo', 'option')){!! wp_get_attachment_image(get_field('logo', 'option'),'full') !!} @else <img src="@asset('images/svg/logo.svg')"/> @endif
          </a>
          <button role="button"  aria-controls="nav-primary" aria-label="menu" class="menu-button hamburger--spin hamburgery">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>  
        <div class="left-nav">
        <div id="site-header-menu" class="site-header-menu">
          <nav id="site-navigation" class="main-navigation parked" role="navigation" aria-label="{{ esc_attr_e('Primary Menu', 'sage') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
          </nav>
        </div>
        <img src="@asset('images/svg/light-mode-switcher.svg')"/>
        </div>
      </div>
    </div>
  </div>
</div>
 @endif
