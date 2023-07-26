<style>
	/* Common styles for both card sections */
	.card-container {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	section.card {
		background: #f6f6f6;
		border-radius: 10px;
		margin: 20px; /* Reduce margin for spacing between cards */
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		flex: 1; /* Allow cards to take equal space in the row */
		max-width: 280px; /* Limit the maximum width of each card */
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
		padding: 12px 12px; /* Increased padding for the button */
		border-radius: 8px;
		transition: 400ms all;
		margin-top: 10px;
		text-align: center; /* Center the button text */
	}

	/* Responsive styles for card sections */
	@media screen and (min-width: 768px) {
		/* To display 3 cards in a row, adjust flex-basis and max-width */
		section.card {
			flex-basis: calc(33.3333% - 40px);
			max-width: calc(33.3333% - 40px);
		}
	}

	/* For larger screens, display 4 cards in a row */
	@media screen and (min-width: 992px) {
		section.card {
			flex-basis: calc(25% - 40px);
			max-width: calc(25% - 40px);
		}
	}

	/* Styles for the images remain unchanged */
	section.card .visual {
		width: 150px;
		max-height: 150px;
		margin-right: 20px;
	}

	section.card .visual img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		border-radius: 10px;
	}
</style>

<div class="card-container">
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
	<!-- Add more card sections as needed -->
</div>
