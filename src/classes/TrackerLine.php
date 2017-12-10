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
        return ($this->strecke)/($this->zeit);
    }


}