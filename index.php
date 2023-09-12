<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-2 text-center">
    <h1>Internet of Things</h1>
    <hr>
    <p class="bg-dark rounded p-3 text-light">Project IoT Menggunakan LocalHost</p>

    <div>
        <a href="index.php?status=ON" class="btn btn-primary">ON</a>
        <a href="index.php?status=OFF" class="btn btn-danger">OFF</a>
    </div>

    <?php
    
    if(isset($_GET['status'])){
        $status = $_GET['status'];
        $koneksi = mysqli_connect("localhost", "root", "", "iot");

        $query = mysqli_query($koneksi, "UPDATE led SET status='$status' WHERE id_led='1'");
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>