<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	@foreach($data['terms'] as $term)
	<url>
	<loc>
	{{ MyAPI::getUrlTerm($term->id) }}
	</loc>
	</url>
	@endforeach
	@foreach($data['posts'] as $post)
	<url>
	<loc>
	{{ MyAPI::getUrlPost($post->id) }}
	</loc>
	</url>
	@endforeach
</urlset>