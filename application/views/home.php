<style>
	/* Common styles for both card sections */
	section.card {
		background: #f6f6f6;
		border-radius: 10px;
		margin: 40px 0;
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		display: flex;
		flex-direction: column;
	}

	section.card .text-content {
		padding: 16px;
	}

	section.card .text-content h3 {
		font-size: 22px;
	}

	section.card .text-content a {
		display: block;
		border: 3px solid #344966;
		color: #344966;
		text-decoration: none;
		padding: 6px 6px;
		border-radius: 8px;
		transition: 400ms all;
		margin-top: 10px;
		width: 140px; /* Added width to reduce button size */
		text-align: center; /* Center the button text */
	}

	/* Responsive styles for card sections */
	@media screen and (min-width: 768px) {
		section.card {
			flex-direction: row;
			align-items: center;
		}

		section.card .text-content {
			flex: 1;
			padding: 32px;
		}

		section.card .visual {
			width: 150px; /* Adjust the width of the image for larger screens */
			max-height: 150px; /* Set a maximum height to maintain proportions */
			margin-right: 20px; /* Added some spacing between the image and text */
		}

		section.card .visual img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border-radius: 10px; /* Adjust the border-radius for the image */
		}

		section.card .text-content a {
			display: inline-block; /* Display the button inline for larger screens */
			margin-top: 0; /* Remove the top margin for the button */
		}
	}
</style>

<section class="card">
	<div class="visual">
		<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
	</div>
	<div class="text-content">
		<h3>Elevate Your Brand with Exceptional Design</h3>
		<a href="perfil_estabelecimento">Ver Estabelecimento</a>
	</div>
</section>
<section class="card">
	<div class="visual">
		<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
	</div>
	<div class="text-content">
		<h3>Elevate Your Brand with Exceptional Design</h3>
		<a href="#">Ver Estabelecimento</a>
	</div>
</section>
