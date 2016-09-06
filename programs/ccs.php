<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
 <?php
    include '../includes/linksScripts1.php';
    include '../includes/galleryScripts1.php';
    include '../includes/layout1.php';
?>
        <link rel="stylesheet" type="text/css" href="../css/layout01.css">
        <script>
            var photoArray = [
                {src: '../images/programs/counseling1.jpg',w: 1200,h: 900},
                {src: '../images/programs/counseling2.jpg',w: 1200,h: 900},
                {src: '../images/programs/counseling3.jpg',w: 720,h: 477},
                {src: '../images/programs/counseling4.jpg',w: 1280,h: 960}
            ];
        </script>
    </head>
    <body>
<?php
    include '../includes/navigation1.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <h1>Counseling and Care Support (CCS) Program</h1>
<?php
    include '../includes/gallery1.php';
?>
                <p>(a) We provide counseling and incidences of rehabilitation services; we do referrals to government rehabilitation centers to stabilize the livelihood of orphans and vulnerable children, psychologically and socially.</p>
                <p>(b) We Care for orphans and vulnerable children and ensure that they are physically and socially secured </p>
                <p>(c) We do brainpower and feed children with a balanced diet so as to promote their growth and ensure that children's cognitive, spiritual, mental and intellectual capacity are well developed. </p>
            </div>
           <div id="secondary-content">
                <h2>Programs</h2>
                <ul>
                    <li><a href="ets.php">Education and Training Support (ETS) Program</a></li>
                    <li><a href="ccs.php">Counseling and Care Support (CCS) Program</a></li>
                    <li><a href="vip.php">Volunteer and Internship Placement (V.I.P) Program</a></li>
                    <li><a href="cep.php">Cultural Exchange Program</a></li>
                    <li><a href="health-care.php">Health Care</a></li>
                    <li><a href="agricultural.php">Agricultural Project/Granary/Food Basket</a></li>
                    <li><a href="social.php">Social & Spiritual Development</a></li>
                    <li><a href="sports.php">Sports and Leisure</a></li>
                    <li><a href="efr.php">Economic and Fundraisng (EFR) Program</a></li>
                    <li><a href="business.php">Business Development</a></li>
                </ul>
            </div>
<?php
    include '../includes/footer1.php';
?>
        </div>
<?php
    include '../includes/galleryOverlay1.php';
?>
    </body>
</html>
