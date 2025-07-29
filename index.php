<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WEB_CAREER</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

  <!-- HEADER / NAVBAR -->
  <header class="bg-white shadow-sm">
  <div class="navbar container">
    <div class="logo-nav">
      <img src="image/career.png" class="nav_career" alt="Logo" />
    </div>
    <ul class="nav_item">
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Program</a></li>
      <li><a href="#">CoWorking</a></li>
      <li><a href="#">Alumni</a></li>
      <li><a href="#">Tracer Study</a></li>
    </ul>
  </div>
</header>



  <!-- CAROUSEL -->
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/ramean.JPG" class="d-block w-100" alt="Slide 1" />
      </div>
      <div class="carousel-item">
        <img src="image/img_2.jpg" class="d-block w-100" alt="Slide 2" />
      </div>
      <div class="carousel-item">
        <img src="image/img_3.jpg" class="d-block w-100" alt="Slide 3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- EVENT SECTION -->
  <section class="event-section">
    <h2 class="event-title">Event Calendar</h2>
    <div class="event-container">
      <div class="event-card">
        <img src="image/img_2.jpg" alt="Event 1" />
        <div class="event-info">
          <div class="event-date">25 Juli 2025</div>
          <div class="event-name">Workshop Kewirausahaan</div>
        </div>
      </div>
      <div class="event-card">
        <img src="image/img_3.jpg" alt="Event 2" />
        <div class="event-info">
          <div class="event-date">1 Agustus 2025</div>
          <div class="event-name">Pelatihan Karier</div>
        </div>
      </div>
    </div>
    <button class="more-event-btn">More Event</button>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
