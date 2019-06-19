<?php 

    function read_more($limit){
        $content_readmore = explode(" ", get_the_content());
        $less_content= array_slice($content_readmore, 0, $limit);
        echo implode(" ", $less_content);

    }

?>