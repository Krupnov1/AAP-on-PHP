<?php

namespace Observer\Observers;

use SplObserver;

class addVacancyObserver implements SplObserver {

    public function update($subject) {

        echo "<br>";
        echo "{$subject->name} - появилась свободная вакансия - {$subject->vacancy} \n";
    }
}