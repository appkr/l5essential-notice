(function() {

  var App = {};

  App.init = function() {
    this._bind = function(fn, me) {
      return function() {
        return fn.apply(me, arguments);
      };
    };

    this.registerGlobals();
    this.addListeners();
    this.activateMaterialDesign();
    this.activateDisqus();

    /* Activate syntax highlight.
     This will affect code blocks right after the page renders */
    hljs.initHighlightingOnLoad();
  };

  App.registerGlobals = function() {
    //
  };

  App.addListeners = function() {
    var self = this;
    var bodyContainer = $('#article');
    var topButton = $('#back-to-top');

    $(window).on('load', function() {
      /* Activate Fastclick */
      FastClick.attach(document.body);

      /* Wrap table element to be responsive */
      bodyContainer.find('table')
        .addClass('table')
        .wrap('<div class="table-responsive"></div>');

      /* Create and attach an id anchor for each titles */
      //var boxes = document.getElementById('main').getElementsByClassName('box-body');
      var len = bodyContainer.length;

      if (len < 1) {
        return false;
      }

      for (var i = 0; i < len; i++) {
        for (var level = 1; level <= 3; level++) {
          self.linkifyAnchors(level, bodyContainer[i]);
        }
      }

      /* Activate back-to-top button */
      topButton.on('click', function () {
        $('body,html').animate({
          scrollTop: 0
        }, 500);

        return false;
      });

      /* Activate Lightbox */
      var imgObjects = bodyContainer.find('img');

      if (imgObjects.length) {
        imgObjects.each(function() {
          var that = $(this);
          that.closest('a').attr('data-toggle', 'lightbox').attr('data-title', that.attr('alt'));
        });

        bodyContainer.delegate('*[data-toggle="lightbox"]', 'click', function(e) {
          e.preventDefault();
          $(this).ekkoLightbox();
        });

        // While we are dealing with image objects
        // Let's update SEO meta fields
        var firstImageUrl = imgObjects.first().attr('src');

        firstImageUrl = (firstImageUrl.indexOf('//') !== -1)
          ? firstImageUrl
          : 'http://' + window.location.host + ((firstImageUrl.startsWith('/')) ? '' : '/') +firstImageUrl;

        $('meta[property="og:image"]').attr('content', firstImageUrl);
        $('meta[itemprop="image"]').attr('content', firstImageUrl);
        $('meta[name="twitter:image"]').attr('content', firstImageUrl);
      }
    });

    /* Toggle Menu */
    $('#toggler > a').on('click', function() {
      $('#sidebar').slideToggle('fact');
      $('body,html').animate({ scrollTop: 0 }, 'fast');
    });

    /* 'Back to top' button */
    $(window).on('scroll', function () {
      var scrollPos = $(window).scrollTop();

      if (scrollPos > 50) {
        topButton.fadeIn();
      } else {
        topButton.fadeOut();
      }
    });
  };

  App.activateMaterialDesign = function() {
    /* Initialize Material Design */
    $.material.init();
  };

  App.activateDisqus = function() {
    var self = this;
    var dqsScript = document.createElement('script');

    dqsScript.async = true;
    dqsScript.src = '//appkr.disqus.com/count.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dqsScript);
  };

  /* Helpers */

  App.anchorForId = function (id) {
    var anchorElem = document.createElement('a');

    anchorElem.className = 'header-link';
    anchorElem.href = '#' + id;
    anchorElem.innerHTML = '<span class="sr-only">Permalink</span><i class="material-icons">link</i>';
    anchorElem.title = 'Permalink';

    return anchorElem;
  };

  App.linkifyAnchors = function (level, containingElement) {
    var headers = containingElement.getElementsByTagName('h' + level);
    headers = Array.prototype.slice.call(headers);
    headers = headers.filter(function(v, i) {
      return v.parentElement === containingElement;
    });

    for (var h = 0; h < headers.length; h++) {
      var header = headers[h];
      var slug   = this.slugify(this.purify(header.childNodes));

      if (typeof slug !== 'undefined' && slug !== '') {
        header.id = slug;
        header.appendChild(this.anchorForId(slug));
      }
    }
  };

  App.purify = function (node) {
    for (var i = 0, len = node.length; i < len; i++) {
      if (node.item(i).nodeName == '#text') {
        return node.item(i).textContent;
      }
    }

    return 'unknown-' + Math.round(Math.random() * 100000);
  };

  App.slugify = function (text) {
    return text.toString().toLowerCase()
      .replace(/[~!@#\$%\^&\*\(\)\[\]\{\}\/:;"',\.<>?]/g, '') // Replace special chars
      .replace(/\s+/g, '-')           // Replace spaces with -
      .replace(/\-\-+/g, '-')         // Replace multiple - with single -
      .replace(/^-+/, '')             // Trim - from start of text
      .replace(/-+$/, '');            // Trim - from end of text
  };

  $(function() {
    return App.init();
  });

}).apply(this);

/* Global Helper Functions */

/* Reload page */
var reload = function (interval) {
  setTimeout(function () {
    window.location.reload(true);
  }, interval || 5000);
};

/* Truncate the given string */
var truncate = function(str, len) {
  var len = len || 100;

  if (str.length > len) {
    return str.substring(0, len - 1) + '...';
  }

  return str;
};

