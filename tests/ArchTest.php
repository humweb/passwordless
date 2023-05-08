<?php

it('will has no debugging functions left behind from testing')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();
