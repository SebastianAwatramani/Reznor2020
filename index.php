<?php include("includes/docHead.php"); ?>
		<link rel="stylesheet" href="css/indexStyles.css">
</head>
<?php include("includes/header.php"); ?>
	<!-- END HEADER -->
	<!-- BEGIN MAIN SECTION -->
	<main>
		<div id="slideWrapper" class="c100">
			<img src="images/slide1.jpg" alt="" class="slideImage">	
			<h1 id="voteHeadline">Reznor 20&#92;20</h1>
		</div>
		<div id="carousel" class="c100">
			<div class="c33 carouselItem">
				<div class="c100 carouselItemWrapper">
					<figure class="carouselFig"><img src="assets/carousel1.png" alt="" class="carouselImg"></figure>
					<h2>Some Heading</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
			</div><div class="c33 carouselItem">
				<div class="c100 carouselItemWrapper">
					<figure class="carouselFig"><img src="assets/carousel3.png" alt="" class="carouselImg"></figure>
					<h2>Some Heading</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
			</div><div class="c33 carouselItem">
				<div class="c100 carouselItemWrapper">
					<figure class="carouselFig"><img src="assets/carousel2.png" alt="" class="carouselImg"></figure>
					<h2>Some Heading</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
			</div>
			<div class="spacer" style="clear: both;"></div>	
		</div>
		<div class="spacer" style="clear: both;"></div>	
	</main>
	<!-- END MAIN SECTION -->
	<!-- BEGIN FOOTER -->
	<?php include("includes/footer.php"); ?>
<script>
	
/*
	setInterval(function hello() {

		var slide = document.querySelector("#slideWrapper img");

		var base = "images/slide";
		var ext = ".jpg";
		
		var currentImg = parseInt(slide.src);
				 console.log(slide.src);
		if(currentImg < 3) {
			slide.src = base + currentImg++ + ext;
							// console.log(base + "\n" + (currentImg++) + "\n" + ext);
		} else {
			slide.src = base + 1 + ext;

				// console.log(base + "\n" + (currentImg + 1) + "\n" + ext);
		}

		return hello;


	}(), 2000);
*/	


</script>
</html>
