<?php
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

require_once(dirname(__FILE__) . "/includes/funcLib.php");
require_once(dirname(__FILE__) . "/includes/MySmarty.class.php");
$smarty = new MySmarty();
$opt = $smarty->opt();

session_start();

$smarty->assign('partyName', getPartyName($smarty->dbh(), $smarty->opt()));

if (!isset($_SESSION["userid"])) {
	header("Location: " . getFullPath("login.php"));
	exit;
}
else {
	$userid = $_SESSION["userid"];
}

if (!empty($_GET["message"])) {
	$message = $_GET["message"];
}

/* if we've got `page' on the query string, set the session page indicator. */
if (isset($_GET["offset"])) {
	$_SESSION["offset"] = $_GET["offset"];
	$offset = $_GET["offset"];
}
else if (isset($_SESSION["offset"])) {
	$offset = $_SESSION["offset"];
}
else {
	$offset = 0;
}

$action = "";
if (!empty($_GET["action"])) {
	$action = $_GET["action"];
	$itemid = (int) $_GET["itemid"];
	if ($action == "reserve") {

	       $stmt = $smarty->dbh()->prepare("SELECT status, status_id FROM {$opt["table_prefix"]}items WHERE itemid = ?");
	       $stmt->bindValue(1, $itemid, PDO::PARAM_INT);
	       $stmt->execute();
	       if ($row = $stmt->fetch()) {
 
                  if( ($row["status"] != 0) && ($row["status_id"] != $userid) ){
                         die("Sorry! Someone else has reserved or purchased this item already");
	          }else{
                     $status = "1";
		     $stmt = $smarty->dbh()->prepare("UPDATE {$opt["table_prefix"]}items " .
					"SET status = ?, status_id = ? " .
					"WHERE itemid = ?");
		     $stmt->bindValue(1, $status, PDO::PARAM_INT);
		     $stmt->bindValue(2, $userid, PDO::PARAM_INT);
		     $stmt->bindParam(3, $itemid, PDO::PARAM_STR);
		     $stmt->execute();
                  }

               }else{
                    die("Fetch error");
               }


	}
	else if ($action == "purchase") {

	       $stmt = $smarty->dbh()->prepare("SELECT status, status_id FROM {$opt["table_prefix"]}items WHERE itemid = ?");
	       $stmt->bindValue(1, $itemid, PDO::PARAM_INT);
	       $stmt->execute();
	       if ($row = $stmt->fetch()) {
 
                  if( ($row["status"] != 0) && ($row["status_id"] != $userid) ){
                         die("Sorry! Someone else has reserved or purchased this item already");
	          }else{
                     $status = "0";
		     $stmt = $smarty->dbh()->prepare("UPDATE {$opt["table_prefix"]}items " .
					"SET status = ?, status_id = ? " .
					"WHERE itemid = ?");
		     $stmt->bindValue(1, $status, PDO::PARAM_INT);
		     $stmt->bindValue(2, $userid, PDO::PARAM_INT);
		     $stmt->bindParam(3, $itemid, PDO::PARAM_STR);
		     $stmt->execute();
                  }

               }else{
                    die("Fetch error");
               }
	}
	else if ($action == "release") {

	       $stmt = $smarty->dbh()->prepare("SELECT status, status_id FROM {$opt["table_prefix"]}items WHERE itemid = ?");
	       $stmt->bindValue(1, $itemid, PDO::PARAM_INT);
	       $stmt->execute();
	       if ($row = $stmt->fetch()) {
 
                  if( ($row["status"] != 0) && ($row["status_id"] != $userid) ){
                         die("Sorry! Someone else has reserved or purchased this item already");
	          }else{
                     $status = "0";
                     $status_id = "0";
		     $stmt = $smarty->dbh()->prepare("UPDATE {$opt["table_prefix"]}items " .
					"SET status = ?, status_id = ? " .
					"WHERE itemid = ?");
		     $stmt->bindValue(1, $status, PDO::PARAM_INT);
		     $stmt->bindValue(2, $userid, PDO::PARAM_INT);
		     $stmt->bindParam(3, $itemid, PDO::PARAM_STR);
		     $stmt->execute();
                  }

               }else{
                    die("Fetch error");
               }

	}
}




if (!empty($_GET["mysort"]))
	$_SESSION["mysort"] = $_GET["mysort"];
	

if (!isset($_SESSION["mysort"])) {
	$sortby = "rankorder DESC, i.description";
	$_SESSION["mysort"] = "ranking";
}
else {
	switch ($_SESSION["mysort"]) {
		case "ranking":
			$sortby = "rankorder DESC, i.description";
			break;
		case "description":
			$sortby = "i.description";
			break;
		case "price":
			$sortby = "price, rankorder DESC, i.description";
			break;
		case "category":
			$sortby = "c.category, rankorder DESC, i.description";
			break;
		default:
			$sortby = "rankorder DESC, i.description";
	}
}

$opt["items_per_page"] = 9999;

$stmt = $smarty->dbh()->prepare("SELECT * FROM {$opt["table_prefix"]}items i LEFT OUTER JOIN {$opt["table_prefix"]}categories c ON c.categoryid = i.category LEFT OUTER JOIN {$opt["table_prefix"]}ranks r ON r.ranking = i.ranking ORDER BY " . $sortby);
$stmt->bindParam(1, $userid, PDO::PARAM_INT);
$stmt->execute();
$items_count = 0;
$items = array();
for ($i = 0; $i < $offset; $i++, ++$items_count) {
	$row = $stmt->fetch();
}
$i = 0;
while ($i++ < $opt["items_per_page"] && $row = $stmt->fetch()) {
	$row['price'] = formatPrice($row['price'], $opt);
	$items[] = $row;
	++$items_count;
}
while ($stmt->fetch()) {
	++$items_count;
}





$smarty->assign('items', $items);
$smarty->assign('items_count', $items_count);
$smarty->assign('offset', $offset);
$smarty->assign('userid', $userid);



$smarty->display('registry.tpl');
?>
