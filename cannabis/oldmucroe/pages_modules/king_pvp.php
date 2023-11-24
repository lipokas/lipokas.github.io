<?php
$Top_PvP = $core_db->Execute("select top 5 Name,Kills,AccountID,class from character where ctlcode<2 order by Kills desc");
$Count=0;
while (!$Top_PvP->EOF) {
$Count++;
$Top_PvP_Country = $core_db2->Execute("select Country from MEMB_INFO where memb___id=?",array($Top_PvP->fields[2]));
$User_Country = $Top_PvP_Country->fields[0];
include "template/extra_modules/king_PvP/flags.php";
$Top_PvP_Final0[$Count]=$Count;
$Top_PvP_Final1[$Count]=$User_Country;
$Top_PvP_Final2[$Count]=decode_class($Top_PvP->fields[3],'1');
$Top_PvP_Final3[$Count]="template/".$core['config']['template']."/images/class/".decode_class($Top_PvP->fields[3],'2');
$Top_PvP_Final4[$Count]=$Top_PvP->fields[0];
$Top_PvP_Final5[$Count]=$Top_PvP->fields[1];
$Top_PvP->MoveNext();
}
?>
<style type="text/css">
<!--
.Estilo1 {
	color: #999999;
	font-weight: bold;
}
.Estilo2 {color: #999999}
-->
</style>

<table width="600" height="225" border="0" align="center" cellpadding="0" cellspacing="0" class="Estilo1">
  <tr>
    <td width="196" height="30" align="left" style="background:url(template/extra_modules/king_PvP/images/left.png) left no-repeat; font-size:10px"><p>&nbsp;</p>
      <div style="font-family:verdana; text-transform:uppercase; font-weight:bolder; padding-left:60px">
        <div align="left" class="Estilo2"><strong>2nd Place</strong></div>
      </div>
      <div align="center"><img src="template/extra_modules/king_PvP/images/<?=$Top_PvP_Final0[2]?>.gif" width="11" height="11" /> 
        <?=$Top_PvP_Final4[2]." [".$Top_PvP_Final2[2]."] - ".$Top_PvP_Final5[2]." ".$Top_PvP_Final1[2]?>
    </div></td>
    <td width="178" height="227" rowspan="3" align="center" valign="top" background="template/extra_modules/king_PvP/images/kingOfPvp.png"><div align="center" style="padding-top:44px">
      <p>
        <?=$Top_PvP_Final1[1]?>
      </p>
      </div>
    <div align="center"><?=$Top_PvP_Final2[1]?></div>
      <p><img src="<?=$Top_PvP_Final3[1]?>" width="85" height="85" style="padding-top:0px"></p>
    <div align="center" style="padding-top:-11px; color:#000000; text-outline:!important"><b><?=$Top_PvP_Final4[1]?></b></div>
    <div align="center" style="padding-top:-3px; color:#000000"><b><?=$Top_PvP_Final5[1]?></b></div></td>
    <td width="226" height="30" align="right" style="background:url(template/extra_modules/king_PvP/images/right.png) right no-repeat; font-size:10px"><p>&nbsp;</p>
      <div style="font-family:verdana; text-transform:uppercase; font-weight:bold; padding-right:60px">
      <div align="right" class="Estilo2">3th Place</div>
    </div>
      <div align="center"><img src="template/extra_modules/king_PvP/images/<?=$Top_PvP_Final0[3]?>.gif" width="11" height="11" /> 
        <?=$Top_PvP_Final4[3]." [".$Top_PvP_Final2[3]."] - ".$Top_PvP_Final5[3]." ".$Top_PvP_Final1[3]?>
    &nbsp;</div></td>
  </tr>
  <tr>
    <td width="196" style="background:url(template/extra_modules/king_PvP/images/shieldb.png) no-repeat left">&nbsp;</td>
    <td width="226" height="167" style="background:url(template/extra_modules/king_PvP/images/shields.png) no-repeat right">&nbsp;</td>
  </tr>
  <tr>
    <td width="196" height="30" align="left" style="background:url(template/extra_modules/king_PvP/images/left.png) left no-repeat; font-size:10px"><div style="font-family:verdana; text-transform:uppercase; font-weight:bolder; padding-left:60px">
        <div align="left" class="Estilo1">4TH Place</div>
    </div>
      <div align="center"><img src="template/extra_modules/king_PvP/images/<?=$Top_PvP_Final0[4]?>.gif" width="11" height="11" /> 
        <?=$Top_PvP_Final4[4]." [".$Top_PvP_Final2[4]."] - ".$Top_PvP_Final5[4]." ".$Top_PvP_Final1[4]?>
    </div></td>
    <td width="226" height="30" align="right" style="background:url(template/extra_modules/king_PvP/images/right.png) right no-repeat; font-size:10px"><div style="font-family:verdana; text-transform:uppercase; font-weight:bold; padding-right:60px">
      <div align="right" class="Estilo2">5th Place</div>
    </div>
      <div align="center"><img src="template/extra_modules/king_PvP/images/<?=$Top_PvP_Final0[5]?>.gif" width="11" height="11" /> 
        <?=$Top_PvP_Final4[5]." [".$Top_PvP_Final2[5]."] - ".$Top_PvP_Final5[5]." ".$Top_PvP_Final1[5]?>
    &nbsp;</div></td>
  </tr>
</table>
