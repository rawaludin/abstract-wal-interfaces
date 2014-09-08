<?php
include_once "Likeable.php";
class Twitter implements Likeable {
    private $tweet;
    private $user;
    private $favorite;
    public function __construct($user, $tweet) {
        $this->user = $user;
        $this->tweet = $tweet;
    }
    public function tweet() {
        return $this->tweet;
    }
    public function user() {
        return $this->user;
    }
    public function favorite() {
        $this->favorite++;
    }
    public function totalFavorite() {
        return $this->favorite;
    }
    public function like() {
        $this->favorite();
    }
    public function totalLike() {
        return $this->totalFavorite();
    }
    public function platform() {
        return "Twitter";
    }
}
