<?php

/**
 * @author aka
 * @copyright 03/21/2017
 */
    
  class Video{
    var $id;
    var $name;
    var $url;

    function Video($id, $name, $url){
        $this->id   = $id;
        $this->name = $name;
        $this->url  = $url;
    }
  }
  
    $arrayVideo = array();
    array_push($arrayVideo, new Video("01", "Tay du ky", "url1"));
    array_push($arrayVideo, new Video("02", "Nhat huu hoa thuong", "url2"));
    array_push($arrayVideo, new Video("03", "Chu sa di hoan hy", "url3"));
    echo json_encode($arrayVideo);

?>