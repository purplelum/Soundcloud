<?php
namespace Soundcloud;

class SoundcloudException extends \Exception
{
  // Constructor
  public function __construct($message)
  {
    parent::__construct($message);
  }
}
