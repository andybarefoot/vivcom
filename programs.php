<!DOCTYPE html>
<html>
    <head>
        <title>VVCF</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />        
<?php
    include 'includes/linksScripts.php';
    include 'includes/galleryScripts.php';
?>
        <script>
            var photoArray = [
                {src: 'images/program-chart.png',w: 1398,h: 1048},
                {src: 'images/charts/chart-2012.png',w: 1398,h: 1048},
                {src: 'images/charts/chart-2013.png',w: 1398,h: 1048},
                {src: 'images/charts/chart-2014.png',w: 1398,h: 1048},
                {src: 'images/charts/chart-2015.png',w: 1398,h: 1048},
                {src: 'images/charts/chart-2016.png',w: 1398,h: 1048}
            ];
        </script>
    </head>
    <body>
<?php
    include 'includes/navigation.php';
?>
        <div id="main-body">
            <div id="primary-content">
                <h1>Programs</h1>
                <div class="gallery">
                    <a href="javascript:openPhotoSwipe(0);"><img id="gallery1" src="images/program-chart.png"></a>
                </div>
                <h2>Strategy</h2>
                <p>The VIVCOM Foundation Model of operation will be duplicated in all the communities we operate. We identify vulnerable homestead establish a net worked homestead i.e. big extended family to which we jointly work towards improving the standards of living of the entire home stead through empowerment. Empowerment to us means each single home in the home stead initiates an idea, innovates or adds value to that idea, grows the idea and replicates the idea to the wider home stead. As VIVCOM we acknowledge that families meet different challenges and we therefore encourage our families to participate actively in the choice of a remedy to the problems they face, hence the more choices the families make in lessening the problems they face, the more empowered they become, such remedies can therefore be transferred to others families in the wider home stead facing such similar challenges. VIVCOM provides a complete extended family structure where society members are mindful, responsible, and compassionate and care for others holistically. This networked family system aims at providing physical, emotional, spiritual and financial support to the wider homestead. VIVCOM Foundation will stretch out into farming, technical and vocational education as a means of sustainability and as another layer to strengthen the homesteads</p>
                <h2>Statistics</h2>
                <table class="chart">
                    <tr>
                        <td>Variables</td>
                        <td>2012</td>
                        <td>2013</td>
                        <td>2014</td>
                        <td>2015</td>
                        <td>2016</td>
                        <td>Total</td>
                    </tr>
                    <tr>
                        <td>Households/families</td>
                        <td>15</td>
                        <td>10</td>
                        <td>20</td>
                        <td>18</td>
                        <td>17</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Critically vulberable households</td>
                        <td>5</td>
                        <td>4</td>
                        <td>8</td>
                        <td>10</td>
                        <td>5</td>
                        <td>32</td>
                    </tr>
                    <tr>
                        <td>Moderately vulnerable households</td>
                        <td>2</td>
                        <td>3</td>
                        <td>8</td>
                        <td>6</td>
                        <td>8</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Generally vulnerable households</td>
                        <td>3</td>
                        <td>3</td>
                        <td>4</td>
                        <td>2</td>
                        <td>4</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>Clusters/Households</td>
                        <td>2</td>
                        <td>1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Vulnerable members (children & adults)</td>
                        <td>80</td>
                        <td>120</td>
                        <td>110</td>
                        <td>122</td>
                        <td>128</td>
                        <td>560</td>
                    </tr>
                    <tr>
                        <td>Farm (Goshen Yard)</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>School project (Timeless infants, Alpha & Omega)</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Business skills trained</td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>10</td>
                        <td>5</td>
                        <td>20</td>
                    </tr>
                </table>
                <a href="javascript:openPhotoSwipe(1);"><img class="chart" src="images/charts/chart-2012.png"></a>
                <a href="javascript:openPhotoSwipe(2);"><img class="chart" src="images/charts/chart-2013.png"></a>
                <a href="javascript:openPhotoSwipe(3);"><img class="chart" src="images/charts/chart-2014.png"></a>
                <a href="javascript:openPhotoSwipe(4);"><img class="chart" src="images/charts/chart-2015.png"></a>
                <a href="javascript:openPhotoSwipe(5);"><img class="chart" src="images/charts/chart-2016.png"></a>
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
