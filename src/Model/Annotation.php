<?php

namespace Elucidate\Model;

use ArrayAccess as ArrayAccessInterface;

class Annotation implements RequestModel, ResponseModel, ArrayAccessInterface {
  use JsonLDContext;
  use SerializeToJsonLD;
  use ArrayAccess;

  private $type;
  private $body;
  private $target;
  private $id;
  private $creator;
  private $generator;
  private $container;

  public function getContainer() {
    return $this->container;
  }

  public function __construct(
    string $id = NULL,
    $body = NULL,
    $target = NULL,
    $creator = NULL,
    $generator = NULL,
    Container $container = NULL
  ) {
    $this->type = 'Annotation';
    $this->body = $body;
    $this->target = $target;
    $this->id = $id;
    $this->creator = $creator;
    $this->generator = $generator;
    $this->container = $container;
  }

  /**
   * @return null
   */
  public function getBody() {
    return $this->body;
  }

  /**
   * @param null $body
   */
  public function setBody($body) {
    $this->body = $body;
  }

  /**
   * @return null
   */
  public function getTarget() {
    return $this->target;
  }

  /**
   * @param null $target
   */
  public function setTarget($target) {
    $this->target = $target;
  }

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id) {
    $this->id = $id;
  }

  /**
   * @return null
   */
  public function getCreator() {
    return $this->creator;
  }

  /**
   * @param null $creator
   */
  public function setCreator($creator) {
    $this->creator = $creator;
  }

  /**
   * @return null
   */
  public function getGenerator() {
    return $this->generator;
  }

  /**
   * @param null $generator
   */
  public function setGenerator($generator) {
    $this->generator = $generator;
  }


  public function __toString() {
    return substr($this->id, -1) === '/' ? $this->id : $this->id . '/';
  }
}
