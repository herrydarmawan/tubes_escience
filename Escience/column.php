<?php 
	//Include Koneksi
	include "koneksi.php";

	//Membuat Query
	$q=mysqli_query($con,"select * from rekapmhs");
    $data = mysqli_fetch_row($q);
?>

<!-- File yang diperlukan dalam membuat chart -->
<script src="js/jquery.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
    
<script type="text/javascript">
$(function () {
    $('#view').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Mahasiswa per Program Studi'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Program Studi'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
		
		<?php
		while($r=mysqli_fetch_array($q)){
		 	echo "{ name: '".$r["nmprogdi"]."',data: [".$r["jmlmhs"]."]},";
		}
		?>
		
		]
    });
});
</script>

<div id="view" style=" height: 2px; margin: 0 auto"></div>  
