<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ URL::route('home') }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime('2022-06-22 08:49:53')) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ URL::route('hang-moi-ve') }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime('2022-06-22 08:49:53')) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ URL::route('san-pham-khuyen-mai') }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime('2022-06-22 08:49:53')) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ URL::route('san-pham-ban-chay') }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime('2022-06-22 08:49:53')) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach ($pages as $pa)
    <url>
        <loc>{{ URL::route('pages-details', [$pa->slug]) }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($pa->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach
    @foreach ($categories as $cate)
    <url>
        <loc>{{ URL::route('category', [$cate->slug]) }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($cate->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach
    @foreach ($products as $prod)
    @php
    $cate = getCateById($prod->cate_id);
    @endphp
    <url>
        <loc>{{ URL::route('product-details', [$cate->slug, $prod->slug]) }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($prod->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach
    <url>
        <loc>{{ URL::route('news') }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime('2022-06-22 08:49:53')) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach ($newscategories as $nca)
    <url>
        <loc>{{ URL::route('news-categories', [$nca->slug]) }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($nca->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach
    @foreach ($news as $ne)
    @php
    $newscategories = getNewsCategoriesById($ne->news_cateid);
    @endphp
    <url>
        <loc>{{ URL::route('news-details', [$newscategories->slug, $ne->slug]) }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($ne->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach
</urlset>