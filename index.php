<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hero</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <!-- Navbar -->
  <?php include('pages/navbar.php'); ?>

  <!-- Background Section -->
  <section id="home">
    <div class="home-content">
      <h1>Welcome to Hero</h1>
      <p>Explore the best programming resources and tips.</p>
      <a href="#" class="btn-custom">Learn More</a>
    </div>
  </section>

  
  <!-- About Section -->
  <section class="about.section">
  <div class="container text-center py-5">
    <h1 class="mb-4">About Us</h1>
    <p class="mb-5">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
    </p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Our Mission">
          <div class="card-body">
            <h5 class="card-title">Our Mission</h5>
            <p class="card-text">To deliver the best solutions for our clients with integrity and innovation.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Our Vision">
          <div class="card-body">
            <h5 class="card-title">Our Vision</h5>
            <p class="card-text">To be the global leader in technology and creative services.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Our Values">
          <div class="card-body">
            <h5 class="card-title">Our Values</h5>
            <p class="card-text">Commitment to excellence, teamwork, and community responsibility.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
  <?php include('pages/footer.php'); ?>
 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
