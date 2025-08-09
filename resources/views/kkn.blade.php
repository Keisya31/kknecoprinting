<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KKN Ecoprinting</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <header class="text-white p-2" style="background-color: #7B4019">
        <div class="container mx-auto text-center">
            <h1 class="font-bold text-3xl mb-3" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">ECOPRINTING</h1>
            <h1 class="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">ALAT PENDETEKSI SUHU PENGUKUSAN BATIK</h1>
        </div>
    </header>
    <div class="p-5">
        <div class="p-4 bg-amber-900" style="background-color: #FFEEA9; color:black; border-radius: 5px;">
            <h1 class="font-bold mb-3">CARA KERJA ALAT</h1>
            <div class="grid grid-cols-2 gap-5 w-h-screen">
                <div>
                    {{-- <img src="{{ asset('images/kkn/alat.png') }}" alt="Alat Pendeteksi Suhu Pengukusan Batik" class="w-full h-auto rounded-lg shadow-lg"> --}}
                    <h3 class="font-medium">1. Menghidupkan Alat</h3>
                    <p class="ml-4">Alat dicolokkan ke stopkontak menggunakan kabel abu-abu. Listrik mengalir ke power supply, lalu tegangannya diturunkan agar aman untuk semua komponen alat.<br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">5. Memeriksa Air di Wadah</h3>
                    <p class="ml-4">Ada pelampung (float switch) yang akan memberitahu otak alat jika air di wadah sudah hampir habis.<br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">2. Alat Mulai Bekerja</h3>
                    <p class="ml-4">ESP8266 (otak alat) mulai menyala dan siap menerima data dari sensor suhu dan sensor air.<br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">6. Membandingkan Suhu dengan Batas yang Ditentukan</h3>
                    <p class="ml-4">Otak alat memeriksa apakah suhu sudah mencapai batas yang diinginkan:
                    Jika belum cukup, alat hanya menampilkan suhu dan menunggu.
                    Jika sudah cukup, otak alat akan menyuruh buzzer berbunyi
                    <br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">3. Mengukur Suhu Kukusan</h3>
                    <p class="ml-4" >Termometer (DS18B20) yang ada di dalam kukusan membaca suhunya, lalu mengirimkan angkanya ke otak alat.<br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">7. Bunyi Alarm</h3>
                    <p class="ml-4">
                    Buzzer mengeluarkan suara "tit-tit" sebagai tanda bahwa suhu kukusan sudah pas dan proses mengukus bisa dihentikan. 
                    <br><br></p>
                </div>
                <div>
                    <h3 class="font-medium">4. Menampilkan Suhu di Layar LCD</h3>
                    <p class="ml-4">Otak alat mengirim angka suhu ke layar LCD, sehingga kita bisa melihat berapa panas kukusannya.<br><br></p>
                </div>
                
               
                
            </div>
        </div>
    </div>
    <footer class="p-2 text-center text-sm text-white h-20 flex-1 items-center justify-center" style="background-color: #7B4019;">
        <p>© KKN-T TIM 94 Universitas Diponegoro Kelompok 3 Tahun 2025</p>
        <p>Sosial Kemasyarakatan oleh Keisya Intan Nabila</p>
        <p>Desa Pungsari, Kecamatan Plupuh, Kabupaten Sragen</p>
    </footer>

    
</body>
</html>