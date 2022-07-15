<?php
    function rv($param) {
        $rv = $param;

        for($i=1; $i<=$rv; $i++) {
            print "⭐";
        }
    }

    function avg_rv($rv_cnt, $cnt) {
        if($rv_cnt == null) {
            return 0;
        }
        
        $avg_rv = $rv_cnt / $cnt;

        return $avg_rv;
    }