<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form-open_world</title>
    <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="buttonSubmit.css">
    <style>
      .container {
        margin-top: 20px;
      }
      body {
        background-color: yellow;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>
  <html>
    <
      <!-- navbar  -->
      <nav class="navbar fixed-top p-0">
        <div class="container-fluid second">
          <a class="navbar-brand" href="#"
            ><img
              src="https://img.icons8.com/?size=100&id=Oma9tSIHTMlv&format=png&color=000000"
              alt="..."
              height="50px "
            /><span class="text-first-head">Open_world</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a href="form.html">Login/SignUp</a>
              </h5>

              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body second">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="trips.html"
                    ><img
                      src="https://img.icons8.com/?size=100&id=26075&format=png&color=000000"
                      alt="..."
                      height="30px "
                    />
                    Trip Plan</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="weather.html"
                    ><img
                      src="https://img.icons8.com/?size=100&id=59759&format=png&color=000000"
                      alt="..."
                      height="30px "
                    />
                    Weather</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="weather.html"
                    ><img
                      src="https://img.icons8.com/?size=100&id=8771&format=png&color=000000"
                      alt="..."
                      height="30px "
                    />
                    Flight</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="weather.html"
                    ><img
                      src="https://img.icons8.com/?size=100&id=60605&format=png&color=000000"
                      alt="..."
                      height="30px "
                    />
                    Hotels</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="weather.html"
                    ><img
                      src="https://img.icons8.com/?size=100&id=26075&format=png&color=000000"
                      alt="..."
                      height="30px "
                    />
                    ChatBot</a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="Account.html"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://img.icons8.com/?size=100&id=11781&format=png&color=000000"
                      height="30px"
                      alt="..."
                    />
                    Account
                  </a>
                  <ul class="dropdown-menu first">
                    <li>
                      <a class="dropdown-item" href="profile.html"
                        ><img
                          src="https://img.icons8.com/?size=100&id=25618&format=png&color=000000"
                          height="30px"
                          alt=""
                        />
                        Profile</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href=""
                        ><img
                          src="https://img.icons8.com/?size=100&id=12621&format=png&color=000000"
                          height="30px"
                          alt=""
                        />
                        Blogs</a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"
                        ><img
                          src="https://img.icons8.com/?size=100&id=7781&format=png&color=000000"
                          height="30px"
                          alt=""
                        />
                        FAQ</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <!-- main -->
      <div class="container">
        <div class="py-5 text-center">
          <h2>Contact form</h2>
          <p class="lead">
            Complete and Submit the form to Contact our Team and also gives a
            feedback to add some additional services . After Submitting form
            Successfully Request Call from Open_World receive you .
          </p>
        </div>
        
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Our Features</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Flight</h6>
                  <!-- <small class="text-body-secondary">Brief description</small> -->
                </div>
                <span class="text-body-secondary">$12/Person</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Hotles</h6>
                  <!-- <small class="text-body-secondary">Brief description</small> -->
                </div>
                <span class="text-body-secondary">$8/person</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Trip Packages</h6>
                  <!-- <small class="text-body-secondary">Brief description</small> -->
                </div>
                <span class="text-body-secondary">$5/person</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between bg-body-tertiary"
              >
                <div class="text-success">
                  <h6 class="my-0">Additional</h6>
                  <small>Price</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form enctype="text/plain" class="card p-2">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Subscribe"
                />

                <button type="submit" class="btn btn-secondary">Now</button>
              </div>
            </form>
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Contact Us</h4>
  <form class="needs-validation" novalidate="" action="test.php" method ="post">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstname" class="form-label" >First name </label>
                  <input
                    type="text"
                    class="form-control"
                    name="firstname"
                    id="firstname"
                    placeholder=""
                    value=""
                    required=""
                    required
                  />
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastname" class="form-label">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="lastname"
                    id="lastname"
                    placeholder=""
                    value=""
                    required=""
                    required
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input
                      type="text"
                      class="form-control"
                      name="username"
                      id="username"
                      placeholder="Username"
                      required=""
                      required
                    />
                    <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label"
                    >Email <span class="text-body-secondary"></span
                  ></label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="you@example.com"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    name="address"
                    id="address"
                    placeholder="1234 Main St"
                    required=""
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="services" class="form-label"
                    >Services
                    <span class="text-body-secondary">/person</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="services"
                    id="services"
                    placeholder="eg. Flight,Hotels"
                  />
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select
                    class="form-select"
                    name="country"
                    id="country"
                    required=""
                  >
                    <option value="">Choose...</option>
                    <option value="United States">United States</option>
                    <option value="india">india</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Sri lanka">Sri lanka</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Nepal">Nepal</option>
                    <option value="China">China</option>
                    <option value="Myanmar">Myanmar</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" name="state" id="state" required>
                    <optgroup >Choose...<optgroup>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Panjab">Panjab</option>
                    <option value="Madhya pradesh">Madhya pradesh</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Other">Other</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input
                    type="text"
                    class="form-control"
                    name="zip"
                    id="zip"
                    placeholder="eg. 271201"
                    required
                  />
                  <div class="invalid-feedback">Zip code required.</div>
                </div>
              </div>

              <hr class="my-4" />

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="same-address"
                  onclick="checkButton()"
                />
                <label class="form-check-label" for="same-address"
                  >Accept our <a href="">Terms and Conditions</a></label
                >
              </div>

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="same-address"
                />
                <label class="form-check-label" for="save-info"
                  >I confirm that all information supplied above is correct and
                  accurate
                </label>
              </div>
              <hr class="my-4" />

              <button
                class="w-100 btn btn-warning btn-lg"
                type="submit"
                id="submit" disabled
              >
                Contact Me
              </button>
            </form>
          </div>
        </div>
      </div>

 <!-- check then active button      -->
<script src="buttonSubmit.js"></script> 
    </body>
  </html>
</html>