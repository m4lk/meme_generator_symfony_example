<?php

namespace AppBundle\Entity;

/**
 *
 * @author rodrigo
 *
 */
class Meme {
  protected $id;
  protected $top_text;
  protected $bottom_text;
  protected $date_created;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  public function getTopText() {
    return $this->top_text;
  }

  public function setTopText($top_text) {
    $this->top_text = $top_text;
    return $this;
  }

  public function getBottomText() {
    return $this->bottom_text;
  }

  public function setBottomText($bottom_text) {
    $this->bottom_text = $bottom_text;
    return $this;
  }

  public function getDateCreated() {
    return $this->date_created;
  }

  public function setDateCreated(\DateTime $date_created = null) {
    $this->date_created = $date_created;
    return $this;
  }



}