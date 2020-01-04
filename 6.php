<?php 
    require "connect.php";
    $inventory = query("SELECT products_tb.id, products_tb.product_name, suppliers_tb.company_name, suppliers_tb.address, suppliers_tb.phone FROM products_tb RIGHT OUTER JOIN suppliers_tb ON products_tb.supplier_id=suppliers_tb.id;");

    if(isset($_POST["tombol"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container mt-5">
        <table class="table table-hover table-striped rounded text-center">
            <h1 class="h1 mb-3">INVENTORY</h1>
            <div class="col-md-3 offset-md-10">
                <a href="#" class="btn btn-primary btn-sm mr-2 mb-3">Add Product</a>
                <a href="#" class="btn btn-primary btn-sm mb-3" name>Add Suplier</a>
            </div>
            <tr class="bg-primary rounded">
                <th>No</th>
                <th>Product Name</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($inventory as $inven) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $inven['product_name'];?></td>
                <td><?= $inven['company_name'];?></td>
                <td><?= $inven['address'];?></td>
                <td><?= $inven['phone'];?></td>
                <td>
                    <a href="update.php?npm=<?= $inven['phone'];?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="hapus.php?phone=<?= $inven['phone'];?>" class="btn btn-danger btn-sm" name>Delete</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>