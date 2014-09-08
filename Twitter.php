<?php
class Twitter {
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
        $this->favorite;
    }
}
