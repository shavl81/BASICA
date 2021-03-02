        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Контакты</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section section-map">


	        		<div class="col-sm-12" style="padding:0;">
	        			<!-- Map -->
	        			<div id="contact-us-map">
	        				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127894.56768795667!2d30.326452944726555!3d59.94288384230776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1613113768585!5m2!1sru!2sru" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<!-- <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe> -->
							<br />
							<small>
								<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=30.3264529,59.9428838&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
							</small>
							</iframe>
	        			</div>
	        			<!-- End Map -->
					</div>


	    </div>

        <div class="section">
	    	<div class="container">
	        	<div class="row">
					<h3><?= $arResult[0]['option_title']; ?></h3>
					</hr>
	        		<div class="col-sm-6">
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<?= $arResult[0]['option_text']; ?><br/>
	        				<b>Адрес:</b> <?= $arResult[0]['option_address']; ?><br/>
	        				<b>Телефон:</b> <?= $arResult[0]['option_phone']; ?><br/>
	        				<b>Email:</b> <a href="mailto:<?= $arResult[0]['option_email']; ?>"><?= $arResult[0]['option_email']; ?></a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-6">

	        		</div>
	        	</div>
	    	</div>
	    </div>
