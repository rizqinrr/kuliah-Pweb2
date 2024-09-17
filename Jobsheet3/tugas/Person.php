<?php

class Person {
  protected $nama;
  
  public function __construct( $nama )
  {
    $this->nama = $nama;
  }
  public function getRole() {
    $role = "$this->nama adalah seorang ";
    return $role;
  }
}