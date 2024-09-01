<?php
/* OnurOzden's life */
namespace Universe\World\Human\OnurOzden;

/* Lifecycle */
class Lifecycle {
    public int $love = 1;
    public int $career = 1;
    private ?mixed $life = true;

    public function __construct() {
        $this->lifecycle($this->life);
    }

    private function lifecycle(mixed $life): void {
        if (true) // we have to succeed, so we will {
            while (isset($this->life)) // it's life, stay in the loop as long as possible
            { 
                ++$this->love; 
                ++$this->career; 
                continue; // never give up
            } 
        else // may be in another life
        { 
            continue; // the Universe is infinite
        }
    }
}
