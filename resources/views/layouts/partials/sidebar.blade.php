 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{ asset('assets/images/faces/face6.jpg')}}" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  {{ Auth()->user()->name }}
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Productos</span>
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('categories.index') }}">Categorías</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#purchases" aria-expanded="false" aria-controls="purchases">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Compras</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="purchases">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('providers.index') }}">Proveedores</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('purchases.index') }}">Compras</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false" aria-controls="sales">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Ventas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sales">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('clients.index') }}">Clientes</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('sales.index') }}">Ventas</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>