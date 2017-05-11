<?php
use App\Models\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function testShow()
    {
        $this->mockSomeProjects();

        $this->visit('/project/1')
            ->see('DemoProject');
    }

    private function mockSomeProjects()
    {
        Project::create(
            [
                'name' => 'DemoProject',
                'projectnumber' => '1',
                'description' => 'dit is een demoproject',
            ]
        );

    }
}
