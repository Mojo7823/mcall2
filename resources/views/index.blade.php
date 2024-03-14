<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paku Baja Agung Customer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

<!-- Highlight Customer Name -->
<div class="container mt-5" id="highlight-customer">
</div>

<!-- Include MySQL Connection -->
<?php
$servername = "localhost";
$username = "pakq2544_adminbg";
$password = "dlVxHx%tW,VzW-Zt)_";
$dbname = "pakq2544_customer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!-- Buttons Container -->
<div class="container mt-5">
    <div class="row justify-content-center mb-3">
        <div class="col-auto">
            <a id="call-button" href="#" class="btn btn-primary btn-lg">Panggil Telpon &nbsp; &nbsp;<i class="fas fa-phone"></i></a>
        </div>
        <div class="col-auto">
            <a id="whatsapp-button" href="#" target="_blank" class="btn btn-success btn-lg">Panggil Whatsapp &nbsp; &nbsp; <i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="col-auto">
            <a id="broadcast-button" href="#" class="btn btn-info btn-lg">Kirim Broadcast &nbsp; &nbsp; <i class="far fa-comment-dots"></i></a>
        </div>
        <div class="col-auto">
            <a id="change-status-button" href="#" class="btn btn-secondary btn-lg">Ganti Status &nbsp; &nbsp; <i class="fas fa-cog"></i></a>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-auto">
            <button id="prev-button" type="button" class="btn btn-warning btn-lg">Sebelumnya<i class="fa-solid fa-right-long"></i></button>
        </div>
        <div class="col-auto">
            <button id="next-button" type="button" class="btn btn-warning btn-lg">Berikutnya<i class="fa-solid fa-right-long"></i></button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-auto">
            <button id="add-button" type="button" class="btn btn-primary btn-lg">Tambah Pelanggan<i class="fa-solid fa-right-long"></i></button>
        </div>
        <div class="col-auto">
            <button id="remove-button" type="button" class="btn btn-danger btn-lg">Hapus Pelanggan<i class="fa-solid fa-right-long"></i></button>
        </div>
    </div>
</div>


<!-- Table Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr class='customer-row' data-id='{{ $customer->id }}' data-full-address='{{ $customer->alamat2 }}' data-keterangan='{{ $customer->keterangan }}' data-id='{{ $customer->id }}'>
                        <th scope='row'>{{ $loop->iteration }}</th>
                        <td>{{ $customer->kode_pel }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->no_hp }}</td>
                        <td>{{ $customer->status }}</td>
                        <td><button type='button' class='btn btn-warning show-modal-button'><i class='fas fa-clipboard-check'></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Custom JS -->
<script src="{{ asset('js/client.js') }}"></script>

</body>
</html>