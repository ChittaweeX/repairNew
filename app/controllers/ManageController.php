<?php
  /**
   *
   */
  class ManageController extends Controller
  {

    public function postTestsave()
    {
      $inputs = Input::all();
      return Redirect::to('page/home')->with('alerttext','Save OK');
    }

  }

 ?>
