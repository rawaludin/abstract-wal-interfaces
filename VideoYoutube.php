<?php
class VideoYoutube {
    private $uploader;
    private $title;
    private $link;
    public function __construct($title, $uploader, $link) {
        $this->title = $title;
        $this->uploader = $uploader;
        $this->link = $link;
    }
    public function play() {
        echo "Playing video ".$this->title." from ".$this->user."\n";
    }
    public function download() {
        echo "Downloading video ".$this->title. " from ".$this->link;
    }
}
