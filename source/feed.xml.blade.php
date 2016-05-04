<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>{{ $site_title }}</title>
    <description>{{ $site_description }}</description>
    <link>http://l5.appkr.kr</link>
    <atom:link href="http://l5.appkr.kr/feed.xml" rel="self" type="application/rss+xml"/>
    <pubDate>{{ (new DateTime)->format(DATE_ATOM) }}</pubDate>
    <lastBuildDate>{{ (new DateTime)->format(DATE_ATOM) }}</lastBuildDate>
    <generator>Blade templating engine</generator>

    @foreach($lessons as $lesson)
      <item>
        <title>{{ $lesson['title'] }}</title>
        <description>{{ $lesson['description'] }}</description>
        <pubDate>{{ (new DateTime)->format(DATE_ATOM) }}</pubDate>
        <link>http://l5.appkr.kr{{ $lesson['url'] }}</link>
        <guid isPermaLink="true">http://l5.appkr.kr{{ $lesson['url'] }}</guid>
      </item>
    @endforeach
  </channel>
</rss>