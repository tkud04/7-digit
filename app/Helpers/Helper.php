<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract;
use Carbon\Carbon; 
use Mail;

class Helper implements HelperContract
{


           function getBlogPosts(){} 
           
          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('info@disenado.com.ng',"Fundzila");
                           $message->to($to);
                           $message->subject($subject);
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('info@disenado.com.ng',"Fundzila");
                           $message->to($to);
                           $message->subject($subject);
                     });
                   }
           }

}
?>