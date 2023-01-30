    <?php

    function multiply_two_lists($list1,$list2){
        $result = array();
        foreach($list1 as $key => $value){
            $result[$key] = $value * $list2[$key];
        }
        echo implode(' ',$result);
    }
    
    multiply_two_lists(array(20,12,5), array(1,3,3))

    ?>
