<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 14.03.2017
 * Time: 20:25
 */
//"F001":"-250.00","F002":"-250.00","F003":"-30.71","F004":"26.57","F005":"0.00","F006":"0","F007":"-87.50","F008":"0","F009":"-60.00","F010":"-60.00","F011":"0","F012":"-38.75","F013":"-100.00","F014":"0.00","F015":"0.00","timeout":"4989"
$resp = [];
//обьеденение массивов
for ($i = 0; $i < 9; $i++) {
    $resp['F00'.($i+1)] = random_int(-100, 100);
}
$resp['timeout'] = time() ;

$resp['F001'] *= 10;
if(isset($_GET['Rivg'])){
    echo json_encode($resp);
}

