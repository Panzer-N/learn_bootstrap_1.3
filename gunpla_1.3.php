<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.js"> </script>
    <title>Document</title>
</head>

<body>

    <?php include './header_1.3.php'; ?>

    <?php include './navbar_1.3.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center centered-text" style="background-color:lavender;">
                GUNDAM + PLASTIC MODEL = GUNPLA
            </div>
        </div>
    </div>
    
    <div class="container p-5 bg-black">
        <div class="row gap-2">
            <div class="col bg-info p-3">
                <img src="./picture/pg-rx78.jpg" height="300" width="300" class="productImage" data-name="PG UNLEASHED RX-78-2 GUNDAM" data-price="10500 บาท"> <br>
                <h3>PG UNLEASHED RX-78-2 GUNDAM</h3>
                <p>Perfect Grade</p>
                <p>10500 บาท</p>
                <a class="btn btn-primary detailLink" href="#" >รายละเอียด</a>
            </div>
            
            <div class="col bg-warning p-3">
                <img src="./picture/lacus.jpg" height="300" width="300" class="productImage" data-name="PRS LACUS CLYNE" data-price="1000 บาท"> <br>
                <h3>PRS LACUS CLYNE</h3>
                <p>FigureRiseStandard</p>
                <p>1000 บาท</p>
                <a class="btn btn-primary detailLink" href="#" >รายละเอียด</a>
            </div>

            <div class="col bg-info p-3">
                <img src="./picture/haro.jpg" height="300" width="300" class="productImage" data-name="HAROPLA MOMO HARO" data-price="210 บาท"> <br>
                <h3>HAROPLA MOMO HARO</h3>
                <p>HAROPLA</p>
                <p>210 บาท</p>
                <a class="btn btn-primary detailLink" href="#" >รายละเอียด</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
    <div class="row">
        <div class="card" style="width: 20rem;">
            <img src="./picture/rx-78.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">RX78-2 Gundam</h5>
                <p class="card-text">300 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink1" 
                   data-img="./picture/rx-78.jpg" 
                   data-name="RX78-2 Gundam" 
                   data-price="300 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/gm.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">RGM77 GM</h5>
                <p class="card-text">240 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink2" 
                   data-img="./picture/gm.jpg" 
                   data-name="RGM77 GM" 
                   data-price="240 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/gundam-aerial-re.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">XVX-016RN Gundam Aerial Rebuild</h5>
                <p class="card-text">610 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink3" 
                   data-img="./picture/gundam-aerial-re.jpg" 
                   data-name="XVX-016RN Gundam Aerial Rebuild" 
                   data-price="610 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/z-gok.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">MSM-07 Z'Gok</h5>
                <p class="card-text">240 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink4" 
                   data-img="./picture/z-gok.jpg" 
                   data-name="MSM-07 Z'Gok" 
                   data-price="240 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/sazabi.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">MSN-04 Sazabi</h5>
                <p class="card-text">1000 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink5" 
                   data-img="./picture/sazabi.jpg" 
                   data-name="MSN-04 Sazabi" 
                   data-price="1000 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/rgm-77.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">RGM77 Gunconnon</h5>
                <p class="card-text">410 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink6" 
                   data-img="./picture/rgm-77.jpg" 
                   data-name="RGM77 Gunconnon" 
                   data-price="410 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/rx-75.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">RX75 Guntank</h5>
                <p class="card-text">270 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink7" 
                   data-img="./picture/rx-75.jpg" 
                   data-name="RX75 Guntank" 
                   data-price="270 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/gundam-gt.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">RGM78 Gundam Groundtype</h5>
                <p class="card-text">580 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink8" 
                   data-img="./picture/gundam-gt.jpg" 
                   data-name="RGM78 Gundam Groundtype" 
                   data-price="580 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/luna.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">FigureRiseStandard Lunamaria Hawke</h5>
                <p class="card-text">1300 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink9" 
                   data-img="./picture/luna.jpg" 
                   data-name="FigureRiseStandard Lunamaria Hawke" 
                   data-price="1300 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/neo-zeong.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">NZ-999 Neo-Zeong</h5>
                <p class="card-text">10000 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink10" 
                   data-img="./picture/neo-zeong.jpg" 
                   data-name="NZ-999 Neo-Zeong" 
                   data-price="10000 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/zaku-w-runa.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">ZGMF-1000/A Gunner Zaku Warrior Lunamaria Hawke</h5>
                <p class="card-text">610 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink11" 
                   data-img="./picture/zaku-w-runa.jpg" 
                   data-name="ZGMF-1000/A Gunner Zaku Warrior Lunamaria Hawke" 
                   data-price="610 บาท">รายละเอียด</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <img src="./picture/mt-freedom.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">ZGMF/A-262PD-P Mighty Freedom Gundam</h5>
                <p class="card-text">1000 บาท</p>
                <a class="btn btn-primary" href="#" id="detailLink12" 
                   data-img="./picture/mt-freedom.jpg" 
                   data-name="ZGMF/A-262PD-P Mighty Freedom Gundam" 
                   data-price="1000 บาท">รายละเอียด</a>
            </div>
        </div>
    </div>
</div>


    <?php include './footer.php'; ?>
    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Document loaded');
        var detailLinks = document.querySelectorAll('.detailLink');
        
        detailLinks.forEach(function(link) {
            var productElement = link.closest('.col');
            var imgElement = productElement.querySelector('.productImage');
            var productName = imgElement.getAttribute('data-name');
            var productPrice = imgElement.getAttribute('data-price');
            var imgSrc = imgElement.src;

            var detailUrl = `./detail.php?img=${encodeURIComponent(imgSrc)}&name=${encodeURIComponent(productName)}&price=${encodeURIComponent(productPrice)}`;

            link.setAttribute('href', detailUrl);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var detailLinks = document.querySelectorAll('[id^="detailLink"]');

        detailLinks.forEach(function(link) {
            var imgSrc = link.getAttribute('data-img');
            var productName = encodeURIComponent(link.getAttribute('data-name'));
            var productPrice = encodeURIComponent(link.getAttribute('data-price'));

            var detailUrl = `./detail.php?img=${encodeURIComponent(imgSrc)}&name=${productName}&price=${productPrice}`;

            link.setAttribute('href', detailUrl);
        });
    });

</script>
</body>
</html>