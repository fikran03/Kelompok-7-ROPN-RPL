<?php
    if (isset($_POST['submit'])) {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $alamat     = $_POST['alamat'];
        $mepem      = $_POST['mepem'];
        $message    = $_POST['message'];
        $no_wa      = $_POST['noWA'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DAlamat:%20$alamat%20%0DMetode%20Pembayaran:%20$mepem%20%0DPesan:%20$message");
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>
        ";
    }
?>