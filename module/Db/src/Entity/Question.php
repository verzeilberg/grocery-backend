<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page item.
 * @ORM\Entity()
 * @ORM\Table(name="questions")
 */
class Question {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="text", type="string", length=50, nullable=false)
     */
    protected $text;

    /**
     * @ORM\Column(name="required", type="integer", length=11, nullable=false)
     */
    protected $required;

    /**
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(name="range_min", type="integer", length=11, nullable=true)
     */
    protected $rangeMin;

    /**
     * @ORM\Column(name="range_max", type="integer", length=11, nullable=true)
     */
    protected $rangeMax;

    /**
     * @ORM\Column(name="allow_explanation", type="integer", length=11, nullable=false)
     */
    protected $allowExplanation;

    /**
     * Many Questions have Many answers.
     * @ORM\ManyToMany(targetEntity="Answer", inversedBy="questions")
     * @ORM\JoinTable(name="questions_answers")
     */
    private $answers;

    public function __construct() {
        $this->answers = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getText() {
        return $this->text;
    }

    function getRequired() {
        return $this->required;
    }

    function getType() {
        return $this->type;
    }

    function getRangeMin() {
        return $this->rangeMin;
    }

    function getRangeMax() {
        return $this->rangeMax;
    }

    function getAllowExplanation() {
        return $this->allowExplanation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setRequired($required) {
        $this->required = $required;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setRangeMin($rangeMin) {
        $this->rangeMin = $rangeMin;
    }

    function setRangeMax($rangeMax) {
        $this->rangeMax = $rangeMax;
    }

    function setAllowExplanation($allowExplanation) {
        $this->allowExplanation = $allowExplanation;
    }

    function getAnswers() {
        return $this->answers;
    }

    function setAnswers($answers) {
        $this->answers = $answers;
    }

}
