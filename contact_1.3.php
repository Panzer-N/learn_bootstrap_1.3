<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.js"> </script>
    <title>Document</title>
    <style>
        /* Optional: Remove body margin and padding for a full-page map */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        #map {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        iframe {
            width: 100%;
            height: 450px;
        }
    </style>
</head>
<body>
</head>
<body>

<?php include './header_1.3.php'; ?>

<?php include './navbar_1.3.php'; ?>

<div class="contact-info">
    <p>tel: 0972871369</p>
    <p>email: <a href="mailto:67319100082@chetupon.ac.th">67319100082@chetupon.ac.th</a></p>
    <p>ig: <a href="https://instagram.com/akastuki_class" target="_blank">akastuki_class</a></p>
    <p>fb: <a href="https://facebook.com/Akastuki_class" target="_blank">Akastuki_class</a></p>
</div>


        <div class="row">
        <div class="col-12 text-center">
            <h3>My Embedded Google Map</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.379088350485!2d100.4764961!3d13.659833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDM5JzM1LjQiTiAxMDDCsDI4JzQ0LjciRQ!5e0!3m2!1sen!2sth!4v1691499492071!5m2!1sen!2sth"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>


<?php include './footer.php'; ?>
</body>
</html>