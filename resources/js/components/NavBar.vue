<template>
<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1"></div>
        <div class="col-4">
          <a class="blog-header-logo text-dark" href="#">
            <img class="logo" id="img-logo" src="http://localhost:8888/public/images/logo.svg">
          </a>
        </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="icon" id="icon_search" href="#"><img src="http://localhost:8888/public/images/recherche.svg" /></a>
                    <a class="icon" id="icon_account" href="#"><img src="http://localhost:8888/public/images/compte.svg" /></a>
                    <a class="icon" id="icon_cart" href="#"><img src="http://localhost:8888/public/images/panier.svg" /></a>
                </div>
      </div>
    </header>
  </div>

  <div>
    <img class="img-fluid" id="home-img" src="http://localhost:8888/public/images/home.jpg">
  </div>

  <div class="container">
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted menu" id="products-link" href="#">PRODUITS</a>
        <p class="p-2 text-muted">|</p>
        <a class="p-2 text-muted menu" id="primeurs-link" href="#">PRIMEURS</a>
        <p class="p-2 text-muted">|</p>
        <a class="p-2 text-muted menu" id="news-link" href="#">NOUVEAUTÉS</a>
        <p class="p-2 text-muted">|</p>
        <a class="p-2 text-muted menu" id="promo-link" href="#">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</body>
</template>
