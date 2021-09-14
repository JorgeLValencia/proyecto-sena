<?php
include_once '../lib/helpers.php';
?>
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<!-- Home -->

<div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
	</div>
	<div class="home_content">
		<h1>PQRSF</h1>
	</div>
</div>

<div class="container">
	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Radica tu PQRSF</div>

						<div class="contact_form_container">
							<form action="post">
								<?php
								if (isset($_SESSION['user_id'])) {
								?>
									<div class="row">
										<input class="input_field contact_form_name col-md-4" name="usuario" type="text" value="<?php echo $_SESSION['nombre']; ?>" required="required" data-error="Name is required." disabled>
										<input class="input_field contact_form_email col-md-4 mx-1" name="usuario_correo" type="email" value="<?php echo $_SESSION['correo']; ?>" required="required" data-error="Valid email is required." disabled>
										<select class="input_field col-md-3" name="tipopqrsf" id="">
											<option value="">Seleccione</option>
											<?php
											foreach ($tipoPQRSF as $tpq) {
												echo "<option value='" . $tpq['cod_pqrsf_tipo'] . "'>" . $tpq['desc_pqrsf_tipo'] . "</option>";
											}
											?>
										</select>
									</div>
								<?php
								} else {
								?>
									<input class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
									<input class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<?php
								}
								?>
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">Radicar</button>
							</form>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Join Courses</div>
						<p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>