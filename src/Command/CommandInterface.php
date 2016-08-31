<?php

namespace MR\Command;

use MR\Rover;

interface CommandInterface
{
    public function execute(Rover $rover);
}
