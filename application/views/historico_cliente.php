<!-- <ul class="list-group">
  <li class="list-group-item"><i class="fas fa-cut"></i> An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul> -->
<style>
  /* Please ❤ this if you like it! 😊 */

//SCSS Variables:
$bg-color: #f2f6f9;
$active-color: #25be64;
$inactive-color: #dadde4;
$new-color: #febf02;
$text-color: #141a4e;
$table-bg-color: #fefefe;
$table-head-bg-color: #e1e8f2;
$table-border-color: #edeef2;
$hover-bg-color: #fb4f83;
$hover-text-color: #ffffff;

//Responsive Breakpoint SCSS Mixin:

//xxs
@mixin mobile-xxs {
	@media (max-width: 400px) {
		@content;
	}
}
//min-sm
@mixin min-tablet {
	@media (min-width: 768px) {
		@content;
	}
}
//md
@mixin desktop {
	@media (max-width: 991px) {
		@content;
	}
}
//sm to md
@mixin tablet-to-desktop {
	@media (min-width: 768px) and (max-width: 991px) {
		@content;
	}
}

/* Googles Font Link */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/* Reset Style */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

html {
	font-size: 10px;
}

body {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	font-family: "Poppins", sans-serif;
	color: $text-color;
	background-color: $bg-color;
	font-size: 1.6rem;
}

/* Page Wrapper/Container Style */
.container {
	width: 100%;
	max-width: 1140px;
	margin: 0 auto;
	padding: 0 15px;
}

/* Responsive Table Style */
.responsive-table {
	background-color: $table-bg-color;
	border-collapse: collapse;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba($color: #000000, $alpha: 0.02);
	width: 100%;
	margin: 2rem 0;
	overflow: hidden;
	&__row {
		display: grid;
		border-bottom: 1px solid $table-border-color;
		padding: 0 1.5rem;
		@include min-tablet {
			grid-template-columns: 2fr 1fr 2fr 2fr 1fr;
		}
		@include tablet-to-desktop {
			grid-template-columns: 1fr 2fr 1fr;
		}
		th,
		td {
			padding: 1rem;
		}
	}
	&__head {
		background-color: $table-head-bg-color;
		@include desktop {
			display: none;
		}
		&__title {
			display: flex;
			align-items: center;
			font-weight: 500;
			text-transform: capitalize;
		}
	}
	&__body {
		.responsive-table__row {
			transition: 0.1s linear;
			transition-property: color, background;
			&:last-child {
				border-bottom: none;
			}
			&:hover {
				color: $hover-text-color;
				background-color: $hover-bg-color;
			}
		}
		&__text {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			&::before {
				margin-right: 1rem;
				font-weight: 600;
				text-transform: capitalize;
			}
			@include desktop {
				&::before {
					content: attr(data-title) " :";
				}
			}
			@include mobile-xxs {
				&::before {
					width: 100%;
					margin-bottom: 1rem;
				}
			}
			&--name {
				font-weight: 600;
				@include min-tablet {
					&::before {
						display: none;
					}
				}
				@include tablet-to-desktop {
					grid-column: 1 / 2;
					flex-direction: column;
				}
			}
			&--status,
			&--types,
			&--update {
				@include tablet-to-desktop {
					grid-column: 2/ 3;
				}
			}
			&--country {
				@include tablet-to-desktop {
					grid-column: 3/ -1;
				}
			}
			&--name,
			&--country {
				@include tablet-to-desktop {
					grid-row: 2;
				}
			}
		}
	}
}

/* SVG Up Arrow Style */
.up-arrow {
	height: 100%;
	max-height: 1.8rem;
	margin-left: 1rem;
}

/* SVG User Icon Style */
.user-icon {
	width: 100%;
	max-width: 4rem;
	height: auto;
	margin-right: 1rem;
}

/* Status Indicator Style */
.status-indicator {
	display: inline-block;
	width: 1.8rem;
	height: 1.8rem;
	border-radius: 50%;
	background: #222222;
	margin-right: 0.5rem;
	&--active {
		background: $active-color;
	}
	&--inactive {
		background: $inactive-color;
	}
	&--new {
		background: $new-color;
	}
}

th{
	font-size: 15px;
}

td{
	font-size: 12px;
}

</style>

<div class="card shadow mb-4 w-100">
    <div class="card-header py-3" style="background-color: white;">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="" role="tabpanel">
					<form action="">
						<div class="p-3 bg-white">
							<div class="row">
								<div class="col-12">
									<fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
									<div>
										<legend class="form-group" style="color: white; font-size: 18px;"> <i class="fas fa-clipboard-list"></i> 
										<strong>Histórico</strong>
										</legend>
									</div>
									</fieldset>
								</div>
							</div>
						</div>
					</form>
					<table class="table">
						<thead>
							<tr>
							<th scope="col" style="font-size: 13px;">Serviço</th>
							<th scope="col" style="font-size: 13px;">Data</th>
							<th scope="col" style="font-size: 13px;">Hora</th>
							<th scope="col" style="font-size: 13px;">Profissional</th>
							<th scope="col" style="font-size: 13px;">Estabelecimento</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="font-size: 11px;">Corte Masculino</td>
								<td style="font-size: 11px;">05/03/23</td>
								<td style="font-size: 11px;">14h 30min</td>
								<td style="font-size: 11px;">Cristian</td>
								<td style="font-size: 11px;">Barbearia Gava`s</td>
							</tr>
							<tr> 
								<td style="font-size: 11px;">Pigmetação</td>
								<td style="font-size: 11px;">12/02/23</td>
								<td style="font-size: 11px;">17h00</td>
								<td style="font-size: 11px;">Thiago</td>
								<td style="font-size: 11px;">Barbearia do Oreia</td>
							</tr>
							<tr>
								<td style="font-size: 11px;">Luzes</td>
								<td style="font-size: 11px;">07/01/23</td>
								<td style="font-size: 11px;">15h00</td>
								<td style="font-size: 11px;">Giovane</td>
								<td style="font-size: 11px;">Barber Men</td>
							</tr>
						</tbody>
					</table>																				
				</div>
			</div>
		</div>
	</div>
</div>