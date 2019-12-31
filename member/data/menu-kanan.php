<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    <div class="widget">
    <div class="widget-content">
<body>
    <?php
        function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
        // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
            $BulanIndo = array("Januari", "Februari", "Maret",
               "April", "Mei", "Juni",
               "Juli", "Agustus", "September",
               "Oktober", "November", "Desember");
  
    $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
    $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
    $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
    
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
    return($result);
                            }
    ?>
        <div class="tanggals"><?php 
            echo(DateToIndo( date("Y-m-d"))); ?>
        </div>
        <br><br>

    
    <!-----------Kode CSS-------------->
    <style type="text/css">

        .tanggals{ border: 2px inset White; background: #2980b9 none repeat scroll 0 0; padding: 5px; font-size: 14px; font-family: "Courier"; color: #fff; margin: 2px; display: block; text-align: center; }

    <style type="text/css">
 
    h1,h2,p,a{
        font-family: sans-serif;
        font-weight: normal;
    }
 
    .jam_analog_malasngoding {
        background: #e7f2f7;
        position: relative;
        width: 240px;
        height: 240px;
        border: 16px solid #52b6f0;
        border-radius: 50%;
        padding: 20px;
        margin:20px auto;
    }
 
    .xxx {
        height: 100%;
        width: 100%;
        position: relative;
    }
 
    .jarum {
        position: absolute;
        width: 50%;
        background: #232323;
        top: 50%;
        transform: rotate(90deg);
        transform-origin: 100%;
        transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
    }
 
    .lingkaran_tengah {
        width: 24px;
        height: 24px;
        background: #232323;
        border: 4px solid #52b6f0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -14px;
        margin-top: -14px;
        border-radius: 50%;
    }
 
    .jarum_detik {
        height: 2px;
        border-radius: 1px;
        background: #F0C952;
    }
 
    .jarum_menit {
        height: 4px;
        border-radius: 4px;
    }
 
    .jarum_jam {
        height: 8px;
        border-radius: 4px;
        width: 35%;
        left: 15%;
    }
</style>
 
<div class="jam_analog_malasngoding">
    <div class="xxx">
        <div class="jarum jarum_detik"></div>
        <div class="jarum jarum_menit"></div>
        <div class="jarum jarum_jam"></div>
        <div class="lingkaran_tengah"></div>
    </div>
</div> 
 
<script type="text/javascript">
    const secondHand = document.querySelector('.jarum_detik');
    const minuteHand = document.querySelector('.jarum_menit');
    const jarum_jam = document.querySelector('.jarum_jam');
 
    function setDate(){
        const now = new Date();
 
        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
        if (secondsDegrees === 90) {
            secondHand.style.transition = 'none';
        } else if (secondsDegrees >= 91) {
            secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
        }
 
        const minutes = now.getMinutes();
        const minutesDegrees = ((minutes / 60) * 360) + 90;
        minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
 
        const hours = now.getHours();
        const hoursDegrees = ((hours / 12) * 360) + 90;
        jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }
 
    setInterval(setDate, 1000)
</script>
</body>

    </div> <!-- /widget-content -->
  </div> <!-- /widget -->  