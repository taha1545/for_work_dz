<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catégories</title>
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/categories.css" />
  </head>
  <body>
    <div class="wrapper">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search...."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('design')">design</button>
        <button class="button-value" onclick="filterProduct('Digital Marketing')">Digital Marketing</button>
        <button class="button-value" onclick="filterProduct('Front end')">Front end</button>
        <button class="button-value" onclick="filterProduct('Back end')">Back end</button>
      </div>
      <div id="products"></div>
    </div>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="categories.js"></script>
  </body>
</html>