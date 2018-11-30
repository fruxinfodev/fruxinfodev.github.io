<footer class="section-padding footer">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-12">
				<div class="row">
					<div class="col-md-8 col-12">
						<h5>Awardz Colorants And Chemicals</h5>
						<p>As a benefit to our customers we provide technical support and R & D for the specialized products we supply. Our aim is to supply the food, cosmetics and colorant industry with excellent service from our technical and enthusiastic internal staff.</p>				
					</div>
					<div class="col-md-3 col-12 text-center">
						<ul class="pl-0">
							<li class="mt-0"><a href="#">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">Quotes</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
					<div class="col-12 text-center mt-4">
						<p class="copy-right">© 2018 Awardz colorants & chemicals - All Rights Reserved,<br> Design by <a href="https://www.fruxinfo.com/" target="_blank">Fruxinfo</a> | <a href="https://www.fruxinfo.com/web-design-new-york" target="_blank" style="color: #cb308f!important;">Website Design</a></p>						
					</div>					
				</div>
			</div>
			<div class="col-md-5 col-12">
				<div class="Contact-box text-center">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-fluid mb-4" style="width: 150px;">
					<div class="media text-left">
					  <span class="fa fa-map-marker"></span>
					  <div class="media-body">
					    <p>1082 Cornelius Street, Weltevreden Park, Roodepoort, 1715.</p>
					  </div>
					</div>
					<div class="media text-left">
					  <span class="fa fa-phone"></span>
					  <div class="media-body">
					    <p>+27828056210</p>
					  </div>
					</div>		
					<div class="media text-left">
					  <span class="fa fa-envelope"></span>
					  <div class="media-body">
					    <p>rajh@awardzlogistix.com</p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>



<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"></script>

<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.flexisel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/myjs.js"></script>
<script >

$(window).load(function() {
    $("#flexiselDemo3").flexisel({
        visibleItems: 2,
        itemsToScroll: 1, 
        dots:true,        
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:1210,
                visibleItems: 1,
                itemsToScroll: 1
            }
        }
    });
});
</script>

</body>
</html>