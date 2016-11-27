<?php

return [
    'production' => false,
    'site_title' => '라라벨 5 입문 및 실전',
    'site_description' => '',
    'current_url' => '/',
    'current_index' => null,
    'lessons' => [
        [
            'title' => '1강 - 처음 만나는 라라벨',
            'url' => '/lessons/01-welcome.html',
            'description' => '라라벨의 정체와 인기 비결을 살펴 보고, 심화 학습을 하기 위한 커뮤니티와 리소스를 소개한다.',
        ],
        [
            'title' => '2강 - 라라벨 5 설치하기',
            'url' => '/lessons/02-hello-laravel.html',
            'description' => 'Mac 컴퓨터에서 라라벨을 설치하는 방법을 설명한다. 라라벨의 전체 작동원리와 디렉터리 구조를 설명한다.',
        ],
        [
            'title' => '2강 - 라라벨 5 설치하기 (on Windows)',
            'url' => '/lessons/02-install-on-windows.html',
            'description' => 'Windows 컴퓨터에 라라벨을 설치하고 구동하는 방법을 설명한다.',
        ],
        [
            'title' => '3강 - 글로벌 설정 살펴보기',
            'url' => '/lessons/03-configuration.html',
            'description' => '라라벨 5부터 적용된 .env 글로벌 환경 설정 파일의 구성과 용도에 대해 살펴 본다.',
        ],
        [
            'title' => '4강 - Routing 기본기',
            'url' => '/lessons/04-routing-basics.html',
            'description' => '모던 웹 프레임워크의 전형이라 할 수 있는 프런트 컨트롤러와 라우팅을 배워본다.',
        ],
        [
            'title' => '5강 - 뷰에 데이터 바인딩하기',
            'url' => '/lessons/05-pass-data-to-view.html',
            'description' => '뷰에 데이터를 바인딩해야 동적 페이지를 만들 수 있다.',
        ],
        [
            'title' => '6강 - 블레이드 101',
            'url' => '/lessons/06-blade-101.html',
            'description' => '라라벨의 템플릿 엔진인 블레이드의 기본 문법을 배운다. MVC에서 V에 해당한다.',
        ],
        [
            'title' => '7강 - 블레이드 201',
            'url' => '/lessons/07-blade-201.html',
            'description' => '템플릿 상속, 조각 뷰 끼워 넣기 등 블레이드의 고급 문법을 다룬다.',
        ],
        [
            'title' => '8강 - 날 쿼리 :(',
            'url' => '/lessons/08-raw-queries.html',
            'description' => 'PHP/라라벨의 REPL을 소개한다. REPL을 이용해서 DB 파사드로 SQL 명령을 하는 방법을 알아 본다.',
        ],
        [
            'title' => '9강 - 쿼리 빌더',
            'url' => '/lessons/09-query-builder.html',
            'description' => 'SQL 대신 클래스 문법으로 데이터베이스를 쿼리하는 방법을 배운다.',
        ],
        [
            'title' => '10강 - 엘로퀀트 ORM',
            'url' => '/lessons/10-eloquent.html',
            'description' => '객체관계모델(ORM)은 웹 프레임워크의 정수다. 데이터를 클래스 컨텍스트에서 어떻게 다루고, 데이터베이스와 어떻게 상호 작용하는 지 배워 본다. MVC에서 M에 해당한다. ',
        ],
        [
            'title' => '11강 - DB 마이그레이션',
            'url' => '/lessons/11-migration.html',
            'description' => '마이그레이션은 데이터베이스 스키마에 대한 버전 관리다. 왜 필요하고, 어떻게 사용하는 지 학습한다.',
        ],
        [
            'title' => '12강 - 컨트롤러',
            'url' => '/lessons/12-controller.html',
            'description' => '라우터가 하는 일은 HTTP 요청을 처리 로직으로 연결하는 것이다. 라우트 정의 파일(레지스트리)에서 요청을 처리하지 않고, 별도의 전용 클래스에서 처리하고 응답한다. 바로 컨트롤러이고, MVC의 C에 해당한다. 컨트롤러가 프레임워크, 외부 라이브러리, 엘로퀀트 모델 등과 상호작용해서 사용자의 요청을 적절히 처리하게 된다.',
        ],
        [
            'title' => '13강 - RESTful 리소스 컨트롤러',
            'url' => '/lessons/13-restful-resource-controller.html',
            'description' => 'REST 원칙을 따르는 라우트와 컨트롤러에 대해 배운다.',
        ],
        [
            'title' => '14강 - 이름 있는 Route',
            'url' => '/lessons/14-named-routes.html',
            'description' => '하드코드는 항상 나쁘다. 라우트에 이름을 붙여 가독성과, 유지 보수성을 향상하는 방법을 배운다.',
        ],
        [
            'title' => '15강 - 중첩된 리소스',
            'url' => '/lessons/15-nested-resources.html',
            'description' => '리소스(모델, 데이터)는 서로 관계를 맺고 있다. 어떤 리소스와 연결된 하위 리소스를 요청하는 모범 사례를 소개한다.',
        ],
        [
            'title' => '16강 - 사용자 인증 기본기',
            'url' => '/lessons/16-authentication.html',
            'description' => '사용자는 웹 서비스에서 가장 중요한 부분이다. 웹 서비스에서 발생하는 모든 액션은 사용자와 연결되어 있기 때문이다. 사용자를 식별하는 방법을 배운다.',
        ],
        [
            'title' => '17강 - 라라벨에 내장된 사용자 인증',
            'url' => '/lessons/17-authentication-201.html',
            'description' => '라라벨은 사용자 인증과 관련된 거의 모든 기능을 기본적으로 포함하고 있다. 어떻게 사용하는지 살펴본다.',
        ],
        [
            'title' => '18강 - 모델간 관계 맺기',
            'url' => '/lessons/18-eloquent-relationships.html',
            'description' => '엘로퀀트(ORM)의 위대함을 살펴 볼 시간이다.',
        ],
        [
            'title' => '19강 - 데이터 심기',
            'url' => '/lessons/19-seeder.html',
            'description' => '서비스를 개발하려면 데이터가 필요하다. 가짜 사용자, 가짜 블로그 포스트 등등. 이런 데이터를 쉽게 만드는 방법을 배운다.',
        ],
        [
            'title' => '20강 - Eager 로딩',
            'url' => '/lessons/20-eager-loading.html',
            'description' => '웹 서비스에서 병목/속도 저하가 발생하는 부분은 입/출력이다. 특히 데이터베이스 입출력. 쿼리 개수를 줄이는 것이 좋은데, 목록을 출력할 때 발생할 수 있는 N+1 문제점을 극복하는 방법을 설명한다.',
        ],
        [
            'title' => '추가 - 페이징',
            'url' => '/lessons/20-1-pagination.html',
            'description' => '이거로딩과 더불어 서비스를 보호하고 사용자에게 쾌적한 서비스를 제공하기 위해 페이징을 필수다. 쓰지도 않을 10만 레코드를 응답할 필요 없다. 10개씩 1만 묶음으로 나누면 된다.',
        ],
        [
            'title' => '21강 - 메일 보내기',
            'url' => '/lessons/21-mail.html',
            'description' => '메일 보내기는 웹 서비스의 필수다. 응용 분야하는 여러 가지지만, 기본은 알림이다. 서비스에 어떤 이벤트가 발생했을 때, 관리자 또는 사용자에게 알림을 보내기 위함이다. 무료인 메일건 드라이버를 이용해서 이메일을 발송하는 방법을 배운다.',
        ],
        [
            'title' => '22강 - 이벤트',
            'url' => '/lessons/22-events.html',
            'description' => '프로그래밍의 큰 패러다임 중에 하나인 이벤트 프로그래밍을 라라벨에서 어떻게 사용하는 지 설명한다. 이벤트는 기본적으로 상태의 변화를 의미한다. 서비스에 상태가 변경되었을 때(예: 새 글 작성), 이벤트를 던지고, 소비하는 방법을 배워본다.',
        ],
        [
            'title' => '23강 - 입력 값 유효성 검사',
            'url' => '/lessons/23-validation.html',
            'description' => '사용자는 개발자가 아니다. 개발자가 원하는 대로 데이터를 입력한다는 보장은 없다. 어쩌면 해커일 수도 있다. 잘못된 데이터로 부터 서비스를 보호하는 방법이 필요하고, 서비스(데이터)에 변경이 발생하는 사용자의 요청은 무조건 유효성 검사를 해야 한다.',
        ],
        [
            'title' => '24강 - 예외 처리',
            'url' => '/lessons/24-exception-handling.html',
            'description' => '라라벨은 에러가 없다. 무조건 예외다. 애플리케이션 및 프레임워크에서 예외가 발생했을 때, 감지하고, 깔끔하게 소비하는 방법을 실습한다.',
        ],
        [
            'title' => '25강 - 컴포저',
            'url' => '/lessons/25-composer.html',
            'description' => '모던 PHP의 핵심이다. 컴포저는 PHP의 표준 의존성 관리자다. 외부 컴포넌트를 가져와 문제점을 빠르게 해결하고, 서비스의 기능을 개선하기 위해 컴포저를 사용한다. 그리고 PSR-4 네임스페이스와 오토로딩 기능을 덤이다.',
        ],
        [
            'title' => '26강 - Document 모델',
            'url' => '/lessons/26-document-model.html',
            'description' => '컴포저 컴포넌트를 이용해서 마크다운 문법으로 작성한 문서를 HTML로 출력하기 위한 실전 프로젝트다. 파일 시스템에서 마크다운을 읽어 들이는 모델을 개발한다.',
        ],
        [
            'title' => '27강 - Document 컨트롤러',
            'url' => '/lessons/27-document-controller.html',
            'description' => '마크다운 처리 로직을 별도 클래스로 분리한다.',
        ],
        [
            'title' => '28강 - Cache',
            'url' => '/lessons/28-cache.html',
            'description' => '마크다운 파일은 거의 변하지 않는다. 사용자가 매번 요청할 때마다, 파일 시스템을 읽고, 마크다운을 HTML로 컴파일하는 것은 별로 똑똑하지 않다. HTML로 컴파일된 결과를 어디에 저장해 놓고, 일정 시간 내에 들어온 사용자의 요청에 대응하는 방법을 배운다.',
        ],
        [
            'title' => '29강 - Elixir, 만병통치약?',
            'url' => '/lessons/29-elixir.html',
            'description' => '지금까지 만든 마크다운 뷰어를 웹 브라우저에서 더 예쁘고, 읽기 편하도록 표현하기 위해 꾸미는 작업을 한다. 프런트엔드 리소스를 편리하게 빌드할 수 있는 라라벨의 엘릭서 기능을 이용한다.',
        ],
        [
            'title' => '30강 - Debug & Final Touch',
            'url' => '/lessons/30-final-touch.html',
            'description' => '마크다운에는 이미지가 포함되어 있다. 웹 서버의 document root 밖에 위치한 이미지 파일을 읽어서 HTTP 응답으로 반환하는 방법을 살펴본다. 또 Etag HTTP 헤더를 이용해서, 서버의 부하를 낮추고, 네트워크 트래픽을 아끼면서, 동시에 빠른 응답 속도로 사용자 경험을 높이는 방법을 배운다.',
        ],
        [
            'title' => '31강 - 포럼 요구사항 기획',
            'url' => '/lessons/31-forum-features.html',
            'description' => '스택오버플로와 같은 포럼을 만드는 두번째 실전 프로젝트다. 스택오버플로를 벤치마크해서 어떤 기능을 포함할지 열거해 본다.',
        ],
        [
            'title' => '32강 - 사용자 로그인',
            'url' => '/lessons/32-login.html',
            'description' => '사용자 로그인을 손본다. 주로 뷰를 깔끔하게 다듬는 내용을 담고 있다.',
        ],
        [
            'title' => '33강 - 소셜 로그인',
            'url' => '/lessons/33-social-login.html',
            'description' => '라라벨 소셜라이트 확장을 이용해서, 별도 회원 가입없이 깃허브 계정으로 로그인하는 법을 실습한다.',
        ],
        [
            'title' => '34강 - 사용자 역할',
            'url' => '/lessons/34-role.html',
            'description' => '... 실수다. 라라벨 5.1에서 사용자의 접근 권한을 제어하기 위해 RBAC(Role-based Access Control)을 구현하려 했으나, 뒤에서 별로 쓰이지 않는다.',
        ],
        [
            'title' => '35강 - 다국어 지원',
            'url' => '/lessons/35-locale.html',
            'description' => '서버 측에서 사용자의 언어 선호를 기억하여, 사용자가 로그인하지 않아도 자국어로 서비스할 수 있는 방법을 같이 연구해 본다.',
        ],
        [
            'title' => '36강 - 마이그레이션과 모델',
            'url' => '/lessons/36-models.html',
            'description' => '데이터베이스 테이블을 설계하고, 테이블간의 관계를 설정한다. 그리고, 엘로퀀트 ORM에서도 모델간 관계를 설정한다.',
        ],
        [
            'title' => '37강 - Article 기능 구현',
            'url' => '/lessons/37-articles.html',
            'description' => '포럼의 핵심 기능은 글 기능을 개발한다. 라우트, 컨트롤러, 모델, 뷰 등 모든 내용을 망라한다.',
        ],
        [
            'title' => '38강 - Tag 기능 구현',
            'url' => '/lessons/38-tags.html',
            'description' => '포럼의 글을 분류하는 좋은 방법 중의 하나가 태그다. 태그 기능을 개발한다.',
        ],
        [
            'title' => '39강 - Attachment 기능 구현',
            'url' => '/lessons/39-attachments.html',
            'description' => '포럼에 글 쓸 때, 첨부 파일도 같이 업로드하는 기능을 개발한다.',
        ],
        [
            'title' => '32/33 보충 - 인증 리팩토링',
            'url' => '/lessons/32n33-auth-refactoring.html',
            'description' => '기성 양복은 내 체형에 맞지 않을 수 있다. 라라벨이 제공하는 사용자 인증 기능을 편리하지만, 그만큼 마음대로 주무르기는 불편하다. 그래서 프레임워크가 제공하는 Low Level API를 이용해서 사용자 인증 기능을 직접 개발한다.',
        ],
        [
            'title' => '40강 - Comment 기능 구현',
            'url' => '/lessons/40-comments.html',
            'description' => '포럼에 댓글이 없으면 섭섭하다. 일대다 관계는 너무 식상하다. 아티클 모델 뿐만아니라 다른 모델에서도 댓글을 쓸 수 있도록 다형적 관계로 구현해 본다.',
        ],
        [
            'title' => '41강 - UI 개선',
            'url' => '/lessons/41-ui-makeup.html',
            'description' => '제목대로 UI를 개선한다. 포럼 글을 마크다운으로 쓸 때, 미리 보기 기능을 제공하고, 최종 작성된 글도 코드 하이라이트를 입히는 등의 작업을 한다.',
        ],
        [
            'title' => '42강 - 서버 사이드 개선',
            'url' => '/lessons/42-be-makeup.html',
            'description' => '포럼에 검색, 정렬 등 편의 기능을 추가한다. 사용자와 서버간의 핑퐁 속도를 높이기 위해 캐싱을 적용하고, 서비스를 활성화하기 위한 이메일 알림 기능등도 개발한다.',
        ],
        [
            'title' => '43강 - 변경 사항 알림',
            'url' => '/lessons/43-change-note.html',
            'description' => '소프트 삭제, 댓글 투표 등 처음 기획 의도대로 스택 오버플로의 기능을 따라해 본다. 또 향후 확장성을 위해 리포지토리 패턴을 적용하고, 사용자 정의 콘솔 명령도 만들어 본다.',
        ],
        [
            'title' => '44강 - API 기본기 및 기획',
            'url' => '/lessons/44-api-basic.html',
            'description' => '포럼을 웹 브라우저 뿐만아니라, 모바일/데스크탑등 다른 기기에서도 사용할 수 있도록 데이터 API를 개발하는 실전 프로젝트다. 개발에 앞서 REST 원칙을 배운다.',
        ],
        [
            'title' => '45강 - 기본 구조 잡기',
            'url' => '/lessons/45-api-big-picture.html',
            'description' => 'API는 별도의 URL 엔드포인트와 컨트롤러를 사용한다. 그럼에도 불구하고, 웹 브라우저에서 들어 오는 요청과 처리 로직이 달라질 것이 없으므로, 컨트롤러를 최대한 재활용하고 중복을 제거하는 구조를 같이 고민해 본다.',
        ],
        [
            'title' => '46강 - JWT 를 이용한 인증',
            'url' => '/lessons/46-jwt.html',
            'description' => 'API 클라이언트는 웹 브라우저처럼 쿠키 메커니즘을 이용해 세션을 유지할 수 없다. 따라서 HTTP의 무상태 특성을 이용한 인증을 해야 한다. 매 요청마다 사용자 인증 정보를 전달해야 하므로 보안 이슈가 발생한다. JWT(Json)을 이용해서 이런 문제점을 극복하는 방법을 살펴 본다.',
        ],
        [
            'title' => '47강 - 중복 제거 리팩토링',
            'url' => '/lessons/47-dry-refactoring.html',
            'description' => '필자가 개발한 컴포저 컴포넌트를 이용해서 중복을 한번 더 제거한다.',
        ],
        [
            'title' => '48강 - all() is bad',
            'url' => '/lessons/48-all-is-bad.html',
            'description' => 'API에서는 데이터 자체가 사용자에게 제공하는 뷰다. 데이터는 의미를 담고 있어서, 읽기 편하고, 탐색하기 편해야 한다. 블레이드로 HTML 페이지를 꾸몄듯이, 트랜스포머로 API 응답을 포맷팅하는 방법을 배운다.',
        ],
        [
            'title' => '49강 - API Rate Limit',
            'url' => '/lessons/49-rate-limit.html',
            'description' => 'API는 일종의 공공재다. 한 명이 독점하면 공공재의 비극이 찾아온다. 사용량 제한은 공공재를 사용자들간에 공평하게 나누어 쓸 수 있도록 한다. 무차별 HTTP 요청을 하는 해커의 공격을 막을 수 있는 부서적인 효과도 있다.',
        ],
        [
            'title' => '50강 - 리소스 id 난독화',
            'url' => '/lessons/50-id-obfuscation.html',
            'description' => '자동 증가 ID는 여러 가지 문제가 있다. 어떤 문제인지는 본문에 자세히 설명하고 있다. ID를 난독화해서 연속성을 없애는 기능을 구현한다.',
        ],
        [
            'title' => '51강 - CORS',
            'url' => '/lessons/51-cors.html',
            'description' => 'API 클라이언트 중에는 Ajax(XHR) 요청을 브라우저도 있을 수 있다. 브라우저에서는 동일 출처 보안 정책(CORS, Cross Origin Resource Sharing)이란 것이 있어, 서버로 부터 데이터를 받았더라도 브라우저가 데이터를 사용하지 못하도록 막는다. 이 문제룰 해결하는 방법을 살펴본다.',
        ],
        [
            'title' => '52강 - Caching',
            'url' => '/lessons/52-caching.html',
            'description' => '캐싱은 빠지지 않는 주제다. 왜냐하면 "돈"이기 때문이다. 서버의 컴퓨팅 자원, 네트워크 대역폭, 단말기의 컴퓨팅 자원 등등. API 데이터의 변경 여부에 따라, 캐싱을 제어하는 방법을 배운다.',
        ],
        [
            'title' => '53강 - Partial Response',
            'url' => '/lessons/53-partial-response.html',
            'description' => '부분 응답은 캐싱과 마찬가지로 역시 "돈"에 관련된 이슈다. API 클라이언트가 필요한 필드만 요청하도록 하는 것이다. 쓰지도 않을 데이터를 전부 요청하고 응답하는 것 보다, 꼭 필요한 필드만 골라서 주고 받는 것이 훨씬 더 현명한다. 이 기능을 개발한다.',
        ],
        [
            'title' => '54강 - API Documents',
            'url' => '/lessons/54-api-docs.html',
            'description' => 'API 문서에 관련된 이야기를 한다. 그리고, Apiary란 서비스를 이용해서 API 문서를 만드는 방법을 실습해 본다.',
        ],
        [
            'title' => 'Homestead 설치 (on Mac)',
            'url' => '/lessons/02-install-homestead-osx.html',
            'description' => 'Mac 컴퓨터에서 홈스테스트를 설치하고 사용하는 방법을 설명한다. 필자는 홈스테드 사용을 별로 추천하지 않는다. 가장 큰 이유는 느리기 때문이다.',
        ],
        [
            'title' => 'Homestead 설치 (on Windows)',
            'url' => '/lessons/02-install-homestead-windows.html',
            'description' => 'Windows 컴퓨터에서 홈스테스트를 설치하고 사용하는 방법을 설명한다. 필자는 홈스테드 사용을 별로 추천하지 않는다. 가장 큰 이유는 느리기 때문이다.',
        ],
        [
            'title' => '코드 배포',
            'url' => '/lessons/999-code-release.html',
            'description' => 'AWS EC2 인스턴스를 만들고, 그간 개발한 코드를 배포하는 방법을 설명한다. 라라벨이 제공하는 엔보이 원격 작업 자동화 도구를 이용해 배포 툴을 만드는 방법도 설명한다.',
        ],
    ],
];
