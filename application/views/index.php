<!-- Footer -->
<style>
	body {
		overflow-x: hidden;
	}

	section.card {
		background: #f6f6f6;
		border-radius: 24px 24px 24px 48px;
		padding: 48px 48px 48px 308px;
		margin: 84px 0;
		width: 60vw;
		max-width: 920px;
		min-width: 640px;
		display: flex;
		flex-direction: row;
		align-self: flex-start;
		position: relative;
		box-shadow: 5px 0 0 0 rgba(204, 204, 204, 0.3), -5px 0 0 0 rgba(204, 204, 204, 0.3), 0 5px 0 0 rgba(204, 204, 204, 0.3);
	}

	/* section.card .text-content {
		display: flex;
		flex-direction: column;
		width: calc(-132vw);
	}

	section.card .text-content h3 {
		margin: 0;
		font-size: 1.5em;
		max-width: 20ch;
	}

	section.card .text-content p {
		margin: 16px 0 24px;
		max-width: 36ch;
	} */

	section.card .text-content a {
		border: 3px solid #000;
		color: #000;
		align-self: flex-start;
		text-decoration: none;
		padding: 16px 32px;
		border-radius: 12px;
		transition: 400ms all;
	}

	section.card .text-content a:hover {
		background: #000;
		color: white;
	}

	section.card .visual {
		width: 240px;
		height: 100%;
		position: absolute;
		top: -24px;
		left: 24px;
		overflow: hidden;
		border-radius: 24px;
		box-shadow: 1px 2px 6px rgba(255, 255, 255, 0.25), 2px 6px 12px rgba(0, 0, 0, 0.25);
	}

	section.card .visual img {
		height: 110%;
	}

	section.card:nth-of-type(odd) {
		margin: 0 0 0 248px;
		border-radius: 24px 24px 48px 24px;
		padding: 48px 308px 48px 60px;
	}

	section.card:nth-of-type(odd) .visual {
		right: 24px;
		left: auto;
	}

	section.card:nth-of-type(odd) .text-content a {
		align-self: flex-start;
	}

	/* article {
		margin: auto;
		display: block;
		width: calc(308vw);
		max-width: calc(1168px);
		min-width: calc(888px);
	} */

	body {
		margin: 0;
		padding: 96px;
		/* font-size: 21px; */
		background: #fff;
		color: #000;
		font-family: "gelica", sans-serif;
		font-weight: 100;
		font-style: normal;
	}

	@media all and (max-width: 1100px) {
		body {
			padding: 96px 48px 24px;
		}

		article {
			width: 100%;
			max-width: 100%;
			min-width: 100%;
		}

		section.card {
			width: 100%;
			max-width: 100%;
			min-width: 100%;
		}

		section.card .text-content {
			width: 100%;
		}

		section.card:nth-of-type(odd) {
			margin: 0;
		}
	}

	@media all and (max-width: 720px) {
		body {
			padding: 48px 24px 0;
		}

		section.card {
			margin: 64px 0;
			padding: 88px 36px 36px;
			flex-direction: column;
			border-radius: 24px;
		}

		section.card:nth-of-type(odd) {
			padding: 88px 36px 36px;
			border-radius: 24px;
		}

		section.card .text-content h3 {
			max-width: calc(-50%);
			font-size: 1em;
		}

		section.card .text-content p,
		section.card .text-content a {
			font-size: 0.8em;
		}

		section.card .visual,
		section.card:nth-of-type(odd) .visual {
			width: 150px;
			height: 150px;
			right: 16px;
			left: auto;
		}

		section.card .visual img,
		section.card:nth-of-type(odd) .visual img {
			width: 100%;
			height: auto;
		}
	}
</style>

<article>
	<section class="card">
		<div class="text-content">
			<h3>Elevate Your Brand with Exceptional Design</h3>
			<p>Your website is often the first point of contact for potential customers. We believe great design can help elevate your brand and make a lasting impression.</p><br><br>
			<a href="#">Agendar</a>
		</div>
		<div class="visual">
			<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
		</div>
	</section>

	<section class="card">
		<div class="text-content">
			<h3>Responsive Design for Every Screen Size</h3>
			<p>We specialize in creating responsive designs that look great on desktop, tablet, and mobile devices, ensuring your site is accessible to all your visitors.</p><br><br>
			<a href="#">Agendar</a>
		</div>
		<div class="visual">
			<img src="https://images.unsplash.com/photo-1564460576398-ef55d99548b2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
		</div>
	</section>
</article>