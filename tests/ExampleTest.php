<?php

it('can execute make:repository command', function () {
    $this->artisan('make:repository Customer/CustomerRepository --model=Customer')
        ->assertExitCode(0);
});
