<?

include_once("config.inc.php");

?>
<html>
<title>Ubuntu Repository</title>
<body>
<img src="<?=$logo;?>">
<p>This is a simple ubuntu repository for ubuntu package, please update your source.list to use it.</p>
<em><p>sudo gedit /etc/apt/sources.list.d/ubuntuclub.list<br>
deb <?=$apturl; ?> <?=$dist;?> <?=$repo; ?></p></em>
<p>Thank you</p>
* You can view package list at <a href="<?=$apturl; ?>/packagelist.txt">packagelist.txt</a>.
<br><br>
<table bgcolor="#BBBBBB" cellpadding="3" cellspacing="1" width="600">
<tr bgcolor="#DDDDDD">
  <th>Package</th>
  <th>Version</th>
  <th>Install</th>
</tr>
<?php

//load packagelist.txt

$farr=file("packagelist.txt");

//var_dump($farr);

foreach ($farr as $item) {
  $xitem=split("_",$item);
?>
<tr bgcolor="#FFFFFF">
  <td><?=$xitem[0]; ?></td>
  <td><?=$xitem[1]; ?></td>
  <td align="center"><a href="apt:<?=$xitem[0];?>"><input type="button" value="Install" ></a></td>
</tr>
<?
}

?>
</table>
<br/>
<p>This software released under GNU/General Public License Version 2 or later.
</body>
</html>
