<?php
    function dateFormat($datetime) {
        if(empty($datetime)) {
            return false;
        }

        date_default_timezone_set("Asia/Seoul");
        $target = date("Y.m.d", strtotime($datetime));    
        $today = date("Y.m.d");    

        if($target == $today) {
            $rs = date("H:i", strtotime($datetime));
        } else {
            $rs = $target;
        }

        return $rs;
    }