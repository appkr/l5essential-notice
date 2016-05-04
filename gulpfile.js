var gulp = require('gulp');
var elixir = require('laravel-elixir');
var cp = require('child_process')

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

gulp.task('deploy', function() {
  gulp.src('')
    cp.spawn('bash', ['build', 'production']);
    cp.spawn('git', ['add', 'build_production']);
    cp.spawn('git', ['commit', '-m', '"Build for deploy"']);
    cp.spawn('git', ['subtree', 'push', '--prefix', 'build_production', 'origin', 'gh-pages']);
});

elixir(function(mix) {
    mix.sass('main.scss');

    mix.scripts([
      '../vendor/fastclick/lib/fastclick.js',
      '../vendor/jquery/dist/jquery.js',
      '../vendor/bootstrap-sass/assets/javascripts/bootstrap.js',
      '../vendor/bootstrap-material-design/scripts/material.js',
      '../vendor/bootstrap-material-design/scripts/ripples.js',
      '../vendor/ekko-lightbox/dist/ekko-lightbox.js',
      '../vendor/highlightjs/highlight.pack.js',
      '../vendor/moment/moment.js',
      'main.js'
    ]);

    mix.exec('vendor/bin/jigsaw build --pretty=false', ['./source/**/*', '!./source/../**/*'])
        .browserSync({
            server: { baseDir: 'build_local' },
            proxy: null,
            files: [ 'build_local/**/*' ]
        });

  //mix.exec('mv build_local/feed.xml.html build_local/feed.xml');
  //mix.exec('mv build_production/feed.xml.html build_production/feed.xml');
});
