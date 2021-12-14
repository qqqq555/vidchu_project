<?php
    $date_ampmo='0';
    $date_ampm='0';
    function date_am($date){ //將禮拜幾改為欄位名(早上內掃)
        if($date==2){
            $date_ampm='1am';
        }
        else if($date==3){
            $date_ampm='2am';
        }
        else if($date==4){
            $date_ampm='3am';
        }
        else if($date==5){
            $date_ampm='4am';
        }
        else if($date==6){
            $date_ampm='5am';
        }
        return $date_ampm;
    }
    function date_pm($date){ //將禮拜幾改為欄位名(下午內掃)
        if($date==2){
            $date_ampm='1pm';
        }
        else if($date==3){
            $date_ampm='2pm';
        }
        else if($date==4){
            $date_ampm='3pm';
        }
        else if($date==5){
            $date_ampm='4pm';
        }
        else if($date==6){
            $date_ampm='5pm';
        }
        return $date_ampm;
    }
    function date_amo($date){ //將禮拜幾改為欄位名(早上外掃)
        if($date==2){
            $date_ampmo='1amo';
        }
        else if($date==3){
            $date_ampmo='2amo';
        }
        else if($date==4){
            $date_ampmo='3amo';
        }
        else if($date==5){
            $date_ampmo='4amo';
        }
        else if($date==6){
            $date_ampmo='5amo';
        }
        return $date_ampmo;
    }
    function date_pmo($date){ //將禮拜幾改為欄位名(下午外掃)
        if($date==2){
            $date_ampmo='1pmo';
        }
        else if($date==3){
            $date_ampmo='2pmo';
        }
        else if($date==4){
            $date_ampmo='3pmo';
        }
        else if($date==5){
            $date_ampmo='4pmo';
        }
        else if($date==6){
            $date_ampmo='5pmo';
        }
        return $date_ampmo;
    }
    $week=$_GET["week"]; //現在要輸入成績的週
    if($week=='1'){ //將week改成資料表名
        $rweek_1='score_1_1';
        $rweek_2='score_2_1';
        $rweek_3='score_3_1';
    }
    else if($week=='2'){
        $rweek_1='score_1_2';
        $rweek_2='score_2_2';
        $rweek_3='score_3_2';
    }
    else if($week=='3'){
        $rweek_1='score_1_3';
        $rweek_2='score_2_3';
        $rweek_3='score_3_3';
    }
    else if($week=='4'){
        $rweek_1='score_1_4';
        $rweek_2='score_2_4';
        $rweek_3='score_3_4';
    }
    else if($week=='5'){
        $rweek_1='score_1_5';
        $rweek_2='score_2_5';
        $rweek_3='score_3_5';
    }
    else if($week=='6'){
        $rweek_1='score_1_6';
        $rweek_2='score_2_6';
        $rweek_3='score_3_6';
    }
    else if($week=='7'){
        $rweek_1='score_1_7';
        $rweek_2='score_2_7';
        $rweek_3='score_3_7';
    }
    else if($week=='8'){
        $rweek_1='score_1_8';
        $rweek_2='score_2_8';
        $rweek_3='score_3_8';
    }
    else if($week=='9'){
        $rweek_1='score_1_9';
        $rweek_2='score_2_9';
        $rweek_3='score_3_9';
    }
    else if($week=='10'){
        $rweek_1='score_1_10';
        $rweek_2='score_2_10';
        $rweek_3='score_3_10';
    }
    else if($week=='11'){
        $rweek_1='score_1_11';
        $rweek_2='score_2_11';
        $rweek_3='score_3_11';
    }
    else if($week=='12'){
        $rweek_1='score_1_12';
        $rweek_2='score_2_12';
        $rweek_3='score_3_12';
    }
    else if($week=='13'){
        $rweek_1='score_1_13';
        $rweek_2='score_2_13';
        $rweek_3='score_3_13';
    }
    else if($week=='14'){
        $rweek_1='score_1_14';
        $rweek_2='score_2_14';
        $rweek_3='score_3_14';
    }
    else if($week=='15'){
        $rweek_1='score_1_15';
        $rweek_2='score_2_15';
        $rweek_3='score_3_15';
    }
    else if($week=='16'){
        $rweek_1='score_1_16';
        $rweek_2='score_2_16';
        $rweek_3='score_3_16';
    }
    else if($week=='17'){
        $rweek_1='score_1_17';
        $rweek_2='score_2_17';
        $rweek_3='score_3_17';
    }
    else if($week=='18'){
        $rweek_1='score_1_18';
        $rweek_2='score_2_18';
        $rweek_3='score_3_18';
    }
    else if($week=='19'){
        $rweek_1='score_1_19';
        $rweek_2='score_2_19';
        $rweek_3='score_3_19';
    }
    else if($week=='20'){
        $rweek_1='score_1_20';
        $rweek_2='score_2_20';
        $rweek_3='score_3_20';
    }
    else if($week=='21'){
        $rweek_1='score_1_21';
        $rweek_2='score_2_21';
        $rweek_3='score_3_21';
    }
    else if($week=='22'){
        $rweek_1='score_1_22';
        $rweek_2='score_2_22';
        $rweek_3='score_3_22';
    }
    else if($week=='23'){
        $rweek_1='score_1_23';
        $rweek_2='score_2_23';
        $rweek_3='score_3_23';
    }
    else if($week=='24'){
        $rweek_1='score_1_24';
        $rweek_2='score_2_24';
        $rweek_3='score_3_24';
    }
    else if($week=='25'){
        $rweek_1='score_1_25';
        $rweek_2='score_2_25';
        $rweek_3='score_3_25';
    }
    else if($week=='26'){
        $rweek_1='score_1_26';
        $rweek_2='score_2_26';
        $rweek_3='score_3_26';
    }
    else if($week=='27'){
        $rweek_1='score_1_27';
        $rweek_2='score_2_27';
        $rweek_3='score_3_27';
    }
    else if($week=='28'){
        $rweek_1='score_1_28';
        $rweek_2='score_2_28';
        $rweek_3='score_3_28';
    }
    else if($week=='29'){
        $rweek_1='score_1_29';
        $rweek_2='score_2_29';
        $rweek_3='score_3_29';
    }
    else if($week=='30'){
        $rweek_1='score_1_30';
        $rweek_2='score_2_30';
        $rweek_3='score_3_30';
    }
    require('connect_mysql.php');
    $sql_1_am="SELECT * FROM vidchu_1_am_score"; //第一組早上!!!(只有外掃)
    $result_1_am=mysqli_query($db_link,$sql_1_am) or die("#1_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_1_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_320_out='80';
        if($row['vidchu_1_320_litter']=='加分'){
            ++$score_320_out;
        }
        else if($row['vidchu_1_320_litter']=='扣分'){
            --$score_320_out;
        }
        if($row['vidchu_1_320_leaves']=='加分'){
            ++$score_320_out;
        }
        else if($row['vidchu_1_320_leaves']=='扣分'){
            --$score_320_out;
        }
        if($score_320_out>82){
            $score_320_out=82;
        }
        else if($score_320_out<78){
            $score_320_out=78;
        }
        $update_320_out="UPDATE $rweek_3 SET $date_ampmo='$score_320_out' WHERE class2='三慧'";
        $result_320_out=mysqli_query($db_link,$update_320_out) or die("#320out 查詢失敗，請洽詢相關人員");
        $score_305_out='80';
        if($row['vidchu_1_305_litter']=='加分'){
            ++$score_305_out;
        }
        else if($row['vidchu_1_305_litter']=='扣分'){
            --$score_305_out;
        }
        if($row['vidchu_1_305_leaves']=='加分'){
            ++$score_305_out;
        }
        else if($row['vidchu_1_305_leaves']=='扣分'){
            --$score_305_out;
        }
        if($row['vidchu_1_305_sweep']=='加分'){
            ++$score_305_out;
        }
        else if($row['vidchu_1_305_sweep']=='扣分'){
            --$score_305_out;
        }
        if($score_305_out>82){
            $score_305_out=82;
        }
        else if($score_305_out<78){
            $score_305_out=78;
        }
        $update_305_out="UPDATE $rweek_3 SET $date_ampmo='$score_305_out' WHERE class2='三忠'";
        $result_305_out=mysqli_query($db_link,$update_305_out) or die("#305out 查詢失敗，請洽詢相關人員");
        $score_319_out='80';
        if($row['vidchu_1_319_litter']=='加分'){
            ++$score_319_out;
        }
        else if($row['vidchu_1_319_litter']=='扣分'){
            --$score_319_out;
        }
        if($row['vidchu_1_319_leaves']=='加分'){
            ++$score_319_out;
        }
        else if($row['vidchu_1_319_leaves']=='扣分'){
            --$score_319_out;
        }
        if($score_319_out>82){
            $score_319_out=82;
        }
        else if($score_319_out<78){
            $score_319_out=78;
        }
        $update_319_out="UPDATE $rweek_3 SET $date_ampmo='$score_319_out' WHERE class2='三敏'";
        $result_319_out=mysqli_query($db_link,$update_319_out) or die("#319out 查詢失敗，請洽詢相關人員");
        $score_321_out='80';
        if($row['vidchu_1_321_litter']=='加分'){
            ++$score_321_out;
        }
        else if($row['vidchu_1_321_litter']=='扣分'){
            --$score_321_out;
        }
        if($row['vidchu_1_321_leaves']=='加分'){
            ++$score_321_out;
        }
        else if($row['vidchu_1_321_leaves']=='扣分'){
            --$score_321_out;
        }
        if($score_321_out>82){
            $score_321_out=82;
        }
        else if($score_321_out<78){
            $score_321_out=78;
        }
        $update_321_out="UPDATE $rweek_3 SET $date_ampmo='$score_321_out' WHERE class2='三公'";
        $result_321_out=mysqli_query($db_link,$update_321_out) or die("#321out 查詢失敗，請洽詢相關人員");
        $score_322_out='80';
        if($row['vidchu_1_322_litter']=='加分'){
            ++$score_322_out;
        }
        else if($row['vidchu_1_322_litter']=='扣分'){
            --$score_322_out;
        }
        if($row['vidchu_1_322_leaves']=='加分'){
            ++$score_322_out;
        }
        else if($row['vidchu_1_322_leaves']=='扣分'){
            --$score_322_out;
        }
        if($score_322_out>82){
            $score_322_out=82;
        }
        else if($score_322_out<78){
            $score_322_out=78;
        }
        $update_322_out="UPDATE $rweek_3 SET $date_ampmo='$score_322_out' WHERE class2='三廉'";
        $result_322_out=mysqli_query($db_link,$update_322_out) or die("#322out 查詢失敗，請洽詢相關人員");
    } //第一組早上結束!!!

    $sql_1_pm="SELECT * FROM vidchu_1_pm_score"; //第一組下午!!!(只有外掃)
    $result_1_pm=mysqli_query($db_link,$sql_1_pm) or die("#1_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_1_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_320_out='80';
        if($row['vidchu_1_320_litter']=='扣分'){
            --$score_320_out;
        }
        if($row['vidchu_1_320_leaves']=='扣分'){
            --$score_320_out;
        }
        if($score_320_out<78){
            $score_320_out=78;
        }
        $update_320_out="UPDATE $rweek_3 SET $date_ampmo='$score_320_out' WHERE class2='三慧'";
        $result_320_out=mysqli_query($db_link,$update_320_out) or die("#320out 查詢失敗，請洽詢相關人員");
        $score_305_out='80';
        if($row['vidchu_1_305_litter']=='扣分'){
            --$score_305_out;
        }
        if($row['vidchu_1_305_leaves']=='扣分'){
            --$score_305_out;
        }
        if($row['vidchu_1_305_sweep']=='扣分'){
            --$score_305_out;
        }
        if($score_305_out<78){
            $score_305_out=78;
        }
        $update_305_out="UPDATE $rweek_3 SET $date_ampmo='$score_305_out' WHERE class2='三忠'";
        $result_305_out=mysqli_query($db_link,$update_305_out) or die("#305out 查詢失敗，請洽詢相關人員");
        $score_319_out='80';
        if($row['vidchu_1_319_litter']=='扣分'){
            --$score_319_out;
        }
        if($row['vidchu_1_319_leaves']=='扣分'){
            --$score_319_out;
        }
        if($score_319_out<78){
            $score_319_out=78;
        }
        $update_319_out="UPDATE $rweek_3 SET $date_ampmo='$score_319_out' WHERE class2='三敏'";
        $result_319_out=mysqli_query($db_link,$update_319_out) or die("#319out 查詢失敗，請洽詢相關人員");
        $score_321_out='80';
        if($row['vidchu_1_321_litter']=='扣分'){
            --$score_321_out;
        }
        if($row['vidchu_1_321_leaves']=='扣分'){
            --$score_321_out;
        }
        if($score_321_out<78){
            $score_321_out=78;
        }
        $update_321_out="UPDATE $rweek_3 SET $date_ampmo='$score_321_out' WHERE class2='三公'";
        $result_321_out=mysqli_query($db_link,$update_321_out) or die("#321out 查詢失敗，請洽詢相關人員");
        $score_322_out='80';
        if($row['vidchu_1_322_litter']=='扣分'){
            --$score_322_out;
        }
        if($row['vidchu_1_322_leaves']=='扣分'){
            --$score_322_out;
        }
        if($score_322_out<78){
            $score_322_out=78;
        }
        $update_322_out="UPDATE $rweek_3 SET $date_ampmo='$score_322_out' WHERE class2='三廉'";
        $result_322_out=mysqli_query($db_link,$update_322_out) or die("#322out 查詢失敗，請洽詢相關人員");
    } //第一組下午結束!!!

    $sql_2_am="SELECT * FROM vidchu_2_am_score"; //第二組早上!!!(只有外掃)
    $result_2_am=mysqli_query($db_link,$sql_2_am) or die("#2_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_2_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_318_out='80';
        if($row['vidchu_2_318_litter']=='加分'){
            ++$score_318_out;
        }
        else if($row['vidchu_2_318_litter']=='扣分'){
            --$score_318_out;
        }
        if($row['vidchu_2_318_leaves']=='加分'){
            ++$score_318_out;
        }
        else if($row['vidchu_2_318_leaves']=='扣分'){
            --$score_318_out;
        }
        if($score_318_out>82){
            $score_318_out=82;
        }
        else if($score_318_out<78){
            $score_318_out=78;
        }
        $update_318_out="UPDATE $rweek_3 SET $date_ampmo='$score_318_out' WHERE class2='三捷'";
        $result_318_out=mysqli_query($db_link,$update_318_out) or die("#318out 查詢失敗，請洽詢相關人員");
        $score_313_out='80';
        if($row['vidchu_2_313_litter']=='加分'){
            ++$score_313_out;
        }
        else if($row['vidchu_2_313_litter']=='扣分'){
            --$score_313_out;
        }
        if($row['vidchu_2_313_leaves']=='加分'){
            ++$score_313_out;
        }
        else if($row['vidchu_2_313_leaves']=='扣分'){
            --$score_313_out;
        }
        if($score_313_out>82){
            $score_313_out=82;
        }
        else if($score_313_out<78){
            $score_313_out=78;
        }
        $update_313_out="UPDATE $rweek_3 SET $date_ampmo='$score_313_out' WHERE class2='三敬'";
        $result_313_out=mysqli_query($db_link,$update_313_out) or die("#313out 查詢失敗，請洽詢相關人員");
        $score_316_out='80';
        if($row['vidchu_2_316_litter']=='加分'){
            ++$score_316_out;
        }
        else if($row['vidchu_2_316_litter']=='扣分'){
            --$score_316_out;
        }
        if($row['vidchu_2_316_leaves']=='加分'){
            ++$score_316_out;
        }
        else if($row['vidchu_2_316_leaves']=='扣分'){
            --$score_316_out;
        }
        if($score_316_out>82){
            $score_316_out=82;
        }
        else if($score_316_out<78){
            $score_316_out=78;
        }
        $update_316_out="UPDATE $rweek_3 SET $date_ampmo='$score_316_out' WHERE class2='三群'";
        $result_316_out=mysqli_query($db_link,$update_316_out) or die("#316out 查詢失敗，請洽詢相關人員");
        $score_315_out='80';
        if($row['vidchu_2_315_litter']=='加分'){
            ++$score_315_out;
        }
        else if($row['vidchu_2_315_litter']=='扣分'){
            --$score_315_out;
        }
        if($row['vidchu_2_315_leaves']=='加分'){
            ++$score_315_out;
        }
        else if($row['vidchu_2_315_leaves']=='扣分'){
            --$score_315_out;
        }
        if($score_315_out>82){
            $score_315_out=82;
        }
        else if($score_315_out<78){
            $score_315_out=78;
        }
        $update_315_out="UPDATE $rweek_3 SET $date_ampmo='$score_315_out' WHERE class2='三樂'";
        $result_315_out=mysqli_query($db_link,$update_315_out) or die("#315out 查詢失敗，請洽詢相關人員");
        $score_317_out='80';
        if($row['vidchu_2_317_litter']=='加分'){
            ++$score_317_out;
        }
        else if($row['vidchu_2_317_litter']=='扣分'){
            --$score_317_out;
        }
        if($row['vidchu_2_317_leaves']=='加分'){
            ++$score_317_out;
        }
        else if($row['vidchu_2_317_leaves']=='扣分'){
            --$score_317_out;
        }
        if($score_317_out>82){
            $score_317_out=82;
        }
        else if($score_317_out<78){
            $score_317_out=78;
        }
        $update_317_out="UPDATE $rweek_3 SET $date_ampmo='$score_317_out' WHERE class2='三簡'";
        $result_317_out=mysqli_query($db_link,$update_317_out) or die("#317out 查詢失敗，請洽詢相關人員");
    } //第二組早上結束!!!
    $sql_2_pm="SELECT * FROM vidchu_2_pm_score"; //第二組下午!!!(只有外掃)
    $result_2_pm=mysqli_query($db_link,$sql_2_pm) or die("#2_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_2_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_318_out='80';
        if($row['vidchu_2_318_litter']=='扣分'){
            --$score_318_out;
        }
        if($row['vidchu_2_318_leaves']=='扣分'){
            --$score_318_out;
        }
        if($score_318_out<78){
            $score_318_out=78;
        }
        $update_318_out="UPDATE $rweek_3 SET $date_ampmo='$score_318_out' WHERE class2='三捷'";
        $result_318_out=mysqli_query($db_link,$update_318_out) or die("#318out 查詢失敗，請洽詢相關人員");
        $score_313_out='80';
        if($row['vidchu_2_313_litter']=='扣分'){
            --$score_313_out;
        }
        if($row['vidchu_2_313_leaves']=='扣分'){
            --$score_313_out;
        }
        if($score_313_out<78){
            $score_313_out=78;
        }
        $update_313_out="UPDATE $rweek_3 SET $date_ampmo='$score_313_out' WHERE class2='三敬'";
        $result_313_out=mysqli_query($db_link,$update_313_out) or die("#313out 查詢失敗，請洽詢相關人員");
        $score_316_out='80';
        if($row['vidchu_2_316_litter']=='扣分'){
            --$score_316_out;
        }
        if($row['vidchu_2_316_leaves']=='扣分'){
            --$score_316_out;
        }
        if($score_316_out<78){
            $score_316_out=78;
        }
        $update_316_out="UPDATE $rweek_3 SET $date_ampmo='$score_316_out' WHERE class2='三群'";
        $result_316_out=mysqli_query($db_link,$update_316_out) or die("#316out 查詢失敗，請洽詢相關人員");
        $score_315_out='80';
        if($row['vidchu_2_315_litter']=='扣分'){
            --$score_315_out;
        }
        if($row['vidchu_2_315_leaves']=='扣分'){
            --$score_315_out;
        }
        if($score_315_out<78){
            $score_315_out=78;
        }
        $update_315_out="UPDATE $rweek_3 SET $date_ampmo='$score_315_out' WHERE class2='三樂'";
        $result_315_out=mysqli_query($db_link,$update_315_out) or die("#315out 查詢失敗，請洽詢相關人員");
        $score_317_out='80';
        if($row['vidchu_2_317_litter']=='扣分'){
            --$score_317_out;
        }
        if($row['vidchu_2_317_leaves']=='扣分'){
            --$score_317_out;
        }
        if($score_317_out<78){
            $score_317_out=78;
        }
        $update_317_out="UPDATE $rweek_3 SET $date_ampmo='$score_317_out' WHERE class2='三簡'";
        $result_317_out=mysqli_query($db_link,$update_317_out) or die("#317out 查詢失敗，請洽詢相關人員");
    } //第二組下午結束!!!

    $sql_3_am="SELECT * FROM vidchu_3_am_score"; //第三組早上!!!(只有外掃)
    $result_3_am=mysqli_query($db_link,$sql_3_am) or die("#3_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_3_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_302_out='80';
        if($row['vidchu_3_302_litter']=='加分'){
            ++$score_302_out;
        }
        else if($row['vidchu_3_302_litter']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_leaves']=='加分'){
            ++$score_302_out;
        }
        else if($row['vidchu_3_302_leaves']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_dust']=='加分'){
            ++$score_302_out;
        }
        else if($row['vidchu_3_302_dust']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_sill']=='加分'){
            ++$score_302_out;
        }
        else if($row['vidchu_3_302_sill']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_others']=='加分'){
            ++$score_302_out;
        }
        else if($row['vidchu_3_302_others']=='扣分'){
            --$score_302_out;
        }
        if($score_302_out>82){
            $score_302_out=82;
        }
        else if($score_302_out<78){
            $score_302_out=78;
        }
        $update_302_out="UPDATE $rweek_3 SET $date_ampmo='$score_302_out' WHERE class2='三義'";
        $result_302_out=mysqli_query($db_link,$update_302_out) or die("#302out 查詢失敗，請洽詢相關人員");
        $score_303_out='80';
        if($row['vidchu_3_303_litter']=='加分'){
            ++$score_303_out;
        }
        else if($row['vidchu_3_303_litter']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_leaves']=='加分'){
            ++$score_303_out;
        }
        else if($row['vidchu_3_303_leaves']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_dust']=='加分'){
            ++$score_303_out;
        }
        else if($row['vidchu_3_303_dust']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_sill']=='加分'){
            ++$score_303_out;
        }
        else if($row['vidchu_3_303_sill']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_others']=='加分'){
            ++$score_303_out;
        }
        else if($row['vidchu_3_303_others']=='扣分'){
            --$score_303_out;
        }
        if($score_303_out>82){
            $score_303_out=82;
        }
        else if($score_303_out<78){
            $score_303_out=78;
        }
        $update_303_out="UPDATE $rweek_3 SET $date_ampmo='$score_303_out' WHERE class2='三禮'";
        $result_303_out=mysqli_query($db_link,$update_303_out) or die("#303out 查詢失敗，請洽詢相關人員");
        $score_301_out='80';
        if($row['vidchu_3_301_litter']=='加分'){
            ++$score_301_out;
        }
        else if($row['vidchu_3_301_litter']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_leaves']=='加分'){
            ++$score_301_out;
        }
        else if($row['vidchu_3_301_leaves']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_dust']=='加分'){
            ++$score_301_out;
        }
        else if($row['vidchu_3_301_dust']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_sill']=='加分'){
            ++$score_301_out;
        }
        else if($row['vidchu_3_301_sill']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_others']=='加分'){
            ++$score_301_out;
        }
        else if($row['vidchu_3_301_others']=='扣分'){
            --$score_301_out;
        }
        if($score_301_out>82){
            $score_301_out=82;
        }
        else if($score_301_out<78){
            $score_301_out=78;
        }
        $update_301_out="UPDATE $rweek_3 SET $date_ampmo='$score_301_out' WHERE class2='三仁'";
        $result_301_out=mysqli_query($db_link,$update_301_out) or die("#301out 查詢失敗，請洽詢相關人員");
    } //第三組早上結束!!!
    $sql_3_pm="SELECT * FROM vidchu_3_pm_score"; //第三組下午!!!(只有外掃)
    $result_3_pm=mysqli_query($db_link,$sql_3_pm) or die("#3_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_3_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_302_out='80';
        if($row['vidchu_3_302_litter']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_leaves']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_dust']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_sill']=='扣分'){
            --$score_302_out;
        }
        if($row['vidchu_3_302_others']=='扣分'){
            --$score_302_out;
        }
        if($score_302_out<78){
            $score_302_out=78;
        }
        $update_302_out="UPDATE $rweek_3 SET $date_ampmo='$score_302_out' WHERE class2='三義'";
        $result_302_out=mysqli_query($db_link,$update_302_out) or die("#302out 查詢失敗，請洽詢相關人員");
        $score_303_out='80';
        if($row['vidchu_3_303_litter']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_leaves']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_dust']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_sill']=='扣分'){
            --$score_303_out;
        }
        if($row['vidchu_3_303_others']=='扣分'){
            --$score_303_out;
        }
        if($score_303_out<78){
            $score_303_out=78;
        }
        $update_303_out="UPDATE $rweek_3 SET $date_ampmo='$score_303_out' WHERE class2='三禮'";
        $result_303_out=mysqli_query($db_link,$update_303_out) or die("#303out 查詢失敗，請洽詢相關人員");
        $score_301_out='80';
        if($row['vidchu_3_301_litter']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_leaves']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_dust']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_sill']=='扣分'){
            --$score_301_out;
        }
        if($row['vidchu_3_301_others']=='扣分'){
            --$score_301_out;
        }
        if($score_301_out<78){
            $score_301_out=78;
        }
        $update_301_out="UPDATE $rweek_3 SET $date_ampmo='$score_301_out' WHERE class2='三仁'";
        $result_301_out=mysqli_query($db_link,$update_301_out) or die("#301out 查詢失敗，請洽詢相關人員");
    } //第三組下午結束!!!

    $sql_4_am="SELECT * FROM vidchu_4_am_score"; //第四組早上!!!(只有外掃)
    $result_4_am=mysqli_query($db_link,$sql_4_am) or die("#4_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_4_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_306_out='80';
        if($row['vidchu_4_306_litter']=='加分'){
            ++$score_306_out;
        }
        else if($row['vidchu_4_306_litter']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_dust']=='加分'){
            ++$score_306_out;
        }
        else if($row['vidchu_4_306_dust']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_sill']=='加分'){
            ++$score_306_out;
        }
        else if($row['vidchu_4_306_sill']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_others']=='加分'){
            ++$score_306_out;
        }
        else if($row['vidchu_4_306_others']=='扣分'){
            --$score_306_out;
        }
        if($score_306_out>82){
            $score_306_out=82;
        }
        else if($score_306_out<78){
            $score_306_out=78;
        }
        $update_306_out="UPDATE $rweek_3 SET $date_ampmo='$score_306_out' WHERE class2='三孝'";
        $result_306_out=mysqli_query($db_link,$update_306_out) or die("#306out 查詢失敗，請洽詢相關人員");
        $score_308_out='80';
        if($row['vidchu_4_308_litter']=='加分'){
            ++$score_308_out;
        }
        else if($row['vidchu_4_308_litter']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_leaves']=='加分'){
            ++$score_308_out;
        }
        else if($row['vidchu_4_308_leaves']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_dust']=='加分'){
            ++$score_308_out;
        }
        else if($row['vidchu_4_308_dust']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_sill']=='加分'){
            ++$score_308_out;
        }
        else if($row['vidchu_4_308_sill']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_others']=='加分'){
            ++$score_308_out;
        }
        else if($row['vidchu_4_308_others']=='扣分'){
            --$score_308_out;
        }
        if($score_308_out>82){
            $score_308_out=82;
        }
        else if($score_308_out<78){
            $score_308_out=78;
        }
        $update_308_out="UPDATE $rweek_3 SET $date_ampmo='$score_308_out' WHERE class2='三愛'";
        $result_308_out=mysqli_query($db_link,$update_308_out) or die("#308out 查詢失敗，請洽詢相關人員");
        $score_309_out='80';
        if($row['vidchu_4_309_litter']=='加分'){
            ++$score_309_out;
        }
        else if($row['vidchu_4_309_litter']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_dust']=='加分'){
            ++$score_309_out;
        }
        else if($row['vidchu_4_309_dust']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_sill']=='加分'){
            ++$score_309_out;
        }
        else if($row['vidchu_4_309_sill']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_others']=='加分'){
            ++$score_309_out;
        }
        else if($row['vidchu_4_309_others']=='扣分'){
            --$score_309_out;
        }
        if($score_309_out>82){
            $score_309_out=82;
        }
        else if($score_309_out<78){
            $score_309_out=78;
        }
        $update_309_out="UPDATE $rweek_3 SET $date_ampmo='$score_309_out' WHERE class2='三和'";
        $result_309_out=mysqli_query($db_link,$update_309_out) or die("#309out 查詢失敗，請洽詢相關人員");
        $score_314_out='80';
        if($row['vidchu_4_314_litter']=='加分'){
            ++$score_314_out;
        }
        else if($row['vidchu_4_314_litter']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_dust']=='加分'){
            ++$score_314_out;
        }
        else if($row['vidchu_4_314_dust']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_leaves']=='加分'){
            ++$score_314_out;
        }
        else if($row['vidchu_4_314_leaves']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_sweep']=='加分'){
            ++$score_314_out;
        }
        else if($row['vidchu_4_314_sweep']=='扣分'){
            --$score_314_out;
        }
        if($score_314_out>82){
            $score_314_out=82;
        }
        else if($score_314_out<78){
            $score_314_out=78;
        }
        $update_314_out="UPDATE $rweek_3 SET $date_ampmo='$score_314_out' WHERE class2='三業'";
        $result_314_out=mysqli_query($db_link,$update_314_out) or die("#314out 查詢失敗，請洽詢相關人員");
        $score_210_out='80';
        if($row['vidchu_4_210_litter']=='加分'){
            ++$score_210_out;
        }
        else if($row['vidchu_4_210_litter']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_dust']=='加分'){
            ++$score_210_out;
        }
        else if($row['vidchu_4_210_dust']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_leaves']=='加分'){
            ++$score_210_out;
        }
        else if($row['vidchu_4_210_leaves']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_others']=='加分'){
            ++$score_210_out;
        }
        else if($row['vidchu_4_210_others']=='扣分'){
            --$score_210_out;
        }
        if($score_210_out>82){
            $score_210_out=82;
        }
        else if($score_210_out<78){
            $score_210_out=78;
        }
        $update_210_out="UPDATE $rweek_2 SET $date_ampmo='$score_210_out' WHERE class2='二平'";
        $result_210_out=mysqli_query($db_link,$update_210_out) or die("#210out 查詢失敗，請洽詢相關人員");
    } //第四組早上結束!!!
    $sql_4_pm="SELECT * FROM vidchu_4_pm_score"; //第四組下午!!!(只有外掃)
    $result_4_pm=mysqli_query($db_link,$sql_4_pm) or die("#4_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_4_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_306_out='80';
        if($row['vidchu_4_306_litter']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_dust']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_sill']=='扣分'){
            --$score_306_out;
        }
        if($row['vidchu_4_306_others']=='扣分'){
            --$score_306_out;
        }
        if($score_306_out<78){
            $score_306_out=78;
        }
        $update_306_out="UPDATE $rweek_3 SET $date_ampmo='$score_306_out' WHERE class2='三孝'";
        $result_306_out=mysqli_query($db_link,$update_306_out) or die("#306out 查詢失敗，請洽詢相關人員");
        $score_308_out='80';
        if($row['vidchu_4_308_litter']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_leaves']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_dust']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_sill']=='扣分'){
            --$score_308_out;
        }
        if($row['vidchu_4_308_others']=='扣分'){
            --$score_308_out;
        }
        if($score_308_out<78){
            $score_308_out=78;
        }
        $update_308_out="UPDATE $rweek_3 SET $date_ampmo='$score_308_out' WHERE class2='三愛'";
        $result_308_out=mysqli_query($db_link,$update_308_out) or die("#308out 查詢失敗，請洽詢相關人員");
        $score_309_out='80';
        if($row['vidchu_4_309_litter']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_dust']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_sill']=='扣分'){
            --$score_309_out;
        }
        if($row['vidchu_4_309_others']=='扣分'){
            --$score_309_out;
        }
        if($score_309_out<78){
            $score_309_out=78;
        }
        $update_309_out="UPDATE $rweek_3 SET $date_ampmo='$score_309_out' WHERE class2='三和'";
        $result_309_out=mysqli_query($db_link,$update_309_out) or die("#309out 查詢失敗，請洽詢相關人員");
        $score_314_out='80';
        if($row['vidchu_4_314_litter']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_dust']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_leaves']=='扣分'){
            --$score_314_out;
        }
        if($row['vidchu_4_314_sweep']=='扣分'){
            --$score_314_out;
        }
        if($score_314_out<78){
            $score_314_out=78;
        }
        $update_314_out="UPDATE $rweek_3 SET $date_ampmo='$score_314_out' WHERE class2='三業'";
        $result_314_out=mysqli_query($db_link,$update_314_out) or die("#314out 查詢失敗，請洽詢相關人員");
        $score_210_out='80';
        if($row['vidchu_4_210_litter']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_dust']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_leaves']=='扣分'){
            --$score_210_out;
        }
        if($row['vidchu_4_210_others']=='扣分'){
            --$score_210_out;
        }
        if($score_210_out<78){
            $score_210_out=78;
        }
        $update_210_out="UPDATE $rweek_2 SET $date_ampmo='$score_210_out' WHERE class2='二平'";
        $result_210_out=mysqli_query($db_link,$update_210_out) or die("#210out 查詢失敗，請洽詢相關人員");
    } //第四組下午結束!!!

    $sql_5_am="SELECT * FROM vidchu_5_am_score"; //第五組早上!!!(只有外掃)
    $result_5_am=mysqli_query($db_link,$sql_5_am) or die("#5_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_5_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_307_out='80';
        if($row['vidchu_5_307_litter']=='加分'){
            ++$score_307_out;
        }
        else if($row['vidchu_5_307_litter']=='扣分'){
            --$score_307_out;
        }
        if($row['vidchu_5_307_leaves']=='加分'){
            ++$score_307_out;
        }
        else if($row['vidchu_5_307_leaves']=='扣分'){
            --$score_307_out;
        }
        if($score_307_out>82){
            $score_307_out=82;
        }
        else if($score_307_out<78){
            $score_307_out=78;
        }
        $update_307_out="UPDATE $rweek_3 SET $date_ampmo='$score_307_out' WHERE class2='三博'";
        $result_307_out=mysqli_query($db_link,$update_307_out) or die("#307out 查詢失敗，請洽詢相關人員");
        $score_310_out='80';
        if($row['vidchu_5_310_litter']=='加分'){
            ++$score_310_out;
        }
        else if($row['vidchu_5_310_litter']=='扣分'){
            --$score_310_out;
        }
        if($row['vidchu_5_310_leaves']=='加分'){
            ++$score_310_out;
        }
        else if($row['vidchu_5_310_leaves']=='扣分'){
            --$score_310_out;
        }
        if($score_310_out>82){
            $score_310_out=82;
        }
        else if($score_310_out<78){
            $score_310_out=78;
        }
        $update_310_out="UPDATE $rweek_3 SET $date_ampmo='$score_310_out' WHERE class2='三平'";
        $result_310_out=mysqli_query($db_link,$update_310_out) or die("#310out 查詢失敗，請洽詢相關人員");
        $score_304_out='80';
        if($row['vidchu_5_304_litter']=='加分'){
            ++$score_304_out;
        }
        else if($row['vidchu_5_304_litter']=='扣分'){
            --$score_304_out;
        }
        if($row['vidchu_5_304_leaves']=='加分'){
            ++$score_304_out;
        }
        else if($row['vidchu_5_304_leaves']=='扣分'){
            --$score_304_out;
        }
        if($score_304_out>82){
            $score_304_out=82;
        }
        else if($score_304_out<78){
            $score_304_out=78;
        }
        $update_304_out="UPDATE $rweek_3 SET $date_ampmo='$score_304_out' WHERE class2='三智'";
        $result_304_out=mysqli_query($db_link,$update_304_out) or die("#304out 查詢失敗，請洽詢相關人員");
        $score_212_out='80';
        if($row['vidchu_5_212_litter']=='加分'){
            ++$score_212_out;
        }
        else if($row['vidchu_5_212_litter']=='扣分'){
            --$score_212_out;
        }
        if($row['vidchu_5_212_leaves']=='加分'){
            ++$score_212_out;
        }
        else if($row['vidchu_5_212_leaves']=='扣分'){
            --$score_212_out;
        }
        if($score_212_out>82){
            $score_212_out=82;
        }
        else if($score_212_out<78){
            $score_212_out=78;
        }
        $update_212_out="UPDATE $rweek_2 SET $date_ampmo='$score_212_out' WHERE class2='二信'";
        $result_212_out=mysqli_query($db_link,$update_212_out) or die("#212out 查詢失敗，請洽詢相關人員");
        $score_211_out='80';
        if($row['vidchu_5_211_litter']=='加分'){
            ++$score_211_out;
        }
        else if($row['vidchu_5_211_litter']=='扣分'){
            --$score_211_out;
        }
        if($row['vidchu_5_211_leaves']=='加分'){
            ++$score_211_out;
        }
        else if($row['vidchu_5_211_leaves']=='扣分'){
            --$score_211_out;
        }
        if($score_211_out>82){
            $score_211_out=82;
        }
        else if($score_211_out<78){
            $score_211_out=78;
        }
        $update_211_out="UPDATE $rweek_2 SET $date_ampmo='$score_211_out' WHERE class2='二誠'";
        $result_211_out=mysqli_query($db_link,$update_211_out) or die("#211out 查詢失敗，請洽詢相關人員");
        $score_222_out='80';
        if($row['vidchu_5_222_litter']=='加分'){
            ++$score_222_out;
        }
        else if($row['vidchu_5_222_litter']=='扣分'){
            --$score_222_out;
        }
        if($row['vidchu_5_222_leaves']=='加分'){
            ++$score_222_out;
        }
        else if($row['vidchu_5_222_leaves']=='扣分'){
            --$score_222_out;
        }
        if($row['vidchu_5_222_others']=='加分'){
            ++$score_222_out;
        }
        else if($row['vidchu_5_222_others']=='扣分'){
            --$score_222_out;
        }
        if($score_222_out>82){
            $score_222_out=82;
        }
        else if($score_222_out<78){
            $score_222_out=78;
        }
        $update_222_out="UPDATE $rweek_2 SET $date_ampmo='$score_222_out' WHERE class2='二廉'";
        $result_222_out=mysqli_query($db_link,$update_222_out) or die("#222out 查詢失敗，請洽詢相關人員");
    } //第五組早上結束!!!
    $sql_5_pm="SELECT * FROM vidchu_5_pm_score"; //第五組下午!!!(只有外掃)
    $result_5_pm=mysqli_query($db_link,$sql_5_pm) or die("#5_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_5_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_307_out='80';
        if($row['vidchu_5_307_litter']=='扣分'){
            --$score_307_out;
        }
        if($row['vidchu_5_307_leaves']=='扣分'){
            --$score_307_out;
        }
        if($score_307_out<78){
            $score_307_out=78;
        }
        $update_307_out="UPDATE $rweek_3 SET $date_ampmo='$score_307_out' WHERE class2='三博'";
        $result_307_out=mysqli_query($db_link,$update_307_out) or die("#307out 查詢失敗，請洽詢相關人員");
        $score_310_out='80';
        if($row['vidchu_5_310_litter']=='扣分'){
            --$score_310_out;
        }
        if($row['vidchu_5_310_leaves']=='扣分'){
            --$score_310_out;
        }
        if($score_310_out<78){
            $score_310_out=78;
        }
        $update_310_out="UPDATE $rweek_3 SET $date_ampmo='$score_310_out' WHERE class2='三平'";
        $result_310_out=mysqli_query($db_link,$update_310_out) or die("#310out 查詢失敗，請洽詢相關人員");
        $score_304_out='80';
        if($row['vidchu_5_304_litter']=='扣分'){
            --$score_304_out;
        }
        if($row['vidchu_5_304_leaves']=='扣分'){
            --$score_304_out;
        }
        if($score_304_out<78){
            $score_304_out=78;
        }
        $update_304_out="UPDATE $rweek_3 SET $date_ampmo='$score_304_out' WHERE class2='三智'";
        $result_304_out=mysqli_query($db_link,$update_304_out) or die("#304out 查詢失敗，請洽詢相關人員");
        $score_212_out='80';
        if($row['vidchu_5_212_litter']=='扣分'){
            --$score_212_out;
        }
        if($row['vidchu_5_212_leaves']=='扣分'){
            --$score_212_out;
        }
        if($score_212_out<78){
            $score_212_out=78;
        }
        $update_212_out="UPDATE $rweek_2 SET $date_ampmo='$score_212_out' WHERE class2='二信'";
        $result_212_out=mysqli_query($db_link,$update_212_out) or die("#212out 查詢失敗，請洽詢相關人員");
        $score_211_out='80';
        if($row['vidchu_5_211_litter']=='扣分'){
            --$score_211_out;
        }
        if($row['vidchu_5_211_leaves']=='扣分'){
            --$score_211_out;
        }
        if($score_211_out<78){
            $score_211_out=78;
        }
        $update_211_out="UPDATE $rweek_2 SET $date_ampmo='$score_211_out' WHERE class2='二誠'";
        $result_211_out=mysqli_query($db_link,$update_211_out) or die("#211out 查詢失敗，請洽詢相關人員");
        $score_222_out='80';
        if($row['vidchu_5_222_litter']=='扣分'){
            --$score_222_out;
        }
        if($row['vidchu_5_222_leaves']=='扣分'){
            --$score_222_out;
        }
        if($row['vidchu_5_222_others']=='扣分'){
            --$score_222_out;
        }
        if($score_222_out<78){
            $score_222_out=78;
        }
        $update_222_out="UPDATE $rweek_2 SET $date_ampmo='$score_222_out' WHERE class2='二廉'";
        $result_222_out=mysqli_query($db_link,$update_222_out) or die("#222out 查詢失敗，請洽詢相關人員");
    } //第五組下午結束!!!

    $sql_6_am="SELECT * FROM vidchu_6_am_score"; //第6組早上!!!(只有外掃)
    $result_6_am=mysqli_query($db_link,$sql_6_am) or die("#6_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_6_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_209_out='80';
        if($row['vidchu_6_209_litter']=='加分'){
            ++$score_209_out;
        }
        else if($row['vidchu_6_209_litter']=='扣分'){
            --$score_209_out;
        }
        if($row['vidchu_6_209_leaves']=='加分'){
            ++$score_209_out;
        }
        else if($row['vidchu_6_209_leaves']=='扣分'){
            --$score_209_out;
        }
        if($row['vidchu_6_209_dust']=='加分'){
            ++$score_209_out;
        }
        else if($row['vidchu_6_209_dust']=='扣分'){
            --$score_209_out;
        }
        if($score_209_out>82){
            $score_209_out=82;
        }
        else if($score_209_out<78){
            $score_209_out=78;
        }
        $update_209_out="UPDATE $rweek_2 SET $date_ampmo='$score_209_out' WHERE class2='二和'";
        $result_209_out=mysqli_query($db_link,$update_209_out) or die("#209out 查詢失敗，請洽詢相關人員");
        $score_218_out='80';
        if($row['vidchu_6_218_litter']=='加分'){
            ++$score_218_out;
        }
        else if($row['vidchu_6_218_litter']=='扣分'){
            --$score_218_out;
        }
        if($row['vidchu_6_218_leaves']=='加分'){
            ++$score_218_out;
        }
        else if($row['vidchu_6_218_leaves']=='扣分'){
            --$score_218_out;
        }
        if($row['vidchu_6_218_dust']=='加分'){
            ++$score_218_out;
        }
        else if($row['vidchu_6_218_dust']=='扣分'){
            --$score_218_out;
        }
        if($score_218_out>82){
            $score_218_out=82;
        }
        else if($score_218_out<78){
            $score_218_out=78;
        }
        $update_218_out="UPDATE $rweek_2 SET $date_ampmo='$score_218_out' WHERE class2='二捷'";
        $result_218_out=mysqli_query($db_link,$update_218_out) or die("#218out 查詢失敗，請洽詢相關人員");
        $score_219_out='80';
        if($row['vidchu_6_219_litter']=='加分'){
            ++$score_219_out;
        }
        else if($row['vidchu_6_219_litter']=='扣分'){
            --$score_219_out;
        }
        if($row['vidchu_6_219_dust']=='加分'){
            ++$score_219_out;
        }
        else if($row['vidchu_6_219_dust']=='扣分'){
            --$score_219_out;
        }
        if($score_219_out>82){
            $score_219_out=82;
        }
        else if($score_219_out<78){
            $score_219_out=78;
        }
        $update_219_out="UPDATE $rweek_2 SET $date_ampmo='$score_219_out' WHERE class2='二敏'";
        $result_219_out=mysqli_query($db_link,$update_219_out) or die("#219out 查詢失敗，請洽詢相關人員");
        $score_221_out='80';
        if($row['vidchu_6_221_litter']=='加分'){
            ++$score_221_out;
        }
        else if($row['vidchu_6_221_litter']=='扣分'){
            --$score_221_out;
        }
        if($row['vidchu_6_221_dust']=='加分'){
            ++$score_221_out;
        }
        else if($row['vidchu_6_221_dust']=='扣分'){
            --$score_221_out;
        }
        if($row['vidchu_6_221_others']=='加分'){
            ++$score_221_out;
        }
        else if($row['vidchu_6_221_others']=='扣分'){
            --$score_221_out;
        }
        if($score_221_out>82){
            $score_221_out=82;
        }
        else if($score_221_out<78){
            $score_221_out=78;
        }
        $update_221_out="UPDATE $rweek_2 SET $date_ampmo='$score_221_out' WHERE class2='二公'";
        $result_221_out=mysqli_query($db_link,$update_221_out) or die("#221out 查詢失敗，請洽詢相關人員");
        $score_311_out='80';
        if($row['vidchu_6_311_litter']=='加分'){
            ++$score_311_out;
        }
        else if($row['vidchu_6_311_litter']=='扣分'){
            --$score_311_out;
        }
        if($row['vidchu_6_311_dust']=='加分'){
            ++$score_311_out;
        }
        else if($row['vidchu_6_311_dust']=='扣分'){
            --$score_311_out;
        }
        if($score_311_out>82){
            $score_311_out=82;
        }
        else if($score_311_out<78){
            $score_311_out=78;
        }
        $update_311_out="UPDATE $rweek_3 SET $date_ampmo='$score_311_out' WHERE class2='三誠'";
        $result_311_out=mysqli_query($db_link,$update_311_out) or die("#311out 查詢失敗，請洽詢相關人員");
        $score_312_out='80';
        if($row['vidchu_6_312_litter']=='加分'){
            ++$score_312_out;
        }
        else if($row['vidchu_6_312_litter']=='扣分'){
            --$score_312_out;
        }
        if($row['vidchu_6_312_leaves']=='加分'){
            ++$score_312_out;
        }
        else if($row['vidchu_6_312_leaves']=='扣分'){
            --$score_312_out;
        }
        if($row['vidchu_6_312_dust']=='加分'){
            ++$score_312_out;
        }
        else if($row['vidchu_6_312_dust']=='扣分'){
            --$score_312_out;
        }
        if($score_312_out>82){
            $score_312_out=82;
        }
        else if($score_312_out<78){
            $score_312_out=78;
        }
        $update_312_out="UPDATE $rweek_3 SET $date_ampmo='$score_312_out' WHERE class2='三信'";
        $result_312_out=mysqli_query($db_link,$update_312_out) or die("#312out 查詢失敗，請洽詢相關人員");
    } //第6組早上結束!!!
    $sql_6_pm="SELECT * FROM vidchu_6_pm_score"; //第6組下午!!!(只有外掃)
    $result_6_pm=mysqli_query($db_link,$sql_6_pm) or die("#6_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_6_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_209_out='80';
        if($row['vidchu_6_209_litter']=='扣分'){
            --$score_209_out;
        }
        if($row['vidchu_6_209_leaves']=='扣分'){
            --$score_209_out;
        }
        if($row['vidchu_6_209_dust']=='扣分'){
            --$score_209_out;
        }
        if($score_209_out<78){
            $score_209_out=78;
        }
        $update_209_out="UPDATE $rweek_2 SET $date_ampmo='$score_209_out' WHERE class2='二和'";
        $result_209_out=mysqli_query($db_link,$update_209_out) or die("#209out 查詢失敗，請洽詢相關人員");
        $score_218_out='80';
        if($row['vidchu_6_218_litter']=='扣分'){
            --$score_218_out;
        }
        if($row['vidchu_6_218_leaves']=='扣分'){
            --$score_218_out;
        }
        if($row['vidchu_6_218_dust']=='扣分'){
            --$score_218_out;
        }
        if($score_218_out<78){
            $score_218_out=78;
        }
        $update_218_out="UPDATE $rweek_2 SET $date_ampmo='$score_218_out' WHERE class2='二捷'";
        $result_218_out=mysqli_query($db_link,$update_218_out) or die("#218out 查詢失敗，請洽詢相關人員");
        $score_219_out='80';
        if($row['vidchu_6_219_litter']=='扣分'){
            --$score_219_out;
        }
        if($row['vidchu_6_219_dust']=='扣分'){
            --$score_219_out;
        }
        if($score_219_out<78){
            $score_219_out=78;
        }
        $update_219_out="UPDATE $rweek_2 SET $date_ampmo='$score_219_out' WHERE class2='二敏'";
        $result_219_out=mysqli_query($db_link,$update_219_out) or die("#219out 查詢失敗，請洽詢相關人員");
        $score_221_out='80';
        if($row['vidchu_6_221_litter']=='扣分'){
            --$score_221_out;
        }
        if($row['vidchu_6_221_dust']=='扣分'){
            --$score_221_out;
        }
        if($row['vidchu_6_221_others']=='扣分'){
            --$score_221_out;
        }
        if($score_221_out<78){
            $score_221_out=78;
        }
        $update_221_out="UPDATE $rweek_2 SET $date_ampmo='$score_221_out' WHERE class2='二公'";
        $result_221_out=mysqli_query($db_link,$update_221_out) or die("#221out 查詢失敗，請洽詢相關人員");
        $score_311_out='80';
        if($row['vidchu_6_311_litter']=='扣分'){
            --$score_311_out;
        }
        if($row['vidchu_6_311_dust']=='扣分'){
            --$score_311_out;
        }
        if($score_311_out<78){
            $score_311_out=78;
        }
        $update_311_out="UPDATE $rweek_3 SET $date_ampmo='$score_311_out' WHERE class2='三誠'";
        $result_311_out=mysqli_query($db_link,$update_311_out) or die("#311out 查詢失敗，請洽詢相關人員");
        $score_312_out='80';
        if($row['vidchu_6_312_litter']=='扣分'){
            --$score_312_out;
        }
        if($row['vidchu_6_312_leaves']=='扣分'){
            --$score_312_out;
        }
        if($row['vidchu_6_312_dust']=='扣分'){
            --$score_312_out;
        }
        if($score_312_out<78){
            $score_312_out=78;
        }
        $update_312_out="UPDATE $rweek_3 SET $date_ampmo='$score_312_out' WHERE class2='三信'";
        $result_312_out=mysqli_query($db_link,$update_312_out) or die("#312out 查詢失敗，請洽詢相關人員");
    } //第6組下午結束!!!

    $sql_7_am="SELECT * FROM vidchu_7_am_score"; //第7組早上!!!(只有外掃)
    $result_7_am=mysqli_query($db_link,$sql_7_am) or die("#7_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_7_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_220_out='80';
        if($row['vidchu_7_220_litter']=='加分'){
            ++$score_220_out;
        }
        else if($row['vidchu_7_220_litter']=='扣分'){
            --$score_220_out;
        }
        if($row['vidchu_7_220_leaves']=='加分'){
            ++$score_220_out;
        }
        else if($row['vidchu_7_220_leaves']=='扣分'){
            --$score_220_out;
        }
        if($score_220_out>82){
            $score_220_out=82;
        }
        else if($score_220_out<78){
            $score_220_out=78;
        }
        $update_220_out="UPDATE $rweek_2 SET $date_ampmo='$score_220_out' WHERE class2='二慧'";
        $result_220_out=mysqli_query($db_link,$update_220_out) or die("#220out 查詢失敗，請洽詢相關人員");
        $score_104_out='80';
        if($row['vidchu_7_104_litter']=='加分'){
            ++$score_104_out;
        }
        else if($row['vidchu_7_104_litter']=='扣分'){
            --$score_104_out;
        }
        if($row['vidchu_7_104_leaves']=='加分'){
            ++$score_104_out;
        }
        else if($row['vidchu_7_104_leaves']=='扣分'){
            --$score_104_out;
        }
        if($score_104_out>82){
            $score_104_out=82;
        }
        else if($score_104_out<78){
            $score_104_out=78;
        }
        $update_104_out="UPDATE $rweek_1 SET $date_ampmo='$score_104_out' WHERE class2='一智'";
        $result_104_out=mysqli_query($db_link,$update_104_out) or die("#104out 查詢失敗，請洽詢相關人員");
        $score_115_out='80';
        if($row['vidchu_7_115_litter']=='加分'){
            ++$score_115_out;
        }
        else if($row['vidchu_7_115_litter']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_leaves']=='加分'){
            ++$score_115_out;
        }
        else if($row['vidchu_7_115_leaves']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_dust']=='加分'){
            ++$score_115_out;
        }
        else if($row['vidchu_7_115_dust']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_others']=='加分'){
            ++$score_115_out;
        }
        else if($row['vidchu_7_115_others']=='扣分'){
            --$score_115_out;
        }
        if($score_115_out>82){
            $score_115_out=82;
        }
        else if($score_115_out<78){
            $score_115_out=78;
        }
        $update_115_out="UPDATE $rweek_1 SET $date_ampmo='$score_115_out' WHERE class2='一樂'";
        $result_115_out=mysqli_query($db_link,$update_115_out) or die("#115out 查詢失敗，請洽詢相關人員");
    } //第7組早上結束!!!
    $sql_7_pm="SELECT * FROM vidchu_7_pm_score"; //第7組下午!!!(只有外掃)
    $result_7_pm=mysqli_query($db_link,$sql_7_pm) or die("#7_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_7_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_220_out='80';
        if($row['vidchu_7_220_litter']=='扣分'){
            --$score_220_out;
        }
        if($row['vidchu_7_220_leaves']=='扣分'){
            --$score_220_out;
        }
        if($score_220_out<78){
            $score_220_out=78;
        }
        $update_220_out="UPDATE $rweek_2 SET $date_ampmo='$score_220_out' WHERE class2='二慧'";
        $result_220_out=mysqli_query($db_link,$update_220_out) or die("#220out 查詢失敗，請洽詢相關人員");
        $score_104_out='80';
        if($row['vidchu_7_104_litter']=='扣分'){
            --$score_104_out;
        }
        if($row['vidchu_7_104_leaves']=='扣分'){
            --$score_104_out;
        }
        if($score_104_out<78){
            $score_104_out=78;
        }
        $update_104_out="UPDATE $rweek_1 SET $date_ampmo='$score_104_out' WHERE class2='一智'";
        $result_104_out=mysqli_query($db_link,$update_104_out) or die("#104out 查詢失敗，請洽詢相關人員");
        $score_115_out='80';
        if($row['vidchu_7_115_litter']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_leaves']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_dust']=='扣分'){
            --$score_115_out;
        }
        if($row['vidchu_7_115_others']=='扣分'){
            --$score_115_out;
        }
        if($score_115_out<78){
            $score_115_out=78;
        }
        $update_115_out="UPDATE $rweek_1 SET $date_ampmo='$score_115_out' WHERE class2='一樂'";
        $result_115_out=mysqli_query($db_link,$update_115_out) or die("#115out 查詢失敗，請洽詢相關人員");
    } //第7組下午結束!!!

    $sql_8_am="SELECT * FROM vidchu_8_am_score"; //第8組早上!!!(只有外掃)
    $result_8_am=mysqli_query($db_link,$sql_8_am) or die("#8_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_8_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_208_out='80';
        if($row['vidchu_8_208_litter']=='加分'){
            ++$score_208_out;
        }
        else if($row['vidchu_8_208_litter']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_leaves']=='加分'){
            ++$score_208_out;
        }
        else if($row['vidchu_8_208_leaves']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_dust']=='加分'){
            ++$score_208_out;
        }
        else if($row['vidchu_8_208_dust']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_others']=='加分'){
            ++$score_208_out;
        }
        else if($row['vidchu_8_208_others']=='扣分'){
            --$score_208_out;
        }
        if($score_208_out>82){
            $score_208_out=82;
        }
        else if($score_208_out<78){
            $score_208_out=78;
        }
        $update_208_out="UPDATE $rweek_2 SET $date_ampmo='$score_208_out' WHERE class2='二愛'";
        $result_208_out=mysqli_query($db_link,$update_208_out) or die("#208out 查詢失敗，請洽詢相關人員");
        $score_206_out='80';
        if($row['vidchu_8_206_litter']=='加分'){
            ++$score_206_out;
        }
        else if($row['vidchu_8_206_litter']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_leaves']=='加分'){
            ++$score_206_out;
        }
        else if($row['vidchu_8_206_leaves']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_dust']=='加分'){
            ++$score_206_out;
        }
        else if($row['vidchu_8_206_dust']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_sweep']=='加分'){
            ++$score_206_out;
        }
        else if($row['vidchu_8_206_sweep']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_others']=='加分'){
            ++$score_206_out;
        }
        else if($row['vidchu_8_206_others']=='扣分'){
            --$score_206_out;
        }
        if($score_206_out>82){
            $score_206_out=82;
        }
        else if($score_206_out<78){
            $score_206_out=78;
        }
        $update_206_out="UPDATE $rweek_2 SET $date_ampmo='$score_206_out' WHERE class2='二孝'";
        $result_206_out=mysqli_query($db_link,$update_206_out) or die("#206out 查詢失敗，請洽詢相關人員");
        $score_207_out='80';
        if($row['vidchu_8_207_litter']=='加分'){
            ++$score_207_out;
        }
        else if($row['vidchu_8_207_litter']=='扣分'){
            --$score_207_out;
        }
        if($row['vidchu_8_207_leaves']=='加分'){
            ++$score_207_out;
        }
        else if($row['vidchu_8_207_leaves']=='扣分'){
            --$score_207_out;
        }
        if($row['vidchu_8_207_dust']=='加分'){
            ++$score_207_out;
        }
        else if($row['vidchu_8_207_dust']=='扣分'){
            --$score_207_out;
        }
        if($score_207_out>82){
            $score_207_out=82;
        }
        else if($score_207_out<78){
            $score_207_out=78;
        }
        $update_207_out="UPDATE $rweek_2 SET $date_ampmo='$score_207_out' WHERE class2='二博'";
        $result_207_out=mysqli_query($db_link,$update_207_out) or die("#207out 查詢失敗，請洽詢相關人員");
        $score_205_out='80';
        if($row['vidchu_8_205_litter']=='加分'){
            ++$score_205_out;
        }
        else if($row['vidchu_8_205_litter']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_leaves']=='加分'){
            ++$score_205_out;
        }
        else if($row['vidchu_8_205_leaves']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_dust']=='加分'){
            ++$score_205_out;
        }
        else if($row['vidchu_8_205_dust']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_others']=='加分'){
            ++$score_205_out;
        }
        else if($row['vidchu_8_205_others']=='扣分'){
            --$score_205_out;
        }
        if($score_205_out>82){
            $score_205_out=82;
        }
        else if($score_205_out<78){
            $score_205_out=78;
        }
        $update_205_out="UPDATE $rweek_2 SET $date_ampmo='$score_205_out' WHERE class2='二忠'";
        $result_205_out=mysqli_query($db_link,$update_205_out) or die("#205out 查詢失敗，請洽詢相關人員");
        $score_215_out='80';
        if($row['vidchu_8_215_litter']=='加分'){
            ++$score_215_out;
        }
        else if($row['vidchu_8_215_litter']=='扣分'){
            --$score_215_out;
        }
        if($row['vidchu_8_215_leaves']=='加分'){
            ++$score_215_out;
        }
        else if($row['vidchu_8_215_leaves']=='扣分'){
            --$score_215_out;
        }
        if($row['vidchu_8_215_dust']=='加分'){
            ++$score_215_out;
        }
        else if($row['vidchu_8_215_dust']=='扣分'){
            --$score_215_out;
        }
        if($score_215_out>82){
            $score_215_out=82;
        }
        else if($score_215_out<78){
            $score_215_out=78;
        }
        $update_215_out="UPDATE $rweek_2 SET $date_ampmo='$score_215_out' WHERE class2='二樂'";
        $result_215_out=mysqli_query($db_link,$update_215_out) or die("#215out 查詢失敗，請洽詢相關人員");
    } //第8組早上結束!!!
    $sql_8_pm="SELECT * FROM vidchu_8_pm_score"; //第8組下午!!!(只有外掃)
    $result_8_pm=mysqli_query($db_link,$sql_8_pm) or die("#8_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_8_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_208_out='80';
        if($row['vidchu_8_208_litter']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_leaves']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_dust']=='扣分'){
            --$score_208_out;
        }
        if($row['vidchu_8_208_others']=='扣分'){
            --$score_208_out;
        }
        if($score_208_out<78){
            $score_208_out=78;
        }
        $update_208_out="UPDATE $rweek_2 SET $date_ampmo='$score_208_out' WHERE class2='二愛'";
        $result_208_out=mysqli_query($db_link,$update_208_out) or die("#208out 查詢失敗，請洽詢相關人員");
        $score_206_out='80';
        if($row['vidchu_8_206_litter']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_leaves']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_dust']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_sweep']=='扣分'){
            --$score_206_out;
        }
        if($row['vidchu_8_206_others']=='扣分'){
            --$score_206_out;
        }
        if($score_206_out<78){
            $score_206_out=78;
        }
        $update_206_out="UPDATE $rweek_2 SET $date_ampmo='$score_206_out' WHERE class2='二孝'";
        $result_206_out=mysqli_query($db_link,$update_206_out) or die("#206out 查詢失敗，請洽詢相關人員");
        $score_207_out='80';
        if($row['vidchu_8_207_litter']=='扣分'){
            --$score_207_out;
        }
        if($row['vidchu_8_207_leaves']=='扣分'){
            --$score_207_out;
        }
        if($row['vidchu_8_207_dust']=='扣分'){
            --$score_207_out;
        }
        if($score_207_out<78){
            $score_207_out=78;
        }
        $update_207_out="UPDATE $rweek_2 SET $date_ampmo='$score_207_out' WHERE class2='二博'";
        $result_207_out=mysqli_query($db_link,$update_207_out) or die("#207out 查詢失敗，請洽詢相關人員");
        $score_205_out='80';
        if($row['vidchu_8_205_litter']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_leaves']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_dust']=='扣分'){
            --$score_205_out;
        }
        if($row['vidchu_8_205_others']=='扣分'){
            --$score_205_out;
        }
        if($score_205_out<78){
            $score_205_out=78;
        }
        $update_205_out="UPDATE $rweek_2 SET $date_ampmo='$score_205_out' WHERE class2='二忠'";
        $result_205_out=mysqli_query($db_link,$update_205_out) or die("#205out 查詢失敗，請洽詢相關人員");
        $score_215_out='80';
        if($row['vidchu_8_215_litter']=='扣分'){
            --$score_215_out;
        }
        if($row['vidchu_8_215_leaves']=='扣分'){
            --$score_215_out;
        }
        if($row['vidchu_8_215_dust']=='扣分'){
            --$score_215_out;
        }
        if($score_215_out<78){
            $score_215_out=78;
        }
        $update_215_out="UPDATE $rweek_2 SET $date_ampmo='$score_215_out' WHERE class2='二樂'";
        $result_215_out=mysqli_query($db_link,$update_215_out) or die("#215out 查詢失敗，請洽詢相關人員");
    } //第8組下午結束!!!

    $sql_9_am="SELECT * FROM vidchu_9_am_score"; //第9組早上!!!(只有外掃)
    $result_9_am=mysqli_query($db_link,$sql_9_am) or die("#9_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_9_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_106_out='80';
        if($row['vidchu_9_106_litter']=='加分'){
            ++$score_106_out;
        }
        else if($row['vidchu_9_106_litter']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_dust']=='加分'){
            ++$score_106_out;
        }
        else if($row['vidchu_9_106_dust']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_sweep']=='加分'){
            ++$score_106_out;
        }
        else if($row['vidchu_9_106_sweep']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_sill']=='加分'){
            ++$score_106_out;
        }
        else if($row['vidchu_9_106_sill']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_others']=='加分'){
            ++$score_106_out;
        }
        else if($row['vidchu_9_106_others']=='扣分'){
            --$score_106_out;
        }
        if($score_106_out>82){
            $score_106_out=82;
        }
        else if($score_106_out<78){
            $score_106_out=78;
        }
        $update_106_out="UPDATE $rweek_1 SET $date_ampmo='$score_106_out' WHERE class2='一孝'";
        $result_106_out=mysqli_query($db_link,$update_106_out) or die("#106out 查詢失敗，請洽詢相關人員");
        $score_116_out='80';
        if($row['vidchu_9_116_litter']=='加分'){
            ++$score_116_out;
        }
        else if($row['vidchu_9_116_litter']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_dust']=='加分'){
            ++$score_116_out;
        }
        else if($row['vidchu_9_116_dust']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_sweep']=='加分'){
            ++$score_116_out;
        }
        else if($row['vidchu_9_116_sweep']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_sill']=='加分'){
            ++$score_116_out;
        }
        else if($row['vidchu_9_116_sill']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_others']=='加分'){
            ++$score_116_out;
        }
        else if($row['vidchu_9_116_others']=='扣分'){
            --$score_116_out;
        }
        if($score_116_out>82){
            $score_116_out=82;
        }
        else if($score_116_out<78){
            $score_116_out=78;
        }
        $update_116_out="UPDATE $rweek_1 SET $date_ampmo='$score_116_out' WHERE class2='一群'";
        $result_116_out=mysqli_query($db_link,$update_116_out) or die("#116out 查詢失敗，請洽詢相關人員");
        $score_118_out='80';
        if($row['vidchu_9_118_litter']=='加分'){
            ++$score_118_out;
        }
        else if($row['vidchu_9_118_litter']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_dust']=='加分'){
            ++$score_118_out;
        }
        else if($row['vidchu_9_118_dust']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_sweep']=='加分'){
            ++$score_118_out;
        }
        else if($row['vidchu_9_118_sweep']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_sill']=='加分'){
            ++$score_118_out;
        }
        else if($row['vidchu_9_118_sill']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_other']=='加分'){
            ++$score_118_out;
        }
        else if($row['vidchu_9_118_other']=='扣分'){
            --$score_118_out;
        }
        if($score_118_out>82){
            $score_118_out=82;
        }
        else if($score_118_out<78){
            $score_118_out=78;
        }
        $update_118_out="UPDATE $rweek_1 SET $date_ampmo='$score_118_out' WHERE class2='一捷'";
        $result_118_out=mysqli_query($db_link,$update_118_out) or die("#118out 查詢失敗，請洽詢相關人員");
    } //第9組早上結束!!!
    $sql_9_pm="SELECT * FROM vidchu_9_pm_score"; //第9組下午!!!(只有外掃)
    $result_9_pm=mysqli_query($db_link,$sql_9_pm) or die("#9_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_9_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_106_out='80';
        if($row['vidchu_9_106_litter']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_dust']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_sweep']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_sill']=='扣分'){
            --$score_106_out;
        }
        if($row['vidchu_9_106_others']=='扣分'){
            --$score_106_out;
        }
        if($score_106_out<78){
            $score_106_out=78;
        }
        $update_106_out="UPDATE $rweek_1 SET $date_ampmo='$score_106_out' WHERE class2='一孝'";
        $result_106_out=mysqli_query($db_link,$update_106_out) or die("#106out 查詢失敗，請洽詢相關人員");
        $score_116_out='80';
        if($row['vidchu_9_116_litter']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_dust']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_sweep']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_sill']=='扣分'){
            --$score_116_out;
        }
        if($row['vidchu_9_116_others']=='扣分'){
            --$score_116_out;
        }
        if($score_116_out<78){
            $score_116_out=78;
        }
        $update_116_out="UPDATE $rweek_1 SET $date_ampmo='$score_116_out' WHERE class2='一群'";
        $result_116_out=mysqli_query($db_link,$update_116_out) or die("#116out 查詢失敗，請洽詢相關人員");
        $score_118_out='80';
        if($row['vidchu_9_118_litter']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_dust']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_sweep']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_sill']=='扣分'){
            --$score_118_out;
        }
        if($row['vidchu_9_118_other']=='扣分'){
            --$score_118_out;
        }
        if($score_118_out<78){
            $score_118_out=78;
        }
        $update_118_out="UPDATE $rweek_1 SET $date_ampmo='$score_118_out' WHERE class2='一捷'";
        $result_118_out=mysqli_query($db_link,$update_118_out) or die("#118out 查詢失敗，請洽詢相關人員");
    } //第9組下午結束!!!

    $sql_10_am="SELECT * FROM vidchu_10_am_score"; //第10組早上!!!(只有外掃)
    $result_10_am=mysqli_query($db_link,$sql_10_am) or die("#10_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_10_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_119_out='80';
        if($row['vidchu_10_119_litter']=='加分'){
            ++$score_119_out;
        }
        else if($row['vidchu_10_119_litter']=='扣分'){
            --$score_119_out;
        }
        if($row['vidchu_10_119_leaves']=='加分'){
            ++$score_119_out;
        }
        else if($row['vidchu_10_119_leaves']=='扣分'){
            --$score_119_out;
        }
        if($score_119_out>82){
            $score_119_out=82;
        }
        else if($score_119_out<78){
            $score_119_out=78;
        }
        $update_119_out="UPDATE $rweek_1 SET $date_ampmo='$score_119_out' WHERE class2='一敏'";
        $result_119_out=mysqli_query($db_link,$update_119_out) or die("#119out 查詢失敗，請洽詢相關人員");
        $score_109_out='80';
        if($row['vidchu_10_109_litter']=='加分'){
            ++$score_109_out;
        }
        else if($row['vidchu_10_109_litter']=='扣分'){
            --$score_109_out;
        }
        if($row['vidchu_10_109_leaves']=='加分'){
            ++$score_109_out;
        }
        else if($row['vidchu_10_109_leaves']=='扣分'){
            --$score_109_out;
        }
        if($score_109_out>82){
            $score_109_out=82;
        }
        else if($score_109_out<78){
            $score_109_out=78;
        }
        $update_109_out="UPDATE $rweek_1 SET $date_ampmo='$score_109_out' WHERE class2='一和'";
        $result_109_out=mysqli_query($db_link,$update_109_out) or die("#109out 查詢失敗，請洽詢相關人員");
        $score_110_out='80';
        if($row['vidchu_10_110_litter']=='加分'){
            ++$score_110_out;
        }
        else if($row['vidchu_10_110_litter']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_leaves']=='加分'){
            ++$score_110_out;
        }
        else if($row['vidchu_10_110_leaves']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_dust']=='加分'){
            ++$score_110_out;
        }
        else if($row['vidchu_10_110_dust']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_others']=='加分'){
            ++$score_110_out;
        }
        else if($row['vidchu_10_110_others']=='扣分'){
            --$score_110_out;
        }
        if($score_110_out>82){
            $score_110_out=82;
        }
        else if($score_110_out<78){
            $score_110_out=78;
        }
        $update_110_out="UPDATE $rweek_1 SET $date_ampmo='$score_110_out' WHERE class2='一平'";
        $result_110_out=mysqli_query($db_link,$update_110_out) or die("#110out 查詢失敗，請洽詢相關人員");
        $score_217_out='80';
        if($row['vidchu_10_217_litter']=='加分'){
            ++$score_217_out;
        }
        else if($row['vidchu_10_217_litter']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_leaves']=='加分'){
            ++$score_217_out;
        }
        else if($row['vidchu_10_217_leaves']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_dust']=='加分'){
            ++$score_217_out;
        }
        else if($row['vidchu_10_217_dust']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_others']=='加分'){
            ++$score_217_out;
        }
        else if($row['vidchu_10_217_others']=='扣分'){
            --$score_217_out;
        }
        if($score_217_out>82){
            $score_217_out=82;
        }
        else if($score_217_out<78){
            $score_217_out=78;
        }
        $update_217_out="UPDATE $rweek_2 SET $date_ampmo='$score_217_out' WHERE class2='二簡'";
        $result_217_out=mysqli_query($db_link,$update_217_out) or die("#217out 查詢失敗，請洽詢相關人員");
        $score_216_out='80';
        if($row['vidchu_10_216_litter']=='加分'){
            ++$score_216_out;
        }
        else if($row['vidchu_10_216_litter']=='扣分'){
            --$score_216_out;
        }
        if($row['vidchu_10_216_dust']=='加分'){
            ++$score_216_out;
        }
        else if($row['vidchu_10_216_dust']=='扣分'){
            --$score_216_out;
        }
        if($row['vidchu_10_216_others']=='加分'){
            ++$score_216_out;
        }
        else if($row['vidchu_10_216_others']=='扣分'){
            --$score_216_out;
        }
        if($score_216_out>82){
            $score_216_out=82;
        }
        else if($score_216_out<78){
            $score_216_out=78;
        }
        $update_216_out="UPDATE $rweek_2 SET $date_ampmo='$score_216_out' WHERE class2='二群'";
        $result_216_out=mysqli_query($db_link,$update_216_out) or die("#216out 查詢失敗，請洽詢相關人員");
    } //第10組早上結束!!!
    $sql_10_pm="SELECT * FROM vidchu_10_pm_score"; //第10組下午!!!(只有外掃)
    $result_10_pm=mysqli_query($db_link,$sql_10_pm) or die("#10_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_10_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_119_out='80';
        if($row['vidchu_10_119_litter']=='扣分'){
            --$score_119_out;
        }
        if($row['vidchu_10_119_leaves']=='扣分'){
            --$score_119_out;
        }
        if($score_119_out<78){
            $score_119_out=78;
        }
        $update_119_out="UPDATE $rweek_1 SET $date_ampmo='$score_119_out' WHERE class2='一敏'";
        $result_119_out=mysqli_query($db_link,$update_119_out) or die("#119out 查詢失敗，請洽詢相關人員");
        $score_109_out='80';
        if($row['vidchu_10_109_litter']=='扣分'){
            --$score_109_out;
        }
        if($row['vidchu_10_109_leaves']=='扣分'){
            --$score_109_out;
        }
        if($score_109_out<78){
            $score_109_out=78;
        }
        $update_109_out="UPDATE $rweek_1 SET $date_ampmo='$score_109_out' WHERE class2='一和'";
        $result_109_out=mysqli_query($db_link,$update_109_out) or die("#109out 查詢失敗，請洽詢相關人員");
        $score_110_out='80';
        if($row['vidchu_10_110_litter']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_leaves']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_dust']=='扣分'){
            --$score_110_out;
        }
        if($row['vidchu_10_110_others']=='扣分'){
            --$score_110_out;
        }
        if($score_110_out<78){
            $score_110_out=78;
        }
        $update_110_out="UPDATE $rweek_1 SET $date_ampmo='$score_110_out' WHERE class2='一平'";
        $result_110_out=mysqli_query($db_link,$update_110_out) or die("#110out 查詢失敗，請洽詢相關人員");
        $score_217_out='80';
        if($row['vidchu_10_217_litter']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_leaves']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_dust']=='扣分'){
            --$score_217_out;
        }
        if($row['vidchu_10_217_others']=='扣分'){
            --$score_217_out;
        }
        if($score_217_out<78){
            $score_217_out=78;
        }
        $update_217_out="UPDATE $rweek_2 SET $date_ampmo='$score_217_out' WHERE class2='二簡'";
        $result_217_out=mysqli_query($db_link,$update_217_out) or die("#217out 查詢失敗，請洽詢相關人員");
        $score_216_out='80';
        if($row['vidchu_10_216_litter']=='扣分'){
            --$score_216_out;
        }
        if($row['vidchu_10_216_dust']=='扣分'){
            --$score_216_out;
        }
        if($row['vidchu_10_216_others']=='扣分'){
            --$score_216_out;
        }
        if($score_216_out<78){
            $score_216_out=78;
        }
        $update_216_out="UPDATE $rweek_2 SET $date_ampmo='$score_216_out' WHERE class2='二群'";
        $result_216_out=mysqli_query($db_link,$update_216_out) or die("#216out 查詢失敗，請洽詢相關人員");
    } //第10組下午結束!!!

    $sql_11_am="SELECT * FROM vidchu_11_am_score"; //第11組早上!!!(只有外掃)
    $result_11_am=mysqli_query($db_link,$sql_11_am) or die("#11_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_11_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_213_out='80';
        if($row['vidchu_11_213_litter']=='加分'){
            ++$score_213_out;
        }
        else if($row['vidchu_11_213_litter']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_leaves']=='加分'){
            ++$score_213_out;
        }
        else if($row['vidchu_11_213_leaves']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_dust']=='加分'){
            ++$score_213_out;
        }
        else if($row['vidchu_11_213_dust']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_others']=='加分'){
            ++$score_213_out;
        }
        else if($row['vidchu_11_213_others']=='扣分'){
            --$score_213_out;
        }
        if($score_213_out>82){
            $score_213_out=82;
        }
        else if($score_213_out<78){
            $score_213_out=78;
        }
        $update_213_out="UPDATE $rweek_2 SET $date_ampmo='$score_213_out' WHERE class2='二敬'";
        $result_213_out=mysqli_query($db_link,$update_213_out) or die("#213out 查詢失敗，請洽詢相關人員");
        $score_203_out='80';
        if($row['vidchu_11_203_litter']=='加分'){
            ++$score_203_out;
        }
        else if($row['vidchu_11_203_litter']=='扣分'){
            --$score_203_out;
        }
        if($row['vidchu_11_203_dust']=='加分'){
            ++$score_203_out;
        }
        else if($row['vidchu_11_203_dust']=='扣分'){
            --$score_203_out;
        }
        if($row['vidchu_11_203_others']=='加分'){
            ++$score_203_out;
        }
        else if($row['vidchu_11_203_others']=='扣分'){
            --$score_203_out;
        }
        if($score_203_out>82){
            $score_203_out=82;
        }
        else if($score_203_out<78){
            $score_203_out=78;
        }
        $update_203_out="UPDATE $rweek_2 SET $date_ampmo='$score_203_out' WHERE class2='二禮'";
        $result_203_out=mysqli_query($db_link,$update_203_out) or die("#203out 查詢失敗，請洽詢相關人員");
        $score_214_out='80';
        if($row['vidchu_11_214_litter']=='加分'){
            ++$score_214_out;
        }
        else if($row['vidchu_11_214_litter']=='扣分'){
            --$score_214_out;
        }
        if($row['vidchu_11_214_dust']=='加分'){
            ++$score_214_out;
        }
        else if($row['vidchu_11_214_dust']=='扣分'){
            --$score_214_out;
        }
        if($row['vidchu_11_214_others']=='加分'){
            ++$score_214_out;
        }
        else if($row['vidchu_11_214_others']=='扣分'){
            --$score_214_out;
        }
        if($score_214_out>82){
            $score_214_out=82;
        }
        else if($score_214_out<78){
            $score_214_out=78;
        }
        $update_214_out="UPDATE $rweek_2 SET $date_ampmo='$score_214_out' WHERE class2='二業'";
        $result_214_out=mysqli_query($db_link,$update_214_out) or die("#214out 查詢失敗，請洽詢相關人員");
        $score_204_out='80';
        if($row['vidchu_11_204_litter']=='加分'){
            ++$score_204_out;
        }
        else if($row['vidchu_11_204_litter']=='扣分'){
            --$score_204_out;
        }
        if($row['vidchu_11_204_dust']=='加分'){
            ++$score_204_out;
        }
        else if($row['vidchu_11_204_dust']=='扣分'){
            --$score_204_out;
        }
        if($row['vidchu_11_204_others']=='加分'){
            ++$score_204_out;
        }
        else if($row['vidchu_11_204_others']=='扣分'){
            --$score_204_out;
        }
        if($score_204_out>82){
            $score_204_out=82;
        }
        else if($score_204_out<78){
            $score_204_out=78;
        }
        $update_204_out="UPDATE $rweek_2 SET $date_ampmo='$score_204_out' WHERE class2='二智'";
        $result_204_out=mysqli_query($db_link,$update_204_out) or die("#204out 查詢失敗，請洽詢相關人員");
    } //第11組早上結束!!!
    $sql_11_pm="SELECT * FROM vidchu_11_pm_score"; //第11組下午!!!(只有外掃)
    $result_11_pm=mysqli_query($db_link,$sql_11_pm) or die("#11_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_11_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_213_out='80';
        if($row['vidchu_11_213_litter']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_leaves']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_dust']=='扣分'){
            --$score_213_out;
        }
        if($row['vidchu_11_213_others']=='扣分'){
            --$score_213_out;
        }
        if($score_213_out<78){
            $score_213_out=78;
        }
        $update_213_out="UPDATE $rweek_2 SET $date_ampmo='$score_213_out' WHERE class2='二敬'";
        $result_213_out=mysqli_query($db_link,$update_213_out) or die("#213out 查詢失敗，請洽詢相關人員");
        $score_203_out='80';
        if($row['vidchu_11_203_litter']=='扣分'){
            --$score_203_out;
        }
        if($row['vidchu_11_203_dust']=='扣分'){
            --$score_203_out;
        }
        if($row['vidchu_11_203_others']=='扣分'){
            --$score_203_out;
        }
        if($score_203_out<78){
            $score_203_out=78;
        }
        $update_203_out="UPDATE $rweek_2 SET $date_ampmo='$score_203_out' WHERE class2='二禮'";
        $result_203_out=mysqli_query($db_link,$update_203_out) or die("#203out 查詢失敗，請洽詢相關人員");
        $score_214_out='80';
        if($row['vidchu_11_214_litter']=='扣分'){
            --$score_214_out;
        }
        if($row['vidchu_11_214_dust']=='扣分'){
            --$score_214_out;
        }
        if($row['vidchu_11_214_others']=='扣分'){
            --$score_214_out;
        }
        if($score_214_out<78){
            $score_214_out=78;
        }
        $update_214_out="UPDATE $rweek_2 SET $date_ampmo='$score_214_out' WHERE class2='二業'";
        $result_214_out=mysqli_query($db_link,$update_214_out) or die("#214out 查詢失敗，請洽詢相關人員");
        $score_204_out='80';
        if($row['vidchu_11_204_litter']=='扣分'){
            --$score_204_out;
        }
        if($row['vidchu_11_204_dust']=='扣分'){
            --$score_204_out;
        }
        if($row['vidchu_11_204_others']=='扣分'){
            --$score_204_out;
        }
        if($score_204_out<78){
            $score_204_out=78;
        }
        $update_204_out="UPDATE $rweek_2 SET $date_ampmo='$score_204_out' WHERE class2='二智'";
        $result_204_out=mysqli_query($db_link,$update_204_out) or die("#204out 查詢失敗，請洽詢相關人員");
    } //第11組下午結束!!!

    $sql_12_am="SELECT * FROM vidchu_12_am_score"; //第12組早上!!!(只有外掃)
    $result_12_am=mysqli_query($db_link,$sql_12_am) or die("#12_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_12_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_101_out='80';
        if($row['vidchu_12_101_litter']=='加分'){
            ++$score_101_out;
        }
        else if($row['vidchu_12_101_litter']=='扣分'){
            --$score_101_out;
        }
        if($row['vidchu_12_101_leaves']=='加分'){
            ++$score_101_out;
        }
        else if($row['vidchu_12_101_leaves']=='扣分'){
            --$score_101_out;
        }
        if($row['vidchu_12_101_others']=='加分'){
            ++$score_101_out;
        }
        else if($row['vidchu_12_101_others']=='扣分'){
            --$score_101_out;
        }
        if($score_101_out>82){
            $score_101_out=82;
        }
        else if($score_101_out<78){
            $score_101_out=78;
        }
        $update_101_out="UPDATE $rweek_1 SET $date_ampmo='$score_101_out' WHERE class2='一仁'";
        $result_101_out=mysqli_query($db_link,$update_101_out) or die("#101out 查詢失敗，請洽詢相關人員");
        $score_114_out='80';
        if($row['vidchu_12_114_litter']=='加分'){
            ++$score_114_out;
        }
        else if($row['vidchu_12_114_litter']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_leaves']=='加分'){
            ++$score_114_out;
        }
        else if($row['vidchu_12_114_leaves']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_sweep']=='加分'){
            ++$score_114_out;
        }
        else if($row['vidchu_12_114_sweep']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_others']=='加分'){
            ++$score_114_out;
        }
        else if($row['vidchu_12_114_others']=='扣分'){
            --$score_114_out;
        }
        if($score_114_out>82){
            $score_114_out=82;
        }
        else if($score_114_out<78){
            $score_114_out=78;
        }
        $update_114_out="UPDATE $rweek_1 SET $date_ampmo='$score_114_out' WHERE class2='一業'";
        $result_114_out=mysqli_query($db_link,$update_114_out) or die("#114out 查詢失敗，請洽詢相關人員");
        $score_103_out='80';
        if($row['vidchu_12_103_litter']=='加分'){
            ++$score_103_out;
        }
        else if($row['vidchu_12_103_litter']=='扣分'){
            --$score_103_out;
        }
        if($row['vidchu_12_103_dust']=='加分'){
            ++$score_103_out;
        }
        else if($row['vidchu_12_103_dust']=='扣分'){
            --$score_103_out;
        }
        if($row['vidchu_12_103_others']=='加分'){
            ++$score_103_out;
        }
        else if($row['vidchu_12_103_others']=='扣分'){
            --$score_103_out;
        }
        if($score_103_out>82){
            $score_103_out=82;
        }
        else if($score_103_out<78){
            $score_103_out=78;
        }
        $update_103_out="UPDATE $rweek_1 SET $date_ampmo='$score_103_out' WHERE class2='一禮'";
        $result_103_out=mysqli_query($db_link,$update_103_out) or die("#103out 查詢失敗，請洽詢相關人員");
    } //第12組早上結束!!!
    $sql_12_pm="SELECT * FROM vidchu_12_pm_score"; //第12組下午!!!(只有外掃)
    $result_12_pm=mysqli_query($db_link,$sql_12_pm) or die("#12_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_12_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_101_out='80';
        if($row['vidchu_12_101_litter']=='扣分'){
            --$score_101_out;
        }
        if($row['vidchu_12_101_leaves']=='扣分'){
            --$score_101_out;
        }
        if($row['vidchu_12_101_others']=='扣分'){
            --$score_101_out;
        }
        if($score_101_out<78){
            $score_101_out=78;
        }
        $update_101_out="UPDATE $rweek_1 SET $date_ampmo='$score_101_out' WHERE class2='一仁'";
        $result_101_out=mysqli_query($db_link,$update_101_out) or die("#101out 查詢失敗，請洽詢相關人員");
        $score_114_out='80';
        if($row['vidchu_12_114_litter']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_leaves']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_sweep']=='扣分'){
            --$score_114_out;
        }
        if($row['vidchu_12_114_others']=='扣分'){
            --$score_114_out;
        }
        if($score_114_out<78){
            $score_114_out=78;
        }
        $update_114_out="UPDATE $rweek_1 SET $date_ampmo='$score_114_out' WHERE class2='一業'";
        $result_114_out=mysqli_query($db_link,$update_114_out) or die("#114out 查詢失敗，請洽詢相關人員");
        $score_103_out='80';
        if($row['vidchu_12_103_litter']=='扣分'){
            --$score_103_out;
        }
        if($row['vidchu_12_103_dust']=='扣分'){
            --$score_103_out;
        }
        if($row['vidchu_12_103_others']=='扣分'){
            --$score_103_out;
        }
        if($score_103_out<78){
            $score_103_out=78;
        }
        $update_103_out="UPDATE $rweek_1 SET $date_ampmo='$score_103_out' WHERE class2='一禮'";
        $result_103_out=mysqli_query($db_link,$update_103_out) or die("#103out 查詢失敗，請洽詢相關人員");
    } //第12組下午結束!!!

    $sql_13_am="SELECT * FROM vidchu_13_am_score"; //第13組早上!!!(只有外掃)
    $result_13_am=mysqli_query($db_link,$sql_13_am) or die("#13_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_13_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_105_out='80';
        if($row['vidchu_13_105_litter']=='加分'){
            ++$score_105_out;
        }
        else if($row['vidchu_13_105_litter']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_dust']=='加分'){
            ++$score_105_out;
        }
        else if($row['vidchu_13_105_dust']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_sweep']=='加分'){
            ++$score_105_out;
        }
        else if($row['vidchu_13_105_sweep']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_sill']=='加分'){
            ++$score_105_out;
        }
        else if($row['vidchu_13_105_sill']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_others']=='加分'){
            ++$score_105_out;
        }
        else if($row['vidchu_13_105_others']=='扣分'){
            --$score_105_out;
        }
        if($score_105_out>82){
            $score_105_out=82;
        }
        else if($score_105_out<78){
            $score_105_out=78;
        }
        $update_105_out="UPDATE $rweek_1 SET $date_ampmo='$score_105_out' WHERE class2='一忠'";
        $result_105_out=mysqli_query($db_link,$update_105_out) or die("#105out 查詢失敗，請洽詢相關人員");
        $score_111_out='80';
        if($row['vidchu_13_111_litter']=='加分'){
            ++$score_111_out;
        }
        else if($row['vidchu_13_111_litter']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_dust']=='加分'){
            ++$score_111_out;
        }
        else if($row['vidchu_13_111_dust']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_sweep']=='加分'){
            ++$score_111_out;
        }
        else if($row['vidchu_13_111_sweep']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_sill']=='加分'){
            ++$score_111_out;
        }
        else if($row['vidchu_13_111_sill']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_others']=='加分'){
            ++$score_111_out;
        }
        else if($row['vidchu_13_111_others']=='扣分'){
            --$score_111_out;
        }
        if($score_111_out>82){
            $score_111_out=82;
        }
        else if($score_111_out<78){
            $score_111_out=78;
        }
        $update_111_out="UPDATE $rweek_1 SET $date_ampmo='$score_111_out' WHERE class2='一誠'";
        $result_111_out=mysqli_query($db_link,$update_111_out) or die("#111out 查詢失敗，請洽詢相關人員");
        $score_117_out='80';
        if($row['vidchu_13_117_litter']=='加分'){
            ++$score_117_out;
        }
        else if($row['vidchu_13_117_litter']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_dust']=='加分'){
            ++$score_117_out;
        }
        else if($row['vidchu_13_117_dust']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_sweep']=='加分'){
            ++$score_117_out;
        }
        else if($row['vidchu_13_117_sweep']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_sill']=='加分'){
            ++$score_117_out;
        }
        else if($row['vidchu_13_117_sill']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_others']=='加分'){
            ++$score_117_out;
        }
        else if($row['vidchu_13_117_others']=='扣分'){
            --$score_117_out;
        }
        if($score_117_out>82){
            $score_117_out=82;
        }
        else if($score_117_out<78){
            $score_117_out=78;
        }
        $update_117_out="UPDATE $rweek_1 SET $date_ampmo='$score_117_out' WHERE class2='一簡'";
        $result_117_out=mysqli_query($db_link,$update_117_out) or die("#117out 查詢失敗，請洽詢相關人員");
    } //第13組早上結束!!!
    $sql_13_pm="SELECT * FROM vidchu_13_pm_score"; //第13組下午!!!(只有外掃)
    $result_13_pm=mysqli_query($db_link,$sql_13_pm) or die("#13_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_13_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_105_out='80';
        if($row['vidchu_13_105_litter']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_dust']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_sweep']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_sill']=='扣分'){
            --$score_105_out;
        }
        if($row['vidchu_13_105_others']=='扣分'){
            --$score_105_out;
        }
        if($score_105_out<78){
            $score_105_out=78;
        }
        $update_105_out="UPDATE $rweek_1 SET $date_ampmo='$score_105_out' WHERE class2='一忠'";
        $result_105_out=mysqli_query($db_link,$update_105_out) or die("#105out 查詢失敗，請洽詢相關人員");
        $score_111_out='80';
        if($row['vidchu_13_111_litter']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_dust']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_sweep']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_sill']=='扣分'){
            --$score_111_out;
        }
        if($row['vidchu_13_111_others']=='扣分'){
            --$score_111_out;
        }
        if($score_111_out<78){
            $score_111_out=78;
        }
        $update_111_out="UPDATE $rweek_1 SET $date_ampmo='$score_111_out' WHERE class2='一誠'";
        $result_111_out=mysqli_query($db_link,$update_111_out) or die("#111out 查詢失敗，請洽詢相關人員");
        $score_117_out='80';
        if($row['vidchu_13_117_litter']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_dust']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_sweep']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_sill']=='扣分'){
            --$score_117_out;
        }
        if($row['vidchu_13_117_others']=='扣分'){
            --$score_117_out;
        }
        if($score_117_out<78){
            $score_117_out=78;
        }
        $update_117_out="UPDATE $rweek_1 SET $date_ampmo='$score_117_out' WHERE class2='一簡'";
        $result_117_out=mysqli_query($db_link,$update_117_out) or die("#117out 查詢失敗，請洽詢相關人員");
    } //第13組下午結束!!!

    $sql_14_am="SELECT * FROM vidchu_14_am_score"; //第14組早上!!!(只有外掃)
    $result_14_am=mysqli_query($db_link,$sql_14_am) or die("#14_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_14_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_108_out='80';
        if($row['vidchu_14_108_litter']=='加分'){
            ++$score_108_out;
        }
        else if($row['vidchu_14_108_litter']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_dust']=='加分'){
            ++$score_108_out;
        }
        else if($row['vidchu_14_108_dust']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_sweep']=='加分'){
            ++$score_108_out;
        }
        else if($row['vidchu_14_108_sweep']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_sill']=='加分'){
            ++$score_108_out;
        }
        else if($row['vidchu_14_108_sill']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_others']=='加分'){
            ++$score_108_out;
        }
        else if($row['vidchu_14_108_others']=='扣分'){
            --$score_108_out;
        }
        if($score_108_out>82){
            $score_108_out=82;
        }
        else if($score_108_out<78){
            $score_108_out=78;
        }
        $update_108_out="UPDATE $rweek_1 SET $date_ampmo='$score_108_out' WHERE class2='一愛'";
        $result_108_out=mysqli_query($db_link,$update_108_out) or die("#108out 查詢失敗，請洽詢相關人員");
        $score_107_out='80';
        if($row['vidchu_14_107_litter']=='加分'){
            ++$score_107_out;
        }
        else if($row['vidchu_14_107_litter']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_dust']=='加分'){
            ++$score_107_out;
        }
        else if($row['vidchu_14_107_dust']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_sweep']=='加分'){
            ++$score_107_out;
        }
        else if($row['vidchu_14_107_sweep']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_sill']=='加分'){
            ++$score_107_out;
        }
        else if($row['vidchu_14_107_sill']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_others']=='加分'){
            ++$score_107_out;
        }
        else if($row['vidchu_14_107_others']=='扣分'){
            --$score_107_out;
        }
        if($score_107_out>82){
            $score_107_out=82;
        }
        else if($score_107_out<78){
            $score_107_out=78;
        }
        $update_107_out="UPDATE $rweek_1 SET $date_ampmo='$score_107_out' WHERE class2='一博'";
        $result_107_out=mysqli_query($db_link,$update_107_out) or die("#107out 查詢失敗，請洽詢相關人員");
        $score_113_out='80';
        if($row['vidchu_14_113_litter']=='加分'){
            ++$score_113_out;
        }
        else if($row['vidchu_14_113_litter']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_dust']=='加分'){
            ++$score_113_out;
        }
        else if($row['vidchu_14_113_dust']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_sill']=='加分'){
            ++$score_113_out;
        }
        else if($row['vidchu_14_113_sill']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_others']=='加分'){
            ++$score_113_out;
        }
        else if($row['vidchu_14_113_others']=='扣分'){
            --$score_113_out;
        }
        if($score_113_out>82){
            $score_113_out=82;
        }
        else if($score_113_out<78){
            $score_113_out=78;
        }
        $update_113_out="UPDATE $rweek_1 SET $date_ampmo='$score_113_out' WHERE class2='一敬'";
        $result_113_out=mysqli_query($db_link,$update_113_out) or die("#113out 查詢失敗，請洽詢相關人員");
    } //第14組早上結束!!!
    $sql_14_pm="SELECT * FROM vidchu_14_pm_score"; //第14組下午!!!(只有外掃)
    $result_14_pm=mysqli_query($db_link,$sql_14_pm) or die("#14_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_14_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_108_out='80';
        if($row['vidchu_14_108_litter']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_dust']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_sweep']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_sill']=='扣分'){
            --$score_108_out;
        }
        if($row['vidchu_14_108_others']=='扣分'){
            --$score_108_out;
        }
        if($score_108_out<78){
            $score_108_out=78;
        }
        $update_108_out="UPDATE $rweek_1 SET $date_ampmo='$score_108_out' WHERE class2='一愛'";
        $result_108_out=mysqli_query($db_link,$update_108_out) or die("#108out 查詢失敗，請洽詢相關人員");
        $score_107_out='80';
        if($row['vidchu_14_107_litter']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_dust']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_sweep']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_sill']=='扣分'){
            --$score_107_out;
        }
        if($row['vidchu_14_107_others']=='扣分'){
            --$score_107_out;
        }
        if($score_107_out<78){
            $score_107_out=78;
        }
        $update_107_out="UPDATE $rweek_1 SET $date_ampmo='$score_107_out' WHERE class2='一博'";
        $result_107_out=mysqli_query($db_link,$update_107_out) or die("#107out 查詢失敗，請洽詢相關人員");
        $score_113_out='80';
        if($row['vidchu_14_113_litter']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_dust']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_sill']=='扣分'){
            --$score_113_out;
        }
        if($row['vidchu_14_113_others']=='扣分'){
            --$score_113_out;
        }
        if($score_113_out<78){
            $score_113_out=78;
        }
        $update_113_out="UPDATE $rweek_1 SET $date_ampmo='$score_113_out' WHERE class2='一敬'";
        $result_113_out=mysqli_query($db_link,$update_113_out) or die("#113out 查詢失敗，請洽詢相關人員");
    } //第14組下午結束!!!

    $sql_15_am="SELECT * FROM vidchu_15_am_score"; //第15組早上!!!(只有內掃)
    $result_15_am=mysqli_query($db_link,$sql_15_am) or die("#15_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_15_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_am($rowData[0]);
            }
        }
        $score_105='85';
        if($row['vidchu_15_105_A']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_A']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_B']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_B']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_C']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_C']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_D']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_D']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_E']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_E']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_F']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_F']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_G']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_G']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_H']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_H']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_I']=='加分'){
            ++$score_105;
        }
        else if($row['vidchu_15_105_I']=='扣分'){
            --$score_105;
        }
        if($score_105>90){
            $score_105=90;
        }
        else if($score_105<80){
            $score_105=80;
        }
        $update_105="UPDATE $rweek_1 SET $date_ampmo='$score_105' WHERE class2='一忠'";
        $result_105=mysqli_query($db_link,$update_105) or die("#105in 查詢失敗，請洽詢相關人員");
        $score_106='85';
        if($row['vidchu_15_106_A']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_A']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_B']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_B']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_C']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_C']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_D']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_D']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_E']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_E']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_F']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_F']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_G']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_G']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_H']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_H']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_I']=='加分'){
            ++$score_106;
        }
        else if($row['vidchu_15_106_I']=='扣分'){
            --$score_106;
        }
        if($score_106>90){
            $score_106=90;
        }
        else if($score_106<80){
            $score_106=80;
        }
        $update_106="UPDATE $rweek_1 SET $date_ampmo='$score_106' WHERE class2='一孝'";
        $result_106=mysqli_query($db_link,$update_106) or die("#106in 查詢失敗，請洽詢相關人員");
        $score_107='85';
        if($row['vidchu_15_107_A']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_A']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_B']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_B']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_C']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_C']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_D']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_D']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_E']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_E']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_F']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_F']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_G']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_G']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_H']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_H']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_I']=='加分'){
            ++$score_107;
        }
        else if($row['vidchu_15_107_I']=='扣分'){
            --$score_107;
        }
        if($score_107>90){
            $score_107=90;
        }
        else if($score_107<80){
            $score_107=80;
        }
        $update_107="UPDATE $rweek_1 SET $date_ampmo='$score_107' WHERE class2='一博'";
        $result_107=mysqli_query($db_link,$update_107) or die("#107in 查詢失敗，請洽詢相關人員");
        $score_108='85';
        if($row['vidchu_15_108_A']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_A']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_B']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_B']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_C']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_C']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_D']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_D']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_E']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_E']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_F']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_F']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_G']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_G']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_H']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_H']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_I']=='加分'){
            ++$score_108;
        }
        else if($row['vidchu_15_108_I']=='扣分'){
            --$score_108;
        }
        if($score_108>90){
            $score_108=90;
        }
        else if($score_108<80){
            $score_108=80;
        }
        $update_108="UPDATE $rweek_1 SET $date_ampmo='$score_108' WHERE class2='一愛'";
        $result_108=mysqli_query($db_link,$update_108) or die("#108in 查詢失敗，請洽詢相關人員");
        $score_109='85';
        if($row['vidchu_15_109_A']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_A']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_B']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_B']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_C']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_C']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_D']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_D']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_E']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_E']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_F']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_F']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_G']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_G']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_H']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_H']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_I']=='加分'){
            ++$score_109;
        }
        else if($row['vidchu_15_109_I']=='扣分'){
            --$score_109;
        }
        if($score_109>90){
            $score_109=90;
        }
        else if($score_109<80){
            $score_109=80;
        }
        $update_109="UPDATE $rweek_1 SET $date_ampmo='$score_109' WHERE class2='一和'";
        $result_109=mysqli_query($db_link,$update_109) or die("#109in 查詢失敗，請洽詢相關人員");
        $score_110='85';
        if($row['vidchu_15_110_A']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_A']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_B']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_B']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_C']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_C']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_D']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_D']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_E']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_E']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_F']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_F']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_G']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_G']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_H']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_H']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_I']=='加分'){
            ++$score_110;
        }
        else if($row['vidchu_15_110_I']=='扣分'){
            --$score_110;
        }
        if($score_110>90){
            $score_110=90;
        }
        else if($score_110<80){
            $score_110=80;
        }
        $update_110="UPDATE $rweek_1 SET $date_ampmo='$score_110' WHERE class2='一平'";
        $result_110=mysqli_query($db_link,$update_110) or die("#110in 查詢失敗，請洽詢相關人員");
        $score_115='85';
        if($row['vidchu_15_115_A']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_A']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_B']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_B']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_C']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_C']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_D']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_D']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_E']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_E']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_F']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_F']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_G']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_G']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_H']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_H']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_I']=='加分'){
            ++$score_115;
        }
        else if($row['vidchu_15_115_I']=='扣分'){
            --$score_115;
        }
        if($score_115>90){
            $score_115=90;
        }
        else if($score_115<80){
            $score_115=80;
        }
        $update_115="UPDATE $rweek_1 SET $date_ampmo='$score_115' WHERE class2='一樂'";
        $result_115=mysqli_query($db_link,$update_115) or die("#115in 查詢失敗，請洽詢相關人員");
        $score_116='85';
        if($row['vidchu_15_116_A']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_A']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_B']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_B']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_C']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_C']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_D']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_D']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_E']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_E']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_F']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_F']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_G']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_G']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_H']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_H']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_I']=='加分'){
            ++$score_116;
        }
        else if($row['vidchu_15_116_I']=='扣分'){
            --$score_116;
        }
        if($score_116>90){
            $score_116=90;
        }
        else if($score_116<80){
            $score_116=80;
        }
        $update_116="UPDATE $rweek_1 SET $date_ampmo='$score_116' WHERE class2='一群'";
        $result_116=mysqli_query($db_link,$update_116) or die("#116in 查詢失敗，請洽詢相關人員");
        $score_117='85';
        if($row['vidchu_15_117_A']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_A']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_B']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_B']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_C']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_C']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_D']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_D']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_E']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_E']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_F']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_F']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_G']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_G']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_H']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_H']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_I']=='加分'){
            ++$score_117;
        }
        else if($row['vidchu_15_117_I']=='扣分'){
            --$score_117;
        }
        if($score_117>90){
            $score_117=90;
        }
        else if($score_117<80){
            $score_117=80;
        }
        $update_117="UPDATE $rweek_1 SET $date_ampmo='$score_117' WHERE class2='一簡'";
        $result_117=mysqli_query($db_link,$update_117) or die("#117in 查詢失敗，請洽詢相關人員");
        $score_118='85';
        if($row['vidchu_15_118_A']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_A']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_B']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_B']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_C']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_C']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_D']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_D']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_E']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_E']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_F']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_F']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_G']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_G']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_H']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_H']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_I']=='加分'){
            ++$score_118;
        }
        else if($row['vidchu_15_118_I']=='扣分'){
            --$score_118;
        }
        if($score_118>90){
            $score_118=90;
        }
        else if($score_118<80){
            $score_118=80;
        }
        $update_118="UPDATE $rweek_1 SET $date_ampmo='$score_118' WHERE class2='一捷'";
        $result_118=mysqli_query($db_link,$update_118) or die("#118in 查詢失敗，請洽詢相關人員");
        $score_119='85';
        if($row['vidchu_15_119_A']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_A']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_B']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_B']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_C']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_C']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_D']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_D']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_E']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_E']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_F']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_F']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_G']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_G']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_H']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_H']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_I']=='加分'){
            ++$score_119;
        }
        else if($row['vidchu_15_119_I']=='扣分'){
            --$score_119;
        }
        if($score_119>90){
            $score_119=90;
        }
        else if($score_119<80){
            $score_119=80;
        }
        $update_119="UPDATE $rweek_1 SET $date_ampmo='$score_119' WHERE class2='一敏'";
        $result_119=mysqli_query($db_link,$update_119) or die("#119in 查詢失敗，請洽詢相關人員");
        $score_120='85';
        if($row['vidchu_15_120_A']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_A']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_B']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_B']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_C']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_C']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_D']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_D']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_E']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_E']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_F']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_F']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_G']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_G']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_H']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_H']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_I']=='加分'){
            ++$score_120;
        }
        else if($row['vidchu_15_120_I']=='扣分'){
            --$score_120;
        }
        if($score_120>90){
            $score_120=90;
        }
        else if($score_120<80){
            $score_120=80;
        }
        $update_120="UPDATE $rweek_1 SET $date_ampmo='$score_120' WHERE class2='一慧'";
        $result_120=mysqli_query($db_link,$update_120) or die("#120in 查詢失敗，請洽詢相關人員");
    } //第15組早上結束!!!
    $sql_15_pm="SELECT * FROM vidchu_15_pm_score"; //第15組下午!!!(只有內掃)
    $result_15_pm=mysqli_query($db_link,$sql_15_pm) or die("#15_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_15_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampmo=date_pm($rowData[0]);
            }
        }
        $score_105='85';
        if($row['vidchu_15_105_A']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_B']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_C']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_D']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_E']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_F']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_G']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_H']=='扣分'){
            --$score_105;
        }
        if($row['vidchu_15_105_I']=='扣分'){
            --$score_105;
        }
        if($score_105<80){
            $score_105=80;
        }
        $update_105="UPDATE $rweek_1 SET $date_ampmo='$score_105' WHERE class2='一忠'";
        $result_105=mysqli_query($db_link,$update_105) or die("#105in 查詢失敗，請洽詢相關人員");
        $score_106='85';
        if($row['vidchu_15_106_A']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_B']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_C']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_D']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_E']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_F']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_G']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_H']=='扣分'){
            --$score_106;
        }
        if($row['vidchu_15_106_I']=='扣分'){
            --$score_106;
        }
        if($score_106<80){
            $score_106=80;
        }
        $update_106="UPDATE $rweek_1 SET $date_ampmo='$score_106' WHERE class2='一孝'";
        $result_106=mysqli_query($db_link,$update_106) or die("#106in 查詢失敗，請洽詢相關人員");
        $score_107='85';
        if($row['vidchu_15_107_A']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_B']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_C']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_D']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_E']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_F']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_G']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_H']=='扣分'){
            --$score_107;
        }
        if($row['vidchu_15_107_I']=='扣分'){
            --$score_107;
        }
        if($score_107<80){
            $score_107=80;
        }
        $update_107="UPDATE $rweek_1 SET $date_ampmo='$score_107' WHERE class2='一博'";
        $result_107=mysqli_query($db_link,$update_107) or die("#107in 查詢失敗，請洽詢相關人員");
        $score_108='85';
        if($row['vidchu_15_108_A']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_B']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_C']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_D']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_E']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_F']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_G']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_H']=='扣分'){
            --$score_108;
        }
        if($row['vidchu_15_108_I']=='扣分'){
            --$score_108;
        }
        if($score_108<80){
            $score_108=80;
        }
        $update_108="UPDATE $rweek_1 SET $date_ampmo='$score_108' WHERE class2='一愛'";
        $result_108=mysqli_query($db_link,$update_108) or die("#108in 查詢失敗，請洽詢相關人員");
        $score_109='85';
        if($row['vidchu_15_109_A']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_B']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_C']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_D']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_E']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_F']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_G']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_H']=='扣分'){
            --$score_109;
        }
        if($row['vidchu_15_109_I']=='扣分'){
            --$score_109;
        }
        if($score_109<80){
            $score_109=80;
        }
        $update_109="UPDATE $rweek_1 SET $date_ampmo='$score_109' WHERE class2='一和'";
        $result_109=mysqli_query($db_link,$update_109) or die("#109in 查詢失敗，請洽詢相關人員");
        $score_110='85';
        if($row['vidchu_15_110_A']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_B']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_C']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_D']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_E']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_F']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_G']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_H']=='扣分'){
            --$score_110;
        }
        if($row['vidchu_15_110_I']=='扣分'){
            --$score_110;
        }
        if($score_110<80){
            $score_110=80;
        }
        $update_110="UPDATE $rweek_1 SET $date_ampmo='$score_110' WHERE class2='一平'";
        $result_110=mysqli_query($db_link,$update_110) or die("#110in 查詢失敗，請洽詢相關人員");
        $score_115='85';
        if($row['vidchu_15_115_A']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_B']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_C']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_D']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_E']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_F']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_G']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_H']=='扣分'){
            --$score_115;
        }
        if($row['vidchu_15_115_I']=='扣分'){
            --$score_115;
        }
        if($score_115<80){
            $score_115=80;
        }
        $update_115="UPDATE $rweek_1 SET $date_ampmo='$score_115' WHERE class2='一樂'";
        $result_115=mysqli_query($db_link,$update_115) or die("#115in 查詢失敗，請洽詢相關人員");
        $score_116='85';
        if($row['vidchu_15_116_A']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_B']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_C']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_D']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_E']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_F']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_G']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_H']=='扣分'){
            --$score_116;
        }
        if($row['vidchu_15_116_I']=='扣分'){
            --$score_116;
        }
        if($score_116<80){
            $score_116=80;
        }
        $update_116="UPDATE $rweek_1 SET $date_ampmo='$score_116' WHERE class2='一群'";
        $result_116=mysqli_query($db_link,$update_116) or die("#116in 查詢失敗，請洽詢相關人員");
        $score_117='85';
        if($row['vidchu_15_117_A']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_B']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_C']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_D']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_E']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_F']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_G']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_H']=='扣分'){
            --$score_117;
        }
        if($row['vidchu_15_117_I']=='扣分'){
            --$score_117;
        }
        if($score_117<80){
            $score_117=80;
        }
        $update_117="UPDATE $rweek_1 SET $date_ampmo='$score_117' WHERE class2='一簡'";
        $result_117=mysqli_query($db_link,$update_117) or die("#117in 查詢失敗，請洽詢相關人員");
        $score_118='85';
        if($row['vidchu_15_118_A']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_B']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_C']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_D']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_E']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_F']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_G']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_H']=='扣分'){
            --$score_118;
        }
        if($row['vidchu_15_118_I']=='扣分'){
            --$score_118;
        }
        if($score_118<80){
            $score_118=80;
        }
        $update_118="UPDATE $rweek_1 SET $date_ampmo='$score_118' WHERE class2='一捷'";
        $result_118=mysqli_query($db_link,$update_118) or die("#118in 查詢失敗，請洽詢相關人員");
        $score_119='85';
        if($row['vidchu_15_119_A']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_B']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_C']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_D']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_E']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_F']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_G']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_H']=='扣分'){
            --$score_119;
        }
        if($row['vidchu_15_119_I']=='扣分'){
            --$score_119;
        }
        if($score_119<80){
            $score_119=80;
        }
        $update_119="UPDATE $rweek_1 SET $date_ampmo='$score_119' WHERE class2='一敏'";
        $result_119=mysqli_query($db_link,$update_119) or die("#119in 查詢失敗，請洽詢相關人員");
        $score_120='85';
        if($row['vidchu_15_120_A']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_B']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_C']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_D']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_E']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_F']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_G']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_H']=='扣分'){
            --$score_120;
        }
        if($row['vidchu_15_120_I']=='扣分'){
            --$score_120;
        }
        if($score_120<80){
            $score_120=80;
        }
        $update_120="UPDATE $rweek_1 SET $date_ampmo='$score_120' WHERE class2='一慧'";
        $result_120=mysqli_query($db_link,$update_120) or die("#120in 查詢失敗，請洽詢相關人員");
    } //第15組下午結束!!!

    $sql_16_am="SELECT * FROM vidchu_16_am_score"; //第16組早上!!!
    $result_16_am=mysqli_query($db_link,$sql_16_am) or die("#16_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_16_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_122_out='80';
        if($row['vidchu_16_122_litter']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_litter']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_sill']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_sill']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_dust']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_dust']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_blackboard']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_blackboard']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_table']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_table']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_locker']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_locker']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_others']=='加分'){
            ++$score_122_out;
        }
        else if($row['vidchu_16_122_others']=='扣分'){
            --$score_122_out;
        }
        if($score_122_out>82){
            $score_122_out=82;
        }
        else if($score_122_out<78){
            $score_122_out=78;
        }
        $update_122_out="UPDATE $rweek_1 SET $date_ampmo='$score_122_out' WHERE class2='一廉'";
        $result_122_out=mysqli_query($db_link,$update_122_out) or die("#122out 查詢失敗，請洽詢相關人員");
        $score_101='85';
        if($row['vidchu_16_101_A']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_A']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_B']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_B']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_C']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_C']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_D']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_D']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_E']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_E']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_F']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_F']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_G']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_G']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_H']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_H']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_I']=='加分'){
            ++$score_101;
        }
        else if($row['vidchu_16_101_I']=='扣分'){
            --$score_101;
        }
        if($score_101>90){
            $score_101=90;
        }
        else if($score_101<80){
            $score_101=80;
        }
        $update_101="UPDATE $rweek_1 SET $date_ampm='$score_101' WHERE class2='一仁'";
        $result_101=mysqli_query($db_link,$update_101) or die("#101in 查詢失敗，請洽詢相關人員");
        $score_102='85';
        if($row['vidchu_16_102_A']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_A']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_B']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_B']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_C']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_C']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_D']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_D']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_E']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_E']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_F']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_F']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_G']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_G']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_H']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_H']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_I']=='加分'){
            ++$score_102;
        }
        else if($row['vidchu_16_102_I']=='扣分'){
            --$score_102;
        }
        if($score_102>90){
            $score_102=90;
        }
        else if($score_102<80){
            $score_102=80;
        }
        $update_102="UPDATE $rweek_1 SET $date_ampm='$score_102' WHERE class2='一義'";
        $result_102=mysqli_query($db_link,$update_102) or die("#102in 查詢失敗，請洽詢相關人員");
        $score_103='85';
        if($row['vidchu_16_103_A']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_A']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_B']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_B']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_C']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_C']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_D']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_D']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_E']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_E']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_F']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_F']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_G']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_G']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_H']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_H']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_I']=='加分'){
            ++$score_103;
        }
        else if($row['vidchu_16_103_I']=='扣分'){
            --$score_103;
        }
        if($score_103>90){
            $score_103=90;
        }
        else if($score_103<80){
            $score_103=80;
        }
        $update_103="UPDATE $rweek_1 SET $date_ampm='$score_103' WHERE class2='一禮'";
        $result_103=mysqli_query($db_link,$update_103) or die("#103in 查詢失敗，請洽詢相關人員");
        $score_104='85';
        if($row['vidchu_16_104_A']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_A']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_B']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_B']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_C']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_C']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_D']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_D']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_E']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_E']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_F']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_F']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_G']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_G']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_H']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_H']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_I']=='加分'){
            ++$score_104;
        }
        else if($row['vidchu_16_104_I']=='扣分'){
            --$score_104;
        }
        if($score_104>90){
            $score_104=90;
        }
        else if($score_104<80){
            $score_104=80;
        }
        $update_104="UPDATE $rweek_1 SET $date_ampm='$score_104' WHERE class2='一智'";
        $result_104=mysqli_query($db_link,$update_104) or die("#104in 查詢失敗，請洽詢相關人員");
        $score_111='85';
        if($row['vidchu_16_111_A']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_A']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_B']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_B']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_C']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_C']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_D']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_D']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_E']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_E']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_F']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_F']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_G']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_G']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_H']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_H']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_I']=='加分'){
            ++$score_111;
        }
        else if($row['vidchu_16_111_I']=='扣分'){
            --$score_111;
        }
        if($score_111>90){
            $score_111=90;
        }
        else if($score_111<80){
            $score_111=80;
        }
        $update_111="UPDATE $rweek_1 SET $date_ampm='$score_111' WHERE class2='一誠'";
        $result_111=mysqli_query($db_link,$update_111) or die("#111in 查詢失敗，請洽詢相關人員");
        $score_112='85';
        if($row['vidchu_16_112_A']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_A']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_B']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_B']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_C']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_C']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_D']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_D']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_E']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_E']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_F']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_F']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_G']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_G']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_H']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_H']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_I']=='加分'){
            ++$score_112;
        }
        else if($row['vidchu_16_112_I']=='扣分'){
            --$score_112;
        }
        if($score_112>90){
            $score_112=90;
        }
        else if($score_112<80){
            $score_112=80;
        }
        $update_112="UPDATE $rweek_1 SET $date_ampm='$score_112' WHERE class2='一信'";
        $result_112=mysqli_query($db_link,$update_112) or die("#112in 查詢失敗，請洽詢相關人員");
        $score_113='85';
        if($row['vidchu_16_113_A']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_A']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_B']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_B']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_C']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_C']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_D']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_D']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_E']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_E']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_F']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_F']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_G']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_G']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_H']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_H']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_I']=='加分'){
            ++$score_113;
        }
        else if($row['vidchu_16_113_I']=='扣分'){
            --$score_113;
        }
        if($score_113>90){
            $score_113=90;
        }
        else if($score_113<80){
            $score_113=80;
        }
        $update_113="UPDATE $rweek_1 SET $date_ampm='$score_113' WHERE class2='一敬'";
        $result_113=mysqli_query($db_link,$update_113) or die("#113in 查詢失敗，請洽詢相關人員");
        $score_114='85';
        if($row['vidchu_16_114_A']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_A']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_B']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_B']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_C']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_C']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_D']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_D']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_E']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_E']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_F']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_F']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_G']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_G']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_H']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_H']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_I']=='加分'){
            ++$score_114;
        }
        else if($row['vidchu_16_114_I']=='扣分'){
            --$score_114;
        }
        if($score_114>90){
            $score_114=90;
        }
        else if($score_114<80){
            $score_114=80;
        }
        $update_114="UPDATE $rweek_1 SET $date_ampm='$score_114' WHERE class2='一業'";
        $result_114=mysqli_query($db_link,$update_114) or die("#114in 查詢失敗，請洽詢相關人員");
        $score_122='85';
        if($row['vidchu_16_122_A']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_A']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_B']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_B']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_C']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_C']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_D']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_D']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_E']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_E']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_F']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_F']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_G']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_G']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_H']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_H']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_I']=='加分'){
            ++$score_122;
        }
        else if($row['vidchu_16_122_I']=='扣分'){
            --$score_122;
        }
        if($score_122>90){
            $score_122=90;
        }
        else if($score_122<80){
            $score_122=80;
        }
        $update_122="UPDATE $rweek_1 SET $date_ampm='$score_122' WHERE class2='一廉'";
        $result_122=mysqli_query($db_link,$update_122) or die("#122in 查詢失敗，請洽詢相關人員");
    } //第16組早上結束!!!
    $sql_16_pm="SELECT * FROM vidchu_16_pm_score"; //第16組下午!!!
    $result_16_pm=mysqli_query($db_link,$sql_16_pm) or die("#16_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_16_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_122_out='80';
        if($row['vidchu_16_122_litter']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_sill']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_dust']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_blackboard']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_table']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_locker']=='扣分'){
            --$score_122_out;
        }
        if($row['vidchu_16_122_others']=='扣分'){
            --$score_122_out;
        }
        if($score_122_out<78){
            $score_122_out=78;
        }
        $update_122_out="UPDATE $rweek_1 SET $date_ampmo='$score_122_out' WHERE class2='一廉'";
        $result_122_out=mysqli_query($db_link,$update_122_out) or die("#122out 查詢失敗，請洽詢相關人員");
        $score_101='85';
        if($row['vidchu_16_101_A']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_B']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_C']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_D']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_E']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_F']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_G']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_H']=='扣分'){
            --$score_101;
        }
        if($row['vidchu_16_101_I']=='扣分'){
            --$score_101;
        }
        if($score_101<80){
            $score_101=80;
        }
        $update_101="UPDATE $rweek_1 SET $date_ampm='$score_101' WHERE class2='一仁'";
        $result_101=mysqli_query($db_link,$update_101) or die("#101in 查詢失敗，請洽詢相關人員");
        $score_102='85';
        if($row['vidchu_16_102_A']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_B']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_C']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_D']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_E']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_F']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_G']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_H']=='扣分'){
            --$score_102;
        }
        if($row['vidchu_16_102_I']=='扣分'){
            --$score_102;
        }
        if($score_102<80){
            $score_102=80;
        }
        $update_102="UPDATE $rweek_1 SET $date_ampm='$score_102' WHERE class2='一義'";
        $result_102=mysqli_query($db_link,$update_102) or die("#102in 查詢失敗，請洽詢相關人員");
        $score_103='85';
        if($row['vidchu_16_103_A']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_B']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_C']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_D']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_E']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_F']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_G']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_H']=='扣分'){
            --$score_103;
        }
        if($row['vidchu_16_103_I']=='扣分'){
            --$score_103;
        }
        if($score_103<80){
            $score_103=80;
        }
        $update_103="UPDATE $rweek_1 SET $date_ampm='$score_103' WHERE class2='一禮'";
        $result_103=mysqli_query($db_link,$update_103) or die("#103in 查詢失敗，請洽詢相關人員");
        $score_104='85';
        if($row['vidchu_16_104_A']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_B']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_C']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_D']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_E']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_F']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_G']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_H']=='扣分'){
            --$score_104;
        }
        if($row['vidchu_16_104_I']=='扣分'){
            --$score_104;
        }
        if($score_104<80){
            $score_104=80;
        }
        $update_104="UPDATE $rweek_1 SET $date_ampm='$score_104' WHERE class2='一智'";
        $result_104=mysqli_query($db_link,$update_104) or die("#104in 查詢失敗，請洽詢相關人員");
        $score_111='85';
        if($row['vidchu_16_111_A']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_B']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_C']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_D']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_E']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_F']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_G']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_H']=='扣分'){
            --$score_111;
        }
        if($row['vidchu_16_111_I']=='扣分'){
            --$score_111;
        }
        if($score_111<80){
            $score_111=80;
        }
        $update_111="UPDATE $rweek_1 SET $date_ampm='$score_111' WHERE class2='一誠'";
        $result_111=mysqli_query($db_link,$update_111) or die("#111in 查詢失敗，請洽詢相關人員");
        $score_112='85';
        if($row['vidchu_16_112_A']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_B']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_C']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_D']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_E']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_F']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_G']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_H']=='扣分'){
            --$score_112;
        }
        if($row['vidchu_16_112_I']=='扣分'){
            --$score_112;
        }
        if($score_112<80){
            $score_112=80;
        }
        $update_112="UPDATE $rweek_1 SET $date_ampm='$score_112' WHERE class2='一信'";
        $result_112=mysqli_query($db_link,$update_112) or die("#112in 查詢失敗，請洽詢相關人員");
        $score_113='85';
        if($row['vidchu_16_113_A']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_B']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_C']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_D']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_E']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_F']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_G']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_H']=='扣分'){
            --$score_113;
        }
        if($row['vidchu_16_113_I']=='扣分'){
            --$score_113;
        }
        if($score_113<80){
            $score_113=80;
        }
        $update_113="UPDATE $rweek_1 SET $date_ampm='$score_113' WHERE class2='一敬'";
        $result_113=mysqli_query($db_link,$update_113) or die("#113in 查詢失敗，請洽詢相關人員");
        $score_114='85';
        if($row['vidchu_16_114_A']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_B']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_C']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_D']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_E']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_F']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_G']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_H']=='扣分'){
            --$score_114;
        }
        if($row['vidchu_16_114_I']=='扣分'){
            --$score_114;
        }
        if($score_114<80){
            $score_114=80;
        }
        $update_114="UPDATE $rweek_1 SET $date_ampm='$score_114' WHERE class2='一業'";
        $result_114=mysqli_query($db_link,$update_114) or die("#114in 查詢失敗，請洽詢相關人員");
        $score_122='85';
        if($row['vidchu_16_122_A']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_B']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_C']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_D']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_E']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_F']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_G']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_H']=='扣分'){
            --$score_122;
        }
        if($row['vidchu_16_122_I']=='扣分'){
            --$score_122;
        }
        if($score_122<80){
            $score_122=80;
        }
        $update_122="UPDATE $rweek_1 SET $date_ampm='$score_122' WHERE class2='一廉'";
        $result_122=mysqli_query($db_link,$update_122) or die("#122in 查詢失敗，請洽詢相關人員");
    } //第16組下午結束!!!

    $sql_17_am="SELECT * FROM vidchu_17_am_score"; //第17組早上!!!
    $result_17_am=mysqli_query($db_link,$sql_17_am) or die("#17_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_17_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_217='85';
        if($row['vidchu_17_217_A']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_A']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_B']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_B']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_C']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_C']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_D']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_D']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_E']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_E']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_F']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_F']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_G']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_G']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_H']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_H']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_I']=='加分'){
            ++$score_217;
        }
        else if($row['vidchu_17_217_I']=='扣分'){
            --$score_217;
        }
        if($score_217>90){
            $score_217=90;
        }
        else if($score_217<80){
            $score_217=80;
        }
        $update_217="UPDATE $rweek_2 SET $date_ampm='$score_217' WHERE class2='二簡'";
        $result_217=mysqli_query($db_link,$update_217) or die("#217in 查詢失敗，請洽詢相關人員");
        $score_218='85';
        if($row['vidchu_17_218_A']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_A']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_B']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_B']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_C']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_C']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_D']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_D']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_E']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_E']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_F']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_F']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_G']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_G']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_H']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_H']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_I']=='加分'){
            ++$score_218;
        }
        else if($row['vidchu_17_218_I']=='扣分'){
            --$score_218;
        }
        if($score_218>90){
            $score_218=90;
        }
        else if($score_218<80){
            $score_218=80;
        }
        $update_218="UPDATE $rweek_2 SET $date_ampm='$score_218' WHERE class2='二捷'";
        $result_218=mysqli_query($db_link,$update_218) or die("#218in 查詢失敗，請洽詢相關人員");
        $score_219='85';
        if($row['vidchu_17_219_A']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_A']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_B']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_B']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_C']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_C']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_D']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_D']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_E']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_E']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_F']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_F']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_G']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_G']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_H']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_H']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_I']=='加分'){
            ++$score_219;
        }
        else if($row['vidchu_17_219_I']=='扣分'){
            --$score_219;
        }
        if($score_219>90){
            $score_219=90;
        }
        else if($score_219<80){
            $score_219=80;
        }
        $update_219="UPDATE $rweek_2 SET $date_ampm='$score_219' WHERE class2='二敏'";
        $result_219=mysqli_query($db_link,$update_219) or die("#219in 查詢失敗，請洽詢相關人員");
        $score_220='85';
        if($row['vidchu_17_220_A']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_A']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_B']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_B']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_C']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_C']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_D']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_D']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_E']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_E']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_F']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_F']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_G']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_G']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_H']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_H']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_I']=='加分'){
            ++$score_220;
        }
        else if($row['vidchu_17_220_I']=='扣分'){
            --$score_220;
        }
        if($score_220>90){
            $score_220=90;
        }
        else if($score_220<80){
            $score_220=80;
        }
        $update_220="UPDATE $rweek_2 SET $date_ampm='$score_220' WHERE class2='二慧'";
        $result_220=mysqli_query($db_link,$update_220) or die("#220in 查詢失敗，請洽詢相關人員");
        $score_221='85';
        if($row['vidchu_17_221_A']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_A']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_B']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_B']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_C']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_C']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_D']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_D']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_E']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_E']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_F']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_F']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_G']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_G']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_H']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_H']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_I']=='加分'){
            ++$score_221;
        }
        else if($row['vidchu_17_221_I']=='扣分'){
            --$score_221;
        }
        if($score_221>90){
            $score_221=90;
        }
        else if($score_221<80){
            $score_221=80;
        }
        $update_221="UPDATE $rweek_2 SET $date_ampm='$score_221' WHERE class2='二公'";
        $result_221=mysqli_query($db_link,$update_221) or die("#221in 查詢失敗，請洽詢相關人員");
        $score_211='85';
        if($row['vidchu_17_211_A']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_A']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_B']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_B']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_C']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_C']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_D']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_D']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_E']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_E']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_F']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_F']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_G']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_G']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_H']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_H']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_I']=='加分'){
            ++$score_211;
        }
        else if($row['vidchu_17_211_I']=='扣分'){
            --$score_211;
        }
        if($score_211>90){
            $score_211=90;
        }
        else if($score_211<80){
            $score_211=80;
        }
        $update_211="UPDATE $rweek_2 SET $date_ampm='$score_211' WHERE class2='二誠'";
        $result_211=mysqli_query($db_link,$update_211) or die("#211in 查詢失敗，請洽詢相關人員");
        $score_212='85';
        if($row['vidchu_17_212_A']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_A']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_B']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_B']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_C']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_C']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_D']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_D']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_E']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_E']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_F']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_F']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_G']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_G']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_H']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_H']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_I']=='加分'){
            ++$score_212;
        }
        else if($row['vidchu_17_212_I']=='扣分'){
            --$score_212;
        }
        if($score_212>90){
            $score_212=90;
        }
        else if($score_212<80){
            $score_212=80;
        }
        $update_212="UPDATE $rweek_2 SET $date_ampm='$score_212' WHERE class2='二信'";
        $result_212=mysqli_query($db_link,$update_212) or die("#212in 查詢失敗，請洽詢相關人員");
        $score_222='85';
        if($row['vidchu_17_213_A']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_A']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_B']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_B']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_C']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_C']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_D']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_D']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_E']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_E']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_F']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_F']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_G']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_G']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_H']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_H']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_I']=='加分'){
            ++$score_222;
        }
        else if($row['vidchu_17_213_I']=='扣分'){
            --$score_222;
        }
        if($score_222>90){
            $score_222=90;
        }
        else if($score_222<80){
            $score_222=80;
        }
        $update_222="UPDATE $rweek_2 SET $date_ampm='$score_222' WHERE class2='二廉'";
        $result_222=mysqli_query($db_link,$update_222) or die("#222in 查詢失敗，請洽詢相關人員");
        $score_209='85';
        if($row['vidchu_17_214_A']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_A']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_B']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_B']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_C']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_C']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_D']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_D']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_E']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_E']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_F']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_F']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_G']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_G']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_H']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_H']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_I']=='加分'){
            ++$score_209;
        }
        else if($row['vidchu_17_214_I']=='扣分'){
            --$score_209;
        }
        if($score_209>90){
            $score_209=90;
        }
        else if($score_209<80){
            $score_209=80;
        }
        $update_209="UPDATE $rweek_2 SET $date_ampm='$score_209' WHERE class2='二和'";
        $result_209=mysqli_query($db_link,$update_209) or die("#209in 查詢失敗，請洽詢相關人員");
        $score_210='85';
        if($row['vidchu_17_215_A']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_A']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_B']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_B']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_C']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_C']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_D']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_D']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_E']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_E']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_F']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_F']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_G']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_G']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_H']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_H']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_I']=='加分'){
            ++$score_210;
        }
        else if($row['vidchu_17_215_I']=='扣分'){
            --$score_210;
        }
        if($score_210>90){
            $score_210=90;
        }
        else if($score_210<80){
            $score_210=80;
        }
        $update_210="UPDATE $rweek_2 SET $date_ampm='$score_210' WHERE class2='二平'";
        $result_210=mysqli_query($db_link,$update_210) or die("#210in 查詢失敗，請洽詢相關人員");
    } //第17組早上結束!!!
    $sql_17_pm="SELECT * FROM vidchu_17_pm_score"; //第17組下午!!!
    $result_17_pm=mysqli_query($db_link,$sql_17_pm) or die("#17_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_17_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_217='85';
        if($row['vidchu_17_217_A']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_B']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_C']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_D']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_E']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_F']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_G']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_H']=='扣分'){
            --$score_217;
        }
        if($row['vidchu_17_217_I']=='扣分'){
            --$score_217;
        }
        if($score_217<80){
            $score_217=80;
        }
        $update_217="UPDATE $rweek_2 SET $date_ampm='$score_217' WHERE class2='二簡'";
        $result_217=mysqli_query($db_link,$update_217) or die("#217in 查詢失敗，請洽詢相關人員");
        $score_218='85';
        if($row['vidchu_17_218_A']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_B']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_C']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_D']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_E']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_F']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_G']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_H']=='扣分'){
            --$score_218;
        }
        if($row['vidchu_17_218_I']=='扣分'){
            --$score_218;
        }
        if($score_218<80){
            $score_218=80;
        }
        $update_218="UPDATE $rweek_2 SET $date_ampm='$score_218' WHERE class2='二捷'";
        $result_218=mysqli_query($db_link,$update_218) or die("#218in 查詢失敗，請洽詢相關人員");
        $score_219='85';
        if($row['vidchu_17_219_A']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_B']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_C']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_D']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_E']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_F']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_G']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_H']=='扣分'){
            --$score_219;
        }
        if($row['vidchu_17_219_I']=='扣分'){
            --$score_219;
        }
        if($score_219<80){
            $score_219=80;
        }
        $update_219="UPDATE $rweek_2 SET $date_ampm='$score_219' WHERE class2='二敏'";
        $result_219=mysqli_query($db_link,$update_219) or die("#219in 查詢失敗，請洽詢相關人員");
        $score_220='85';
        if($row['vidchu_17_220_A']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_B']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_C']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_D']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_E']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_F']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_G']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_H']=='扣分'){
            --$score_220;
        }
        if($row['vidchu_17_220_I']=='扣分'){
            --$score_220;
        }
        if($score_220<80){
            $score_220=80;
        }
        $update_220="UPDATE $rweek_2 SET $date_ampm='$score_220' WHERE class2='二慧'";
        $result_220=mysqli_query($db_link,$update_220) or die("#220in 查詢失敗，請洽詢相關人員");
        $score_221='85';
        if($row['vidchu_17_221_A']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_B']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_C']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_D']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_E']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_F']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_G']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_H']=='扣分'){
            --$score_221;
        }
        if($row['vidchu_17_221_I']=='扣分'){
            --$score_221;
        }
        if($score_221<80){
            $score_221=80;
        }
        $update_221="UPDATE $rweek_2 SET $date_ampm='$score_221' WHERE class2='二公'";
        $result_221=mysqli_query($db_link,$update_221) or die("#221in 查詢失敗，請洽詢相關人員");
        $score_211='85';
        if($row['vidchu_17_211_A']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_B']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_C']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_D']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_E']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_F']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_G']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_H']=='扣分'){
            --$score_211;
        }
        if($row['vidchu_17_211_I']=='扣分'){
            --$score_211;
        }
        if($score_211<80){
            $score_211=80;
        }
        $update_211="UPDATE $rweek_2 SET $date_ampm='$score_211' WHERE class2='二誠'";
        $result_211=mysqli_query($db_link,$update_211) or die("#211in 查詢失敗，請洽詢相關人員");
        $score_212='85';
        if($row['vidchu_17_212_A']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_B']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_C']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_D']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_E']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_F']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_G']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_H']=='扣分'){
            --$score_212;
        }
        if($row['vidchu_17_212_I']=='扣分'){
            --$score_212;
        }
        if($score_212<80){
            $score_212=80;
        }
        $update_212="UPDATE $rweek_2 SET $date_ampm='$score_212' WHERE class2='二信'";
        $result_212=mysqli_query($db_link,$update_212) or die("#212in 查詢失敗，請洽詢相關人員");
        $score_222='85';
        if($row['vidchu_17_213_A']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_B']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_C']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_D']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_E']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_F']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_G']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_H']=='扣分'){
            --$score_222;
        }
        if($row['vidchu_17_213_I']=='扣分'){
            --$score_222;
        }
        if($score_222<80){
            $score_222=80;
        }
        $update_222="UPDATE $rweek_2 SET $date_ampm='$score_222' WHERE class2='二廉'";
        $result_222=mysqli_query($db_link,$update_222) or die("#222in 查詢失敗，請洽詢相關人員");
        $score_209='85';
        if($row['vidchu_17_214_A']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_B']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_C']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_D']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_E']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_F']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_G']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_H']=='扣分'){
            --$score_209;
        }
        if($row['vidchu_17_214_I']=='扣分'){
            --$score_209;
        }
        if($score_209<80){
            $score_209=80;
        }
        $update_209="UPDATE $rweek_2 SET $date_ampm='$score_209' WHERE class2='二和'";
        $result_209=mysqli_query($db_link,$update_209) or die("#209in 查詢失敗，請洽詢相關人員");
        $score_210='85';
        if($row['vidchu_17_215_A']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_B']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_C']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_D']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_E']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_F']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_G']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_H']=='扣分'){
            --$score_210;
        }
        if($row['vidchu_17_215_I']=='扣分'){
            --$score_210;
        }
        if($score_210<80){
            $score_210=80;
        }
        $update_210="UPDATE $rweek_2 SET $date_ampm='$score_210' WHERE class2='二平'";
        $result_210=mysqli_query($db_link,$update_210) or die("#210in 查詢失敗，請洽詢相關人員");
    } //第17組下午結束!!!

    $sql_18_am="SELECT * FROM vidchu_18_am_score"; //第18組早上!!!
    $result_18_am=mysqli_query($db_link,$sql_18_am) or die("#18_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_18_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_202_out='80';
        if($row['vidchu_18_202_litter']=='加分'){
            ++$score_202_out;
        }
        else if($row['vidchu_18_202_litter']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_sill']=='加分'){
            ++$score_202_out;
        }
        else if($row['vidchu_18_202_sill']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_dust']=='加分'){
            ++$score_202_out;
        }
        else if($row['vidchu_18_202_dust']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_others']=='加分'){
            ++$score_202_out;
        }
        else if($row['vidchu_18_202_others']=='扣分'){
            --$score_202_out;
        }
        if($score_202_out>82){
            $score_202_out=82;
        }
        else if($score_202_out<78){
            $score_202_out=78;
        }
        $update_202_out="UPDATE $rweek_2 SET $date_ampmo='$score_202_out' WHERE class2='二義'";
        $result_202_out=mysqli_query($db_link,$update_202_out) or die("#202out 查詢失敗，請洽詢相關人員");
        $score_120_out='80';
        if($row['vidchu_18_120_litter']=='加分'){
            ++$score_120_out;
        }
        else if($row['vidchu_18_120_litter']=='扣分'){
            --$score_120_out;
        }
        if($row['vidchu_18_120_dust']=='加分'){
            ++$score_120_out;
        }
        else if($row['vidchu_18_120_dust']=='扣分'){
            --$score_120_out;
        }
        if($row['vidchu_18_120_others']=='加分'){
            ++$score_120_out;
        }
        else if($row['vidchu_18_120_others']=='扣分'){
            --$score_120_out;
        }
        if($score_120_out>82){
            $score_120_out=82;
        }
        else if($score_120_out<78){
            $score_120_out=78;
        }
        $update_120_out="UPDATE $rweek_1 SET $date_ampmo='$score_120_out' WHERE class2='一慧'";
        $result_120_out=mysqli_query($db_link,$update_120_out) or die("#120out 查詢失敗，請洽詢相關人員");
        $score_201='85';
        if($row['vidchu_18_201_A']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_A']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_B']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_B']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_C']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_C']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_D']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_D']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_E']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_E']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_F']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_F']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_G']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_G']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_H']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_H']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_I']=='加分'){
            ++$score_201;
        }
        else if($row['vidchu_18_201_I']=='扣分'){
            --$score_201;
        }
        if($score_201>90){
            $score_201=90;
        }
        else if($score_201<80){
            $score_201=80;
        }
        $update_201="UPDATE $rweek_2 SET $date_ampm='$score_201' WHERE class2='二仁'";
        $result_201=mysqli_query($db_link,$update_201) or die("#201in 查詢失敗，請洽詢相關人員");
        $score_202='85';
        if($row['vidchu_18_202_A']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_A']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_B']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_B']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_C']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_C']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_D']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_D']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_E']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_E']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_F']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_F']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_G']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_G']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_H']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_H']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_I']=='加分'){
            ++$score_202;
        }
        else if($row['vidchu_18_202_I']=='扣分'){
            --$score_202;
        }
        if($score_202>90){
            $score_202=90;
        }
        else if($score_202<80){
            $score_202=80;
        }
        $update_202="UPDATE $rweek_2 SET $date_ampm='$score_202' WHERE class2='二義'";
        $result_202=mysqli_query($db_link,$update_202) or die("#202in 查詢失敗，請洽詢相關人員");
        $score_203='85';
        if($row['vidchu_18_203_A']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_A']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_B']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_B']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_C']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_C']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_D']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_D']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_E']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_E']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_F']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_F']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_G']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_G']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_H']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_H']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_I']=='加分'){
            ++$score_203;
        }
        else if($row['vidchu_18_203_I']=='扣分'){
            --$score_203;
        }
        if($score_203>90){
            $score_203=90;
        }
        else if($score_203<80){
            $score_203=80;
        }
        $update_203="UPDATE $rweek_2 SET $date_ampm='$score_203' WHERE class2='二禮'";
        $result_203=mysqli_query($db_link,$update_203) or die("#203in 查詢失敗，請洽詢相關人員");
        $score_206='85';
        if($row['vidchu_18_206_A']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_A']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_B']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_B']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_C']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_C']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_D']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_D']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_E']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_E']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_F']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_F']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_G']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_G']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_H']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_H']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_I']=='加分'){
            ++$score_206;
        }
        else if($row['vidchu_18_206_I']=='扣分'){
            --$score_206;
        }
        if($score_206>90){
            $score_206=90;
        }
        else if($score_206<80){
            $score_206=80;
        }
        $update_206="UPDATE $rweek_2 SET $date_ampm='$score_206' WHERE class2='二孝'";
        $result_206=mysqli_query($db_link,$update_206) or die("#206in 查詢失敗，請洽詢相關人員");
        $score_207='85';
        if($row['vidchu_18_207_A']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_A']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_B']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_B']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_C']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_C']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_D']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_D']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_E']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_E']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_F']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_F']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_G']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_G']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_H']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_H']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_I']=='加分'){
            ++$score_207;
        }
        else if($row['vidchu_18_207_I']=='扣分'){
            --$score_207;
        }
        if($score_207>90){
            $score_207=90;
        }
        else if($score_207<80){
            $score_207=80;
        }
        $update_207="UPDATE $rweek_2 SET $date_ampm='$score_207' WHERE class2='二博'";
        $result_207=mysqli_query($db_link,$update_207) or die("#207in 查詢失敗，請洽詢相關人員");
        $score_208='85';
        if($row['vidchu_18_208_A']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_A']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_B']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_B']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_C']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_C']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_D']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_D']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_E']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_E']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_F']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_F']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_G']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_G']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_H']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_H']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_I']=='加分'){
            ++$score_208;
        }
        else if($row['vidchu_18_208_I']=='扣分'){
            --$score_208;
        }
        if($score_208>90){
            $score_208=90;
        }
        else if($score_208<80){
            $score_208=80;
        }
        $update_208="UPDATE $rweek_2 SET $date_ampm='$score_208' WHERE class2='二愛'";
        $result_208=mysqli_query($db_link,$update_208) or die("#208in 查詢失敗，請洽詢相關人員");
    } //第18組早上結束!!!
    $sql_18_pm="SELECT * FROM vidchu_18_pm_score"; //第18組下午!!!
    $result_18_pm=mysqli_query($db_link,$sql_18_pm) or die("#18_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_18_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_202_out='80';
        if($row['vidchu_18_202_litter']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_sill']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_dust']=='扣分'){
            --$score_202_out;
        }
        if($row['vidchu_18_202_others']=='扣分'){
            --$score_202_out;
        }
        if($score_202_out<78){
            $score_202_out=78;
        }
        $update_202_out="UPDATE $rweek_2 SET $date_ampmo='$score_202_out' WHERE class2='二義'";
        $result_202_out=mysqli_query($db_link,$update_202_out) or die("#202out 查詢失敗，請洽詢相關人員");
        $score_120_out='80';
        if($row['vidchu_18_120_litter']=='扣分'){
            --$score_120_out;
        }
        if($row['vidchu_18_120_dust']=='扣分'){
            --$score_120_out;
        }
        if($row['vidchu_18_120_others']=='扣分'){
            --$score_120_out;
        }
        if($score_120_out<78){
            $score_120_out=78;
        }
        $update_120_out="UPDATE $rweek_1 SET $date_ampmo='$score_120_out' WHERE class2='一慧'";
        $result_120_out=mysqli_query($db_link,$update_120_out) or die("#120out 查詢失敗，請洽詢相關人員");
        $score_201='85';
        if($row['vidchu_18_201_A']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_B']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_C']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_D']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_E']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_F']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_G']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_H']=='扣分'){
            --$score_201;
        }
        if($row['vidchu_18_201_I']=='扣分'){
            --$score_201;
        }
        if($score_201<80){
            $score_201=80;
        }
        $update_201="UPDATE $rweek_2 SET $date_ampm='$score_201' WHERE class2='二仁'";
        $result_201=mysqli_query($db_link,$update_201) or die("#201in 查詢失敗，請洽詢相關人員");
        $score_202='85';
        if($row['vidchu_18_202_A']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_B']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_C']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_D']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_E']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_F']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_G']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_H']=='扣分'){
            --$score_202;
        }
        if($row['vidchu_18_202_I']=='扣分'){
            --$score_202;
        }
        if($score_202<80){
            $score_202=80;
        }
        $update_202="UPDATE $rweek_2 SET $date_ampm='$score_202' WHERE class2='二義'";
        $result_202=mysqli_query($db_link,$update_202) or die("#202in 查詢失敗，請洽詢相關人員");
        $score_203='85';
        if($row['vidchu_18_203_A']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_B']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_C']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_D']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_E']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_F']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_G']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_H']=='扣分'){
            --$score_203;
        }
        if($row['vidchu_18_203_I']=='扣分'){
            --$score_203;
        }
        if($score_203<80){
            $score_203=80;
        }
        $update_203="UPDATE $rweek_2 SET $date_ampm='$score_203' WHERE class2='二禮'";
        $result_203=mysqli_query($db_link,$update_203) or die("#203in 查詢失敗，請洽詢相關人員");
        $score_206='85';
        if($row['vidchu_18_206_A']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_B']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_C']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_D']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_E']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_F']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_G']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_H']=='扣分'){
            --$score_206;
        }
        if($row['vidchu_18_206_I']=='扣分'){
            --$score_206;
        }
        if($score_206<80){
            $score_206=80;
        }
        $update_206="UPDATE $rweek_2 SET $date_ampm='$score_206' WHERE class2='二孝'";
        $result_206=mysqli_query($db_link,$update_206) or die("#206in 查詢失敗，請洽詢相關人員");
        $score_207='85';
        if($row['vidchu_18_207_A']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_B']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_C']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_D']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_E']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_F']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_G']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_H']=='扣分'){
            --$score_207;
        }
        if($row['vidchu_18_207_I']=='扣分'){
            --$score_207;
        }
        if($score_207<80){
            $score_207=80;
        }
        $update_207="UPDATE $rweek_2 SET $date_ampm='$score_207' WHERE class2='二博'";
        $result_207=mysqli_query($db_link,$update_207) or die("#207in 查詢失敗，請洽詢相關人員");
        $score_208='85';
        if($row['vidchu_18_208_A']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_B']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_C']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_D']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_E']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_F']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_G']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_H']=='扣分'){
            --$score_208;
        }
        if($row['vidchu_18_208_I']=='扣分'){
            --$score_208;
        }
        if($score_208<80){
            $score_208=80;
        }
        $update_208="UPDATE $rweek_2 SET $date_ampm='$score_208' WHERE class2='二愛'";
        $result_208=mysqli_query($db_link,$update_208) or die("#208in 查詢失敗，請洽詢相關人員");
    } //第18組下午結束!!!

    $sql_19_am="SELECT * FROM vidchu_19_am_score"; //第19組早上!!!
    $result_19_am=mysqli_query($db_link,$sql_19_am) or die("#19_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_19_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_201_out='80';
        if($row['vidchu_19_201_litter']=='加分'){
            ++$score_201_out;
        }
        else if($row['vidchu_19_201_litter']=='扣分'){
            --$score_201_out;
        }
        if($row['vidchu_19_201_dust']=='加分'){
            ++$score_201_out;
        }
        else if($row['vidchu_19_201_dust']=='扣分'){
            --$score_201_out;
        }
        if($row['vidchu_19_201_others']=='加分'){
            ++$score_201_out;
        }
        else if($row['vidchu_19_201_others']=='扣分'){
            --$score_201_out;
        }
        if($score_201_out>82){
            $score_201_out=82;
        }
        else if($score_201_out<78){
            $score_201_out=78;
        }
        $update_201_out="UPDATE $rweek_2 SET $date_ampmo='$score_201_out' WHERE class2='二仁'";
        $result_201_out=mysqli_query($db_link,$update_201_out) or die("#201out 查詢失敗，請洽詢相關人員");
        $score_204='85';
        if($row['vidchu_19_204_A']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_A']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_B']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_B']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_C']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_C']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_D']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_D']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_E']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_E']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_F']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_F']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_G']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_G']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_H']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_H']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_I']=='加分'){
            ++$score_204;
        }
        else if($row['vidchu_19_204_I']=='扣分'){
            --$score_204;
        }
        if($score_204>90){
            $score_204=90;
        }
        else if($score_204<80){
            $score_204=80;
        }
        $update_204="UPDATE $rweek_2 SET $date_ampm='$score_204' WHERE class2='二智'";
        $result_204=mysqli_query($db_link,$update_204) or die("#204in 查詢失敗，請洽詢相關人員");
        $score_205='85';
        if($row['vidchu_19_205_A']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_A']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_B']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_B']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_C']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_C']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_D']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_D']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_E']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_E']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_F']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_F']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_G']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_G']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_H']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_H']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_I']=='加分'){
            ++$score_205;
        }
        else if($row['vidchu_19_205_I']=='扣分'){
            --$score_205;
        }
        if($score_205>90){
            $score_205=90;
        }
        else if($score_205<80){
            $score_205=80;
        }
        $update_205="UPDATE $rweek_2 SET $date_ampm='$score_205' WHERE class2='二忠'";
        $result_205=mysqli_query($db_link,$update_205) or die("#205in 查詢失敗，請洽詢相關人員");
        $score_213='85';
        if($row['vidchu_19_213_A']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_A']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_B']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_B']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_C']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_C']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_D']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_D']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_E']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_E']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_F']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_F']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_G']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_G']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_H']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_H']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_I']=='加分'){
            ++$score_213;
        }
        else if($row['vidchu_19_213_I']=='扣分'){
            --$score_213;
        }
        if($score_213>90){
            $score_213=90;
        }
        else if($score_213<80){
            $score_213=80;
        }
        $update_213="UPDATE $rweek_2 SET $date_ampm='$score_213' WHERE class2='二敬'";
        $result_213=mysqli_query($db_link,$update_213) or die("#213in 查詢失敗，請洽詢相關人員");
        $score_214='85';
        if($row['vidchu_19_214_A']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_A']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_B']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_B']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_C']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_C']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_D']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_D']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_E']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_E']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_F']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_F']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_G']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_G']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_H']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_H']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_I']=='加分'){
            ++$score_214;
        }
        else if($row['vidchu_19_214_I']=='扣分'){
            --$score_214;
        }
        if($score_214>90){
            $score_214=90;
        }
        else if($score_214<80){
            $score_214=80;
        }
        $update_214="UPDATE $rweek_2 SET $date_ampm='$score_214' WHERE class2='二業'";
        $result_214=mysqli_query($db_link,$update_214) or die("#214in 查詢失敗，請洽詢相關人員");
        $score_215='85';
        if($row['vidchu_19_215_A']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_A']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_B']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_B']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_C']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_C']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_D']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_D']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_E']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_E']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_F']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_F']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_G']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_G']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_H']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_H']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_I']=='加分'){
            ++$score_215;
        }
        else if($row['vidchu_19_215_I']=='扣分'){
            --$score_215;
        }
        if($score_215>90){
            $score_215=90;
        }
        else if($score_215<80){
            $score_215=80;
        }
        $update_215="UPDATE $rweek_2 SET $date_ampm='$score_215' WHERE class2='二樂'";
        $result_215=mysqli_query($db_link,$update_215) or die("#215in 查詢失敗，請洽詢相關人員");
        $score_216='85';
        if($row['vidchu_19_216_A']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_A']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_B']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_B']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_C']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_C']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_D']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_D']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_E']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_E']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_F']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_F']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_G']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_G']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_H']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_H']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_I']=='加分'){
            ++$score_216;
        }
        else if($row['vidchu_19_216_I']=='扣分'){
            --$score_216;
        }
        if($score_216>90){
            $score_216=90;
        }
        else if($score_216<80){
            $score_216=80;
        }
        $update_216="UPDATE $rweek_2 SET $date_ampm='$score_216' WHERE class2='二群'";
        $result_216=mysqli_query($db_link,$update_216) or die("#216in 查詢失敗，請洽詢相關人員");
    } //第19組早上結束!!!
    $sql_19_pm="SELECT * FROM vidchu_19_pm_score"; //第19組下午!!!
    $result_19_pm=mysqli_query($db_link,$sql_19_pm) or die("#19_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_19_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_201_out='80';
        if($row['vidchu_19_201_litter']=='扣分'){
            --$score_201_out;
        }
        if($row['vidchu_19_201_dust']=='扣分'){
            --$score_201_out;
        }
        if($row['vidchu_19_201_others']=='扣分'){
            --$score_201_out;
        }
        if($score_201_out<78){
            $score_201_out=78;
        }
        $update_201_out="UPDATE $rweek_2 SET $date_ampmo='$score_201_out' WHERE class2='二仁'";
        $result_201_out=mysqli_query($db_link,$update_201_out) or die("#201out 查詢失敗，請洽詢相關人員");
        $score_204='85';
        if($row['vidchu_19_204_A']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_B']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_C']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_D']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_E']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_F']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_G']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_H']=='扣分'){
            --$score_204;
        }
        if($row['vidchu_19_204_I']=='扣分'){
            --$score_204;
        }
        if($score_204<80){
            $score_204=80;
        }
        $update_204="UPDATE $rweek_2 SET $date_ampm='$score_204' WHERE class2='二智'";
        $result_204=mysqli_query($db_link,$update_204) or die("#204in 查詢失敗，請洽詢相關人員");
        $score_205='85';
        if($row['vidchu_19_205_A']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_B']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_C']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_D']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_E']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_F']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_G']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_H']=='扣分'){
            --$score_205;
        }
        if($row['vidchu_19_205_I']=='扣分'){
            --$score_205;
        }
        if($score_205<80){
            $score_205=80;
        }
        $update_205="UPDATE $rweek_2 SET $date_ampm='$score_205' WHERE class2='二忠'";
        $result_205=mysqli_query($db_link,$update_205) or die("#205in 查詢失敗，請洽詢相關人員");
        $score_213='85';
        if($row['vidchu_19_213_A']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_B']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_C']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_D']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_E']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_F']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_G']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_H']=='扣分'){
            --$score_213;
        }
        if($row['vidchu_19_213_I']=='扣分'){
            --$score_213;
        }
        if($score_213<80){
            $score_213=80;
        }
        $update_213="UPDATE $rweek_2 SET $date_ampm='$score_213' WHERE class2='二敬'";
        $result_213=mysqli_query($db_link,$update_213) or die("#213in 查詢失敗，請洽詢相關人員");
        $score_214='85';
        if($row['vidchu_19_214_A']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_B']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_C']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_D']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_E']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_F']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_G']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_H']=='扣分'){
            --$score_214;
        }
        if($row['vidchu_19_214_I']=='扣分'){
            --$score_214;
        }
        if($score_214<80){
            $score_214=80;
        }
        $update_214="UPDATE $rweek_2 SET $date_ampm='$score_214' WHERE class2='二業'";
        $result_214=mysqli_query($db_link,$update_214) or die("#214in 查詢失敗，請洽詢相關人員");
        $score_215='85';
        if($row['vidchu_19_215_A']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_B']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_C']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_D']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_E']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_F']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_G']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_H']=='扣分'){
            --$score_215;
        }
        if($row['vidchu_19_215_I']=='扣分'){
            --$score_215;
        }
        if($score_215<80){
            $score_215=80;
        }
        $update_215="UPDATE $rweek_2 SET $date_ampm='$score_215' WHERE class2='二樂'";
        $result_215=mysqli_query($db_link,$update_215) or die("#215in 查詢失敗，請洽詢相關人員");
        $score_216='85';
        if($row['vidchu_19_216_A']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_B']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_C']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_D']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_E']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_F']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_G']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_H']=='扣分'){
            --$score_216;
        }
        if($row['vidchu_19_216_I']=='扣分'){
            --$score_216;
        }
        if($score_216<80){
            $score_216=80;
        }
        $update_216="UPDATE $rweek_2 SET $date_ampm='$score_216' WHERE class2='二群'";
        $result_216=mysqli_query($db_link,$update_216) or die("#216in 查詢失敗，請洽詢相關人員");
    } //第19組下午結束!!!

    $sql_20_am="SELECT * FROM vidchu_20_am_score"; //第20組早上!!!
    $result_20_am=mysqli_query($db_link,$sql_20_am) or die("#20_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_20_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_301='85';
        if($row['vidchu_20_301_A']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_A']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_B']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_B']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_C']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_C']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_D']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_D']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_E']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_E']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_F']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_F']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_G']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_G']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_H']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_H']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_I']=='加分'){
            ++$score_301;
        }
        else if($row['vidchu_20_301_I']=='扣分'){
            --$score_301;
        }
        if($score_301>90){
            $score_301=90;
        }
        else if($score_301<80){
            $score_301=80;
        }
        $update_301="UPDATE $rweek_3 SET $date_ampm='$score_301' WHERE class2='三仁'";
        $result_301=mysqli_query($db_link,$update_301) or die("#301in 查詢失敗，請洽詢相關人員");
        $score_302='85';
        if($row['vidchu_20_302_A']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_A']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_B']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_B']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_C']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_C']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_D']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_D']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_E']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_E']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_F']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_F']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_G']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_G']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_H']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_H']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_I']=='加分'){
            ++$score_302;
        }
        else if($row['vidchu_20_302_I']=='扣分'){
            --$score_302;
        }
        if($score_302>90){
            $score_302=90;
        }
        else if($score_302<80){
            $score_302=80;
        }
        $update_302="UPDATE $rweek_3 SET $date_ampm='$score_302' WHERE class2='三義'";
        $result_302=mysqli_query($db_link,$update_302) or die("#302in 查詢失敗，請洽詢相關人員");
        $score_303='85';
        if($row['vidchu_20_303_A']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_A']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_B']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_B']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_C']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_C']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_D']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_D']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_E']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_E']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_F']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_F']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_G']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_G']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_H']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_H']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_I']=='加分'){
            ++$score_303;
        }
        else if($row['vidchu_20_303_I']=='扣分'){
            --$score_303;
        }
        if($score_303>90){
            $score_303=90;
        }
        else if($score_303<80){
            $score_303=80;
        }
        $update_303="UPDATE $rweek_3 SET $date_ampm='$score_303' WHERE class2='三禮'";
        $result_303=mysqli_query($db_link,$update_303) or die("#303in 查詢失敗，請洽詢相關人員");
        $score_320='85';
        if($row['vidchu_20_320_A']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_A']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_B']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_B']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_C']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_C']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_D']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_D']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_E']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_E']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_F']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_F']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_G']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_G']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_H']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_H']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_I']=='加分'){
            ++$score_320;
        }
        else if($row['vidchu_20_320_I']=='扣分'){
            --$score_320;
        }
        if($score_320>90){
            $score_320=90;
        }
        else if($score_320<80){
            $score_320=80;
        }
        $update_320="UPDATE $rweek_3 SET $date_ampm='$score_320' WHERE class2='三慧'";
        $result_320=mysqli_query($db_link,$update_320) or die("#320in 查詢失敗，請洽詢相關人員");
        $score_321='85';
        if($row['vidchu_20_321_A']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_A']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_B']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_B']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_C']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_C']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_D']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_D']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_E']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_E']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_F']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_F']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_G']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_G']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_H']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_H']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_I']=='加分'){
            ++$score_321;
        }
        else if($row['vidchu_20_321_I']=='扣分'){
            --$score_321;
        }
        if($score_321>90){
            $score_321=90;
        }
        else if($score_321<80){
            $score_321=80;
        }
        $update_321="UPDATE $rweek_3 SET $date_ampm='$score_321' WHERE class2='三公'";
        $result_321=mysqli_query($db_link,$update_321) or die("#321in 查詢失敗，請洽詢相關人員");
        $score_322='85';
        if($row['vidchu_20_322_A']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_A']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_B']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_B']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_C']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_C']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_D']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_D']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_E']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_E']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_F']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_F']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_G']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_G']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_H']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_H']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_I']=='加分'){
            ++$score_322;
        }
        else if($row['vidchu_20_322_I']=='扣分'){
            --$score_322;
        }
        if($score_322>90){
            $score_322=90;
        }
        else if($score_322<80){
            $score_322=80;
        }
        $update_322="UPDATE $rweek_3 SET $date_ampm='$score_322' WHERE class2='三廉'";
        $result_322=mysqli_query($db_link,$update_322) or die("#322in 查詢失敗，請洽詢相關人員");
    } //第20組早上結束!!!
    $sql_20_pm="SELECT * FROM vidchu_20_pm_score"; //第20組下午!!!
    $result_20_pm=mysqli_query($db_link,$sql_20_pm) or die("#20_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_20_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_301='85';
        if($row['vidchu_20_301_A']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_B']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_C']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_D']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_E']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_F']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_G']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_H']=='扣分'){
            --$score_301;
        }
        if($row['vidchu_20_301_I']=='扣分'){
            --$score_301;
        }
        if($score_301<80){
            $score_301=80;
        }
        $update_301="UPDATE $rweek_3 SET $date_ampm='$score_301' WHERE class2='三仁'";
        $result_301=mysqli_query($db_link,$update_301) or die("#301in 查詢失敗，請洽詢相關人員");
        $score_302='85';
        if($row['vidchu_20_302_A']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_B']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_C']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_D']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_E']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_F']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_G']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_H']=='扣分'){
            --$score_302;
        }
        if($row['vidchu_20_302_I']=='扣分'){
            --$score_302;
        }
        if($score_302<80){
            $score_302=80;
        }
        $update_302="UPDATE $rweek_3 SET $date_ampm='$score_302' WHERE class2='三義'";
        $result_302=mysqli_query($db_link,$update_302) or die("#302in 查詢失敗，請洽詢相關人員");
        $score_303='85';
        if($row['vidchu_20_303_A']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_B']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_C']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_D']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_E']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_F']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_G']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_H']=='扣分'){
            --$score_303;
        }
        if($row['vidchu_20_303_I']=='扣分'){
            --$score_303;
        }
        if($score_303<80){
            $score_303=80;
        }
        $update_303="UPDATE $rweek_3 SET $date_ampm='$score_303' WHERE class2='三禮'";
        $result_303=mysqli_query($db_link,$update_303) or die("#303in 查詢失敗，請洽詢相關人員");
        $score_320='85';
        if($row['vidchu_20_320_A']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_B']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_C']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_D']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_E']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_F']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_G']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_H']=='扣分'){
            --$score_320;
        }
        if($row['vidchu_20_320_I']=='扣分'){
            --$score_320;
        }
        if($score_320<80){
            $score_320=80;
        }
        $update_320="UPDATE $rweek_3 SET $date_ampm='$score_320' WHERE class2='三慧'";
        $result_320=mysqli_query($db_link,$update_320) or die("#320in 查詢失敗，請洽詢相關人員");
        $score_321='85';
        if($row['vidchu_20_321_A']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_B']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_C']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_D']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_E']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_F']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_G']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_H']=='扣分'){
            --$score_321;
        }
        if($row['vidchu_20_321_I']=='扣分'){
            --$score_321;
        }
        if($score_321<80){
            $score_321=80;
        }
        $update_321="UPDATE $rweek_3 SET $date_ampm='$score_321' WHERE class2='三公'";
        $result_321=mysqli_query($db_link,$update_321) or die("#321in 查詢失敗，請洽詢相關人員");
        $score_322='85';
        if($row['vidchu_20_322_A']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_B']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_C']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_D']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_E']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_F']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_G']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_H']=='扣分'){
            --$score_322;
        }
        if($row['vidchu_20_322_I']=='扣分'){
            --$score_322;
        }
        if($score_322<80){
            $score_322=80;
        }
        $update_322="UPDATE $rweek_3 SET $date_ampm='$score_322' WHERE class2='三廉'";
        $result_322=mysqli_query($db_link,$update_322) or die("#322in 查詢失敗，請洽詢相關人員");
    } //第20組下午結束!!!

    $sql_21_am="SELECT * FROM vidchu_21_am_score"; //第21組早上!!!
    $result_21_am=mysqli_query($db_link,$sql_21_am) or die("#21_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_21_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_304='85';
        if($row['vidchu_21_304_A']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_A']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_B']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_B']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_C']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_C']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_D']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_D']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_E']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_E']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_F']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_F']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_G']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_G']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_H']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_H']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_I']=='加分'){
            ++$score_304;
        }
        else if($row['vidchu_21_304_I']=='扣分'){
            --$score_304;
        }
        if($score_304>90){
            $score_304=90;
        }
        else if($score_304<80){
            $score_304=80;
        }
        $update_304="UPDATE $rweek_3 SET $date_ampm='$score_304' WHERE class2='三智'";
        $result_304=mysqli_query($db_link,$update_304) or die("#304in 查詢失敗，請洽詢相關人員");
        $score_305='85';
        if($row['vidchu_21_305_A']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_A']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_B']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_B']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_C']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_C']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_D']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_D']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_E']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_E']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_F']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_F']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_G']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_G']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_H']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_H']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_I']=='加分'){
            ++$score_305;
        }
        else if($row['vidchu_21_305_I']=='扣分'){
            --$score_305;
        }
        if($score_305>90){
            $score_305=90;
        }
        else if($score_305<80){
            $score_305=80;
        }
        $update_305="UPDATE $rweek_3 SET $date_ampm='$score_305' WHERE class2='三忠'";
        $result_305=mysqli_query($db_link,$update_305) or die("#305in 查詢失敗，請洽詢相關人員");
        $score_306='85';
        if($row['vidchu_21_306_A']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_A']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_B']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_B']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_C']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_C']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_D']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_D']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_E']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_E']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_F']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_F']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_G']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_G']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_H']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_H']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_I']=='加分'){
            ++$score_306;
        }
        else if($row['vidchu_21_306_I']=='扣分'){
            --$score_306;
        }
        if($score_306>90){
            $score_306=90;
        }
        else if($score_306<80){
            $score_306=80;
        }
        $update_306="UPDATE $rweek_3 SET $date_ampm='$score_306' WHERE class2='三孝'";
        $result_306=mysqli_query($db_link,$update_306) or die("#306in 查詢失敗，請洽詢相關人員");
        $score_307='85';
        if($row['vidchu_21_307_A']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_A']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_B']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_B']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_C']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_C']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_D']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_D']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_E']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_E']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_F']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_F']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_G']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_G']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_H']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_H']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_I']=='加分'){
            ++$score_307;
        }
        else if($row['vidchu_21_307_I']=='扣分'){
            --$score_307;
        }
        if($score_307>90){
            $score_307=90;
        }
        else if($score_307<80){
            $score_307=80;
        }
        $update_307="UPDATE $rweek_3 SET $date_ampm='$score_307' WHERE class2='三博'";
        $result_307=mysqli_query($db_link,$update_307) or die("#307in 查詢失敗，請洽詢相關人員");
        $score_308='85';
        if($row['vidchu_21_308_A']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_A']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_B']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_B']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_C']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_C']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_D']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_D']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_E']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_E']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_F']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_F']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_G']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_G']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_H']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_H']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_I']=='加分'){
            ++$score_308;
        }
        else if($row['vidchu_21_308_I']=='扣分'){
            --$score_308;
        }
        if($score_308>90){
            $score_308=90;
        }
        else if($score_308<80){
            $score_308=80;
        }
        $update_308="UPDATE $rweek_3 SET $date_ampm='$score_308' WHERE class2='三愛'";
        $result_308=mysqli_query($db_link,$update_308) or die("#308in 查詢失敗，請洽詢相關人員");
        $score_309='85';
        if($row['vidchu_21_309_A']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_A']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_B']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_B']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_C']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_C']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_D']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_D']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_E']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_E']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_F']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_F']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_G']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_G']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_H']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_H']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_I']=='加分'){
            ++$score_309;
        }
        else if($row['vidchu_21_309_I']=='扣分'){
            --$score_309;
        }
        if($score_309>90){
            $score_309=90;
        }
        else if($score_309<80){
            $score_309=80;
        }
        $update_309="UPDATE $rweek_3 SET $date_ampm='$score_309' WHERE class2='三和'";
        $result_309=mysqli_query($db_link,$update_309) or die("#309in 查詢失敗，請洽詢相關人員");
        $score_310='85';
        if($row['vidchu_21_310_A']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_A']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_B']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_B']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_C']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_C']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_D']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_D']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_E']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_E']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_F']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_F']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_G']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_G']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_H']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_H']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_I']=='加分'){
            ++$score_310;
        }
        else if($row['vidchu_21_310_I']=='扣分'){
            --$score_310;
        }
        if($score_310>90){
            $score_310=90;
        }
        else if($score_310<80){
            $score_310=80;
        }
        $update_310="UPDATE $rweek_3 SET $date_ampm='$score_310' WHERE class2='三平'";
        $result_310=mysqli_query($db_link,$update_310) or die("#310in 查詢失敗，請洽詢相關人員");
        $score_311='85';
        if($row['vidchu_21_311_A']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_A']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_B']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_B']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_C']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_C']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_D']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_D']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_E']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_E']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_F']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_F']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_G']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_G']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_H']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_H']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_I']=='加分'){
            ++$score_311;
        }
        else if($row['vidchu_21_311_I']=='扣分'){
            --$score_311;
        }
        if($score_311>90){
            $score_311=90;
        }
        else if($score_311<80){
            $score_311=80;
        }
        $update_311="UPDATE $rweek_3 SET $date_ampm='$score_311' WHERE class2='三誠'";
        $result_311=mysqli_query($db_link,$update_311) or die("#311in 查詢失敗，請洽詢相關人員");
    } //第21組早上結束!!!
    $sql_21_pm="SELECT * FROM vidchu_21_pm_score"; //第21組下午!!!
    $result_21_pm=mysqli_query($db_link,$sql_21_pm) or die("#21_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_21_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_304='85';
        if($row['vidchu_21_304_A']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_B']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_C']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_D']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_E']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_F']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_G']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_H']=='扣分'){
            --$score_304;
        }
        if($row['vidchu_21_304_I']=='扣分'){
            --$score_304;
        }
        if($score_304<80){
            $score_304=80;
        }
        $update_304="UPDATE $rweek_3 SET $date_ampm='$score_304' WHERE class2='三智'";
        $result_304=mysqli_query($db_link,$update_304) or die("#304in 查詢失敗，請洽詢相關人員");
        $score_305='85';
        if($row['vidchu_21_305_A']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_B']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_C']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_D']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_E']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_F']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_G']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_H']=='扣分'){
            --$score_305;
        }
        if($row['vidchu_21_305_I']=='扣分'){
            --$score_305;
        }
        if($score_305<80){
            $score_305=80;
        }
        $update_305="UPDATE $rweek_3 SET $date_ampm='$score_305' WHERE class2='三忠'";
        $result_305=mysqli_query($db_link,$update_305) or die("#305in 查詢失敗，請洽詢相關人員");
        $score_306='85';
        if($row['vidchu_21_306_A']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_B']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_C']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_D']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_E']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_F']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_G']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_H']=='扣分'){
            --$score_306;
        }
        if($row['vidchu_21_306_I']=='扣分'){
            --$score_306;
        }
        if($score_306<80){
            $score_306=80;
        }
        $update_306="UPDATE $rweek_3 SET $date_ampm='$score_306' WHERE class2='三孝'";
        $result_306=mysqli_query($db_link,$update_306) or die("#306in 查詢失敗，請洽詢相關人員");
        $score_307='85';
        if($row['vidchu_21_307_A']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_B']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_C']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_D']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_E']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_F']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_G']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_H']=='扣分'){
            --$score_307;
        }
        if($row['vidchu_21_307_I']=='扣分'){
            --$score_307;
        }
        if($score_307<80){
            $score_307=80;
        }
        $update_307="UPDATE $rweek_3 SET $date_ampm='$score_307' WHERE class2='三博'";
        $result_307=mysqli_query($db_link,$update_307) or die("#307in 查詢失敗，請洽詢相關人員");
        $score_308='85';
        if($row['vidchu_21_308_A']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_B']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_C']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_D']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_E']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_F']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_G']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_H']=='扣分'){
            --$score_308;
        }
        if($row['vidchu_21_308_I']=='扣分'){
            --$score_308;
        }
        if($score_308<80){
            $score_308=80;
        }
        $update_308="UPDATE $rweek_3 SET $date_ampm='$score_308' WHERE class2='三愛'";
        $result_308=mysqli_query($db_link,$update_308) or die("#308in 查詢失敗，請洽詢相關人員");
        $score_309='85';
        if($row['vidchu_21_309_A']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_B']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_C']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_D']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_E']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_F']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_G']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_H']=='扣分'){
            --$score_309;
        }
        if($row['vidchu_21_309_I']=='扣分'){
            --$score_309;
        }
        if($score_309<80){
            $score_309=80;
        }
        $update_309="UPDATE $rweek_3 SET $date_ampm='$score_309' WHERE class2='三和'";
        $result_309=mysqli_query($db_link,$update_309) or die("#309in 查詢失敗，請洽詢相關人員");
        $score_310='85';
        if($row['vidchu_21_310_A']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_B']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_C']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_D']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_E']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_F']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_G']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_H']=='扣分'){
            --$score_310;
        }
        if($row['vidchu_21_310_I']=='扣分'){
            --$score_310;
        }
        if($score_310<80){
            $score_310=80;
        }
        $update_310="UPDATE $rweek_3 SET $date_ampm='$score_310' WHERE class2='三平'";
        $result_310=mysqli_query($db_link,$update_310) or die("#310in 查詢失敗，請洽詢相關人員");
        $score_311='85';
        if($row['vidchu_21_311_A']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_B']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_C']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_D']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_E']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_F']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_G']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_H']=='扣分'){
            --$score_311;
        }
        if($row['vidchu_21_311_I']=='扣分'){
            --$score_311;
        }
        if($score_311<80){
            $score_311=80;
        }
        $update_311="UPDATE $rweek_3 SET $date_ampm='$score_311' WHERE class2='三誠'";
        $result_311=mysqli_query($db_link,$update_311) or die("#311in 查詢失敗，請洽詢相關人員");
    } //第21組下午結束!!!

    $sql_22_am="SELECT * FROM vidchu_22_am_score"; //第22組早上!!!
    $result_22_am=mysqli_query($db_link,$sql_22_am) or die("#22_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_22_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_312='85';
        if($row['vidchu_22_312_A']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_A']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_B']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_B']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_C']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_C']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_D']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_D']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_E']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_E']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_F']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_F']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_G']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_G']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_H']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_H']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_I']=='加分'){
            ++$score_312;
        }
        else if($row['vidchu_22_312_I']=='扣分'){
            --$score_312;
        }
        if($score_312>90){
            $score_312=90;
        }
        else if($score_312<80){
            $score_312=80;
        }
        $update_312="UPDATE $rweek_3 SET $date_ampm='$score_312' WHERE class2='三信'";
        $result_312=mysqli_query($db_link,$update_312) or die("#312in 查詢失敗，請洽詢相關人員");
        $score_313='85';
        if($row['vidchu_22_313_A']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_A']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_B']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_B']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_C']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_C']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_D']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_D']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_E']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_E']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_F']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_F']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_G']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_G']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_H']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_H']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_I']=='加分'){
            ++$score_313;
        }
        else if($row['vidchu_22_313_I']=='扣分'){
            --$score_313;
        }
        if($score_313>90){
            $score_313=90;
        }
        else if($score_313<80){
            $score_313=80;
        }
        $update_313="UPDATE $rweek_3 SET $date_ampm='$score_313' WHERE class2='三敬'";
        $result_313=mysqli_query($db_link,$update_313) or die("#313in 查詢失敗，請洽詢相關人員");
        $score_314='85';
        if($row['vidchu_22_314_A']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_A']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_B']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_B']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_C']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_C']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_D']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_D']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_E']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_E']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_F']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_F']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_G']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_G']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_H']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_H']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_I']=='加分'){
            ++$score_314;
        }
        else if($row['vidchu_22_314_I']=='扣分'){
            --$score_314;
        }
        if($score_314>90){
            $score_314=90;
        }
        else if($score_314<80){
            $score_314=80;
        }
        $update_314="UPDATE $rweek_3 SET $date_ampm='$score_314' WHERE class2='三業'";
        $result_314=mysqli_query($db_link,$update_314) or die("#314in 查詢失敗，請洽詢相關人員");
        $score_315='85';
        if($row['vidchu_22_315_A']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_A']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_B']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_B']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_C']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_C']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_D']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_D']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_E']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_E']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_F']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_F']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_G']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_G']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_H']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_H']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_I']=='加分'){
            ++$score_315;
        }
        else if($row['vidchu_22_315_I']=='扣分'){
            --$score_315;
        }
        if($score_315>90){
            $score_315=90;
        }
        else if($score_315<80){
            $score_315=80;
        }
        $update_315="UPDATE $rweek_3 SET $date_ampm='$score_315' WHERE class2='三樂'";
        $result_315=mysqli_query($db_link,$update_315) or die("#315in 查詢失敗，請洽詢相關人員");
        $score_316='85';
        if($row['vidchu_22_316_A']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_A']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_B']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_B']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_C']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_C']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_D']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_D']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_E']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_E']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_F']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_F']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_G']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_G']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_H']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_H']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_I']=='加分'){
            ++$score_316;
        }
        else if($row['vidchu_22_316_I']=='扣分'){
            --$score_316;
        }
        if($score_316>90){
            $score_316=90;
        }
        else if($score_316<80){
            $score_316=80;
        }
        $update_316="UPDATE $rweek_3 SET $date_ampm='$score_316' WHERE class2='三群'";
        $result_316=mysqli_query($db_link,$update_316) or die("#316in 查詢失敗，請洽詢相關人員");
        $score_317='85';
        if($row['vidchu_22_317_A']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_A']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_B']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_B']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_C']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_C']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_D']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_D']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_E']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_E']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_F']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_F']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_G']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_G']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_H']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_H']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_I']=='加分'){
            ++$score_317;
        }
        else if($row['vidchu_22_317_I']=='扣分'){
            --$score_317;
        }
        if($score_317>90){
            $score_317=90;
        }
        else if($score_317<80){
            $score_317=80;
        }
        $update_317="UPDATE $rweek_3 SET $date_ampm='$score_317' WHERE class2='三簡'";
        $result_317=mysqli_query($db_link,$update_317) or die("#317in 查詢失敗，請洽詢相關人員");
        $score_318='85';
        if($row['vidchu_22_318_A']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_A']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_B']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_B']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_C']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_C']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_D']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_D']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_E']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_E']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_F']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_F']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_G']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_G']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_H']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_H']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_I']=='加分'){
            ++$score_318;
        }
        else if($row['vidchu_22_318_I']=='扣分'){
            --$score_318;
        }
        if($score_318>90){
            $score_318=90;
        }
        else if($score_318<80){
            $score_318=80;
        }
        $update_318="UPDATE $rweek_3 SET $date_ampm='$score_318' WHERE class2='三捷'";
        $result_318=mysqli_query($db_link,$update_318) or die("#318in 查詢失敗，請洽詢相關人員");
        $score_319='85';
        if($row['vidchu_22_319_A']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_A']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_B']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_B']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_C']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_C']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_D']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_D']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_E']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_E']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_F']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_F']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_G']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_G']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_H']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_H']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_I']=='加分'){
            ++$score_319;
        }
        else if($row['vidchu_22_319_I']=='扣分'){
            --$score_319;
        }
        if($score_319>90){
            $score_319=90;
        }
        else if($score_319<80){
            $score_319=80;
        }
        $update_319="UPDATE $rweek_3 SET $date_ampm='$score_319' WHERE class2='三敏'";
        $result_319=mysqli_query($db_link,$update_319) or die("#319in 查詢失敗，請洽詢相關人員");
    } //第22組早上結束!!!
    $sql_22_pm="SELECT * FROM vidchu_22_pm_score"; //第22組下午!!!
    $result_22_pm=mysqli_query($db_link,$sql_22_pm) or die("#22_pm 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_22_pm)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_pm($rowData[0]);
                $date_ampmo=date_pmo($rowData[0]);
            }
        }
        $score_312='85';
        if($row['vidchu_22_312_A']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_B']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_C']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_D']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_E']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_F']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_G']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_H']=='扣分'){
            --$score_312;
        }
        if($row['vidchu_22_312_I']=='扣分'){
            --$score_312;
        }
        if($score_312<80){
            $score_312=80;
        }
        $update_312="UPDATE $rweek_3 SET $date_ampm='$score_312' WHERE class2='三信'";
        $result_312=mysqli_query($db_link,$update_312) or die("#312in 查詢失敗，請洽詢相關人員");
        $score_313='85';
        if($row['vidchu_22_313_A']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_B']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_C']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_D']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_E']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_F']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_G']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_H']=='扣分'){
            --$score_313;
        }
        if($row['vidchu_22_313_I']=='扣分'){
            --$score_313;
        }
        if($score_313<80){
            $score_313=80;
        }
        $update_313="UPDATE $rweek_3 SET $date_ampm='$score_313' WHERE class2='三敬'";
        $result_313=mysqli_query($db_link,$update_313) or die("#313in 查詢失敗，請洽詢相關人員");
        $score_314='85';
        if($row['vidchu_22_314_A']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_B']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_C']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_D']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_E']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_F']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_G']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_H']=='扣分'){
            --$score_314;
        }
        if($row['vidchu_22_314_I']=='扣分'){
            --$score_314;
        }
        if($score_314<80){
            $score_314=80;
        }
        $update_314="UPDATE $rweek_3 SET $date_ampm='$score_314' WHERE class2='三業'";
        $result_314=mysqli_query($db_link,$update_314) or die("#314in 查詢失敗，請洽詢相關人員");
        $score_315='85';
        if($row['vidchu_22_315_A']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_B']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_C']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_D']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_E']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_F']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_G']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_H']=='扣分'){
            --$score_315;
        }
        if($row['vidchu_22_315_I']=='扣分'){
            --$score_315;
        }
        if($score_315<80){
            $score_315=80;
        }
        $update_315="UPDATE $rweek_3 SET $date_ampm='$score_315' WHERE class2='三樂'";
        $result_315=mysqli_query($db_link,$update_315) or die("#315in 查詢失敗，請洽詢相關人員");
        $score_316='85';
        if($row['vidchu_22_316_A']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_B']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_C']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_D']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_E']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_F']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_G']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_H']=='扣分'){
            --$score_316;
        }
        if($row['vidchu_22_316_I']=='扣分'){
            --$score_316;
        }
        if($score_316<80){
            $score_316=80;
        }
        $update_316="UPDATE $rweek_3 SET $date_ampm='$score_316' WHERE class2='三群'";
        $result_316=mysqli_query($db_link,$update_316) or die("#316in 查詢失敗，請洽詢相關人員");
        $score_317='85';
        if($row['vidchu_22_317_A']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_B']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_C']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_D']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_E']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_F']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_G']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_H']=='扣分'){
            --$score_317;
        }
        if($row['vidchu_22_317_I']=='扣分'){
            --$score_317;
        }
        if($score_317<80){
            $score_317=80;
        }
        $update_317="UPDATE $rweek_3 SET $date_ampm='$score_317' WHERE class2='三簡'";
        $result_317=mysqli_query($db_link,$update_317) or die("#317in 查詢失敗，請洽詢相關人員");
        $score_318='85';
        if($row['vidchu_22_318_A']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_B']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_C']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_D']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_E']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_F']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_G']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_H']=='扣分'){
            --$score_318;
        }
        if($row['vidchu_22_318_I']=='扣分'){
            --$score_318;
        }
        if($score_318<80){
            $score_318=80;
        }
        $update_318="UPDATE $rweek_3 SET $date_ampm='$score_318' WHERE class2='三捷'";
        $result_318=mysqli_query($db_link,$update_318) or die("#318in 查詢失敗，請洽詢相關人員");
        $score_319='85';
        if($row['vidchu_22_319_A']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_B']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_C']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_D']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_E']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_F']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_G']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_H']=='扣分'){
            --$score_319;
        }
        if($row['vidchu_22_319_I']=='扣分'){
            --$score_319;
        }
        if($score_319<80){
            $score_319=80;
        }
        $update_319="UPDATE $rweek_3 SET $date_ampm='$score_319' WHERE class2='三敏'";
        $result_319=mysqli_query($db_link,$update_319) or die("#319in 查詢失敗，請洽詢相關人員");
    } //第22組下午結束!!!

    $sql_23_am="SELECT * FROM vidchu_23_score"; //第23組早上!!!
    $result_23_am=mysqli_query($db_link,$sql_23_am) or die("#23_am 查詢失敗，請洽詢相關人員");
    while($row=mysqli_fetch_assoc($result_23_am)){ //匯入所有成績
        $date="SELECT DAYOFWEEK('$row[date]')"; //星期幾    
        $result_date=mysqli_query($db_link,$date);
        if (mysqli_num_rows($result_date)>0) {
            while($rowData=mysqli_fetch_array($result_date)){
                $date_ampm=date_am($rowData[0]);
                $date_ampmo=date_amo($rowData[0]);
            }
        }
        $score_102_out='80';
        if($row['vidchu_23_102_litter']=='加分'){
            ++$score_102_out;
        }
        else if($row['vidchu_23_102_litter']=='扣分'){
            --$score_102_out;
        }
        if($row['vidchu_23_102_leaves']=='加分'){
            ++$score_102_out;
        }
        else if($row['vidchu_23_102_leaves']=='扣分'){
            --$score_102_out;
        }
        if($score_102_out>82){
            $score_102_out=82;
        }
        else if($score_102_out<78){
            $score_102_out=78;
        }
        $update_102_out="UPDATE $rweek_1 SET $date_ampmo='$score_102_out' WHERE class2='一義'";
        $result_102_out=mysqli_query($db_link,$update_102_out) or die("#102_out 查詢失敗，請洽詢相關人員");
        $score_112_out='80';
        if($row['vidchu_23_112_litter']=='加分'){
            ++$score_112_out;
        }
        else if($row['vidchu_23_112_litter']=='扣分'){
            --$score_112_out;
        }
        if($row['vidchu_23_112_leaves']=='加分'){
            ++$score_112_out;
        }
        else if($row['vidchu_23_112_leaves']=='扣分'){
            --$score_112_out;
        }
        if($score_112_out>82){
            $score_112_out=82;
        }
        else if($score_112_out<78){
            $score_112_out=78;
        }
        $update_112_out="UPDATE $rweek_1 SET $date_ampmo='$score_112_out' WHERE class2='一信'";
        $result_112_out=mysqli_query($db_link,$update_112_out) or die("#112_out 查詢失敗，請洽詢相關人員");
    } //第23組早上結束!!!

    header('refresh:0;url=admin_score_1_1.php');
?>