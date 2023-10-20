<meta charset="UTF-8">

<?php
error_reporting(0);

echo <<< EOF
/*<br>
# @Author: Night Tac<br>
# @Date:  2023-10-10<br>
*/<br><br>
EOF;

$fileName = $_GET['file'];
$code = $_GET['code'];

if (empty($_GET)) {
    echo <<<EOF
    \$fileName = \$_GET['file'];<br>
    \$code = \$_GET['code'];<br><br>
    file_put_contents(trim(\$fileName), \$code);
EOF;
    die();
}

if (preg_match('/^.*\.php$/', $fileName)) {
    echo 'if (preg_match(\'/^.*\.php$/\', $fileName))<br><br>';
    die('HACKER ! ! !');
}

if (substr($fileName, '-4') != '.php') {
    echo 'if (substr($fileName, \'-4\') != \'.php\')<br><br>';
    die('Too Easy :)');
}

if (strstr($code, '<')) {
    echo 'if (strstr($code, \'<\'))<br><br>';
    die('不会再让你过去了 :<');
}

if (!is_string($code)) {
    echo 'if (!is_string($code))<br><br>';
    die('这不是我想要的 :(');
}

if (preg_match('/'.urldecode('%0A').'.*php:/i', $fileName)) {
    echo 'if (preg_match(\'/\'.urldecode(\'%0A\').\'.*php:/i\', $fileName))<br><br>';
    die('难道要全部推翻吗 ?');
}

echo 'Genius or Joker ?';
file_put_contents(trim($fileName), $code);