<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/07323268fb.js"></script>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                    <h3 class="text-center">Daftar Produk</h3>
                    <br>
                    <?php
                    foreach ($product as $row) {
                        echo ' <div class="col-md-4 text-center" style="padding: 16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px">
                        <img src="' . base_url() . 'gambar/' . $row->product_image . '" alt="" class="img-thumbnail" /> <br>
                        <h4>' . $row->product_name . '</h4>
                        <h3 class="text-danger">' . $row->product_price . '</h3>
                        <input type="text" name="quantity" class="form-control quantity" id="' . $row->id . '">
                        <button type="button" name="add_cart" class="btn btn-success mt-2 add_cart" data-productname="' . $row->product_name . '" data-price="' . $row->product_price . '" data-productid="' . $row->id . '"><i class="fa fa-cart-plus"></i> Tambah</button>
                        </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div id="cart_detail">
                    <h3 class="text-center">Keranjang kosong</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $(".add_cart").click(function() {
            var product_id = $(this).data("productid");
            var product_name = $(this).data("productname");
            var product_price = $(this).data("price");
            var quantity = $('#' + product_id).val(); // ambil value inputan dari id yg dipilih

            //cek jika quantity = 0
            if (quantity != '' && quantity > 0) {
                //jika quantity lebih dari 0, request dengan ajax
                $.ajax({
                    url: "<?= base_url(); ?>keranjang_belanja/add",
                    method: "POST",
                    //kirim data ke server
                    data: {
                        product_id: product_id,
                        product_name: product_name,
                        product_price: product_price,
                        quantity: quantity
                    },
                    //jika berhasil
                    success: function(data) {
                        alert("Produk telah ditambahkan ke keranjang!");
                        $("#cart_detail").html(data);
                        $("#" + product_id).val('');
                    }
                });
            } else {
                alert("Silahkan masukkan quantity!");
            }
        });
        // load data
        $("#cart_detail").load("<?= base_url(); ?>keranjang_belanja/load");

        //request remove product dari keranjang
        $(document).on('click', '.remove_inventory', function() {
            var row_id = $(this).attr("id");
            if (confirm("apakah kamu mau hapus item ini?")) {
                $.ajax({
                    url: "<?= base_url(); ?>/keranjang_belanja/remove",
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function(data) {
                        alert("product dihapus dari keranjang belanja");
                        $("#cart_detail").html(data);
                    }
                });
            } else {
                return false;
            }
        });

        // request kosongkan keranjang
        $(document).on("click", "#clear_cart", function() {
            if (confirm("Anda mau mengosongkan keranjang?")) {
                $.ajax({
                    url: "<?= base_url(); ?>/keranjang_belanja/clear_cart",
                    success: function(data) {
                        alert("keranjang telah kosong!");
                        $("#cart_detail").html(data);
                    }
                });
            } else {
                return false;
            }
        });
    });
</script>