<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($data as $item)
        <url>
            <loc>{{ $item['loc'] }}</loc>
            <lastmod>{{ $item['lastmod'] }}</lastmod>
        </url>
    @endforeach
    @foreach ($blogs as $blogs)
        <url>
            <loc>{{ url('/blog/' . $blogs->slug) }}</loc>
            <lastmod>{{ $blogs->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach

</urlset>
