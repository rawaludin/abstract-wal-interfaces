<?php
class SimpleURL {
    public function shorten($url) {
        $shortened = substr(md5($url), 0, 5);
        echo "Shortened version http://sUrl.com/".$shortened."\n";
    }
}
