<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meme")
 */
class Meme {
  /**
   * @ORM\Column(type="integer", unique=true, nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", name="top_text", length=100, nullable=true)
   */
  private $topText;

  /**
   * @ORM\Column(type="string", name="bottom_text", length=100, nullable=true)
   */
  private $bottomText;

  /**
   * @ORM\Column(type="datetime", name="created_at")
   */
  private $createdAt;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  public function getTopText() {
    return $this->topText;
  }

  public function setTopText($topText) {
    $this->topText = $topText;
    return $this;
  }

  public function getBottomText() {
    return $this->bottomText;
  }

  public function setBottomText($bottomText) {
    $this->bottom = $bottomText;
    return $this;
  }

  public function getCreatedAt() {
    return $this->createdAt;
  }

  public function setCreatedAt(\DateTime $createdAt=null) {
    $this->createdAt = $createdAt;
    return $this;
  }

}