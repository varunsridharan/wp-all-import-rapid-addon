<?php
$content = file_get_contents( 'https://raw.githubusercontent.com/soflyy/wp-all-import-rapid-addon/master/rapid-addon.php' );
@mkdir(__DIR__.'/src/');
@unlink(__DIR__.'/src/RapidAddon.php');
file_put_contents(__DIR__. '/src/RapidAddon.php', $content );

date_default_timezone_set( 'UTC' );
$output       = shell_exec( 'git log -1' );
$build_number = getenv( 'TRAVIS_BUILD_NUMBER' );
$gh_token     = getenv( 'GH_TOKEN' );
$microtime = date( 'dmyhis' );

echo shell_exec( "git checkout -f master
git config --global user.email \"travis@travis-ci.org\"
git config --global user.name \"Travis CI\"
git add -A
git commit -m \"Travis build: $build_number [skip ci]\"
git remote set-url origin https://$gh_token@github.com/vsp-libs/wp-all-import-rapid-addon.git > /dev/null 2>&1
git push origin master -f
git tag -a $build_number -m 'Released V $build_number'
git push --tags" );
