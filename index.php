<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whalewatch
 */

get_header();
?>
	<div class="mb-4">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="slide-1"></div>
					<div class="hero">
						<h1>Professional Chefs</h1>
						<h1>Healthy Meals</h1>
						<button class="btn-cta">Start Now</button>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide-2"></div>
					<div class="hero">
						<h1>Free delivery,</h1>
						<h1>Just for you</h1>
						<button class="btn-cta">Start Now</button>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide-3"></div>
					<div class="hero">
						<h1>Select a diet</h1>
						<h1>Live life easier</h1>
						<button class="btn-cta">Start Now</button>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="my-5">
		<a name="howitworks">
		<h1 class="howitworks">How it Works</h1>
		<div class="row mx-3 grid">
			<div class="col-6 col-lg-3 box">
				<i class="fas mb-2 fa-wind"></i>
				<header>
					<span>Chill</span>
				</header>
				<p>Your prepared meals arrive fresh in an insulated box. Just unpack and put them in the fridge.</p>
			</div>
			<div class="col-6 col-lg-3 box">
				<i class="fas mb-2 fa-fire"></i>
				<header>
					<span>Heat</span>
				</header>
				<p>No time? No problem. Just heat up when hungry. Ready in 3 minutes.</p>
			</div>
			<div class="col-6 col-lg-3 box">
				<i class="fas mb-2 fa-utensils"></i>
				<header>
					<span>Eat</span>
				</header>
				<p>Breakfast, Lunch, Dinner. Fresh taste catered for you based on your diet.</p>
			</div>
			<div class="col-6 col-lg-3 box">
				<i class="fas mb-2 fa-redo"></i>
				<header>
					<span>Repeat</span>
				</header>
				<p>Every week, pre-made meals are delivered to right to your door, nationwide.</p>
			</div>
		</div>
	</div>

	<div class="prices">
        <section class="container mt-5">
            <div class="row mx-2 my-3">

                <!-- item -->
                <div class="col-md-4 text-center px-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 1</h3>
                            <p>$100 / Month</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                    </div>
                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-4 text-center px-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 2</h3>
                            <p>$200 / Month</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                    </div>
                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-4 text-center px-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 3</h3>
                            <p>$300 / Month</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                    </div>
                </div>
                <!-- /item -->

            </div>
        </secti>
	</div>
	<main id="primary" class="site-main">
		<?php

		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
