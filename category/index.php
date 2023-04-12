<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Category">
  <title>Category</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="body-overlay d-none" id="bodyOverlay"></div>
<!-- ======================================================= HEADER ======================================================= -->
  <header>
    <div class="header-wrap">
      <div class="logo" id="logoWrap">
        <img src="asset/logo.png" alt="logo">
      </div>
      <div class="search-wrap">
        <form method="post" action="#" autocomplete="off" class="" id="searchWrap">
          <div class="search-group">
            <img src="asset/icons/icon-arrow-back.png" alt="back" class="arrow-back" id="searchBack">
            <input type="text" class="search-form" placeholder="cari pesanan" aria-label="cari-pesanan" aria-describedby="search">
            <button class="btn" type="submit" id="search">
              <img src="asset/icons/icon-search.png" alt="icons" class="btn-search">
            </button>
          </div>
        </form>
        <ul class="header-icon-wrap" id="headerIcon">
          <li><img src="asset/icons/icon-search.png" alt="search" class="header-icon-img" id="searchFormShow"></li>
          <li class="dropdown-icon">
            <img src="asset/icons/icon-location.png" alt="location" class="header-icon-img" id="locationShow">
            <ul class="d-none" id="locationChild">
              <li><a href="#" aria-label="lokasi-bali">Bali</a></li>
              <li><a href="#" aria-label="lokasi-jatim">Jawa Timur</a></li>
            </ul>
          </li>
          <li><img src="asset/icons/icon-filter.png" alt="filter" class="header-icon-img" id="navbar"></li>
        </ul>
      </div>
      <div class="menu-wrap">
        <ul>
          <li class="dropdown">
            <a href="#" class="dd-togle" aria-label="lokasi">Lokasi</a>
            <ul class="dropdown-menu d-none">
              <li><a href="#" aria-label="lokasi-bali">Bali</a></li>
              <li><a href="#" aria-label="lokasi-jatim">Jawa Timur</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dd-togle" aria-label="bantuan">Bantuan</a>
            <ul class="dropdown-menu d-none">
              <li><a href="#" aria-label="bantuan">Bantuan</a></li>
              <li><a href="#" aria-label="bantuan-kontak">Kontak Kami</a></li>
              <li><a href="#" aria-label="bantuan-about">bukaPO.net</a></li>
              <li><a href="#" aria-label="bantuan-daftar-vendor">Buka Toko</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dd-togle" aria-label="akun">Akun</a>
            <ul class="dropdown-menu d-none">
              <li><a href="#" aria-label="akun">Masuk</a></li>
              <li><a href="#" aria-label="akun-kontak">Daftar</a></li>
            </ul>
          </li>
          <li>
            <a href="#" aria-label="Cart" class="cart-wrap">
              <img src="asset/icons/icon-cart.svg" alt="cart" class="cart-img">
              <span class="cart-count">2</span>
            </a>
          </li>
        </ul>
      </div>
      
    </div>  
  </header>
<!-- ======================================================= HEADER END ======================================================= -->
<!-- ======================================================= HEADER BOTTOM ======================================================= -->
  <div class="bottom-header">
    <ul>
      <li>
        <a href="#" aria-label="home">
          <img src="asset/icons/icon-home.png" alt="home">
          <p>Home</p>
        </a>
      </li>
      <li>
        <a href="#" aria-label="menu" id="ShowMenu">
          <img src="asset/icons/icon-menu.png" alt="menu">
          <p>Menu</p>
        </a>
      </li>
      <li>
        <a href="#" aria-label="cart-icon">
          <img src="asset/icons/icon-cart.png" alt="cart-icon">
          <p>Cart</p>
        </a>
      </li>
      <li>
        <a href="#" aria-label="akun-icon">
          <img src="asset/icons/icon-akun.png" alt="akun-icon">
          <p>Akun</p>
        </a>
      </li>
      <li>
        <a href="#" aria-label="chat-cs">
          <img src="asset/icons/icon-chat.png" alt="chat-cs">
          <p>Chat</p>
        </a>
      </li>
    </ul>
  </div>
<!-- ======================================================= HEADER BOTTOM END ======================================================= -->
<!-- ======================================================= MENU MOBILE ======================================================= -->
  <div class="mobile-menu d-none" id="MobileMenu">
    <ul class="menu-wrapper">
      <li class="logo-wrapper">
        <a href="#">
          <img src="asset/logo.png" class="mobile-logo" alt="logo" />
          <button id="close-mobile-menu">x</button>
        </a>
      </li>
      <li class="search-wrapper">
        <form method="post" action="#" autocomplete="off">
          <div class="search-group">
            <input type="text" class="search-form input-style-menu" placeholder="cari.." aria-label="cari-pesanan" aria-describedby="search">
            <button class="btn input-style-menu" type="submit" id="mobile-search">
              <img src="asset/icons/icon-search.png" alt="icons" class="btn-search">
            </button>
          </div>
        </form>
      </li>
      <li class="menu-item">
        <a href="#">Beranda</a>
      </li>
      <li class="menu-item">
        <a href="#">Masuk</a>
      </li>
      <li class="menu-item">
        <a href="#">Daftar</a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-togle">Kategori</a>
        <ul class="menu-item-child d-none">
          <li>
            <a href="#" class="sub-menu-item menu-togle">Makanan</a>
            <ul class="sub-menu-item-wrap d-none">
              <li>
                <a href="#" class="sub-menu-item-child menu-togle">Makanan Siap Saji</a>
                <ul class="sub-menu-item-child-wrap d-none">
                  <li><a href="#" class="sub-menu-item-child">Mie</a></li>
                  <li><a href="#" class="sub-menu-item-child">Nasi</a></li>
                  <li><a href="#" class="sub-menu-item-child">Pempek</a></li>
                  <li><a href="#" class="sub-menu-item-child">Dimsum</a></li>
                  <li><a href="#" class="sub-menu-item-child">Kuah</a></li>
                  <li><a href="#" class="sub-menu-item-child">Rice Bowl</a></li>
                  <li><a href="#" class="sub-menu-item-child">Makanan Sehat</a></li>
                  <li><a href="#" class="sub-menu-item-child">Sambal</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="sub-menu-item-child menu-togle">Makanan Ringan</a>
                <ul class="sub-menu-item-child-wrap d-none">
                  <li><a href="#" class="sub-menu-item-child">Mie</a></li>
                  <li><a href="#" class="sub-menu-item-child">Nasi</a></li>
                  <li><a href="#" class="sub-menu-item-child">Pempek</a></li>
                  <li><a href="#" class="sub-menu-item-child">Dimsum</a></li>
                  <li><a href="#" class="sub-menu-item-child">Kuah</a></li>
                  <li><a href="#" class="sub-menu-item-child">Rice Bowl</a></li>
                  <li><a href="#" class="sub-menu-item-child">Makanan Sehat</a></li>
                  <li><a href="#" class="sub-menu-item-child">Sambal</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="sub-menu-item menu-togle">Minuman</a>
            <ul class="sub-menu-item-wrap d-none">
              <li><a href="#" class="sub-menu-item-child">Kopi</a></li>
              <li><a href="#" class="sub-menu-item-child">Minuman Segar</a></li>
            </ul>
          </li>
          <li><a href="#" class="sub-menu-item">Asian Food</a></li>
          <li><a href="#" class="sub-menu-item">Western Food</a></li>
          <li><a href="#" class="sub-menu-item">Japanese Food</a></li>
          <li><a href="#" class="sub-menu-item">Pulsa</a></li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#">bukaPO.net</a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-togle">Bantuan</a>
        <ul class="menu-item-child d-none">
          <li>
            <a href="#" class="sub-menu-item menu-togle">Bantuan</a>
            <ul class="sub-menu-item-wrap d-none">
              <li><a href="#" class="sub-menu-item-child">FAQ</a></li>
              <li><a href="#" class="sub-menu-item-child">Syarat dan Ketentuan</a></li>
              <li><a href="#" class="sub-menu-item-child">Kebijakan Privasi</a></li>
              <li><a href="#" class="sub-menu-item-child">Investor Relation</a></li>
              <li>
                <a href="#" class="sub-menu-item-child menu-togle">Dokumentasi</a>
                <ul class="sub-menu-item-child-wrap d-none">
                  <li><a href="#" class="sub-menu-item-child">Dokumentasi Pengguna</a></li>
                  <li><a href="#" class="sub-menu-item-child">Dokumentasi Vendor</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="sub-menu-item menu-togle">Berita</a>
            <ul class="sub-menu-item-wrap d-none">
              <li>
                <a href="#" class="sub-menu-item-child menu-togle">Berita Promo</a>
                <ul class="sub-menu-item-child-wrap d-none">
                  <li><a href="#" class="sub-menu-item-child">Po Pay</a></li>
                  <li><a href="#" class="sub-menu-item-child">Mandiri Loan Form</a></li>
                </ul>
              </li>
              <li><a href="#" class="sub-menu-item-child">Program</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-togle">Lokasi</a>
        <ul class="menu-item-child d-none">
          <li>
            <a href="#" class="sub-menu-item">Bali</a>
          </li>
          <li>
            <a href="#" class="sub-menu-item">Jawa Timur</a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#">Kontak</a>
      </li>
    </ul>
  </div>
<!-- ======================================================= MENU MOBILE END ======================================================= -->
 <main>
  <!-- ======================================================= NAVIGATION ======================================================= -->
    <nav>
      <div class="nav-wrapper" id="navWrap">
        <button id="close" class="btn-close">x</button>
        <ul class="navbar">
          <li><h5 class="section-title">Filter</h5></li>
          <li>
            <a href="#" aria-label="terbaru" class="section-category">
              <input type="checkbox" name="kategori" id="terbaru" class="checkbox-form">
              <label for="terbaru" class="checkbox-label">Terbaru</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="terpopuler" class="section-category">
              <input type="checkbox" name="kategori" id="terpopuler" class="checkbox-form">
              <label for="terpopuler" class="checkbox-label">Terpopuler</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="harga_terendah" class="section-category">
              <input type="checkbox" name="kategori" id="harga_terendah" class="checkbox-form">
              <label for="harga_terendah" class="checkbox-label">Harga Terendah</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="harga_tertinggi" class="section-category">
              <input type="checkbox" name="kategori" id="harga_tertinggi" class="checkbox-form">
              <label for="harga_tertinggi" class="checkbox-label">Harga Tertinggi</label>
            </a>
          </li>
        </ul>
        <ul class="navbar">
          <li><h5 class="section-title">Kategori</h5></li>
          <li>
            <a href="#" aria-label="kat1" class="section-category">
              <input type="checkbox" name="kategori" id="kat1" class="checkbox-form">
              <label for="kat1" class="checkbox-label">Makanan Sehat</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="kat2" class="section-category">
              <input type="checkbox" name="kategori" id="kat2" class="checkbox-form">
              <label for="kat2" class="checkbox-label">Makanan Ringan</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="kat3" class="section-category">
              <input type="checkbox" name="kategori" id="kat3" class="checkbox-form">
              <label for="kat3" class="checkbox-label">Mie</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="kat4" class="section-category">
              <input type="checkbox" name="kategori" id="kat4" class="checkbox-form">
              <label for="kat4" class="checkbox-label">Minuman</label>
            </a>
          </li>
        </ul>
        <ul class="navbar">
          <li><h5 class="section-title">Bintang</h5></li>
          <li>
            <a href="#" aria-label="bintang_5" class="section-category">
              <input type="checkbox" name="kategori" id="bintang_5" class="checkbox-form">
              <label for="bintang_5" class="checkbox-label"><span class="ratting-span">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="bintang_4" class="section-category">
              <input type="checkbox" name="kategori" id="bintang_4" class="checkbox-form">
              <label for="bintang_4" class="checkbox-label"><span class="ratting-span">&#9733;&#9733;&#9733;&#9733;</span> 4</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="bintang_3" class="section-category">
              <input type="checkbox" name="kategori" id="bintang_3" class="checkbox-form">
              <label for="bintang_3" class="checkbox-label"><span class="ratting-span">&#9733;&#9733;&#9733;</span> 3</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="bintang_2" class="section-category">
              <input type="checkbox" name="kategori" id="bintang_2" class="checkbox-form">
              <label for="bintang_2" class="checkbox-label"><span class="ratting-span">&#9733;&#9733;</span> 2</label>
            </a>
          </li>
          <li>
            <a href="#" aria-label="bintang_1" class="section-category">
              <input type="checkbox" name="kategori" id="bintang_1" class="checkbox-form">
              <label for="bintang_1" class="checkbox-label"><span class="ratting-span">&#9733;</span> 1</label>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  <!-- ======================================================= NAVIGATION END ======================================================= -->
  <!-- ======================================================= SECTION FORM ======================================================= -->
    <section class="container">
      <ul class="product-container">
        <li class="product-outer-wrap">
          <ul class="product-wrap">
            <li class="img-wrap">
              <span class="top-tag">Hot</span>
              <a href="#" aria-label="produk_1">
                <img class="default-img" src="asset/produk_1_50.jpeg" alt="image" />
              </a>
              <span class="bottom-tag">Gratis Ongkir</span>
            </li>
            <li class="body-wrap">
              <a href="#" aria-label="Produk_vendor" class="vendor-name">Nama Vendor</a>
              <p class="product-name-wrap">
                <a href="#" aria-label="Produk_vendor" class="product-name">
                  AYam betutu sambel ayam kangkung plecing cak asmo 
                </a>
              </p>
              <p class="product-ratting">
              &#9733;&#9733;&#9733;&#9733;&#9733; (5.0)
              </p>
              <p class="product-price">Rp.12.000 <span class="old-price">Rp.15.000</span></p>
            </li>
          </ul>
        </li>
        <li class="product-outer-wrap">
          <ul class="product-wrap">
            <li class="img-wrap">
              <span class="top-tag">Hot</span>
              <a href="#" aria-label="produk_1">
                <img class="default-img" src="asset/produk_1_50.jpeg" alt="image" />
              </a>
              <span class="bottom-tag">Gratis Ongkir</span>
            </li>
            <li class="body-wrap">
              <a href="#" aria-label="Produk_vendor" class="vendor-name">Nama Vendor</a>
              <p class="product-name-wrap">
                <a href="#" aria-label="Produk_vendor" class="product-name">
                  AYam betutu sambel ayam kangkung plecing cak asmo 
                </a>
              </p>
              <p class="product-ratting">
              &#9733;&#9733;&#9733;&#9733;&#9733; (5.0)
              </p>
              <p class="product-price">Rp.12.000 <span class="old-price">Rp.15.000</span></p>
            </li>
          </ul>
        </li>
        <li class="product-outer-wrap">
          <ul class="product-wrap">
            <li class="img-wrap">
              <span class="top-tag">Hot</span>
              <a href="#" aria-label="produk_1">
                <img class="default-img" src="asset/produk_1_50.jpeg" alt="image" />
              </a>
              <span class="bottom-tag">Gratis Ongkir</span>
            </li>
            <li class="body-wrap">
              <a href="#" aria-label="Produk_vendor" class="vendor-name">Nama Vendor</a>
              <p class="product-name-wrap">
                <a href="#" aria-label="Produk_vendor" class="product-name">
                  AYam betutu sambel ayam kangkung plecing cak asmo 
                </a>
              </p>
              <p class="product-ratting">
              &#9733;&#9733;&#9733;&#9733;&#9733; (5.0)
              </p>
              <p class="product-price">Rp.12.000 <span class="old-price">Rp.15.000</span></p>
            </li>
          </ul>
        </li>
        <li class="product-outer-wrap">
          <ul class="product-wrap">
            <li class="img-wrap">
              <span class="top-tag">Hot</span>
              <a href="#" aria-label="produk_1">
                <img class="default-img" src="asset/produk_1_50.jpeg" alt="image" />
              </a>
              <span class="bottom-tag">Gratis Ongkir</span>
            </li>
            <li class="body-wrap">
              <a href="#" aria-label="Produk_vendor" class="vendor-name">Nama Vendor</a>
              <p class="product-name-wrap">
                <a href="#" aria-label="Produk_vendor" class="product-name">
                  AYam betutu sambel ayam kangkung plecing cak asmo 
                </a>
              </p>
              <p class="product-ratting">
              &#9733;&#9733;&#9733;&#9733;&#9733; (5.0)
              </p>
              <p class="product-price">Rp.12.000 <span class="old-price">Rp.15.000</span></p>
            </li>
          </ul>
        </li>
        <li class="product-outer-wrap">
          <ul class="product-wrap">
            <li class="img-wrap">
              <span class="top-tag">Hot</span>
              <a href="#" aria-label="produk_1">
                <img class="default-img" src="asset/produk_1_50.jpeg" alt="image" />
              </a>
              <span class="bottom-tag">Gratis Ongkir</span>
            </li>
            <li class="body-wrap">
              <a href="#" aria-label="Produk_vendor" class="vendor-name">Nama Vendor</a>
              <p class="product-name-wrap">
                <a href="#" aria-label="Produk_vendor" class="product-name">
                  AYam betutu sambel ayam kangkung plecing cak asmo 
                </a>
              </p>
              <p class="product-ratting">
              &#9733;&#9733;&#9733;&#9733;&#9733; (5.0)
              </p>
              <p class="product-price">Rp.12.000 <span class="old-price">Rp.15.000</span></p>
            </li>
          </ul>
        </li>
      </ul>
    </section>
  <!-- ======================================================= SECTION FORM END======================================================= -->
  </main>
  <!-- ======================================================= SECTION JS ======================================================= -->
  <script src="script.js"></script>
  <!-- ======================================================= SECTION JS ======================================================= -->
</body>
</html>