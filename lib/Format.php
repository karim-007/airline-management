<?php
/**
* Format Class
*/
class Format{
 public function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
 }
 public function formatDateOnly($date){
    return date('F j, Y', strtotime($date));
 }
 public function formatDay($date){
    return date('j', strtotime($date));
 }
 public function formatMonthYear($date){
    return date('F, Y', strtotime($date));
 }

 public function formatTime($time){
    return date('g:i a', strtotime($time));
 }
 public function currentDhakaTime()
 {
    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    return $dt->format('G:i:s');
 }

 public function currentDhakaDate()
 {
    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    return $dt->format('Y-m-d');
 }

 public function currentDhakaDayId()
 {
    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    return $dt->format('w');
 }

 public function textShorten($text, $limit = 400){
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text.".....";
    return $text;
 }

 public function validation($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 public function title(){
    $path = $_SERVER['SCRIPT_FILENAME'];
    $title = basename($path, '.php');
    //$title = str_replace('_', ' ', $title);
    if ($title == 'index') {
     $title = 'home';
    }elseif ($title == 'page-schedule') {
     $title = 'schedule';
    }elseif ($title == 'archive-events') {
     $title = 'events';
    }elseif ($title == 'archive-members') {
     $title = 'members';
    }elseif ($title == 'archive') {
     $title = 'blog';
    }elseif ($title == 'page-contacts') {
     $title = 'contacts';
    }
    return $title = ucfirst($title);
   }
}
?>