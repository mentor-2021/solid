<?php
class Response {
  
  public function text($data = 0) {
    $result = number_format($data, 2);
    return $result;
  }

  public function json($data = 0) {
    return [
      "total" => number_format($data, 2)
    ];
  }
}