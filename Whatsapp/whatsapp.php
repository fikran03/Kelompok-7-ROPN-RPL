<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Send WA</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
        <div class="container">
            <br><br>
            <h3>Form Send WA</h3>
            <br><br>

            <div class="row">
                <div class="col-6">
                    <form action="send.php" method="post" target="_blank">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="name" class="form-control" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat</label>
                            <input type="alamat" class="form-control" name="alamat" placeholder="contoh jalan">
                        </div>
                        <div class="form-group">
                            <label for="email">Metode Pembayaran</label>
                            <input type="mepem" class="form-control" name="mepem" placeholder="bayar di tempat">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" name="message" placeholder="Catatan" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="noWA" value="+6281344463332">

                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>