<?php
include "Facebook.php";
include "SocialGraph.php";

$fbAgus = new Facebook("Agus", "Laravel itu gampang!");
$fbAgus->like();
$fbAgus->like();

$fbSusi = new Facebook("Susi", "Laravel itu super gampang!");
$fbSusi->like();
$fbSusi->like();
$fbSusi->like();

$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbAgus, $fbSusi);
