<?php

namespace Laravel\Forge\Services\Commands;

class RebootServiceCommand extends AbstractServiceCommand
{
    /**
     * @{inheritdoc}
     */
    public function command()
    {
        return 'reboot';
    }
}
