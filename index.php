<html>
    <head>
        <title> Penyewaan </title>
        <link href="library/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="styles/styles.css" rel="stylesheet"/>
    </head>
    
     <!-- Class "No Image" to set Background to None -->
    <body class="noimage">
         <?php
        include "nav.php";
        ?>

        <!-- Welcome Section -->
        <section>
        <div class="welcome"><br><strong>Selamat Datang di Gedung Aghnia</strong></div>
        </section>

        <!-- Show Image Figure Content -->
        <section class="menu">
            <figure> 
                <img src="images/Gedung Kesenian Gajayana.jpg" alt="Gedung">
                <figcaption><h4>Gedung Kesenian Gajayana Malang</h4><h5> Alamat : Jl. Nusakambangan, Kasin, Kec. Klojen, Kota Malang, Jawa Timur</h5>
                Gedung yang satu atap dengan Museum Musik Indonesia ini sangat cocok untuk berbagai kegiatan pelajar dan mahasiswa, seperti pagelaran musik atau lomba-lomba. Gedung Kesenian Gajayana disewakan dengan harga yang sangat terjangkau.
            </figcaption>
            </figure>
            <figure> 
                <img src="images/Gedung Graha Rektorat.jpg" alt="Gedung">
                <figcaption><h4>Gedung Graha Rektorat UM</h4><h5> Alamat : Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur</h5>
                Graha Rektorat merupakan gedung pusat pelayanan terintegrasi satu atap yang dimiliki UM, sekaligus mengawal reformasi birokrasi di UM. Sehingga diharapkan tercipta pelayanan yang cepat dan terintegrasi, serta mudah diakses yang tersedia secara terpadu di gedung Graha Rektorat UM.
            </figcaption>
            </figure>
            <figure> 
                <img src="images/Gedung Graha Cakrawala.jpg" alt="Gedung">
                <figcaption><h4>Gedung Graha Cakrawala UM</h4><h5>Alamat : Jl. Cakrawala (di kompleks Kampus Induk UM) Malang</h5>
                Graha Cakrawala merupakan sebuah gedung serbaguna UM yang mulai dibangun pada tahun 2007. Gedung seluas 9.677 m2 ini berlokasi di posisi yang strategis di sentra bisnis, pendidikan, dan jalur protokol Kota Malang, 
            </figcaption>
            </figure>
            <figure> 
                <img src="images/Gedung Gor Ken Arok.jpg" alt="Gedung">
                <figcaption><h4>Gedung Gor Ken Arok Malang</h4><h5>Alamat : Jl. Kalianyar Buring No.9, Buring, Kec. Kedungkandang, Kota Malang, Jawa Timur</h5>
                Gedung Olahraga atau GOR Ken Arok Malang merupakan fasilitas olahraga untuk masyarakat Malang. Gor ini berdiri di atas lahan seluas 44.000 meter persegi dengan kapasitasnya pengunjung 5.000 hingga 7.500 orang.
            </figcaption>
            </figure>
            <figure> 
                <img src="images/Gedung Bima Sakti.jpg" alt="Gedung">
                <figcaption><h4>Gedung Gor Bima Sakti Sukun Malang</h4><h5> Alamat : Jalan S. Supriadi Gang 4 No.91, Tanjungrejo, Sukun, Kec. Sukun, Kota Malang, Jawa Timur</h5>
                GOR Bima sakti merupakan sarana olah raga terutama cabang basketball di kota malang letaknya strategis di daerah sukun kota malang.
            </figcaption>
            </figure>
            <div class=break></div>

            <a href="register.php">
            
            <!--Check if User Logged in -->
            <?php if(isset($_SESSION["iduser"])) : ?>
            <a href="dateselection.php">
            <button> Sewa sekarang! </button> </a>
            <?php else : ?>
            <a href="register.php">
            <button> Daftar Sekarang! </button> </a>
            <?php endif; ?>
        </section>

        <!-- Information Content -->
        <h1 class="info"><strong>Info Terbaru di Gedung Aghnia</strong></h1>
        <hr class="line"/>
        <section class="content">
        <div> 
           <img src="images/Gedung Bima Sakti.jpg">
        </div>
        <div class ="text">
           <a href="index.html"><strong>Pembukaan Gedung Aghnia </strong></a> <br>
           Pembukaan Gedung Aghnia pada tanggal 8 November kemarin disambut dengan baik oleh penduduk setempat..........................
       </div>

       <div> 
           <img src="images/Gedung Ijen Suites.jpg">
       </div>
       <div class ="text">
           <a href="index.html"><strong>Pemesanan Gedung secara Online </strong></a> <br>
           Baru-baru ini Gedung Aghnia meluncurkan website untuk memudahkan pelanggannya................
       </div>
        </section>

        <footer> Gedung Aghnia  2022-2023 </footer>
        <script src="styles/scroll.js"></script>
    </body>
</html>