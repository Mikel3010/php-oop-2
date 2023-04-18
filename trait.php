<?php
trait Discount {
    public function applyDiscount($disconunt){
        $this->price -= ($this->price * $disconunt / 100);
    }
}