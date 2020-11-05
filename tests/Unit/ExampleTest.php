<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Database\Factories\UserFactory;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    public function modelProvider()
    {
        return [
            'users' => [new User()],
            'posts' => [new Post()]
        ];
    }

    /** @dataProvider modelProvider */
    public function testBasicTest(Model $model)
    {
        $this->assertInstanceOf(Model::class, $model);
    }
}
