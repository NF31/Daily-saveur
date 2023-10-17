      <!--=============== HEADER ===============-->
      <header class="header">
          <nav class="nav container">
              <!--=============== NAV MENU ===============-->
              <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list">
                      <!--=============== DROPDOWN 2 ===============-->
                      <li class="dropdown__item">
                          <a href="{{ route('table') }}">
                              <div class="nav__link">
                                  La Table <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                              </div>
                          </a>
                          <ul class="dropdown__menu">
                              <li>
                                  <a href="#" class="dropdown__link">
                                      LE CHEF, CHRISTOPHE PELÉ
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="dropdown__link">
                                      UNE CUISINE VIBRANTE DE MODERNITÉ
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="dropdown__link">
                                      LES MENUS
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="dropdown__link">
                                      LES VINS
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="dropdown__link">
                                      UNE ÉQUIPE PASSIONNÉE
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="dropdown__link">
                                      LE LIVRE DE CUISINE
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li><a href="{{ route('le-lieu') }}" class="nav__link">LE LIEU</a></li>
                      <li><a href="#" class="nav__link">ÉVÉNEMENTIEL</a></li>
                      <div class="nav__data">
                          <a href="{{ route('home') }}" class="nav__logo">
                              <i class="ri-planet-line"></i> Dail-Saveur
                          </a>
                          <div class="nav__toggle" id="nav-toggle">
                              <i class="ri-menu-line nav__burger"></i>
                              <i class="ri-close-line nav__close"></i>
                          </div>
                      </div>
                      <li class="right"><a href="#" class="nav__link">ACTUALITÉS</a></li>
                  </ul>
              </div>
          </nav>
      </header>
