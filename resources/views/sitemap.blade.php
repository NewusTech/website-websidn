{!! '<' . '?xml version="1.0" encoding="UTF-8" ?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($data as $item)
        <url>
            <loc>{{ htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') }}</loc>
            <lastmod>{{ $item['lastmod'] }}</lastmod>
        </url>
    @endforeach
    @foreach ($blogs as $blog)
        <url>
            <loc>{{ htmlspecialchars(url('/blog/' . $blog->slug), ENT_XML1, 'UTF-8') }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
        <url>
            <loc>{{ htmlspecialchars(url('/' . $blog->slug), ENT_XML1, 'UTF-8') }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach

    <url>
        <loc>{{ htmlspecialchars(url('/'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ htmlspecialchars(url('/layanan'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ htmlspecialchars(url('/portofolio'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ htmlspecialchars(url('/gallery'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ htmlspecialchars(url('/about'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ htmlspecialchars(url('/contact'), ENT_XML1, 'UTF-8') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
</urlset>
