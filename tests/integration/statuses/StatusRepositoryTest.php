<?php

use Larabook\Statuses\StatusRepository;

class StatusRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected $repo;

    protected function _before()
    {
        $this->repo = new StatusRepository;
    }


    /** @test */
    public function it_gets_all_statuses_for_a_user()
    {
        //Given I have 2 users

    }

}