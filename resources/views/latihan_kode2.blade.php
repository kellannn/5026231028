<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipment Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .top-logo-space {
      height: 60px;
      display: flex;
      align-items: center;
      padding-left: 10px;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }

    .equipment-title {
      font-size: 20px;
      font-weight: bold;
    }

    .search-container {
      display: flex;
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: hidden;
    }

    .search-container button {
      border: none;
      background-color: white;
      padding: 0 10px;
    }

    .search-container input {
      border: none;
      padding: 5px;
      outline: none;
    }

    .grid {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      padding: 10px;
      justify-content: center;
    }

    .item {
      border: 1px solid #ccc;
      border-radius: 10px;
      width: 110px;
      text-align: center;
      padding: 10px;
      position: relative;
    }

    .item img {
      width: 100%;
      height: auto;
    }

    .badge-custom {
      position: absolute;
      top: -10px;
      left: -10px;
      background-color: #007bff;
      color: white;
      font-size: 10px;
      padding: 2px 5px;
      border-radius: 5px;
    }

    .availability {
      color: green;
      font-size: 12px;
    }

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      border-top: 1px solid #ccc;
      padding: 10px 0;
      background-color: #f8f9fa;
    }

    .footer div {
      text-align: center;
      font-size: 12px;
      color: #007bff;
    }

    .footer img {
      width: 24px;
      height: 24px;
      display: block;
      margin: 0 auto 5px;
    }

    .book-button {
      display: flex;
      justify-content: center;
      padding: 15px;
    }
  </style>
</head>

<body>

    <div class="top-logo-space">
        <!-- Logo can be inserted here -->
        <img src="http://clipart-library.com/images/ATbrnzoAc.png" alt="Logo" height="40">
      </div>

    <div class="top-bar">
    <div class="equipment-title">Equipment</div>
    <div class="search-container">
      <button><img src="https://img.icons8.com/ios-filled/20/000000/light.png" alt="Filter"></button>
      <input type="text" placeholder="Search...">
      <button><img src="https://img.icons8.com/ios-filled/20/000000/search--v1.png" alt="Search"></button>
    </div>
  </div>

  <div class="text-center mt-2">
    All list of goods, please tap the goods for start booking
  </div>

  <div class="grid">
    <!-- Item sample -->
    <div class="item">
      <div class="badge-custom">Ready Borrowed</div>
      <img src="https://fthmb.tqn.com/YQHy25353MJs8emiex34fd01EZY=/1000x1000/filters:fill(auto,1)/FovitecStudioPRO-594018d65f9b58d58a234243.jpg" alt="Lighting Set Sony">
      <div>Lighting Set Sony</div>
      <div class="availability">Available</div>
    </div>
    <div class="item">
        <div class="badge-custom">Ready Borrowed</div>
        <img src="http://www.bhphotovideo.com/images/images2500x2500/canon_3558b002_ef_s_18_135mm_f_3_5_5_6_is_647015.jpg" alt="canon lens efs 18-135mm">
        <div>Canon Lens EFS 18-135mm</div>
        <div class="availability">Available</div>
    </div>
    <div class="item">
        <div class="badge-custom">Ready Borrowed</div>
        <img src="http://www.bhphotovideo.com/images/images2500x2500/canon_3558b002_ef_s_18_135mm_f_3_5_5_6_is_647015.jpg" alt="canon lens efs 18-135mm">
        <div>Canon Lens EFS 18-135mm</div>
        <div class="availability">Available</div>
      </div>
      <div class="item">
        <div class="badge-custom">Ready Borrowed</div>
        <img src="http://www.bhphotovideo.com/images/images2500x2500/canon_3558b002_ef_s_18_135mm_f_3_5_5_6_is_647015.jpg" alt="canon lens efs 18-135mm">
        <div>Canon Lens EFS 18-135mm</div>
        <div class="availability">Available</div>
      </div>
      <div class="item">
        <div class="badge-custom">Ready Borrowed</div>
        <img src="http://www.bhphotovideo.com/images/images2500x2500/canon_3558b002_ef_s_18_135mm_f_3_5_5_6_is_647015.jpg" alt="canon lens efs 18-135mm">
        <div>Canon Lens EFS 18-135mm</div>
        <div class="availability">Available</div>
      </div>
      <div class="item">
        <div class="badge-custom">Ready Borrowed</div>
        <img src="http://www.bhphotovideo.com/images/images2500x2500/canon_3558b002_ef_s_18_135mm_f_3_5_5_6_is_647015.jpg" alt="canon lens efs 18-135mm">
        <div>Canon Lens EFS 18-135mm</div>
        <div class="availability">Available</div>
      </div>

    <!-- You should update image src and text accordingly -->
  </div>

  <div class="book-button">
    <button class="btn btn-dark">Book Now!</button>
  </div>

 <div class="footer">
    <div>
      <img src="https://img.icons8.com/ios/50/000000/user--v1.png" alt="Profile">
      <div>Profile</div>
    </div>
    <div>
      <img src="https://img.icons8.com/ios/50/000000/menu--v1.png" alt="Menu">
      <div>Menu</div>
    </div>
    <div>
      <img src="https://img.icons8.com/ios/50/000000/time-machine.png" alt="Riwayat">
      <div>Riwayat</div>
    </div>
    <div>
      <img src="https://img.icons8.com/ios-filled/50/007bff/shopping-basket-2.png" alt="Equipment">
      <div><strong>Equipment</strong></div>
    </div>
  </div>
</body>

</html>
