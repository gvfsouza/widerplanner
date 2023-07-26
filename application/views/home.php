<style>
	/* Common styles for both card sections */
	section.card {
		background: #f6f6f6;
		border-radius: 10px;
		margin: 40px 0;
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		position: relative;
		overflow: hidden;
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
		padding: 6px 12px;
		border-radius: 8px;
		transition: 400ms all;
		margin-top: 10px;
	}

	section.card .text-content a:hover {
		background: #344966;
		color: white;
	}

	/* Responsive styles for card sections */
	@media screen and (min-width: 768px) {
		section.card {
			display: flex;
			flex-direction: row;
		}

		section.card .text-content {
			flex: 1;
			padding: 32px;
		}

		section.card .visual {
			width: 200px;
			height: 100%;
			position: absolute;
			top: -24px;
			left: -30px; /* Adjust the left positioning as needed */
			overflow: hidden;
			border-radius: 24px;
			box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
		}

		section.card .visual img {
			height: 100%;
			width: 100%;
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
