<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ShipA1 Admin Dashboard">
    <meta name="author" content="ShipA1">
    <title>ShipA1 Admin - Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" />
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #032000b0, #8fc44536), url(https://www.transparenttextures.com/patterns/cubes.png) !important;
        }
        .page-wrapper {
            display: flex;
            flex-direction: column;
        }
        .sidebar, .footer, .header, .content-wrapper {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
        }
        .sidebar {
            flex: 1;
            margin-right: 0;
        }
        .content-wrapper {
            flex: 5;
            overflow: auto;
        }
        .footer {
            text-align: center;
        }
        .scroll-to-top {
            background-color: #8FC445;
        }
        .scroll-to-top:hover {
            background-color: #7DBF39;
        }

        .modal-header-1{
            background-color: #062E39 !important;
            color:white;
        }

        .modal-header, .btn-primary {
            background-color: #8FC445;
            border: none;
        }
        .btn-primary:hover {
            background-color: #7DBF39;
        }
        .navbar-nav .nav-item.active .nav-link {
            border-radius: 50px;
            background-color: #8FC445;
            color: #ffffff;
        }
        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar-nav .nav-item .nav-link:hover {
            border-radius: 50px;
            background-color: #8FC445;
            color: #ffffff;
        }
        .fadeOut {
            animation: fadeOut 1s forwards;
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        /* Custom Scrollbar Styling */
        /* Webkit Browsers */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #8FC445;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #7DBF39;
        }

        /* Firefox */
        body {
            scrollbar-width: thin;
            scrollbar-color: #8FC445 #f1f1f1;
        }
    </style>
</head>
<body id="page-top">
    <div id="wrapper" class="page-wrapper">
        <div class="row m-0">
            <!-- Sidebar -->
            @include('dashboard.admin.includes.sidebar')
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="content-wrapper">
                <!-- Main Content -->
                <div class="col-12">
                    <div id="content">
                        <!-- Topbar -->
                        @include('dashboard.admin.includes.header')
                        <!-- End of Topbar -->

                        @if (session('errors'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach (session('errors')->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Begin Page Content -->
                        @yield('content')
                        <!-- /.container-fluid -->
                    </div>
                </div>
                
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <div class="row m-0">
        <div class="col-12">
            @include('dashboard.admin.includes.footer')
        </div>
    </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-1">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Area Chart Example
        var ctx = document.getElementById("myAreaChart").getContext('2d');
        var myAreaChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "Earnings",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [0, 1000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    x: {
                        time: {
                            unit: 'month'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    },
                    y: {
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '$' + value;
                            }
                        },
                        grid: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem) {
                                return '$' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        // Pie Chart Example
        var ctx = document.getElementById("myPieChart").getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Direct", "Social", "Referral"],
                datasets: [{
                    data: [55, 30, 15],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    tooltip: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        caretPadding: 10,
                        displayColors: false,
                    }
                },
                cutout: '70%'
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 250,
            });

            // Smooth scroll for sidebar links
            const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    const targetUrl = this.href;

                    document.querySelector('.content-wrapper').classList.add('fadeOut'); // Add fadeOut class
                    setTimeout(() => {
                        window.location.href = targetUrl; // Navigate to the target URL after the animation
                    }, 500); // Match the animation duration
                });
            });
        });
    </script>
</body>
</html>