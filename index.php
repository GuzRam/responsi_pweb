<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script lang="Javascript" src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar">
        <div>
            <h1 class="judul">Tugas Akhir</h1>
        </div>
        
        <ul class="list">
            <li class="list_item"><a href="#kalkulator">Kalkulator</a></li>
            <li class="list_item"><a href="#kalender">Kalender</a></li>
            <li class="list_item"><a href="#IO">InputOutput</a></li>
        </ul>
    </nav>
    <div class="mb1"></div>
</header>

<section>
    <div id="kalkulator" class="kalkulator">
        <h1>Kalkulator</h1>
        <p> <span>Kalkulator</span>  adalah alat untuk menghitung dari perhitungan sederhana seperti penjumlahan, pengurangan, perkalian dan pembagian sampai kepada kalkulator sains yang dapat menghitung rumus matematika tertentu.</p>
        <br>
        <pre class="proses">
            <div class="eek">
            masukan angka pertama
            <input  name="bil1" type="text" value="" id="x" />
            masukan angka kedua
            <input name="bil2" type="text" value="" id="y" />
        </div>

            
            <input name="hitung" type="radio" value="Penjumlahan" onclick="hitung(this.value)"/> Penambahan
            <input name="hitung" type="radio" value="Pengurangan" onclick="hitung(this.value)"/> Pengurangan
            <input name="hitung" type="radio" value="Perkalian" onclick="hitung(this.value)"/> Perkalian
            <input name="hitung" type="radio" value="bagi" onclick="hitung(this.value)"/> pembagian
            <br>
            Hasil : 
            <input name="hasil" type="text" value="" id="hasil" />
        </pre>
    </div>
    <div class="image">
        <div class="imagic">
            <img src="img/image2.jpg" alt="">
        </div>
    </div>

    <div class="mb2"></div>
    <div class="kalender" id="kalender">
        <h1>Kalender</h1>
        <p>Kalender atau penanggalan adalah sebuah sistem untuk memberi nama pada sebuah periode waktu. Nama-nama ini dikenal sebagai tanggal kalender. Tanggal ini bisa didasarkan dari gerakan-gerakan benda angkasa seperti matahari dan bulan. Kalender juga dapat mengacu kepada alat yang mengilustrasikan sistem tersebut.</p>
    </div>
    <div class="gambar">
        <div class="gambarin">
            <img src="img/image4.jpg" alt="">
        </div>
    </div>
    <div>
        <br>
    <?php
	$hari = date("d");
	$bulan = date("m");
	$tahun = date("Y");
	$jumlahhari = date("t", mktime(0,0,0, $bulan, $hari, $tahun));
    ?>

    <?php
    switch ($bulan) {
    	case 1:
    		$nmbulan = "Bulan Ini Adalah <span class='bulan'>Januari</span> ";
    		break;
    	case 2:
    		$nmbulan = "Bulan Ini Adalah Februari";
    		break;
    	case 3:
    		$nmbulan = "Bulan Ini Adalah Maret";
    		break;
    	case 4:
    		$nmbulan = "Bulan Ini Adalah April";
    		break;
    	case 5:
    		$nmbulan = "Bulan Ini Adalah Mei";
    		break;
    	case 6:
    		$nmbulan = "Bulan Ini Adalah Juni";
    		break;
    	case 7:
    		$nmbulan = "Bulan Ini Adalah <span class='bulan'>Juli</span> ";
    		break;
    	case 8:
    		$nmbulan = "Bulan Ini Adalah Agustus";
    		break;
    	case 9:
    		$nmbulan = "Bulan Ini Adalah September";
    		break;
    	case 10:
    		$nmbulan = "Bulan Ini Adalah Oktober";
    		break;
    	case 11:
    		$nmbulan = "Bulan Ini Adalah November";
    		break;
    	case 12:
    		$nmbulan = "Bulan Ini Adalah Desember";
    		break;
    }
    echo "<center><h1>$nmbulan $tahun</h1></center>";
    ?>
    <br>
<div class="tabel">
    <table style="border: 2px solid rgb(110, 214, 179)" align="center" cellpadding="10" >
    	<tr bgcolor="aquamarine" class="td" >
    		<td align="center"><font color="#FF0000">Min</font></td>
    		<td align="center">Senin</td>
    		<td align="center">Selasa</td>
    		<td align="center">Rabu</td>
    		<td align="center">Kamis</td>
    		<td align="center">Jumat</td>
    		<td align="center">Sabtu</td>
    	</tr>

        <?php
    	$s = date("w", mktime(0,0,0, $bulan, 1, $tahun));

    	for($ds=1; $ds<=$s; $ds++){
    		echo "<td>";
    	}

    	for($d=1; $d<=$jumlahhari; $d++){
    		if (date("w", mktime(0,0,0, $bulan, $d, $tahun)) == 0) {
    			echo "<tr>";
    		}

    		$warna = "#000000";

    		if (date("l", mktime(0,0,0, $bulan, $d, $tahun)) == "Sunday") {
    			$warna = "#FF0000";
    		}

    		echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";

    		if (date("w", mktime(0,0,0, $bulan, $d, $tahun)) == 6) {
    			echo "</tr>";
    		}
    	}

    echo '</table>';
    ?>
    </div>
    <div class="io" id="IO">
        <h1>Counter</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium porro amet est odit? Ab eos illo, deserunt dolores tenetur incidunt.</p>
    </div>
    <div>
    <?php
        $filecounter ="counter.txt";
        $fl = fopen($filecounter,"r+");
        $hit = fread($fl,filesize($filecounter));
        echo("<div>
        <h1 align=center>MENGHITUNG BANYAK VISITOR</h1>");
        echo("
        <tr>");
        echo("<td width=250 valign=middle align=center>");
        echo("
        <div class='counter'>
        <font face='Poppins' size=2 color=black ><b>");
        echo("Jumlah Pengunjung: ");
        echo($hit);
        echo("</b></font></div>");
        echo("</td>");
        echo("</tr></table></div>");
        echo("<div>");
        fclose($fl);
        $fl = fopen($filecounter,"w+");
        $hit = $hit + 1;
        fwrite($fl,$hit,strlen($hit));
        fclose($fl);
        ?>
    </div>

    <div class="inputan">
        <form action="input.php" method="post">
        <td>Nama</td>
        <input name="nama" type="text" id="nama">
        <br><br>
        <td>Umur</td>
        <input name="umur" type="text" id="umur">
        <tr>
            <br><br>
            <input type="submit" name="submit" value="Send">

        </tr>
        </form>

    </div>
    <div class="lihat">
        <h1>Lihat Data</h1>
        <a href="see.php" id="lihatdata">
            Klik Ini Untuk Lihat Inputan Tadi
        </a>
    </div>
    <div class="mb2"></div>
</section>
</body>
</html>