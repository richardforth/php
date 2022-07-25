<?php
require 'classes/nbbc.php';
$bb = new bbcode();

$output = "[b]This text[/b] is bold.";
echo $bb->Parse($output);
echo '<hr>';

$output = "[b]This text[/b] is [b][i]bold[/i][/b]. The word [b][i]bold[/i][/b] on this line is both  [i]italic[/i] and [b]bold[/b].";
echo $bb->Parse($output);
echo '<hr>';

$output = "[color=blue]This text is blue.[/color]";
echo $bb->Parse($output);
echo '<hr>';

$output = "This inline text is also  [color=blue]blue.[/color]";
echo $bb->Parse($output);
echo '<hr>';

$output = "I think you'll find you are not correct.  [quote=Alex]I am correct.[/quote]";
echo $bb->Parse($output);
echo '<hr>';

$output = "I think you'll really like [url=http://www.google.co.uk]this link[/url]";
echo $bb->Parse($output);
echo '<hr>';

$bb->SetDetectURLs(true);
$output = "[ Auto Detect Links ] I think you'll really like http://www.google.co.uk";
echo $bb->Parse($output);
echo '<hr>';

$output = "I think you'll really like this :)";
echo $bb->Parse($output);
echo '<hr>';

$output = "I think I <3 you...";
echo $bb->Parse($output);
echo '<hr>';

$bb->AddRule('php', array(
    'simple_start' => '<pre class="php">',
    'simple_end'   => '</pre>',
    'class'        => 'block',
    'allow_in'     => null
));

$output = 'Here is some php code: [php]<?php echo \'Some PHP code\'; ?>[/php]';
echo $bb->Parse($output);
echo '<hr>';


$bb->AddRule('youtube', array(
    'mode'         => BBCODE_MODE_ENHANCED,
    'template'     => '<iframe class="youtube_player" type="text/html" width="640" height="365" src="http://www.youtube.com/embed/{$_content}" frameborder="0"></iframe>',
    'class'        => 'block',
    'allow_in'     => null
));

$output = 'This is a great video: 

[youtube]dQw4w9WgXcQ[/youtube]';
echo $bb->Parse($output);
echo '<hr>';


?>