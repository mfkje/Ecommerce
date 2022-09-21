<div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="#" class="simple-text logo-normal">
        Ecommerce-ADMIN
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('categories') ? 'active':'' }}">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">category</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-category') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('add-category') }}">
              <i class="material-icons">control_point</i>
              <p>Add Category</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('products') }}">
            <i class="material-icons">checkroom</i>
            <p>Products</p>
        </a>
        </li>
        <li class="nav-item {{ Request::is('add-product') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('add-product') }}">
            <i class="material-icons">add_circle</i>
            <p>Add Product</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('attributes') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('attributes') }}">
                <i class="material-icons">checkroom</i>
                <p>Attributes</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
          <a class="nav-link" href="{{ url('orders') }}">
            <i class="material-icons">shopping_cart</i>
            <p>Orders</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('users') }}">
              <i class="material-icons">account_circle</i>
              <p>Users</p>
            </a>
        </li>

      </ul>
    </div>
  </div>
