<?php

use App\Models\Competency;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;

class CompetencyCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        $this->mockSomeCompetencies();

        $this->visit('/competency')
            ->see('Memes Posten 1a')
            ->see('Memes Posten 1b')
            ->see('Wijn Drinken 2');
    }

    public function testShow()
    {
        $this->mockSomeCompetencies();

        $this->visit('/competency/1')
            ->see('Memes Posten 1a');
    }

    public function testEdit()
    {
        $this->mockSomeCompetencies();

        $this->visit('/competency/1/edit')
            ->see('Memes Posten 1a')
            ->see('MEME')
            ->see('blablabla')
            ->see('5')
            ->see('CU123456');
    }

    public function testUpdate()
    {
        $this->mockSomeCompetencies();

        $this->visit('/competency/1/edit')
            ->type('Memes Stelen 1a', 'name')
            ->press('Opslaan');

        $this->visit('/competency/1/edit')
            ->see('Memes Stelen 1a');
    }

       // test testSelectCompetency made by Steven Nassy 12-4-2017

    public function testSelectCompetency()
    {
        $this->mockSomeCompetencies();

        $this->visit('/register')
            ->type('John Doe', 'name')
            ->type('johndoe@example.com', 'email')
            ->type('admin123', 'password')
            ->type('admin123', 'password_confirmation')
            ->press('Register')

            ->visit('/userCompetencies')
            ->press('Kiezen')
            ->seePageIs('/userCompetencies');

    }

<<<<<<< HEAD
    public function testDeleteSelectedCompetency()
    {
        $this->mockSomeCompetencies();

        $this->visit('/register')
            ->type('John Doe', 'name')
            ->type('johndoe@example.com', 'email')
            ->type('admin123', 'password')
            ->type('admin123', 'password_confirmation')
            ->press('Register')

            ->visit('/userCompetencies')
            ->press('Kiezen')
            ->seePageIs('/userCompetencies')

            ->visit('/userCompetencies/show')
            ->press('Verwijderen')
            ->seePageIs('/userCompetencies/show');

    }

    /**
    * @group test
    */
    public  function testShowInfoCompetencyOnChooseCompetency()
    {
       $this->mockSomeCompetencies();

       $me = User::create([
           'name'       => 'Tim Banh',
           'email'      => 'TB@hz.nl',
           'password'   => bcrypt('admin123'),
       ]);

       $this->actingAs($me);

       $this->visit('/userCompetencies')
           ->click('Memes Posten 1a')
           ->seePageIs('/competency/1')

           ->see('Memes Posten 1a')
           ->see('MEME')
           ->see('CU123456');

    }

    public function mockSomeCompetencies()
=======
    public function testShowInfoComptencyOnChooseCompetency()
    {
        $this->mockSomeCompetencies();

        $me = User::create([
            'name'          => 'Tim Banh',
            'email'         => 'TB@HZ.nl',
            'password'      => bcrypt('admin123'),
        ]);

        $this->actingAs($me);

        $this->visit('/userCompetencies')
            ->click('Memes Posten 1a')
            ->seePageIs('/competency/1')
            ->see('Memes Posten 1a')
            ->see('MEME')
            ->see('CU123456');
    }

    private function mockSomeCompetencies()
>>>>>>> 8178aae161b68479b03303de54328c531e63152c
    {
        Competency::create(
            [
                'name'         => 'Memes Posten 1a',
                'abbreviation' => 'MEME',
                'description'  => 'blablabla',
                'ec_value'     => 5.0,
                'cu_code'      => 'CU123456',
            ]
        );
        Competency::create(
            [
                'name'         => 'Memes Posten 1b',
                'abbreviation' => 'MEMEB',
                'description'  => 'blablabla tests',
                'ec_value'     => 5.0,
                'cu_code'      => 'CU654321',
            ]
        );
        Competency::create(
            [
                'name'         => 'Wijn Drinken 2',
                'abbreviation' => 'WIJN',
                'description'  => 'drink drink drink',
                'ec_value'     => 5.0,
                'cu_code'      => 'CU456789',
            ]
        );
    }
}
