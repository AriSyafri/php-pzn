<?php 
    // string to number comparison
    // comparison      | Before | After |
    //------------------------------------
    // 0 == "0"        | true   | true  |
    // 0 == "0.0"      | true   | true  |
    // 0 == "foo"      | true   | false |
    // 0 == ""         | true   | false |
    // 42 == "  42"    | true   | true  |
    // 42 == "42foo"   | true   | false |

?>