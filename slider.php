<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slides Villes Cameroun</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/Douala.jpg" alt="Douala">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Evadez-vous à Douala quand vous voulez.</a></h2>
							<lable></lable>
							<h1><a href="#">LA DECOUVERTE DU CAMEROUN</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/Yaounde.jpg" alt="Yaounde">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Amusez-vous à Yaoundé faite vous plaisir.</a></h2>
							<lable></lable>
							<h1><a href="#">LE GUIDE TOURISTIQUE</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/Ngaoundere.jpg" alt="Ngaoundere">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Evadez-vous à Ngaoundéré quand vous voulez.</a></h2>
							<lable></lable>
							<h1><a href="#">LA DECOUVERTE DU CAMEROUN</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/Dschang.jpg" alt="Dschang">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">Amusez-vous à Dshang faite vous plaisir.</a></h1>
							<lable></lable>
							<h2><a href="#">LE GUIDE TOURISTIQUE</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/Foumban.jpg" alt="Foumban">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Evadez-vous à Foumban quand vous voulez.</a></h2>
							<lable></lable>
							<h1><a href="#">LA DECOUVERTE DU CAMEROUN</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->
</body>
</html>
