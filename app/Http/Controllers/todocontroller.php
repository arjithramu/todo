<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todocontroller extends Controller
{
 public function tod()
  {
      echo "TODO";
      return view("todo");
  }
}
