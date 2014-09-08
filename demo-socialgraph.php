<?php
include "Facebook.php";
include "Twitter.php";
include "SocialGraph.php";

$fbAgus = new Facebook("Agus", "Laravel itu gampang!");
$fbAgus->like();
$fbAgus->like();

$twSusi = new Twitter("Susi", "Laravel itu super gampang!");
$twSusi->favorite();
$twSusi->favorite();
$twSusi->favorite();

$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbAgus, $twSusi);
