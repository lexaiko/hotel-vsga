<?php include 'includes/header.php'; ?>

<div class="container mx-auto px-[100px]">
    <div class="bigcard grid justify-center">
        <img src="img/kamar.jpg" alt="" class="w-[1300px] h-[500px] rounded-lg">
        <div class="rincian block">
            <div class="relative overflow-x-auto">
                <div class="w-full bg-gray-50 dark:bg-gray-700">
                    <div class="text-xs text-gray-700 uppercase dark:text-gray-400 grid grid-cols-2">
                        <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 sticky top-0">
                            Nama
                        </div>
                        <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                            Keterangan
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800">
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Nama pemesan
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if(isset($_POST["nama_pemesan"]) && $_POST["nama_pemesan"] !== '') {
                                        echo $_POST["nama_pemesan"];
                                    } else {
                                        echo "tidak ada data";
                                    }  
                                } else {
                                    // Jika halaman ini diakses secara langsung tanpa mengirimkan data melalui formulir, tampilkan pesan error
                                    echo "Akses tidak sah.";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Jenis Kelamin
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    if ($_POST["jenis_kelamin"] == "L"){
                                        echo "Laki-laki";
                                    } else if ($_POST["jenis_kelamin"] == "P"){
                                        echo "Perempuan";
                                    }
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Nomor Identitas
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php 
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    echo $_POST["nomor_identitas"];
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Tipe Kamar
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php 
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    if ($_POST["tipe_kamar"] == 100){
                                        echo "Standar";
                                    } else if ($_POST["tipe_kamar"] == 200){
                                        echo "Premium";
                                    } else if ($_POST["tipe_kamar"] == 300){
                                        echo "Eksklusif";
                                    }
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Tanggal Pemesanan
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php 
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    echo $_POST["tanggal_pesan"];
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Durasi Menginap
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php 
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    echo $_POST["durasi_menginap"] . " Hari";
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Total Bayar
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                $ <?php 
                                if (isset($_POST["nama_pemesan"]) && isset($_POST["nomor_identitas"]) && isset($_POST["jenis_kelamin"]) && isset($_POST["tipe_kamar"]) && isset($_POST["tanggal_pesan"]) && isset($_POST["durasi_menginap"]) && isset($_POST["total_bayar"])) {
                                    echo $_POST["total_bayar"];
                                } else {
                                    echo "tidak ada data";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <!-- <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white"> -->
                                <?php
                                include 'db_connection.php';

                                // Memeriksa apakah data telah dikirim melalui metode POST
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Memeriksa apakah semua input telah terisi dengan benar
                                    if (isset($_POST["nama_pemesan"]) && 
                                        isset($_POST["jenis_kelamin"]) &&
                                        isset($_POST["nomor_identitas"]) && 
                                        isset($_POST["tipe_kamar"]) && 
                                        isset($_POST["tanggal_pesan"]) && 
                                        isset($_POST["durasi_menginap"]) && 
                                        isset($_POST["total_bayar"]) && ($_POST["tanggal_pesan"] != '0000-00-00')){
                                        
                                        // Mengambil nilai dari formulir
                                        $nama_pemesan = $_POST["nama_pemesan"];
                                        $jenis_kelamin = $_POST["jenis_kelamin"];
                                        $nomor_identitas = $_POST["nomor_identitas"];
                                        $tipe_kamar = $_POST["tipe_kamar"];
                                        $tanggal_pesan = $_POST["tanggal_pesan"];
                                        $durasi_menginap = $_POST["durasi_menginap"];
                                        $total_bayar = $_POST["total_bayar"];

                                        // Query SQL untuk menyimpan data ke dalam tabel database
                                        $sql = "INSERT INTO hotel (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, tanggal_pesan, durasi_menginap, total_bayar) 
                                                VALUES ('$nama_pemesan', '$jenis_kelamin', '$nomor_identitas', '$tipe_kamar', '$tanggal_pesan', '$durasi_menginap', '$total_bayar')";

                                        // Menjalankan query SQL
                                        if (mysqli_query($koneksi, $sql)) {
                                            // Jika query berhasil dijalankan
                                            // echo "Data berhasil disimpan";
                                            // Mendapatkan ID dari data yang baru saja dimasukkan
                                            $id = mysqli_insert_id($koneksi);
                                        } else {
                                            // Jika terjadi kesalahan saat menjalankan query
                                            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
                                        }
                                    } else {
                                        // Jika ada input yang kosong atau tanggal pesan tidak valid
                                        echo "Ada input yang kosong atau tanggal pesan tidak valid. Silakan lengkapi semua informasi.";
                                    }
                                } else {
                                    // Jika halaman ini diakses secara langsung tanpa mengirimkan data melalui formulir, tampilkan pesan error
                                    echo "Akses tidak sah.";
                                }

                                // Menutup koneksi database
                                mysqli_close($koneksi);
                                ?>
                            <!-- </div> -->
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                <!-- Tombol untuk mengunduh PDF -->
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="generate_pdf.php?id=<?php echo $id; ?>" target="_blank">
                                    Cetak Invoice
                                </a></button>
                            </div>
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <a href="index.php">Kembali ke beranda</a>
                                </button>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>        
    </div>
</div>
<?php include 'includes/footer.php'; ?>
