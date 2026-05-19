<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Gereja</title>

    <!-- SB Admin CSS -->
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sb-nav-fixed">

    @include('layouts.navbar')

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            @include('layouts.sidebar')
        </div>

        <div id="layoutSidenav_content">

            <main class="container-fluid px-4 mt-4">
                @yield('content')
            </main>

            @include('layouts.footer')

        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SB Admin JS -->
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>

    <script>
let chart;

async function loadStats() {
    const res = await fetch('/api/dashboard-stats');
    const data = await res.json();

    // update angka cards
    document.getElementById('totalJemaat').innerText = data.total_jemaat;
    document.getElementById('totalKeluarga').innerText = data.total_keluarga;
    document.getElementById('totalBaptis').innerText = data.total_baptis;
    document.getElementById('totalNikah').innerText = data.total_pernikahan;

    // update chart
    if(chart) chart.destroy();

    const ctx = document.getElementById('chartGender');
    chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Pria','Wanita'],
            datasets: [{
                data: [data.pria, data.wanita]
            }]
        }
    });
}

// load pertama
loadStats();

// AUTO REFRESH tiap 5 detik 🔥
setInterval(loadStats, 5000);
</script>

</body>
</html>