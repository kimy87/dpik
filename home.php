<?php include('header.php'); ?>
<div style="height:400px;">
<!--<div class="full-width">
	<div class="inner">
		<div class="slide">
			<div class="textimage">HIGHWAY LINKAGE 
				<br><br>
				<span style="font-size:12px;">Westport To Northport/Southport</span>
			</div>
			<img src="img/slide1.jpg" width="900" height="330">
		</div>
		<div class="slide">
			<div class="textimage">HIGHWAY LINKAGE 
				<br><br>
				<span style="font-size:12px;">Westport To Northport/Southport</span>
			</div>
			<img src="img/slide1.jpg" width="900" height="330">
		</div>
	</div>
	<div class="slide-nav"></div>
	
</div>-->

<div class="box_skitter box_skitter_large" style="position: absolute;">
    <ul>
        <li>
			<a href="#cube"><img src="img/slide1.jpg" class="circles" /></a>
			<div class="label_text">
				<p>HIGHWAY LINKAGE</p>
				<br><br>
				<span style="font-size:12px;padding-left:10px;">Westport To Northport/Southport</span>
			</div>
		</li>
        <li>
			<a href="#cubeRandom"><img src="img/slide2.jpg" class="circles" /></a>
			<div class="label_text">
				<p>HIGHWAY LINKAGE</p>
				<br><br>
				<span style="font-size:12px;padding-left:10px;">Westport To Northport/Southport</span>
			</div>
		</li>
		<li>
			<a href="#cube"><img src="img/slide1.jpg" class="circles" /></a>
			<div class="label_text">
				<p>HIGHWAY LINKAGE</p>
				<br><br>
				<span style="font-size:12px;padding-left:10px;">Westport To Northport/Southport</span>
			</div>
		</li>
		<li>
			<a href="#cube"><img src="img/slide2.jpg" class="circles" /></a>
			<div class="label_text">
				<p>HIGHWAY LINKAGE</p>
				<br><br>
				<span style="font-size:12px;padding-left:10px;">Westport To Northport/Southport</span>
			</div>
		</li>
        
    </ul>
</div>

</div>

<div style="position:relative;">
	
	<table border="0">
	<tr>
	<td width="260">
	<table border="0">
	<tr><td class="texthome">Publication</td></tr>
	<tr><td><img src="img/img1.jpg" /></td></tr>
	<tr><td class="texthomesmall">Lorem ipsum dolor sit amet</td></tr>
	</table>
	</td>
	<td width="55">&nbsp;</td>
	<td width="260">
	<table border="0">
	<tr><td class="texthome">Corporate Responsibility</td></tr>
	<tr><td><img src="img/img2.jpg" /></td></tr>
	<tr><td class="texthomesmall">Lorem ipsum dolor sit amet</td></tr>
	</table>
	</td>
	<td width="55">&nbsp;</td>
	<td width="260">
	<table border="0">
	<tr><td class="texthome">International Exposure</td></tr>
	<tr><td><img src="img/img3.jpg" /></td></tr>
	<tr><td class="texthomesmall">Lorem ipsum dolor sit amet</td></tr>
	</table>
	</td>
	</tr>
	</table>

</div>



<script src="js/slider.js"></script>
<script>
    // Just to fix IE issues when console isn't defined, only used for the demo - not required for the slider
    window.console = window.console || {
            log: function () {}
        };
        $('.full-width').fullWidth()
            .on('fws.start', function(e, data){
                console.log( 'Moving '+ data.direction +' from slide '+ data.status.previous +' to slide '+ data.status.current );
            })
            .on('fws.finish', function(e, data){
                console.log( 'Moved from slide ' + data.status.previous + ' to slide ' + data.status.current );
            });
</script>

<?php include('footer.php'); ?>