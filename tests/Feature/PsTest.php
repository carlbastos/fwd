<?php

namespace Tests\Feature;

use Tests\TestCase;

class PsTest extends TestCase
{
    public function testPs()
    {
        $this->artisan('ps')->assertExitCode(0);

        $this->assertDockerCompose('ps');
    }

    public function testPsCustom()
    {
        $this->artisan('ps -a')->assertExitCode(0);

        $this->assertDockerCompose('ps -a');
    }
}
