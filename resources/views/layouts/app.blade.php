<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('sb-admin-2/css/bootstrap.min.css') }}">
    <!-- Load SB Admin 2 CSS -->
    <link rel="stylesheet" href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}">
    <!-- Load Icon -->
    <link rel="stylesheet" href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
    
</head>

<body id="page-top">

    <div id="wrapper">

     <!-- Load Sidebar -->
     @include('layouts.sidebar')

        <!-- Load Content -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Load Navbar -->
                @include('layouts.navbar')
                @yield('content')
            </div>

            <!-- Load Footer -->
            @include('layouts.footer')
        </div>

    </div>

    <!-- Load jQuery -->
    <script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Load Bootstrap JS -->
    <script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Load SB Admin 2 JS -->
    <script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" ></script>
    <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        var labels = {!! isset($labels) ? json_encode($labels) : '[]' !!};
        var values = {!! isset($values) ? json_encode($values) : '[]' !!};
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            // labels: labels,
            datasets: [{
            data: values,
            backgroundColor: ['#42ba96', '#df4759', '#36b9cc'],
            hoverBackgroundColor: ['#42ba96', '#df4759', '#2c9faf'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
    <script>
        function confirmPraPemrosesan() {
            Swal.fire({
                title: 'Peringatan Proses Data ',
                text: "1. Melakukan pemrosesan data akan memakan waktu yang cukup lama.(Waktu yang dibutuhkan cukup bervariatif bergantung dengan spesifikasi device dan jumlah data)\n. 2. Sewaktu pemrosesan berlangsung aktivitas seperti me-refresh halaman, menutup tab, menutup browser, dan sebagainya dapat menyebabkan gagalnya pra pemrosesan data\n. 3. Untuk optimalisasi silahkan tunggu hingga proses loading selesai. *Jika anda mengerti dengan peringatan diatas maka silahkan klik tombol lanjutkan dibawah",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Lanjutkan'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('/pra-pemrosesan-proses') }}";
            }
            })
        }
    </script>

    <script>
        function confirmPenyesuaian() {
            Swal.fire({
                title: 'Peringatan Penyesuaian Data',
                text: "1. Melakukan penyesuaian data akan memakan waktu yang cukup lama.(Waktu yang dibutuhkan cukup bervariatif bergantung dengan spesifikasi device dan jumlah data)\n. 2. Sewaktu pemrosesan berlangsung aktivitas seperti me-refresh halaman, menutup tab, menutup browser, dan sebagainya dapat menyebabkan gagalnya pra pemrosesan data\n. 3. Untuk optimalisasi silahkan tunggu hingga proses loading selesai. *Jika anda mengerti dengan peringatan diatas maka silahkan klik tombol lanjutkan dibawah",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Lanjutkan'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('/penyesuaian-data-proses') }}";
            }
            })
        }
    </script>

    <script>
        function confirmKlasifikasi() {
            Swal.fire({
                title: 'Peringatan Klasifikasi Data',
                text: "1. Melakukan klasifikasi data akan memakan waktu yang cukup lama.(Waktu yang dibutuhkan cukup bervariatif bergantung dengan spesifikasi device dan jumlah data)\n. 2. Sewaktu pemrosesan berlangsung aktivitas seperti me-refresh halaman, menutup tab, menutup browser, dan sebagainya dapat menyebabkan gagalnya pra pemrosesan data\n. 3. Untuk optimalisasi silahkan tunggu hingga proses loading selesai. *Jika anda mengerti dengan peringatan diatas maka silahkan klik tombol lanjutkan dibawah",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Lanjutkan'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('/senti-word-net-proses') }}";
            }
            })
        }
    </script>

    <script>
        // Bar Chart Example
        var labels = {!! isset($labels) ? json_encode($labels) : '[]' !!};
        var values = {!! isset($values) ? json_encode($values) : '[]' !!};
        var ctx = document.getElementById("myBarChart");
        var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
            label: [],
            backgroundColor: ['#42ba96', '#df4759', '#36b9cc'],
            hoverBackgroundColor: ['#42ba96', '#df4759', '#36b9cc'],
            borderColor: "#4e73df",
            data: values,
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
            xAxes: [{
                time: {
                unit: 'month'
                },
                gridLines: {
                display: false,
                drawBorder: false
                },
                ticks: {
                maxTicksLimit: 6
                },
                maxBarThickness: 25,
            }],
            yAxes: [{
                ticks: {
                min: 0,
                max: 15000,
                maxTicksLimit: 5,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                    return '$' + number_format(value);
                }
                },
                gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
                }
            }],
            },
            legend: {
            display: false
            },
            tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                }
            }
            },
        }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                order: [[0, 'desc']],
            });
        });
    </script>
</body>

</html>