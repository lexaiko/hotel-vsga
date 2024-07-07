<?php include 'includes/header.php'; ?>
<img src="img/herosection.png" alt="" class="absolute inset-0 w-full h-1/2 h-[80px] object-cover -z-50 rounded-b-lg">
<!-- {{-- end of background top --}} -->

<div class="container mx-auto px-[100px]">

    <div class="teks mt-[100px] mb-[50px]" id="services">
        <p class="text-gray-500 text-xl">Best Prices</p>
        <div class="bungkus grid grid-cols-2 gap-4 mt-3">
            <div class="kiri col-span-1">
                <h1 class="text-gray-800 text-4xl font-semibold">Rincian Pembayaran</h1>
            </div>
            <div class="kanan col-span-1">
                <p class="text-gray-500 text-xl px-8"></p>
            </div>
        </div>
    </div>
    <div class="bigcard grid justify-center">
        <img src="img/tingkat2.jpg" alt="" class="w-[1300px] h-1/2 h-[400px] object-cover rounded-lg">
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
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Nama Pemesan
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
                            <form action="proses_pemesanan.php" method="POST">
                                <input type="text" name="nama_pemesan" id="nama_pemesan"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Masukkan Nama" value="" required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Jenis Kelamin
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
                                <select id="jenis_kelamin" name="jenis_kelamin"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    onchange="calculateTotal()">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Nomor Identitas
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
                                <input type="number" name="nomor_identitas" id="nomor_identitas"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Masukkan nomor identitas anda" value="" required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Tipe Kamar
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
    <select id="tipe_kamar" name="tipe_kamar"
        class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        onchange="updateHarga()">
        <option value="200">Premium</option>
        <option value="100">Standard</option>
        <option value="300">Eksklusif</option>
    </select>
</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Harga
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
    <input type="number" name="harga" id="harga"
        class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder="200" readonly required />
</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Tanggal Pemesanan
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
                                <input
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="date" name="tanggal_pesan" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                Durasi Menginap
                            </div>
                            <div class="px-6 py-2 border-b border-gray-200 dark:border-gray-700">
                                <input type="number" name="durasi_menginap" id="durasi_menginap"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Masukkan jumlah hari" value="1" onchange="updateHarga()"/>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div
                                class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                    Submit
                                </button>
                            </div>
                            <div
                                class="px-6 py-2 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                <input type="number" name="total_bayar" id="total_bayar"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Isi form pemesanan" value="" required />
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>


        </div>
    </div>
</div>
<script>
     function updateHarga() {
    // Mendapatkan nilai terpilih dari dropdown tipe kamar
    var tipeKamar = document.getElementById("tipe_kamar").value;
    
    // Menetapkan nilai harga sesuai dengan nilai terpilih dari dropdown tipe kamar
    document.getElementById("harga").value = tipeKamar;

    var durasi_menginap = parseInt(document.getElementById("durasi_menginap").value);
    
    var harga = parseInt(document.getElementById("harga").value);
    var total_bayar = harga * durasi_menginap;

    // Memeriksa apakah durasi menginap lebih dari 3 hari
    if (durasi_menginap > 3) {
        // Menghitung diskon 10%
        var diskon = total_bayar * 0.1;
        // Mengurangkan diskon dari total bayar
        total_bayar -= diskon;
    }

    document.getElementById("total_bayar").value = total_bayar;
}

</script>

<script>

</script>

<?php include 'includes/footer.php'; ?>