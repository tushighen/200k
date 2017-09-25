<?php
function getTimingInstallation($m2)
{
    if ($m2 >= 84 && $m2 <= 689)
        $returnValue = 1;
    elseif ($m2 >= 690 && $m2 <= 1339)
        $returnValue = 2;
    elseif ($m2 >= 1340 && $m2 <= 1849)
        $returnValue = 3;
    elseif ($m2 >= 1850 && $m2 <= 2529)
        $returnValue = 4;
    elseif ($m2 >= 2530 && $m2 <= 3209)
        $returnValue = 5;
    elseif ($m2 >= 3210 && $m2 <= 3719)
        $returnValue = 6;
    elseif ($m2 >= 3720 && $m2 <= 4399)
        $returnValue = 7;
    elseif ($m2 >= 4400 && $m2 <= 5079)
        $returnValue = 8;
    elseif ($m2 >= 5080 && $m2 <= 5589)
        $returnValue = 9;
    elseif ($m2 >= 5590 && $m2 <= 6269)
        $returnValue = 10;
    elseif ($m2 >= 6270 && $m2 <= 6779)
        $returnValue = 11;
    elseif ($m2 >= 6780 && $m2 <= 7459)
        $returnValue = 12;
    elseif ($m2 >= 7460 && $m2 <= 8139)
        $returnValue = 13;
    elseif ($m2 >= 8140 && $m2 <= 8649)
        $returnValue = 14;
    elseif ($m2 >= 8650 && $m2 <= 9329)
        $returnValue = 15;
    elseif ($m2 >= 9330 && $m2 <= 10009)
        $returnValue = 16;
    elseif ($m2 >= 10010 && $m2 <= 10519)
        $returnValue = 17;
    elseif ($m2 >= 10520 && $m2 <= 11199)
        $returnValue = 18;
    elseif ($m2 >= 11200 && $m2 <= 11709)
        $returnValue = 19;
    elseif ($m2 >= 11710 && $m2 <= 12309)
        $returnValue = 20;
    elseif ($m2 >= 12390 && $m2 <= 13069)
        $returnValue = 21;
    elseif ($m2 >= 13070 && $m2 <= 13579)
        $returnValue = 22;
    elseif ($m2 >= 13580 && $m2 <= 14259)
        $returnValue = 23;
    elseif ($m2 >= 14260 && $m2 <= 14769)
        $returnValue = 24;
    elseif ($m2 >= 14770 && $m2 <= 15449)
        $returnValue = 25;
    elseif ($m2 >= 15450 && $m2 <= 16129)
        $returnValue = 26;
    elseif ($m2 >= 16130 && $m2 <= 16639)
        $returnValue = 27;
    elseif ($m2 >= 16640 && $m2 <= 17319)
        $returnValue = 28;
    elseif ($m2 >= 17320 && $m2 <= 17999)
        $returnValue = 29;
    elseif ($m2 >= 18000 && $m2 <= 18509)
        $returnValue = 30;
    elseif ($m2 >= 18510 && $m2 <= 19189)
        $returnValue = 31;
    elseif ($m2 >= 19190 && $m2 <= 19699)
        $returnValue = 32;
    elseif ($m2 >= 19700 && $m2 <= 20379)
        $returnValue = 33;
    elseif ($m2 >= 20380 && $m2 <= 21059)
        $returnValue = 34;
    elseif ($m2 >= 21060 && $m2 <= 21569)
        $returnValue = 35;
    elseif ($m2 >= 21570 && $m2 <= 22249)
        $returnValue = 36;
    elseif ($m2 >= 22250 && $m2 <= 22929)
        $returnValue = 37;
    elseif ($m2 >= 22930 && $m2 <= 23439)
        $returnValue = 38;
    elseif ($m2 >= 23440 && $m2 <= 24119)
        $returnValue = 39;
    elseif ($m2 >= 24120 && $m2 <= 24629)
        $returnValue = 40;
    elseif ($m2 >= 24630 && $m2 <= 25309)
        $returnValue = 41;
    elseif ($m2 >= 25310 && $m2 <= 25989)
        $returnValue = 42;
    elseif ($m2 >= 25990 && $m2 <= 26499)
        $returnValue = 43;
    elseif ($m2 >= 26500 && $m2 <= 27179)
        $returnValue = 44;
    elseif ($m2 >= 27180 && $m2 <= 27859)
        $returnValue = 45;
    elseif ($m2 >= 27860 && $m2 <= 28369)
        $returnValue = 46;
    elseif ($m2 >= 28370 && $m2 <= 29049)
        $returnValue = 47;
    elseif ($m2 >= 29050 && $m2 <= 29559)
        $returnValue = 48;
    elseif ($m2 >= 29560 && $m2 <= 30239)
        $returnValue = 49;
    else
        $returnValue = 50;
}

?>