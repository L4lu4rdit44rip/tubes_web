<link rel="stylesheet" type="text/css" href="style/pemesanan.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<div class="container">
    <div class="raw">
        <div class="col">
            <h2 class="text-center">Beli Tiket</h2>
            <hr>
            <form class="asal_tujuan" action="" method="post">
                <div class="asalawal">
                    <label>Dari</label>
                    <div class="asal">
                        <div class="input-group-text"><i class="fas fa-plane-departure"></i></div>
                        <select name="dari" id="dari">
                            <option value="1">jakarta</option>
                            <option value="2">Surabaya</option>
                            <option value="3">Lombok</option>
                            <option value="4">Bali</option>
                        </select>
                    </div>
                </div>
                <div class="arah">
                    <div class="input-group-text"><i class="fas fa-arrow-circle-right"></i></div>
                </div>
                <div class="tujuanawal">
                    <label>Ke</label>
                    <div class="tujuan">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-plane-arrival"></i></div>
                        </div>
                        <select name="dari" id="dari">
                            <option value="1">jakarta</option>
                            <option value="2">Surabaya</option>
                            <option value="3">Lombok</option>
                            <option value="4">Bali</option>
                        </select>
                    </div>
                </div>
            </form>

            <form action="" method="post">
                <div class="tanggalawal">
                    <label>Tanggal keberangkatan</label>
                    <div class="tanggal">
                        <div class="input-group-prepend">
                            <input type="date" name="tgl_pergi" id="tgl_pergi" class="form-control ml-3">
                        </div>
                    </div>
                </div>
            </form>


            <form class="input-group-prepend" action="" method="post">
                <label>Jumlah Penumpang</label>
                <div class="penumpangawal">
                    <div class="dewasa">
                        <label>Dewasa</label>
                        <div>
                            <input type="number" name="pembeli" id="pembeli_dewasa" class="form-control ml-3" min="1">
                        </div>
                    </div>
                    <div class="anak">
                        <label>Anak-anak</label>
                        <div>
                            <input type="number" name="pembeli" id="pembeli_anak" class="form-control ml-3" min="0">
                        </div>
                    </div>
                    <div class="bayi">
                        <label>Bayi</label>
                        <div>
                            <input type="number" name="pembeli" id="pembeli_bayi" class="form-control ml-3" min="0">
                        </div>
                    </div>
                </div>
            </form>
            <form class="input-group-prepend" action="" method="post">
                <div class="row mt-4">
                    <label>Kelas Penerbangan</label>
                    <div class="kelas_p">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-accessible-icon"></i></i></div>
                        </div>
                        <select name="kelas" id="kelas">
                            <option value="1">Ekonomi</option>
                            <option value="2">Bisnis</option>
                            <option value="3">kelas pertama</option>
                        </select>
                    </div>
                </div>
            </form>

            <form class="back_save">
                <div class="back">
                    <button type="reset" class="btn btn-danger">back</button>
                </div>
                <div class="save">
                    <button type="submit" class="btn btn-primary" value="proses">save</button>
                </div>
            </form>


        </div>
    </div>
</div>

<?php
include "koneksi.php";

if (isset($_POST['proses']))
    mysqli_query($koneksi, "insert into buy set
    dari     = '$_POST[dari]',
    ke       = '$_POSt[ke],
    date     = '$_POST[date]',
    dewasa   = '$_POST[dewasa]',
    anak     = '$_POST[anak]',
    bayi     = '$_POST[bayi]',
    kelas    = '$_POST[kelas]
    ");

?>