<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Burger House</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#View-burgers"
                >View Burgers</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#Add-Burgers"
                >Add Burgers</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="#Burger-Availability"
                >Update Availability</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div
      class="container-fluid text-center h-50 d-flex flex-column align-items-center justify-content-center bg-warning text-light"
    >
      <h1>Burger House</h1>
      <p>Best Burgers forever</p>
    </div>

    <div class="container py-5" id="View-burgers">
      <div class="h3">View Burgers</div>
      <div class="row">
            <?php include("./view_burger.php") ?>
      </div>
    </div>

    <div class="container py-5" id="Add-Burgers">
      <div class="h3">Add Burgers</div>
      <form action="./add_burger.php" method="POST">
        <label for="burgerNameInput" class="form-label">Burger Name</label>
        <input type="text" class="form-control" id="burgerNameInput" name="burger-name" required />
        <br />

        <label for="burgerDescInput" class="form-label"
          >Burger Desciption</label
        >
        <input type="text" class="form-control" id="burgerDescInput" name="burger-description" required />
        <br />

        <button class="btn btn-primary" type="submit">Add Burger</button>
      </form>
    </div>
    <div class="container py-5" id="Burger-Availability">
      <div class="h3">Update Availability</div>
      <form action="./update_availability.php" method="POST">
        <label for="burgerIDInput" class="form-label">Burger ID</label>
        <input type="text" class="form-control" name="burger-id" id="burgerIDInput" required />
        <br />

        <p>Availability</p>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="isAvailable"
            value=1
          />
          <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="isAvailable"
           value=0
          />
          <label class="form-check-label" for="flexRadioDefault1"> No </label>
        </div>
        <br />
        <button class="btn btn-primary" type="submit">
          Update Burger Availability
        </button>
      </form>
    </div>
  </body>
</html>
