<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="navbar-nav mr-auto">
        <li @if ($current == 'home') class="nav-item active"  @else  class="nav-item" @endif >
          <a class="nav-link" href="/">Home </a>
        </li>
        <li @if ($current == 'customer') class="nav-item active"  @else  class="nav-item" @endif>
          <a class="nav-link" href="/customer">Customers</a>
        </li>
        <li @if ($current == 'products') class="nav-item active"  @else  class="nav-item" @endif>
          <a class="nav-link" href="/products">Products</a>
        </li>
        <li @if ($current == 'categories') class="nav-item active"  @else  class="nav-item" @endif>
          <a class="nav-link" href="/categories">Categories</a>
        </li>
        
      </ul>     
    </div>
  </nav>