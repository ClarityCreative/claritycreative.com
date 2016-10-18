<?php
namespace Craft;

class Setcookie_SetController extends BaseController
{
  protected $allowAnonymous = true;

  public function actionSetIt(){
    $data = craft()->request->getPost('password');

    $work = craft()->request->getParam('w');

    if($data == "clarity4you"){
      $value = 'approved';
      if(!isset($_COOKIE['clarityAuth'])) {
        setcookie("clarityAuth", $value, time()+86400, "/");
      }

      if(isset($work)){
        header( 'Location: /work/'. $work );
      }else{
        header( 'Location: /work' );
      }
    }else{
      header( 'Location: /client-access?q=invalid' );
    }
  }

  public function actionContact(){
    $data = craft()->request->getPost();

    $body  = "name: " . $data['name'] . " </br> ";
    $body .= "email: " . $data['email'] . " </br> ";
    $body .= "message: " . $data['message'] . " </br> ";

    $message = new EmailModel();
    $message->fromEmail = $data['email'];
    $message->toEmail = 'letsbeclear@claritycreative.com';
    $message->subject = 'Contact Form Submission';
    $message->htmlBody = $body;

    craft()->email->sendEmail($message);

    header( 'Location: thanks' );
  }
}
