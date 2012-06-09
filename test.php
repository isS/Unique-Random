<?php

ini_set('memory_limit', '256M');
ini_set('max_execution_time', '300');

include('libraries/UniqueRandom.php');

$check_total_each = 1000;

$random = new UniqueRandom;

?><html>
<head>
<title>Unique Random (TEST)</title>
<style type="text/css">
body {
    font-family: Tahoma, Geneva, sans-serif;
    margin: 50px;
    line-height: 3em;
}
pre {
    background-color: #FFC;
    border: 1px solid #CCC;
    line-height: 2em;
    padding: 2em;
}
h2 {
    margin-top: 2em;
}
</style>
</head>

<body>
<h1>Unique Random (TEST)</h1>
<?php

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = TRUE;
$random->alphabets_uppercase = TRUE;
$random->numbers = TRUE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Both) + Numeric</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = TRUE;
$random->alphabets_uppercase = TRUE;
$random->numbers = FALSE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Both)</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = FALSE;
$random->alphabets_uppercase = TRUE;
$random->numbers = FALSE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Uppercase)</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = TRUE;
$random->alphabets_uppercase = FALSE;
$random->numbers = FALSE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Lowercase)</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = FALSE;
$random->alphabets_lowercase = TRUE;
$random->alphabets_uppercase = TRUE;
$random->numbers = TRUE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Numeric</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = TRUE;
$random->alphabets_uppercase = FALSE;
$random->numbers = TRUE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Lowercase) + Numeric</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

$mix_ids = array();
$random->alphabets = TRUE;
$random->alphabets_lowercase = FALSE;
$random->alphabets_uppercase = TRUE;
$random->numbers = TRUE;
for ($i = 0; $i < $check_total_each; $i++) {
$mix_ids[] = $random->get();
}
echo '<h2>Alpha (Uppercase) + Numeric</h2>
<pre>
Total  : ', count($mix_ids), '
Unique : ', count(array_unique($mix_ids)), '
Sample : ', $random->get(), '
</pre>';

?>
</body>
</html>