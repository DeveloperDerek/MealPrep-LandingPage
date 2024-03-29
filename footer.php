<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whalewatch
 */

?>

	<footer class="container-fluid footer d-none d-md-block">
		<div class="row d-flex justify-content-around text-center py-3 px-5">
			<div class="col-3 footer-item">
				<h5>Get in touch</h5>
				<ul class="list-unstyled">
					<li>(323) 325-5180</li>
					<li>5318 E 2nd St, #105</li>
					<li>Long Beach, CA 90803-5324</li>
				</ul>
			</div>
			<div class="col-3 footer-item">
				<h5>Company</h5>
				<ul class="list-unstyled">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Food Saftey</a></li>
					<li><a href="#">Testimonials</a></li>
				</ul>
			</div>
			<div class="col-3 footer-item">
				<h5>Explore</h5>
				<ul class="list-unstyled">
					<li><a href="#">Sponsored Athletes</a></li>
					<li class="social-icons">
						<i class="fab fa-facebook-square fb"></i>
						<i class="fab fa-instagram-square ig"></i>
						<i class="fab fa-twitter-square tw"></i>
					</li>
				</ul>
			</div>
			<div class="col-3 footer-item newsletter">
				<h5>Sign up for our newsletter</h5>
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Enter email address" />
						<button class="btn btn-outline-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</footer>
	
	<ul class="list-group list-group-flush bg-light mx-5 py-3 d-md-none">
		<li class="list-group-item bg-light footer-item" data-toggle="collapse" href="#getintouch" role="button" aria-expanded="false" aria-controls="getintouch">
			<h5>Get in touch</h5>
			<div class="collapse" id="getintouch">
				<ul class="list-unstyled">
					<li>(323) 325-5180</li>
					<li>5318 E 2nd St, #105</li>
					<li>Long Beach, CA 90803-5324</li>
				</ul>
			</div>
		</li>
		<li class="list-group-item bg-light footer-item" data-toggle="collapse" href="#company" role="button" aria-expanded="false" aria-controls="company">
			<h5>Company</h5>
			<div class="collapse" id="company">
				<ul class="list-unstyled">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Food Saftey</a></li>
					<li><a href="#">Testimonials</a></li>
				</ul>
			</div>
		</li>
		<li class="list-group-item bg-light footer-item" data-toggle="collapse" href="#explore" role="button" aria-expanded="false" aria-controls="explore">
			<h5>Explore</h5>
			<div class="collapse" id="explore">
			<ul class="list-unstyled">
					<li><a href="#">Sponsored Athletes</a></li>
					<li class="social-icons">
						<i class="fab fa-facebook-square fb"></i>
						<i class="fab fa-instagram-square ig"></i>
						<i class="fab fa-twitter-square tw"></i>
					</li>
				</ul>
			</div>
		</li>
		<li class="list-group-item bg-light footer-item" data-toggle="collapse" href="#newsletter" role="button" aria-expanded="false" aria-controls="newsletter">
			<h5>Newsletter</h5>
			<div class="collapse" id="newsletter">
				<div class="footer-item newsletter">
					<form>
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Enter email address" required />
							<input type="button" class="btn-outline-success">Submit</input>
						</div>
					</form>
				</div>
			</div>
		</li>
	</ul>


</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3h56lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
