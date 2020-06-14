<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="navbar-nav mr-auto">
        <li <?php if($current == 'home'): ?> class="nav-item active"  <?php else: ?>  class="nav-item" <?php endif; ?> >
          <a class="nav-link" href="/">Home </a>
        </li>
        <li <?php if($current == 'customers'): ?> class="nav-item active"  <?php else: ?>  class="nav-item" <?php endif; ?>>
          <a class="nav-link" href="/customers">Customers</a>
        </li>
        <li <?php if($current == 'products'): ?> class="nav-item active"  <?php else: ?>  class="nav-item" <?php endif; ?>>
          <a class="nav-link" href="/products">Products</a>
        </li>
        <li <?php if($current == 'categories'): ?> class="nav-item active"  <?php else: ?>  class="nav-item" <?php endif; ?>>
          <a class="nav-link" href="/categories">Categories</a>
        </li>
        
      </ul>     
    </div>
  </nav><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/components/navbar.blade.php ENDPATH**/ ?>