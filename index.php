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
<!-- CAROUSEL -->
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
					<div class="hero w-100">
						<h1>Professional Chefs</h1>
						<h1>Healthy Meals</h1>
						<button class="btn-cta" data-toggle="modal" data-target="#meal-plan">Start Now</button>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide-2"></div>
					<div class="hero w-100">
						<h1 >Free delivery,</h1>
						<h1 >Just for you</h1>
						<button class="btn-cta" data-toggle="modal" data-target="#meal-plan">Start Now</button>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide-3"></div>
					<div class="hero w-100">
						<h1 >Select a diet</h1>
						<h1 >Live life easier</h1>
						<button class="btn-cta" data-toggle="modal" data-target="#meal-plan">Start Now</button>
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

<!-- Modal -->

	<div class="modal fade" id="meal-plan" tabindex="-1" aria-labelledby="meal-plan-label" aria-hidden="true">
		<div class="modal-dialog">
			<!-- Meal Plan Modal -->
			<div id="mealplan-modal" class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="meal-plan-label">Choose from our meal plans</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-btns d-flex justify-content-between mx-3 pt-3">
					<button id="modal1-btn" class=" w-100 btn active-btn">Balanced</button>
					<button id="modal2-btn" class=" w-100 btn">Keto</button>
					<button id="modal3-btn" class=" w-100 btn">Paleo</button>
					<button id="modal4-btn" class=" w-100 btn">Vegan</button>
				</div>
				<div class="modal-body">
					<div id="modal1">
						<img class="rounded img-fluid" src="<?php echo THEME_IMG_PATH; ?>/balanced.jpeg">
						<p class="pt-2">Our Balanced diet is a balanced diet containing differing kinds of foods in certain quatities and proportions so that the requirement for calories, proteins, minerals, vitamins and alternative nutrients is adequate and a small provision is reserved for additional nutrients to endure the short length of leanness.</p>
					</div>
					<div id="modal2">
						<img class="rounded img-fluid" src="<?php echo THEME_IMG_PATH; ?>/keto.jpeg">
						<p class="pt-2">The ketogenic diet is a high-fat, adequate-protein, low-carbohydrate diet. This reduction in carbs puts your body into a metabolic state called ketosis. When this happens, your body becomes incredibly efficient at burning fat for energy. It also turns fat into ketones in the liver, which can supply energy for the brain</p>
					</div>
					<div id="modal3">
						<img class="rounded img-fluid" src="<?php echo THEME_IMG_PATH; ?>/paleo.jpeg">
						<p class="pt-2">A paleo diet typically includes lean meats, fish, fruits, vegetables, nuts and seeds — foods that in the past could be obtained by hunting and gathering. A paleo diet limits foods that became common when farming emerged about 10,000 years ago. These foods include dairy products, legumes and grains.</p>
					</div>
					<div id="modal4">
						<img class="rounded img-fluid" src="<?php echo THEME_IMG_PATH; ?>/vegan.jpeg">
						<p class="pt-2">Veganism is defined as a way of living that attempts to exclude all forms of animal exploitation and cruelty, whether for food, clothing or any other purpose. For these reasons, the vegan diet is devoid of all animal products, including meat, eggs and dairy. People choose to follow a vegan diet range from ethics to environmental concerns, but they can also stem from a desire to improve health.</p>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<button id="next-btn1"type="button" class="btn">Next</button>
				</div>
			</div>
			<!-- Price Plan Modal -->
			<div id="price-modal" class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="meal-plan-label">Select a package deal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-btns d-flex justify-content-between mx-3 pt-3">
					<button id="basic-btn" class="w-100 btn active-btn">Basic</button>
					<button id="standard-btn" class="w-100 btn">Standard</button>
					<button id="ultra-btn" class="w-100 btn">Ultra</button>
				</div>
				<div class="modal-body">
					<div id="modal-price1">
						<h2 class="text-center py-3">$11.99 / Meal</h2>
						<ul class="list-group text-center">
							<li class="list-group-item"><i class="fas fa-seedling"></i> Fresh & Sustainable </li>
							<li class="list-group-item"><i class="fas fa-dice-one"></i> Lunch</li>
							<li class="list-group-item"><i class="fa fa-check"></i> 4 meals per week</li>
						</ul>
					</div>
					<div id="modal-price2">
						<h2 class="text-center py-3">$9.99 / Meal</h2>
						<ul class="list-group text-center">
							<li class="list-group-item"><i class="fas fa-seedling"></i> Fresh & Sustainable </li>
							<li class="list-group-item"><i class="fas fa-dice-one"></i> Lunch, Dinner</li>
							<li class="list-group-item"><i class="fa fa-check"></i> 8 meals per week</li>
						</ul>
					</div>
					<div id="modal-price3">
						<h2 class="text-center py-3">$7.99 / Meal</h2>
						<ul class="list-group text-center">
							<li class="list-group-item"><i class="fas fa-seedling"></i> Fresh & Sustainable </li>
							<li class="list-group-item"><i class="fas fa-dice-one"></i> Breakfast, Lunch, Dinner</li>
							<li class="list-group-item"><i class="fa fa-check"></i> 12 meals per week</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<button id="prev-btn" type="button" class="btn">Previous</button>
					<button id="next-btn2"type="button" class="btn">Next</button>
				</div>
			</div>
			<!-- End Gif -->	
			<div id="gif-modal" class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="meal-plan-label">Thanks</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="modal-price1">
						<img alt="thumbs-up-while-chewing gif" class="img-fluid mx-auto d-block p-5" src="<?php echo THEME_IMG_PATH; ?>/gif.gif">
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<button id="prev-btn3" type="button" class="btn">Previous</button>
				</div>
			</div>

		</div>
	</div>

<!-- HOW IT WORKS -->
	<div id="howitworks" class="container-fluid my-5">
		<h1 class="howitworks">How it Works</h1>
		<div class="row grid">
			<div id="chill" class="col-6 col-md-3 px-3 pl-1 box">
				<i class="fas mb-2 fa-wind"></i>
				<header>
					<span>Chill</span>
				</header>
				<p>Your prepared meals arrive fresh in an insulated box. Just unpack and put them in the fridge. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat nulla tortor, id blandit ante finibus vel. Integer velit erat, fermentum a porta et, scelerisque ac arcu. Morbi et facilisis ante. Sed rutrum viverra consectetur. Suspendisse tincidunt, metus vel porta ornare, est ante fermentum sapien, sit amet eleifend mi turpis in dui. Mauris eu arcu dui. Nullam dapibus libero eget nisl mattis aliquam. Etiam at placerat lectus.</p>
			</div>
			<div id="heat" class="col-6 col-md-3 px-3 pr-1 box">
				<i class="fas mb-2 fa-fire"></i>
				<header>
					<span>Heat</span>
				</header>
				<p>No time? No problem. Just heat up when hungry. Ready in 3 minutes. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat nulla tortor, id blandit ante finibus vel. Integer velit erat, fermentum a porta et, scelerisque ac arcu. Morbi et facilisis ante. Sed rutrum viverra consectetur. Suspendisse tincidunt, metus vel porta ornare, est ante fermentum sapien, sit amet eleifend mi turpis in dui. Mauris eu arcu dui. Nullam dapibus libero eget nisl mattis aliquam. Etiam at placerat lectus.</p>
			</div>
			<div id="eat" class="col-6 col-md-3 px-3 pl-1 box">
				<i class="fas mb-2 fa-utensils"></i>
				<header>
					<span>Eat</span>
				</header>
				<p>Breakfast, Lunch, Dinner. Fresh taste catered for you based on your diet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat nulla tortor, id blandit ante finibus vel. Integer velit erat, fermentum a porta et, scelerisque ac arcu. Morbi et facilisis ante. Sed rutrum viverra consectetur. Suspendisse tincidunt, metus vel porta ornare, est ante fermentum sapien, sit amet eleifend mi turpis in dui. Mauris eu arcu dui. Nullam dapibus libero eget nisl mattis aliquam. Etiam at placerat lectus.</p>
			</div>
			<div id="repeat"class="col-6 col-md-3 px-3 pr-1 box">
				<i class="fas mb-2 fa-redo"></i>
				<header>
					<span>Repeat</span>
				</header>
				<p>Every week, pre-made meals are delivered to right to your door, nationwide. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat nulla tortor, id blandit ante finibus vel. Integer velit erat, fermentum a porta et, scelerisque ac arcu. Morbi et facilisis ante. Sed rutrum viverra consectetur. Suspendisse tincidunt, metus vel porta ornare, est ante fermentum sapien, sit amet eleifend mi turpis in dui. Mauris eu arcu dui. Nullam dapibus libero eget nisl mattis aliquam. Etiam at placerat lectus.</p>
			</div>
		</div>
	</div>


<!-- ABOUT -->
	<div class="container-fluid my-4 py-3">
		<div class="row mb-5 about">

			<div class="col-md-7 pb-4 mb-2">
				<img class="rounded img-fluid" src="<?php echo THEME_IMG_PATH; ?>/mealprep.jpeg">
			</div>
			<div class="col-md-5 px-4 h-100">
				<h2 class="text-center mb-3">Redefining Fast Food to Fuel Your Day</h2>
				<p class="cap">Sustain your body in an efficient way, naturally.</p>
				<p class="para">A food source that is super fuel for you. Each compact dish is filled with macronutrients, balanced calories and protein. Our wide range of organically-sourced meats, fish, grains, oats, veggies and fruits offer a building block of nourishment that will help you optimize your health, fitness and lifestyle.</p>
				<button class="btn btn-block" data-toggle="modal" data-target="#meal-plan">View Meal Plans</button>
			</div>
		</div>
	</div>


<!-- PRICE TABLE -->
	<div id="prices" class="prices">
        <section class="container-fluid">
            <div class="row">
                <!-- item 1-->
                <div class="col-md-4 text-center px-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Basic Deal</h3>
                            <p class="pt-2">$11.99 / Meal</p>
                        </div>
                        <ul class="list-group m7-5 text-center">
                            <li class="list-group-item">
								<h6><i class="fas fa-seedling"></i> Fresh & Sustainable</h6>
							</li>
                            <li class="list-group-item">
								<h6><i class="fas fa-dice-one"></i> Lunch</h6>
							</li>
                            <li class="list-group-item">
								<h6><i class="fa fa-check"></i> 4 meals per week</h6>
							</li>
                        </ul>
                        <button class="btn btn-lg" data-toggle="modal" data-target="#meal-plan">Choose</button>
                    </div>
                </div>
                <!-- item 2-->
                <div class="col-md-4 text-center px-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Standard Deal</h3>
                            <p class="pt-2">$9.99 / Meal</p>
                        </div>
                        <ul class="list-group m7-5 text-center">
                            <li class="list-group-item">
								<h6><i class="fas fa-seedling"></i> Fresh & Sustainable</h6>
							</li>
                            <li class="list-group-item">
								<h6><i class="fas fa-dice-two"></i> Lunch, Dinner</h6>
							</li>
                            <li class="list-group-item">
								<h6><i class="fa fa-check"></i> 8 meals per week</h6>
							</li>
                        </ul>
                        <button class="btn btn-lg" data-toggle="modal" data-target="#meal-plan">Choose</button>
                    </div>
                </div>
                <!-- item 3-->
                <div class="col-md-4 text-center px-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Ultra Deal</h3>
                            <p class="pt-2">$7.99 / Meal</p>
                        </div>
                        <ul class="list-group m7-5 text-center">
                            <li class="list-group-item">
								<h6><i class="fas fa-seedling"></i> Fresh & Sustainable</h6> 
							</li>
                            <li class="list-group-item">
								<h6><i class="fas fa-dice-three"></i> Breakfast, Lunch, Dinner</h6>
							</li>
                            <li class="list-group-item">
								<h6><i class="fa fa-check"></i> 12 meals per week</h6>
							</li>
                        </ul>
                        <button class="btn btn-lg" data-toggle="modal" data-target="#meal-plan">Choose</button>
                    </div>
                </div>
            </div>
        </section>
	</div>

	<main id="primary" class="site-main">
		<?php

		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
