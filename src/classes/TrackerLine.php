<?php

namespace Tracker;

/**
 * @Entity
 */
class TrackerLine
{
    /** @Id @Column(type="integer") @GeneratedValue  */
    private $id;

    /** @Column(type="string") **/
    private $day;

    /** @Column(type="string") **/
    private $strecke;

    /** @Column(type="string") **/
    private $zeit;

    private $speed;


    public function __construct($day, $strecke, $zeit)
    {
        $this->day = $day;
        $this->strecke = $strecke;
        $this->zeit = $zeit;
        $this->speed = $strecke/$zeit;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @return mixed
     */
    public function getStrecke()
    {
        return $this->strecke;
    }

    /**
     * @return mixed
     */
    public function getZeit()
    {
        return $this->zeit;
    }

    /**
     * @return float|int
     */
    public function getSpeed()
    {
        return $this->speed;
    }



    public static function getAllLines() {
        return array(
            new TrackerLine("2013-11-11", "120 km", "23 min"),
            new TrackerLine("2015-05-15", "525 km", "55 min"),
        );
    }

    public static function getByName($name){
        return self::getAllLines()[$name];
    }


}