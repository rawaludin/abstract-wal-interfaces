<?php
include "Facebook.php";
include "Twitter.php";
include "SocialGraph.php";

$fbTukul = new Facebook("Tukul Arwana", "Kembali ke laptop!");
$fbTukul->like();
$fbTukul->like();

$twJokowi = new Twitter("Joko Widodo", "Aku rapopo..");
$twJokowi->favorite();
$twJokowi->favorite();
$twJokowi->favorite();

$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbTukul, $twJokowi);
