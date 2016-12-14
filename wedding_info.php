
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
if (!isset($_SESSION["userid"])) {
	header("Location: " . getFullPath("login.php"));
	exit;
}
else if ($_SESSION["admin"] != 1) {
	echo "You don't have admin privileges.";
	exit;
}

if (!empty($_GET["message"])) {
    $message = $_GET["message"];
}

$smarty->assign('partyName', getPartyName($smarty->dbh(), $smarty->opt()));

$action = $_POST["action"];
$party_name = $_POST["party_name"];
$party_date = $_POST["party_date"];
$party_location = $_POST["party_location"];

$stmt = $smarty->dbh()->prepare("SELECT party_name, party_date, party_location " .
			"FROM {$opt["table_prefix"]}wedding_info ");
$stmt->execute();
$wedding_info = array();
while ($row = $stmt->fetch()) {
	$wedding_info[] = $row;
}

if ($action == "update") {
	if (!$haserror) {
		$stmt = $smarty->dbh()->prepare("UPDATE {$opt["table_prefix"]}wedding_info " .
					"SET party_name = ?, party_date = ?, party_location = ? ");
		$stmt->bindParam(1, $party_name, PDO::PARAM_STR);
		$stmt->bindParam(2, $party_date, PDO::PARAM_STR);
		$stmt->bindParam(3, $party_location, PDO::PARAM_STR);
		$stmt->execute();

        header("Location: " . getFullPath("wedding_info.php?message=Wedding+updated."));
        exit;
	}
}

$smarty->assign('action', $action);

$smarty->assign('party_name', $wedding_info[0][party_name]);
if (isset($party_name_error)) {
	$smarty->assign('party_name_error', $party_name_error);
}


$smarty->assign('party_date', $wedding_info[0][party_date]);
if (isset($party_date_error)) {
	$smarty->assign('party_date_error', $party_date_error);
}


$smarty->assign('party_location', $wedding_info[0][party_location]);
if (isset($party_location_error)) {
	$smarty->assign('party_location_error', $party_location_error);
}

if (isset($message)) {
	$smarty->assign('message', $message);
}

$smarty->assign('haserror', $haserror);
$smarty->display('wedding_info.tpl');


?>
