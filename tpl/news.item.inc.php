<div class="col-md-4 blog-item">
		<wb-var link="/news/{{id}}/{{wbFurlGenerate({{header}})}}" wb-if='"{{type}}" == "news"' />
		<wb-var link="/articles/{{id}}/{{wbFurlGenerate({{header}})}}" wb-if='"{{type}}" == "article"' />
		<a class="image-link" href="{{_var.link}}" 
		style="background-image: url(/thumbc/50x50/src/{{images.0.img}})">
				<img data-src="/thumb/360x240/src/{{images.0.img}}" alt="{{header}}" class="img-responsive">
		</a>
		<h2>{{header}}</h2>
		<p>{{wbGetWords({{text}},20)}}</p>
		<a class="read-more" href="{{_var.link}}">Подробно</a>
</div>
