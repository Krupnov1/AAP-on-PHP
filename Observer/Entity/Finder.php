<?php

namespace Observer\Entity;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Finder implements SplSubject {

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $workExperience;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    public $vacancy;

    public function __construct(string $name, string $email, string $workExperience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->workExperience = $workExperience;
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
        echo "{$this->name} - Вы подписаны на рассылку уведомлений!!!\n";
        echo "<br>";
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "{$this->name} - Вы отписаны от рассылки уведомлений!!!\n";
    }

    public function notify() {
        
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addVacancy($vacancy) {

        $this->vacancy = $vacancy;
        $this->notify();
    } 
}

