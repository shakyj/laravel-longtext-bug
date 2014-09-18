<?php

class longtextTest extends TestCase {

    //Avoided seeding to easier show that $tableData in should match $tableData out
    protected $tableData;


    /** @test */
    public function itShouldGetTheFullString()
    {
        $tableData = DB::table('longtext')->select()->limit(1)->get();

        $this->assertEquals($tableData[0]->text, $this->tableData);
    }


    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');


        DB::table('longtext')->insert(['text' => $this->tableData]);

    }



}