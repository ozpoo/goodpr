<?php get_header(); ?>

	<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<main role="main">

			<h2>We are hell bent on elevating grandiose thinkers and female leaders.</h2>

			<div class="flexer">
				<div></div>
				<div>
					<p>
						About the Good PR Co.
						The Good PR Co. is a mission driven company, hell bent on elevating grandiose thinkers and female leaders. We specialize in curating personal, fine-tuned media strategies centered on businesses’ and their owners’ unique stories. Above all, we are focused on empowering people with big ideas that are all to use to being told they are crazy or impractical. We look to partner with those who refuse to fit the mold, are obsessively passionate, inconveniently driven, smart visionaries. We are committed to helping “big-idear-ers” clearly define their brand, articulate what they stand for and share their purpose with the right audiences.
					</p>
				</div>
			</div>

			<h2>
				Good Values
				At the Good PR Co. we help and encourage others to pursue dreams, we lead with integrity and honesty and keep our values at the center of all we do.
			</h2>

			<div class="flexer">
				<div>
					<p>
						01
						Empathy
					</p>
					<p>
						“People will forget what you said, peoplezwill forget what you did, but people will never forget how you made them feel.” — Maya Angelou
					</p>
					<p>
						We want to leave people we interact with feeling understood, inspired and encouraged to pursue their dreams.
					</p>
				</div>
				<div>
					<p>
						02
						Direct
					</p>
					<p>
						“Well-behaved women seldom make history.” — Laurel Thatcher Ulrich
					</p>
					<p>
						We believe sugarcoating things, is a disservice to our clients. As communication pros, we believe openness, honesty and getting to the crux of the matter is the most efficient way to work and live.
					</p>
				</div>
				<div>
					<p>
						03
						Authenticity
					</p>
					<p>
						“Be yourself, everyone else is already taken.” — Oscar Wilde
					</p>
					<p>
						Caution: There may be swear words and sarcasm along the way, and sometimes singing aloud because we bring our real selves to work and appreciate and encourage people’s differences and idiosyncrasies.
					</p>
				</div>
				<div>
					<p>
						04
						Courage
					</p>
					<p>
						“It always seems impossible until it’s done.” — Nelson Mandela
					</p>
					<p>
						We are drawn to bold people who see the world differently and take action. We allow courage to drive our decisions, rather than fear.
					</p>
				</div>
				<div>
					<p>
						05
						Humor
					</p>
					<p>
						From there to here, and here to there, funny things are everywhere.” — Dr. Seuss
					</p>
					<p>
						It’s impossible to survive the world of PR, let alone life, without keeping our wits about us. We believe that life is funny. We hope you do too.
					</p>
				</div>
			</div>

			<div class="flexer">
				<div></div>
				<div>
					<p>
						Molly Smith, CEO and Founder
					</p>
					<p>
						After the better part of ten years working internally or as client counsel for Fortune 500 tech companies, startups and small businesses, Molly said goodbye to cushy corporate life and propelled head first into her vision of bringing a friendly and personal “Good PR” company to fruition. Although Molly was born and raised in the mean suburbs of beautiful Edmonds, Washington, after a three year stint practicing PR in Manhattan proper, she identifies as half New-Yorker and half Seattleite. She loves a good pun. She is a writer. A mentor. And a Washington State University, Edward R. Murrow School of Communications Alumna.
					</p>
				</div>
			</div>

		</main>

	<?php endwhile; ?>
	<?php endif; ?>

	<script>
	(function ($, root, undefined) {

		$(function () {

			$(document).ready(function() {
				init();
			});

			$(window).resize(function() {

			});

			var init = function() {

			};

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
