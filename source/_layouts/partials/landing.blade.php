<h1>라라벨 5 입문 및 실전 강좌</h1>

<p>라라벨은 PHP 언어로 개발된 풀스택 MVC 웹 어플리케이션 프레임웍이다.</p>

<h2>이 강좌를 처음 시작하시는 분들께</h2>

<p>2016년 4월 현재 <code>laravel/framework</code> 프로젝트에는 13,000개가 넘는 이슈와 거의 13,000개에 육박하는 커밋이 등록되어 있다. 곧 라라벨 탄생 5주기가 되는데, 5년
  동안의 행적치고는 엄청나다. 라라벨이 살아 있다는 증거다. 이 강좌는 1월 말에 다썼다. 불과 3달 남짓 동안 또 엄청난 변화가 있었다. 이 강좌를 읽기 전에, <a
    href="https://github.com/appkr/l5essential/issues/10">https://github.com/appkr/l5essential/issues/10</a> 를 꼭 읽고
  시작하시기 바란다. 이 강좌에서 수정 적용할 부분을 기록해 두었다.</p>
<p>그리고, 온라인 강좌를 바탕으로 정제하고 정리해서, 종이책으로 곧 나온다. 틀린 내용, 논리 비약등을 다듬고, 저자는 알지만 독자는 모를 수도 있다는 생각을 바탕으로.. 입문자를 더 생각하고 집필했다. 이
  페이지에 곧 다시 소식을 알릴것이다.</p>
<h2>라이브 데모 사이트</h2>
<p>라이브 데모 사이트는 폐지했다. Github에서 바로 보거나, 클론해서 로컬에서 강좌를 보시기 바란다.</p>
<h2>목적</h2>
<ol>
  <li>라라벨 입문을 돕는다.</li>
  <li>실전 강좌를 통해 중급 이상의 개발자로 성장할 수 있도록 돕는다.</li>
  <li>모던 개발 방법론과 베스트 프랙티스를 전파하여, 국내 PHP 개발자 생태계가 진화할 수 있도록 일조한다.</li>
</ol>
<h2>목표</h2>
<ol>
  <li>8 시간 정도에 라라벨의 기본기를 모두 마스터하는 것을 목표로 한다. (1강 ~ 25강)</li>
  <li>제시된 실전 프로젝트를 통해 중급 이상의 라라벨 개발자로 성장하도록 한다. (26강 ~ 계속 연재 중)</li>
</ol>
<h2>다루지 않는 것들</h2>
<p>강좌를 진행하기 위해 사용하지만, 설명하지 않는 것들이다.</p>
<ol>
  <li>PHP 문법</li>
  <li>웹 프로그래밍 일반론</li>
  <li>객체 지향 프로그래밍(OOP) 일반론</li>
  <li>프론트엔드 프로그래밍 일반론</li>
</ol>
<h2>같이 배워 볼 주제들</h2>
<h3><strong>[입문코스]</strong> 라라벨 프레임 입문</h3>
<p>라라벨 입문자들이 꼭 알아야 하는 내용만 추렸다 (고 생각한다). 왼쪽 메뉴에서 25강까지에 해당한다.</p>

<h3><strong>[중급코스]</strong> 실전 프로젝트</h3>
<p>총 3개의 실전 프로젝트를 같이 만들어 본다.</p>
<h4>1. Markdown Viewer</h4>
<p>마크다운으로 작성된 이 강좌들을 HTML 뷰로 나이스하게 보여주는 기능을 구현해 본다. 이를 통해 Filesystem, Custom Helper, Cache, Elixir 등의 라라벨 기능을 살펴볼 예정이다. 왼쪽 메뉴에서 26~30강에 해당한다.</p>

<h4>2. Forum</h4>
<p>StackOverflow 처럼 댓글이 가능한 포럼을 구현해 본다. 이를 통해 HTTP Request &amp; Response 에 대한 이해를 높인다. 뿐만 아니라, 라라벨을 이용한 CRUD, Event,
  File/Image Upload, 인증과 권한부여 등에 대해 배워볼 예정이다. 왼쪽 메뉴에서 31~43강에 해당한다.</p>

<h4>3. RESTful API</h4>
<p>Forum 에서 생성된 게시글/댓글을 JSON API 로 외부에 노출하여, 외부 앱들이 Forum 서비스와 상호 작용할 수 있도록 해 본다. 실험을 위해 프론트엔드 프레임웍을 이용한 간단한 모바일 앱도 만들어
  볼 것이다. 왼쪽 메뉴에서 44~54강에 해당한다.</p>

<h4>번외. 기타 알면 좋은 내용들</h4>
<p>좌측 메뉴에서 Homestead 설치 (on Mac), Homestead 설치 (on Windows), 코드 배포 등에 해당한다.</p>

<h2>이 강좌를 보는 방법</h2>
<p>강좌들은 Markdown 문법으로 작성되어 있으므로 Github에서 보는 것이 좋다. 이미 PHP 언어와 라라벨을 좀 아는 분이라면, 강좌를 눈으로 읽고 머리로 이해하는 것도 도움이 된다. 강좌의 내용과
  더불어, <a href="https://github.com/appkr/l5essential/commits/master">Github Commit 로그</a> 를 이용해서 이전 강좌 대비 달라진 부분들을 보는 것도
  좋은 방법이다. </p>
<p><strong>그런데 필자는 이미 만들어진 소스코드를 눈으로 읽는 것 보다, 한 문장, 한 단락씩 따라하면서 실제 실습해 볼 것을 적극 권장한다.</strong> 강좌의 단계별 소스코드는 Git Tag 로
  저장되어 있다. 먼저 이 프로젝트를 클론하고, 원하는 강좌로 체크아웃하자. </p>
<pre><code class="language-bash">$ git clone git@github.com:appkr/l5essential.git myProject
    $ cd myProject
    $ composer install # composer가 설치되어 있지 않다면 2강을 참조해서 설치하자.
    $ git checkout 03(tab &amp; enter)</code></pre>
<p><strong><code>참고</code></strong> 학생들과 만나보면, 콘솔을 쓸 줄 모르는 분들이 많다. 문서에 나온 코드 블럭 중에서 <code>$</code> (윈도우즈의 경우
  <code>\&gt;</code>) 로 시작하는 명령들은 콘솔에서 실행하라는 의미이다. 가령, <code>$ ls -al</code> 이라 써 있으면, 콘솔에서 <code>ls -al (enter)</code>
  를 하라는 의미이다. 콘솔 명령 블럭에서 <code># ...</code> 은 주석이다.</p>

<h2>Contributors / Sponsors</h2>
<p><a href="https://github.com/appkr/l5essential/blob/master/CONTRIBUTING.md">기여 가이드</a> 를 따라 주세요.</p>
<ul>
  <li>오탈자/오류 신고 - dosirak 님, <a href="https://www.facebook.com/leehs">이현석 님</a>, <a href="https://github.com/ibin79">ibin79 </a>,
    <a href="https://github.com/AidenJeon">AidenJeon 님</a>, <a href="https://github.com/smartyunhui">smartyunhui 님</a>,
    <a href="https://www.facebook.com/chansnapit">찬스냅 님</a>, <a
      href="https://www.facebook.com/profile.php?id=100001411952158">김종운 님</a>, <a href="https://github.com/richellin">richellin
      님</a>, <a href="https://github.com/jicjjang">jicjjang 님</a>, <a href="https://github.com/jongguheo">jongguheo
      님</a>, <a href="https://github.com/desty">desty 님</a>, <a href="https://github.com/paikwiki">백창현 님</a></li>
  <li>감수 - <a href="https://www.facebook.com/jongwoong.lee.71">이종웅 님</a></li>
  <li><a href="https://github.com/appkr/l5essential/graphs/contributors">Pull Request 를 통한 기여자 분들</a></li>
  <li><a href="https://github.com/lesstif">정광섭님</a> - 라이브 데모 서버</li>
</ul>
<p>&quot;모두 모두 감사합니다.&quot;</p>

<h2>라이센스</h2>
<ul>
  <li>강좌에 사용된 코드는 <a href="https://raw.githubusercontent.com/appkr/l5essential/master/LICENSE">MIT</a> 라이센스를 따른다.</li>
  <li>강좌 자체는 <a href="https://creativecommons.org/licenses/by-nc/4.0/">CC BY-NC</a> 라이센스를 따른다.</li>
</ul>