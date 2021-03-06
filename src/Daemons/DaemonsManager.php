<?php

namespace Laravel\Forge\Daemons;

use Laravel\Forge\Daemons\Commands\GetDaemonCommand;
use Laravel\Forge\Daemons\Commands\ListDaemonsCommand;
use Laravel\Forge\Daemons\Commands\CreateDaemonCommand;

class DaemonsManager
{
    /**
     * Initialize new create daemon command.
     *
     * @param string $command
     *
     * @return \Laravel\Forge\Daemons\Commands\CreateDaemonCommand
     */
    public function create(string $command)
    {
        return (new CreateDaemonCommand())->start($command);
    }

    /**
     * Initialize new list daemons command.
     *
     * @return \Laravel\Forge\Daemons\Commands\ListDaemonsCommand
     */
    public function list()
    {
        return new ListDaemonsCommand();
    }

    /**
     * Initialize new get daemon command.
     *
     * @param int $daemonId
     *
     * @return \Laravel\Forge\Daemons\Commands\GetDaemonCommand
     */
    public function get(int $daemonId)
    {
        return (new GetDaemonCommand())->setResourceId($daemonId);
    }
}
