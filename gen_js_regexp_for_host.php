<?php
/**
* Generate JavaScript regexp for matching URL for getting host part
* For jquery.favicon.js
*
* January 30, 2008//R. Rajesh Jeba Anbiah//http://rajeshanbiah.blogspot.com/
*/

// set user agent; otherwise getting 403
ini_set('user_agent', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/68.0.3440.84 Chrome/68.0.3440.84 Safari/537.36');
echo str_replace(array("\n", // remove newline
'/', // escape / to \/
'?:' // remove--we really need match
) , array(
'',
'\/',
''
), file_get_contents('http://web.archive.org/web/20070302134659if_/http://foad.org:80/~abigail/Perl/url3.regex'));
