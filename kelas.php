<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelas Smandagiri</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">SMANDAGIRI</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group"></div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                Home
              </a>

              <a class="nav-link" href="TahunAjar.php">
                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                Tahun Ajar
              </a>

              <a class="nav-link active" href="kelas.php">
                <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                Kelas
              </a>

              <a class="nav-link" href="mapel.php">
                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                Mata Pelajaran
              </a>

              <a class="nav-link" href="siswa.php">
                <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                Siswa
              </a>

              <a class="nav-link" href="nilai.php">
                <div class="sb-nav-link-icon"><i class="fas fa-medal"></i></div>
                Nilai
              </a>

              <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="login.html">Login</a>
                      <a class="nav-link" href="register.html">Register</a>
                      <a class="nav-link" href="password.html">Forgot Password</a>
                    </nav>
                  </div>
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                    Error
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">401 Page</a>
                      <a class="nav-link" href="404.html">404 Page</a>
                      <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                  </div>
                </nav>
              </div>
            </div>
          </div>

          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Azqiadistya
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Kelas</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Data Kelas Smandagiri</li>
              <br />
            </ol>
            <div class="row">
              <div class="col-xl-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="inputKelas.php">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Peminatan</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="ex:MIPA" name="peminatan" />
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Kelas</label>
                            <textarea class="form-control" id="message-text" placeholder="ex:XI A" name="kelas"></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <table class="table">
                <thead>
                  <tr>
                  <th scope="col">Kode Kelas</th>
                    <th scope="col">Peminatan</th>
                    <th scope="col">Kelas</th>
                  </tr>
                </thead>

                <?php
                    include "koneksi.php";
                    $SQL = mysqli_query($konek, "SELECT * FROM kelas");

                    $ALGORITHM = "AES-128-CBC";
                    $password = "passwordku";
                    $IV = "1906ghkfny56vf23";
                    
                    while($data=mysqli_fetch_array($SQL)) {
                  
                    $newId = $data['idKelas'];
                    $newPeminatan = $data['peminatan'];
                    $newKelas= $data['kelas'];

                    $peminatanDecrypt = openssl_decrypt($newPeminatan, $ALGORITHM, $password, 0, $IV);
                    $kelasDecrypt = openssl_decrypt($newKelas, $ALGORITHM, $password, 0, $IV);
                ?>
    
                <tr>
                    <td><?php echo $newId;?></td>
                    <td><?php echo $peminatanDecrypt ;?></td>
                    <td><?php echo $kelasDecrypt;?></td>

                <?php }
                ?>
                </tr>
                
              </table>
            </div>

            <div class="card mb-4">
              <div class="card-header"></div>
              <div class="card-body"></div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Azqiadistya 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
