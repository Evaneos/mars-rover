<?php

namespace MR\Command;

use MR\Rover;

class CommandHandler
{
    /**
     * @param Rover              $rover
     * @param CommandInterface[] $commands
     */
    public function handle(Rover $rover, array $commands)
    {
        foreach ($commands as $command) {
            $command->execute($rover);
        }
    }
}
