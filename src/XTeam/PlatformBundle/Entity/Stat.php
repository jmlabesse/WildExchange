<?php

namespace XTeam\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stat
 *
 * @ORM\Table(name="stat")
 * @ORM\Entity
 */
class Stat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_count", type="integer", nullable=false)
     */
    private $questionCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="response_count", type="integer", nullable=false)
     */
    private $responseCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="bestresponse_count", type="integer", nullable=false)
     */
    private $bestresponseCount;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set questionCount
     *
     * @param integer $questionCount
     * @return Stat
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;

        return $this;
    }

    /**
     * Get questionCount
     *
     * @return integer 
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * Set responseCount
     *
     * @param integer $responseCount
     * @return Stat
     */
    public function setResponseCount($responseCount)
    {
        $this->responseCount = $responseCount;

        return $this;
    }

    /**
     * Get responseCount
     *
     * @return integer 
     */
    public function getResponseCount()
    {
        return $this->responseCount;
    }

    /**
     * Set bestresponseCount
     *
     * @param integer $bestresponseCount
     * @return Stat
     */
    public function setBestresponseCount($bestresponseCount)
    {
        $this->bestresponseCount = $bestresponseCount;

        return $this;
    }

    /**
     * Get bestresponseCount
     *
     * @return integer 
     */
    public function getBestresponseCount()
    {
        return $this->bestresponseCount;
    }
}
