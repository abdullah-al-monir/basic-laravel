<?php

namespace App\Http\Controllers;


class PageController
{
  /**
   * @return string
   */
  public function showHomePage()
  {
    $pageIdentifier = 'home';
    return view('layouts.mainlayout')->with('pageIdentifier', $pageIdentifier);
  }

  public function showAboutPage()
  {
    $pageIdentifier = 'about';
    return view('about')->with('pageIdentifier', $pageIdentifier);
  }
  public function showPostPage()
  {
    $pageIdentifier = 'post';
    return view('post')->with('pageIdentifier', $pageIdentifier);
  }

}