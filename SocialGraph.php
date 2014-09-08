<?php
class SocialGraph {
    public static function compareLike(Facebook $fb1, Facebook $fb2) {
        if ($fb1->totalLike() > $fb2->totalLike()) {
            echo "Status " .$fb1->user() . " Lebih populer dari " . $fb2->user() . "\n";
        } elseif ($fb1->totalLike() < $fb2->totalLike()) {
            echo "Status " .$fb2->user() . " Lebih populer dari " . $fb1->user() . "\n";
        } else {
            echo "Status kedua user sama-sama populer";
        }
    }
}
