#!/usr/bin/env bash

ENV="local"
[[ -z "$1" ]] || ENV="production"

rm -rf source/lessons
cp -R $HOME/workspace/l5essential/lessons ./source/
rm source/lessons/INDEX.md

vendor/bin/jigsaw build --pretty=false --env="$ENV"

[ -d build_local ] && cp CNAME 404.html build_local/
[ -d build_production ] && cp CNAME 404.html build_production/

[ -d build_local ] && cp index.html build_local/lessons/
[ -d build_production ] && cp index.html build_production/lessons/

[ -f build_local/feed.xml.html ] && mv build_local/feed.xml.html build_local/feed.xml
[ -f build_production/feed.xml.html ] && mv build_production/feed.xml.html build_production/feed.xml

