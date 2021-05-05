<?php

namespace Command\Entity;

class Text {

    public function selectTextFrom() {

        echo "Выделим текст от......................";
        echo "<br>";
    }

    public function selectTextBefore() {

        echo "...............................................и до";
        echo "<br>";
    }

    public function copy() {

        echo "Копирование текста";
        echo "<br>";
    }
    
    public function cut() {

        echo "Вырезка текст";
        echo "<br>";
    }

    public function insert() {

        echo "Вставка текста";
        echo "<br>";
    }


}