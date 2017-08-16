<?php
namespace Craft;

class setcookieVariable
{
  function get(){
    if(isset($_COOKIE['clarityAuth'])) :
			return true;
		endif;
    return false;
  }

  public function vimPic($id){
    require_once(craft()->path->getPluginsPath().'setcookie/assets/autoload.php');

    $vimeo = new \Vimeo\Vimeo('7a97a61f06906cea21fa70e52a07b28a9289ba38', 'db5b373bd92bdef1d55ffa2e537b5d52972394fc', '5c6f49c73a7c456e95ca7a12239b0439');
    $pic = '';

    $video = $vimeo->request('/me/videos/'.$id);
    if($video && isset($video['body']) && isset($video['body']['pictures']) && isset($video['body']['pictures']['sizes']) && isset($video['body']['pictures']['sizes'][4]) && isset($video['body']['pictures']['sizes'][4]['link']) ) {
      $pic = $video['body']['pictures']['sizes'][4]['link'];
    }

    return $pic;
  }

}
