<?php

namespace Command\Commands;

use Command\Contract\CommandInterface;
use Command\Entity\Text;

class Insert implements CommandInterface {

    protected $text;

    protected $textFrom;

    protected $textBefore;

    public function __construct(Text $text, $textFrom, $textBefore) {
        $this->text = $text;
        $this->textFrom = $textFrom;
        $this->textBefore = $textBefore;
    }

    public function execute() {

        $this->text->insert($this->textFrom, $this->textBefore);
    }
}