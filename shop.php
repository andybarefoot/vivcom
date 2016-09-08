
<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
 <?php
    include 'includes/linksScripts.php';
    include 'includes/galleryScripts.php';
    include 'includes/layout1.php';
?>
        <script>
            var photoArray = [
                {src: 'images/shop/shop2.jpg',w: 600,h: 400},
                {src: 'images/shop/shop3.jpg',w: 600,h: 400},
                {src: 'images/shop/shop4.jpg',w: 600,h: 400},
                {src: 'images/shop/shop7.jpg',w: 600,h: 400},
                {src: 'images/shop/shop8.jpg',w: 600,h: 400},
                {src: 'images/shop/shop9.jpg',w: 600,h: 400},

                {src: 'images/shop/shop5.jpg',w: 600,h: 450},
                {src: 'images/shop/shop6.jpg',w: 600,h: 450},
                {src: 'images/shop/shop11.jpg',w: 600,h: 450},
                {src: 'images/shop/shop17.jpg',w: 600,h: 450},
                {src: 'images/shop/shop18.jpg',w: 600,h: 450},
                {src: 'images/shop/shop22.jpg',w: 600,h: 450},

                {src: 'images/shop/shop10.jpg',w: 600,h: 400},
                {src: 'images/shop/shop12.jpg',w: 600,h: 400},
                {src: 'images/shop/shop13.jpg',w: 600,h: 400},
                {src: 'images/shop/shop14.jpg',w: 600,h: 400},
                {src: 'images/shop/shop15.jpg',w: 600,h: 400},
                {src: 'images/shop/shop16.jpg',w: 600,h: 400},

                {src: 'images/shop/shop19.jpg',w: 600,h: 400},
                {src: 'images/shop/shop20.jpg',w: 600,h: 400},
                {src: 'images/shop/shop21.jpg',w: 600,h: 400},
                {src: 'images/shop/shop23.jpg',w: 600,h: 400},
                {src: 'images/shop/shop24.jpg',w: 600,h: 400},
                {src: 'images/shop/shop25.jpg',w: 600,h: 400},

                {src: 'images/shop/shop26.jpg',w: 600,h: 400},
                {src: 'images/shop/shop28.jpg',w: 600,h: 400},
                {src: 'images/shop/shop30.jpg',w: 600,h: 400},
                {src: 'images/shop/shop31.jpg',w: 600,h: 400},
                {src: 'images/shop/shop33.jpg',w: 600,h: 400},
                {src: 'images/shop/shop34.jpg',w: 600,h: 400},

                {src: 'images/shop/shop27.jpg',w: 600,h: 450},
                {src: 'images/shop/shop29.jpg',w: 600,h: 450},
                {src: 'images/shop/shop32.jpg',w: 600,h: 450},
                {src: 'images/shop/shop43.jpg',w: 600,h: 450},
                {src: 'images/shop/shop1.jpg',w: 600,h: 450},
                {src: 'images/shop/shop51.jpg',w: 600,h: 450},

                {src: 'images/shop/shop36.jpg',w: 600,h: 400},
                {src: 'images/shop/shop37.jpg',w: 600,h: 400},
                {src: 'images/shop/shop38.jpg',w: 600,h: 400},
                {src: 'images/shop/shop39.jpg',w: 600,h: 400},
                {src: 'images/shop/shop40.jpg',w: 600,h: 400},
                {src: 'images/shop/shop41.jpg',w: 600,h: 400},

                {src: 'images/shop/shop42.jpg',w: 600,h: 400},
                {src: 'images/shop/shop44.jpg',w: 600,h: 400},
                {src: 'images/shop/shop45.jpg',w: 600,h: 400},
                {src: 'images/shop/shop46.jpg',w: 600,h: 400},
                {src: 'images/shop/shop50.jpg',w: 600,h: 400},
                {src: 'images/shop/shop52.jpg',w: 600,h: 400},

                {src: 'images/shop/shop48.jpg',w: 600,h: 600},
                {src: 'images/shop/shop49.jpg',w: 600,h: 600},
                {src: 'images/shop/shop53.jpg',w: 600,h: 600},
                {src: 'images/shop/shop47.jpg',w: 600,h: 600},
                {src: 'images/shop/shop35.jpg',w: 600,h: 600}
            ];
        </script>
        <link rel="stylesheet" type="text/css" href="css/layout01.css">
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <h1>Shop</h1>
                <p>These beautiful Art pieces are our own products made by our Beneficiaries as a way to raise income for our Foundation.</p>
                <p>Buy our art products and the money got as profit will be channeled towards providing children's education, clothing, nutritious food, health care, vocational training, life skills and most importantly a place to call home.</p>
                <div class="shop-gallery">
                    <a href="javascript:openPhotoSwipe(1);"><img class="shop" src="images/shop/shop2.jpg"></a>
                    <a href="javascript:openPhotoSwipe(2);"><img class="shop" src="images/shop/shop3.jpg"></a>
                    <a href="javascript:openPhotoSwipe(3);"><img class="shop" src="images/shop/shop4.jpg"></a>
                    <a href="javascript:openPhotoSwipe(6);"><img class="shop" src="images/shop/shop7.jpg"></a>
                    <a href="javascript:openPhotoSwipe(7);"><img class="shop" src="images/shop/shop8.jpg"></a>
                    <a href="javascript:openPhotoSwipe(8);"><img class="shop" src="images/shop/shop9.jpg"></a>


                    <a href="javascript:openPhotoSwipe(4);"><img class="shop" src="images/shop/shop5.jpg"></a>
                    <a href="javascript:openPhotoSwipe(5);"><img class="shop" src="images/shop/shop6.jpg"></a>
                    <a href="javascript:openPhotoSwipe(10);"><img class="shop" src="images/shop/shop11.jpg"></a>
                    <a href="javascript:openPhotoSwipe(16);"><img class="shop" src="images/shop/shop17.jpg"></a>
                    <a href="javascript:openPhotoSwipe(17);"><img class="shop" src="images/shop/shop18.jpg"></a>
                    <a href="javascript:openPhotoSwipe(21);"><img class="shop" src="images/shop/shop22.jpg"></a>

                    <a href="javascript:openPhotoSwipe(9);"><img class="shop" src="images/shop/shop10.jpg"></a>
                    <a href="javascript:openPhotoSwipe(11);"><img class="shop" src="images/shop/shop12.jpg"></a>
                    <a href="javascript:openPhotoSwipe(12);"><img class="shop" src="images/shop/shop13.jpg"></a>
                    <a href="javascript:openPhotoSwipe(13);"><img class="shop" src="images/shop/shop14.jpg"></a>
                    <a href="javascript:openPhotoSwipe(14);"><img class="shop" src="images/shop/shop15.jpg"></a>
                    <a href="javascript:openPhotoSwipe(15);"><img class="shop" src="images/shop/shop16.jpg"></a>
                    <div class="clear-all">&nbsp;</div>
                </div>
            </div>
            <div id="secondary-content">
                <h2>How to buy</h2>
                <p>To make orders for a list of our Art pieces below please:</p>
                <p>Contact VIVCOM Foundation by email: <a href="mailto:vivcomfoundation@gmail.com">vivcomfoundation@gmail.com</a></p>
                <p>Call +256705152084 / +256771874642</p>
                <p>Make a direct wire to transfer and include reason has Art pieces to our Bank Account below:</p>
                <table>
                    <tr>
                        <td>BANK NAME:</td>
                        <td>BANK OF AFRICA</td>
                    </tr>
                    <tr>
                        <td>ACCOUNT NAME:</td>
                        <td>Vision For Vulnerable Communities Foundation</td>
                    </tr>
                    <tr>
                        <td>BRANCH:</td>
                        <td>Ntinda Branch, Kampala (Uganda)</td>
                    </tr>
                    <tr>
                        <td>BANK CODE:</td>
                        <td>01009/13</td>
                    </tr>
                    <tr>
                        <td>ACCOUNT NUMBER:</td>
                        <td>03634330002</td>
                    </tr>
                    <tr>
                        <td>SWIFT CODE:</td>
                        <td>AFRIUGKA</td>
                    </tr>
                </table>
            </div>
            <div id="tertiary-content">
                <div class="shop-gallery">
                    <a href="javascript:openPhotoSwipe(18);"><img class="shop" src="images/shop/shop19.jpg"></a>
                    <a href="javascript:openPhotoSwipe(19);"><img class="shop" src="images/shop/shop20.jpg"></a>
                    <a href="javascript:openPhotoSwipe(20);"><img class="shop" src="images/shop/shop21.jpg"></a>
                    <a href="javascript:openPhotoSwipe(22);"><img class="shop" src="images/shop/shop23.jpg"></a>
                    <a href="javascript:openPhotoSwipe(23);"><img class="shop" src="images/shop/shop24.jpg"></a>
                    <a href="javascript:openPhotoSwipe(24);"><img class="shop" src="images/shop/shop25.jpg"></a>

                    <a href="javascript:openPhotoSwipe(25);"><img class="shop" src="images/shop/shop26.jpg"></a>
                    <a href="javascript:openPhotoSwipe(27);"><img class="shop" src="images/shop/shop28.jpg"></a>
                    <a href="javascript:openPhotoSwipe(29);"><img class="shop" src="images/shop/shop30.jpg"></a>
                    <a href="javascript:openPhotoSwipe(30);"><img class="shop" src="images/shop/shop31.jpg"></a>
                    <a href="javascript:openPhotoSwipe(32);"><img class="shop" src="images/shop/shop33.jpg"></a>
                    <a href="javascript:openPhotoSwipe(33);"><img class="shop" src="images/shop/shop34.jpg"></a>


                    <a href="javascript:openPhotoSwipe(26);"><img class="shop" src="images/shop/shop27.jpg"></a>
                    <a href="javascript:openPhotoSwipe(28);"><img class="shop" src="images/shop/shop29.jpg"></a>
                    <a href="javascript:openPhotoSwipe(31);"><img class="shop" src="images/shop/shop32.jpg"></a>
                    <a href="javascript:openPhotoSwipe(42);"><img class="shop" src="images/shop/shop43.jpg"></a>
                    <a href="javascript:openPhotoSwipe(0);"><img class="shop" src="images/shop/shop1.jpg"></a>
                    <a href="javascript:openPhotoSwipe(50);"><img class="shop" src="images/shop/shop51.jpg"></a>


                    <a href="javascript:openPhotoSwipe(35);"><img class="shop" src="images/shop/shop36.jpg"></a>
                    <a href="javascript:openPhotoSwipe(36);"><img class="shop" src="images/shop/shop37.jpg"></a>
                    <a href="javascript:openPhotoSwipe(37);"><img class="shop" src="images/shop/shop38.jpg"></a>
                    <a href="javascript:openPhotoSwipe(38);"><img class="shop" src="images/shop/shop39.jpg"></a>
                    <a href="javascript:openPhotoSwipe(39);"><img class="shop" src="images/shop/shop40.jpg"></a>
                    <a href="javascript:openPhotoSwipe(40);"><img class="shop" src="images/shop/shop41.jpg"></a>

                    <a href="javascript:openPhotoSwipe(41);"><img class="shop" src="images/shop/shop42.jpg"></a>
                    <a href="javascript:openPhotoSwipe(43);"><img class="shop" src="images/shop/shop44.jpg"></a>
                    <a href="javascript:openPhotoSwipe(44);"><img class="shop" src="images/shop/shop45.jpg"></a>
                    <a href="javascript:openPhotoSwipe(45);"><img class="shop" src="images/shop/shop46.jpg"></a>
                    <a href="javascript:openPhotoSwipe(49);"><img class="shop" src="images/shop/shop50.jpg"></a>
                    <a href="javascript:openPhotoSwipe(51);"><img class="shop" src="images/shop/shop52.jpg"></a>

                    <a href="javascript:openPhotoSwipe(47);"><img class="shop" src="images/shop/shop48.jpg"></a>
                    <a href="javascript:openPhotoSwipe(48);"><img class="shop" src="images/shop/shop49.jpg"></a>
                    <a href="javascript:openPhotoSwipe(52);"><img class="shop" src="images/shop/shop53.jpg"></a>
                    <a href="javascript:openPhotoSwipe(46);"><img class="shop" src="images/shop/shop47.jpg"></a>
                    <a href="javascript:openPhotoSwipe(34);"><img class="shop" src="images/shop/shop35.jpg"></a>
                    <div class="clear-all">&nbsp;</div>
                </div>
                <div class="clear-all">&nbsp;</div>
            </div>

<?php
    include 'includes/footer.php';
?>
        </div>
<?php
    include 'includes/galleryOverlay.php';
?>
    </body>
</html>