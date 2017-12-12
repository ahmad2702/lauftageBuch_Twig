<?php

namespace Tracker;

/**
 * @Entity
 */
class TrackerLine
{
    /** @Id @Column(type="integer") @GeneratedValue  */
    private $id;

    /** @Column(type="date") **/
    private $day;

    /** @Column(type="float") **/
    private $strecke;

    /** @Column(type="float") **/
    private $zeit;


    public function __construct($day, $strecke, $zeit)
    {
        $this->day = $day;
        $this->strecke = $strecke;
        $this->zeit = $zeit;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day->format('d.m.Y H:i:s');
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
        return ($this->strecke * 1000)/($this->zeit);
    }


}