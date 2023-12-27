<?php
// Include the koneksi.php file
include('../backend/koneksi.php');

$sql = "SELECT COUNT(*) AS user_count FROM user";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userCount = $row['user_count'];
} else {
    $userCount = 0;
}

$agendaCountSql = "SELECT COUNT(*) AS agenda_count FROM agenda";
$agendaCountResult = $koneksi->query($agendaCountSql);

$agendaCount = 0; // Default value
if ($agendaCountResult->num_rows > 0) {
    $agendaCountRow = $agendaCountResult->fetch_assoc();
    $agendaCount = $agendaCountRow['agenda_count'];
} else {
  $agendaCount = 0;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<style>
  .min-height-300 {
    background: url('../assets/img/bg.png') center center/cover no-repeat;
  }
</style>
<body class="g-sidenav-show   bg-gray-100 ">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-gradient-primary navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php" target="_blank">
        <center><img src="../assets/img/Logo.png" class="navbar-brand-img h-100" alt="main_logo" width="110px" height="100px"></center>
        <span class="ms-1 font-weight-bold"></span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../pages/dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 text-light text-uppercase"><strong>agenda</strong></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/user.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 text-light text-uppercase"><strong>User</strong></span>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link " href="../pages/login.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-user-run text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 text-light text-uppercase"><strong>Logout</strong></span>
          </a>
        </li>
      </ul>
    </div>
 
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h2 class="font-weight-bolder text-white mb-0">Agenda</h2>
        </nav>
        <div class="d-flex">
          <ul class="navbar-nav d-lg-block d-none">
            <li class="nav-item">
              <a href="tambah_agenda.php" class="btn btn-sm mb-0 me-1 bg-gradient-warning text-dark">Tambah Agenda</a>
            </li>
          </ul>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Agenda</p>
                    <h5 class="font-weight-bolder">
                    <?php echo $agendaCount; ?>
                    </h5>
                   
                  </div>
                </div>
                <div class="col-4 text-center">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle ">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">User</p>
                        <h5 class="font-weight-bolder">
                            <?php echo $userCount; ?>
                        </h5>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-single-02 text-light text-sm opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6> Daftar Agenda </h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">No</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">Judul Rapat</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Waktu</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Pemimpin Rapat</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Tempat</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Notulensi</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Aksi</th>
                  

                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>

                <?php
                // Fetch agenda data from the database
                $agendaSql = "SELECT * FROM agenda";
                $agendaResult = $koneksi->query($agendaSql);

                if ($agendaResult->num_rows > 0) {
                  $counter = 1;

                  while ($agendaRow = $agendaResult->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='text-center text-secondary text-xxs font-weight-bold'>$counter</td>";
                    echo "<td class='text-uppercase text-secondary text-xxs ps-2 font-weight-bold'>{$agendaRow['judul_rapat']}</td>";
                    echo "<td class='text-center text-uppercase text-secondary text-xxs font-weight-bold'>{$agendaRow['tanggal']}</td>";
                    echo "<td class='text-center text-uppercase text-secondary text-xxs font-weight-bold'>{$agendaRow['waktu']}</td>";
                    echo "<td class='text-center text-uppercase text-secondary text-xxs font-weight-bold'>{$agendaRow['pimpinan_rapat']}</td>";
                    echo "<td class='text-center text-uppercase text-secondary text-xxs font-weight-bold'>{$agendaRow['tempat']}</td>";
                    echo "<td class='text-center text-uppercase text-secondary text-xxs font-weight-bold'>";
                    echo "<a href='tambah_notulensi.php?id={$agendaRow['id_rapat']}'><button class='btn btn-warning'>+</button></a>";
                    echo "</td>";
                    echo "<td class='text-center'>
                    <a href='../backend/edit_agenda.php?id=$agendaRow[id_rapat]' class='btn btn-warning btn-sm'>
                        <i class='fas fa-edit'></i> 
                    </a>
                    <a href='../backend/hapus_agenda.php?id=$agendaRow[id_rapat]' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>
                        <i class='fas fa-trash'></i> 
                    </a>
                  </td>";
                    echo "</tr>";

                    $counter++;
                  }
                } else {
                  echo "<tr><td colspan='8' class='text-center'>No agenda data available</td></tr>";
                }

                // Close the result set
                $agendaResult->close();
                ?>

              </tbody>
            </table>
          
      
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>

  
</body>

</html>