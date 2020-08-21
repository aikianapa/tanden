<div class="widget" id="contact">
	 <div id="contact-info">
			 <h2  class="widget-title">Мы на <span>связи</span></h2>

			 <p>Эл.почта: <a href="mailto:{{_sett.email}}">{{_sett.email}}</a></p>
			 <p>Телефон: <a href="tel:{{_sett.phone}}">{{_sett.phone}}</a></p>
			 <br>
			 <p>Адрес: <a href="{{_ROUTE.uri}}#yamap_canvas0">{{_sett.city}}</a></p>
			 <p><a href="{{_ROUTE.uri}}#yamap_canvas0">{{_sett.address}}</a></p>
			 <p class="social">
					 <a wb-if='"{{_sett.vk}}" > ""' href="{{_sett.vk}}" target="_blank">
							 <i class="fa fa-vk" aria-hidden="true"></i></a>
					 <a wb-if='"{{_sett.fb}}" > ""' href="{{_sett.fb}}" target="_blank">
							 <i class="fa fa-facebook" aria-hidden="true"></i></a>
					 <a wb-if='"{{_sett.insta}}" > ""' href="{{_sett.insta}}" target="_blank">
							 <i class="fa fa-instagram" aria-hidden="true"></i></a>
			 </p>
	 </div>
</div>
