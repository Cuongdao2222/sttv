<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://sieuthitivi.com</loc>
	</url>


	@if(isset($blog))
    @foreach($blog as $blogs)
    <url>
		<loc>{{ route('details', $blogs->link) }}</loc>
	</url>
	@endforeach    
    @endif

   
</urlset>