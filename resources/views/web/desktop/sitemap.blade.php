<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	@foreach($data['terms'] as $term)
	<url>
	<loc>
	{{ MyAPI::getUrlTermObj($term) }}
	</loc>
	</url>
	@endforeach
	@foreach($data['posts'] as $post)
	<url>
	<loc>
	{{ MyAPI::getUrlPostObj($post) }}
	</loc>
	</url>
	@endforeach
</urlset>