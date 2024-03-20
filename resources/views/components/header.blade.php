  {{-- <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
      <!-- Container wrapper -->
      <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand me-2" href="/">
              TicketMaster
          </a>

          <!-- Toggle button -->
          <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
              aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarButtonsExample">
              <!-- Left links -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link text-success" href="/newEvents">New Events</a>
                  </li>
              </ul>
              <!-- Left links -->

              <div class="d-flex align-items-center">
                  <a data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2" href="/accounts"
                      style="text-decoration: none">
                      Accounts
                  </a>
                  <a data-mdb-ripple-init type="button" class="btn btn-primary me-3" href="/addAccount">
                      Add Account
                  </a>
              </div>
          </div>

      </div>

  </nav> --}}

  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
      <div class="container">
          <a class="navbar-brand" href="/">
              <h3 class="h3 fw-bolder">TicketMaster</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                  <li class="nav-item p-1">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item p-1">
                      <a class="nav-link" href="/newEvents">New Events</a>
                  </li>
                  <li class="nav-item px-2 p-1">
                      <a href="/accounts" class="nav-link btn btn-primary text-white px-3 rounded-pill fw-semibold">Account</a>
                  </li>
                  <li class="nav-item p-1">
                      <a href="/addAccount" class="nav-link btn btn-danger text-white px-3 fw-semibold rounded-pill fw-semibold">Add
                          Account</a>
                  </li>
              </ul>

          </div>
      </div>
  </nav>
