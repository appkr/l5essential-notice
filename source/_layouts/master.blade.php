<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

  <meta name="description" content="{{ (! is_null($current_index)) ? $lessons[$current_index]['description'] : $site_description }}"/>
  <meta name="google-site-verification" content="ToXKBimREnz49pDNot4b-N9ZJgYcKXPPsHsjhg4Zzuc"/>
  <meta name="naver-site-verification" content="7cebcc8e5493169f5401870d9ce57f48d18491cd"/>

  <meta name="msapplication-tap-highlight" content="no"/>

  <!-- Facebook Meta -->
  <meta property="og:title" content="{{ $site_title }}{{ (! is_null($current_index)) ? ' / '.$lessons[$current_index]['title'] : '' }}"/>
  <meta property="og:type" content="Website"/>
  <meta property="og:author" content="appkr (juwonkim@me.com)"/>
  <meta property="og:image" content=""/>

  <!-- Google+ Meta -->
  <meta itemprop="name" content="{{ $site_title }}{{ (! is_null($current_index)) ? ' / '.$lessons[$current_index]['title'] : '' }}">
  <meta itemprop="description" content="{{ (! is_null($current_index)) ? $lessons[$current_index]['description'] : $site_description }}">
  <meta itemprop="image" content="">
  <meta itemprop="author" content="appkr (juwonkim@me.com)"/>

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:site" content="@appkrs"/>
  <meta name="twitter:title" content="{{ $site_title }}{{ (! is_null($current_index)) ? ' / '.$lessons[$current_index]['title'] : '' }}"/>
  <meta name="twitter:description" content="{{ (! is_null($current_index)) ? $lessons[$current_index]['description'] : $site_description }}"/>
  <meta name="twitter:image" content=""/>
  <meta name="twitter:domain" content="http://l5.appkr.kr/">

  <!-- Mobile and Rss -->
  <link rel="canonical" href="http://l5.appkr.kr/"/>

  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons"/>
  <link rel="stylesheet" href="/css/main.css">

  <title>{{ $site_title }}{{ (! is_null($current_index)) ? ' / '.$lessons[$current_index]['title'] : '' }}</title>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="#app">
  @include('_layouts.partials.navigation')

  <div class="container">
    <div class="row">
      <aside id="sidebar" class="col-md-3">
        <ul>
          @foreach($lessons as $index => $lesson)
            <li {!! ($index === $current_index) ? 'class="active"' : '' !!} index="{{$index}}" current-index="{{(int)$current_index}}">
              <a href="{{ $lesson['url'] }}">{{ $lesson['title'] }}</a>
            </li>
          @endforeach
        </ul>
      </aside>

      <div class="col-md-9">
        <article id="article">
          @if (is_null($current_index))
            @include('_layouts.partials.landing')
          @else
            @include('_layouts.partials.pager', [
              'prev' => ($current_index > 0) ? $lessons[$current_index - 1]['url'] : false,
              'next' => ($current_index < 59) ? $lessons[$current_index + 1]['url'] : false,
              'class' => 'pager-top'
            ])

            <hr/>

            @yield('content')

            <hr/>

            @include('_layouts.partials.pager', [
              'prev' => ($current_index > 0) ? $lessons[$current_index - 1]['url'] : false,
              'next' => ($current_index < 59) ? $lessons[$current_index + 1]['url'] : false,
              'class' => 'pager-bottom'
            ])
          @endif
        </article>

        <hr class="divider">

        <div id="comment">
          @include('_layouts.partials.disqus')
        </div>
      </div>
    </div>
  </div>

  <div id="toggler">
    <a href="#" title="Open Menu">
      목록 토글
    </a>
  </div>

  @include('_layouts.partials.footer')

  <script src="/js/all.js"></script>
</body>
</html>
