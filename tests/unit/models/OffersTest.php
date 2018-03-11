<?php
/**
 * Created by PhpStorm.
 * User: burhan
 * Date: 12/22/17
 * Time: 3:03 PM
 */
use app\models\OffersSearch;

class OffersTest extends PHPUnit_Framework_TestCase{


    
    private $searchModel;
    public function setUP(){
        
        $this->searchModel = new OffersSearch();

    }
    public function tearDown(){
        
    }
    public function testGetAllHotels(){
        $hotels = $this->searchModel->search([]);
        $hotels = $hotels[2];
        $hotels = $hotels->Hotel;
        
        $this->assertInternalType('array',$hotels);
        $this->assertNotEmpty($hotels);
        $this->assertArrayHasKey('hotelInfo',$hotels[0]);

    }
    
    public function testGetEmptyHotels()
    {
        $hotels = $this->searchModel->search(['OffersSearch'=>['destinationName'=>'sdsad']]);
        $hotels = $hotels[2];
        $hotels = $hotels->Hotel;
        $this->assertEmpty($hotels);
    }


}