<?php

use App\Models\Artical;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ArticalTest extends TestCase {
    use RefreshDatabase; //refresh migration

    function testTrendingArticles() {
        Artical::factory()->count(2)->create();
        Artical::factory()->create(['reads' => 5]);
        $trendingArtical = Artical::factory()->create(['reads' => 10]);

        $articals = Artical::trending();

        $this->assertEquals($trendingArtical->id, $articals->first()->id);
        $this->assertCount(3, $articals);
    }
}