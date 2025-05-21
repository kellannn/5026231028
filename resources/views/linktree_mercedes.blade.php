<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mercedes-AMG F1 Linktree Clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #000;
      color: white;
      font-family: 'Inter', sans-serif;
      padding: 0;
      margin: 0;
    }
  
    .container-box {
      max-width: 580px;
      margin: 0 auto;
      text-align: center;
    }
  
    .top-icons {
    position: relative;
    width: 100%;
    height: 70px;
    margin-bottom: -40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    box-sizing: border-box;
  }
  .top-icons img {
    position: absolute;
    width: 32px;
    height: 32px;
    background-color: #0a0a0a;
    border-radius: 50%;
    padding: 8px;
    object-fit: contain;
  }

  
    .logo-img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px auto;
    }
  
    .team-name {
      text-align: center;
      font-size: 20px;
      font-weight: 700;
      width: 580px;
    }
  
    .verified-badge {
      width: 20px;
      vertical-align: text-top;
      margin-left: 5px;
    }
  
    .bio-text {
      text-align: center;
      color: #ffffff;
      font-size: 17px;
      margin-bottom: 30px;
      width: 580px;
    }
  
    .feature-card-link {
      text-decoration: none;
    }
  
    .feature-card {
      margin-left: auto;
      margin-right: auto;
      width: 580px;
      height: 326.25px;
      border-radius: 6px;
      overflow: hidden;
      margin-bottom: 20px;
      position: relative;
      text-align: left;
      transition: opacity 0.3s ease;
    }
  
    .feature-card:hover {
      cursor: pointer;
      opacity: 0.9;
    }
  
    .feature-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 4px;
    }
  
    .feature-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      padding: 15px;
      color: white;
      background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0));
      width: 100%;
      font-weight: 600;
      font-size: 1rem;
      font-family: 'Montserrat', sans-serif;
    }
  
    .store-section {
      background-color: #fff;
      color: #000;
      border-radius: 20px;
      padding: 30px 20px;
      margin-bottom: 30px;
      text-align: center;
      width: 580px;
      overflow: hidden;
    }
  
    .product-carousel-wrapper {
      position: relative;
      width: 100%;
      margin: auto;
    }
  
    .product-carousel-container {
      overflow: hidden;
      width: 100%;
    }
  
    .product-carousel {
      display: flex;
      transition: transform 0.4s ease-in-out;
      margin: 0 auto;
      width: 540px;
      align-items: stretch;
    }
  
    .product-card {
  flex: 0 0 160px;
  text-align: center;
  margin: 0 10px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;             
  height: 300px;     
}
  
    .product-card img {
      width: 160px;
      height: 160px;
      object-fit: contain;
      margin-bottom: 10px;
      border-radius: 6px;
    }
  
    
    .product-title {
      font-size: 11px;
      font-weight: 600;

    }
  
    .product-price {
      font-size: 0.85rem;
      color: #444;
      margin-bottom: 6px;
    }
  
    .btn-buy {
      font-size: 0.8rem;
      border-radius: 5px;
      padding: 6px 14px;
      background: transparent;
      border: 1px solid black;
      font-weight: 600;
      width: 160px;
      align-self: center;
      margin-top: 20px;
    }
  
    .shop-all-btn {
      background-color: #000;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 12px;
      font-weight: 600;
      margin-top: 20px;
      display: inline-block;
      width: 528px;
    }
  
    .powered-by {
      font-size: 0.75rem;
      color: #777;
      margin-top: 10px;
      width: 100%;
      text-align: center;
    }
  
    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: black;
      color: white;
      border: none;
      font-size: 24px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
  
    .carousel-btn.left {
      left: 0;
    }
  
    .carousel-btn.right {
      right: 0;
    }
  
    .carousel-btn:focus {
      outline: none;
      box-shadow: none;
    }


    .link-box {
    background-color: white;
    color: black;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px 20px;
    border-radius: 6px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    transition: background-color 0.3s, color 0.3s;
    border: none;
    width: 580px;
    position: relative;
    box-sizing: border-box;
    border: 2px solid white;
  }

  .link-box span {
    z-index: 1;
  }

  .link-box:hover {
    background-color: black;
    color: white;
    text-decoration: none;
    
  }

  .link-box img {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    filter: invert(0);
    transition: filter 0.3s ease;
  }

  .link-box:hover img {
    filter: invert(1);
  }

  .socials {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 20px 0 60px;
  }

  .socials a {
    display: inline-block;
    filter: brightness(0) invert(1);
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  .socials a:hover {
    transform: scale(1.2);
    filter: brightness(1) invert(1);
  }
  </style>

  

  <script>
    let scrollPosition = 0;
    function scrollCarousel(direction) {
      const carousel = document.getElementById('productCarousel');
      const itemWidth = 200; // width + margin
      const container = document.querySelector('.product-carousel-container');
      const maxScroll = carousel.scrollWidth - container.offsetWidth;
      scrollPosition += direction * itemWidth;
      if (scrollPosition < 0) scrollPosition = 0;
      if (scrollPosition > maxScroll) scrollPosition = maxScroll;
      carousel.style.transform = `translateX(-${scrollPosition}px)`;
    }
  </script>
  
</head>
<body>

  <!-- Top icons -->
  <div class="top-icons">
    <img src="image.png" alt="Bell Icon">
    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Twitter_Verified_Badge.svg" class="top-right" alt="More Icon">
  </div>

  <!-- Main container -->
  <div class="container-box">
    <img src="https://ugc.production.linktr.ee/4731ab35-357d-4753-8ffa-9807e27a47c7_team-logo.jpeg?io=true&size=thumbnail-stack-v1_0" alt="Mercedes Logo" class="logo-img">
    <h2 class="team-name">
      Mercedes-AMG PETRONAS F1 Team
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Twitter_Verified_Badge.svg" class="verified-badge" alt="Verified">
    </h2>
    <p class="bio-text">Home of the 8x Formula 1 World Champions 🏆</p>

    <!-- Featured Cards -->
    <a href="https://www.mercedesamgf1.com/news/aiming-for-another-podium-totos-saudi-arabian-gp-previe" target="_blank" class="feature-card-link">
      <div class="feature-card">
        <img src="https://ugc.production.linktr.ee/0d90b691-cf87-43d6-a059-e95de63d7c07_TW-Preview-IMAGE-1.jpeg?io=true&size=thumbnail-feature-v1_0" alt="Toto Interview" class="feature-img">
        <div class="feature-caption">TOTO'S SAUDI ARABIAN GP PREVIEW</div>
      </div>
    </a>

    <a href="https://www.mercedesamgf1.com/news/how-does-a-racing-driver-learn-a-new-track" target="_blank" class="feature-card-link">
      <div class="feature-card">
        <img src="https://ugc.production.linktr.ee/bd609f31-c5af-44e6-827c-619f9bbb8d13_Fred-Chat-IMAGE-1.jpeg?io=true&size=thumbnail-feature-v1_0" alt="Driver Learning" class="feature-img">
        <div class="feature-caption">HOW A RACING DRIVER LEARNS A NEW TRACK</div>
      </div>
    </a>

 <!-- Store Section -->
<div class="container-box" style="max-width: 580px; font-family: 'Montserrat', sans-serif;">
    <div class="store-section">
      <h4>TEAM STORE</h4>
      <p>The latest fanwear including driver caps, t-shirts, jackets and accessories.</p>
  
      <div class="product-carousel-wrapper">
        <button class="carousel-btn left" onclick="scrollCarousel(-1)">&#10094;</button>
        <div class="product-carousel-container">
          <div class="product-carousel" id="productCarousel">
            <div class="product-card">
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/JV5379_2_APPAREL_OnModel_StandardView_grey150125.jpg?v=1738081199" alt="Joggers">
              <div class="product-title">Mens DNA Joggers Black</div>
              <div class="product-price">£50</div>
              <a href="https://shop.mercedesamgf1.com/products/mens-dna-joggers-black" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
            <div class="product-card">
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/JX6466_1_HARDWARE_Photography_FrontCenterView_grey150125.jpg?v=1738080720" alt="Backpack">
              <div class="product-title">Hybrid Backpack Black</div>
              <div class="product-price">£80</div>
              <a href="https://shop.mercedesamgf1.com/products/mens-dna-t-shirt-black" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
            <div class="product-card">
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/MAPF1_FW_WATERBOTTLE_BLACK_FRONT.jpg?v=1708529719" alt="Water Bottle">
              <div class="product-title">Water Bottle Black</div>
              <div class="product-price">£28</div>
              <a href="https://shop-int.mercedesamgf1.com/products/fw-2024-water-bottle-black" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
            <div class="product-card">
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/FlatLay_4.jpg?v=1741078476" alt="Mous Backpack">
              <div class="product-title">Mous x Mercedes-AMG F1 Team Backpack</div>
              <div class="product-price">£229.99</div>
              <a href="https://shop.mercedesamgf1.com/products/mous-x-mercedes-amg-f1-team-backpack" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
            <div class="product-card">
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/JV5457_2_APPAREL_OnModel_StandardView_grey280125280125.jpg?v=1738081323" alt="T-Shirt White">
              <div class="product-title">Mens DNA T-Shirt White</div>
              <div class="product-price">£38</div>
              <a href="https://shop.mercedesamgf1.com/products/mens-dna-t-shirt-white" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
            <div class="product-card">  
              <img src="https://cdn.shopify.com/s/files/1/0563/8314/3997/files/JV5425_2_APPAREL_OnModel_StandardView_grey130225130225.jpg?v=1739461804" alt="T-Shirt Black">
              <div class="product-title">Mens DNA T-Shirt Black</div>
              <div class="product-price">£38</div>
              <a href="https://shop.mercedesamgf1.com/products/mens-dna-t-shirt-black" target="_blank" class="btn btn-buy">Buy now</a>
            </div>
          </div>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel(1)">&#10095;</button>
      </div>
  
      <a href="https://shop.mercedesamgf1.com/?utm_source=linktree&utm_medium=social" class="shop-all-btn">Shop The Entire Collection ↗</a>
      <div class="powered-by">Powered by Shopify</div>
    </div>
  </div>

    <!-- Links Section -->
    <div class="mt-4">
      <a href="https://auth.mercedesamgf1.com/u/signup?state=hKFo2SBDWEVDYU9oeVAwc3ZBZkI2LTUwbGF0dXh2bzFFOHF1NKFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIFloUGQ0UmQwVlZDU1lqZW1ROU8zMXJxTWl0TjYyZzFPo2NpZNkgaVhjWXlkM0FucmdnRG82SEdOTUdwU2o0OUZ3NW9xaXI" class="link-box mb-3">SIGN UP TO OUR MERCEDES FAN AREA NOW!</a>
      <a href="https://www.whatsapp.com/channel/0029Va7Hjp3BfxoCxnAj4Q3o" class="link-box mb-3"><img src="https://img.icons8.com/ios-filled/25/000000/whatsapp.png" style="margin-right: 12px;"> TEAM WHATSAPP CHANNEL</a>
      <a href="https://www.mercedesamgf1.com/official-driver-cards" class="link-box mb-3">OFFICIAL DRIVER CARDS</a>
      <a href="https://www.mercedesamgf1.com/fans/wallpapers" class="link-box mb-3">WALLPAPERS 📱</a>
      <a href="https://www.mercedesamgf1.com/" class="link-box mb-3"><img src="https://ugc.production.linktr.ee/4731ab35-357d-4753-8ffa-9807e27a47c7_team-logo.jpeg?io=true&size=thumbnail-stack-v1_0" width="45" height="45" border-radius="6px" style="margin-right: 10px;"> MERCEDESAMGF1.COM 🖥️</a>
      <a href="https://shop.mercedesamgf1.com/pages/newsletter-sign-up" class="link-box mb-3"><img src="communication.png" width="25" height="25" border-radius="6px" style="margin-right: 10px;"> UP TO OUR STORE NEWSLETTER</a>
      <a href="https://www.mercedesamgf1.com/community-guidelines-and-reporting" class="link-box mb-3"><img src="alert.png" width="25" height="25" border-radius="6px" style="margin-right: 10px;"> COMMUNITY GUIDELINES & REPORTING</a>
    </div>
  </div>

  <!-- Social Media Icons -->
<div class="socials">
    <a href="https://www.instagram.com/MERCEDESAMGF1"><img src="https://img.icons8.com/ios/50/instagram-new--v1.png" width="30"/></a>
    <a href="https://www.tiktok.com/@mercedesamgf1"><img src="https://img.icons8.com/ios/50/tiktok--v1.png" width="30"/></a>
    <a href="https://www.youtube.com/c/MercedesAMGF1"><img src="https://img.icons8.com/ios/50/youtube-play--v1.png" width="30"/></a>
    <a href="https://x.com/mercedesamgf1"><img src="https://img.icons8.com/ios/50/twitterx--v1.png" width="30"/></a>
    <a href="https://www.linkedin.com/company/mercedes-amg-petronas-formula-one-team/"><img src="https://img.icons8.com/ios/50/linkedin--v1.png" width="30"/></a>
    <a href="https://www.facebook.com/MercedesAMGF1/"><img src="https://img.icons8.com/ios/50/facebook-new.png" width="30"/></a>
    <a href="https://www.threads.net/@mercedesamgf1"><img src="https://img.icons8.com/ios/50/threads.png" width="30"/></a>
  </div>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
