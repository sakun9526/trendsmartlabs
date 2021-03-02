<!DOCTYPE html>
<html>
<head>
	<title>TRENDSMART LABS (PVT) LTD</title>
	<style type="text/css">	
	body, html {
	  height: 100%
	}

	.bgimg {
	  /* Background image */
	  background-image: url('<?php echo asset_url();?>web_assets/img/comingsoon.jpg');
	  /* Full-screen */
	  height: 100%;
	  /* Center the background image */
	  background-position: center;
	  /* Scale and zoom in the image */
	  background-size: cover;
	  /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
	  position: relative;
	  /* Add a white text color to all elements inside the .bgimg container */
	  color: white;
	  /* Add a font */
	  font-family: "Courier New", Courier, monospace;
	  /* Set the font-size to 25 pixels */
	  font-size: 25px;
	}

	/* Position text in the top-left corner */
	.topleft {
	  position: absolute;
	  top: 0;
	  left: 16px;
	}

	/* Position text in the bottom-left corner */
	.bottomleft {
	  position: absolute;
	  bottom: 0;
	  left: 16px;
	}

	/* Position text in the middle */
	.middle {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  text-align: center;
	}

	/* Style the <hr> element */
	hr {
	  margin: auto;
	  width: 40%;
}
</style>
</head>
<body>
	<div class="bgimg">
	  <div class="topleft">
	    <p><a href="<?php echo base_url();?>" style="color: white;"> <= Back Home</a></p>
	  </div>
	  <div class="middle">
	    <h1>COMING SOON</h1>
	    <hr>
	    <div id="demo"></div>
	  </div>

	</div>

<script type="text/javascript">
	
	// Set the date we're counting down to
var countDownDate = new Date("Mar 31, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>


</body>
</html>