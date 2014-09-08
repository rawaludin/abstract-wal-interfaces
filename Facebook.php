<?php
class Facebook {
    private $status;
    private $user;
    private $like = 0;
    public function __construct($user, $status) {
        $this->user = $user;
        $this->status = $status;
    }
    public function status() {
        return $this->status;
    }
    public function user() {
        return $this->user;
    }
    public function like() {
        $this->like++;
    }
    public function totalLike() {
        return $this->like;
    }
}
