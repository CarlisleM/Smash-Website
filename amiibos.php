<!DOCTYPE html>
<html>

	<link rel="stylesheet" href="style.css">

	<head>
		<h1><center>Kami Custom Designs</center></h1>
	</head>

	<body bgcolor="#E6E6FA">			
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="controllers.html">Controllers</a></li>
			<li><a href="amiibos.html">Amiibos</a></li>
			<li><a href="clothing.html">Clothing</a></li>
			<li><a href="jewellery.html">Jewellery</a></li>
			<li><a href="about.html">About</a></li>
		</ul>

	<script type="text/javascript">
		var folder = "images/";

		$.ajax({
			url : folder,
			success: function (data) {
				$(data).find("a").attr("href", function (i, val) {
					if( val.match(/\.jpg|\.png|\.gif/) ) { 
						$("body").append( "<img src='"+ folder + val +"'>" );
					} 
				});
			}
		});
	</script>	
	

		
	<div id="footer"></div>
	
	</body>

</html>