<?php

namespace Tests\Unit;

use App\Http\Controllers\NationaalGeoregisterController;
use PHPUnit\Framework\TestCase;

class NationaalGeoregisterTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_straatnaam(): void
    {
        $data = NationaalGeoregisterController::getData("9216VT");

        $this->assertEquals('Smidterij', $data['straatnaam']);
    }
}
