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

if (!empty($_GET["message"])) {
    $message = $_GET["message"];
}

$smarty->assign('partyName', getPartyName($smarty->dbh(), $smarty->opt()));


$userid = $_SESSION["userid"];

$stmt = $smarty->dbh()->prepare("SELECT RSVP FROM {$opt["table_prefix"]}users WHERE userid = ?");
$stmt->bindValue(1, (int) $_SESSION["userid"], PDO::PARAM_INT);
$stmt->execute();
if ($row = $stmt->fetch()) {
	$RSVP = $row["RSVP"];
}

$count = 0;
$stmt = $smarty->dbh()->prepare("SELECT COUNT(*) FROM {$opt["table_prefix"]}rsvp_info WHERE userid = ?");
$stmt->bindValue(1, (int) $userid, PDO::PARAM_INT);
$stmt->execute();
if ($row = $stmt->fetch()) {
	$count = $row[0];
}

$RSVPinfo = array();
$stmt = $smarty->dbh()->prepare("SELECT * FROM {$opt["table_prefix"]}rsvp_info");
$stmt->execute();
while ($row = $stmt->fetch()) {
	$RSVPinfo[] = $row;
}

$RSVP = $RSVP-$count;

$action = "";
if (!empty($_REQUEST["action"])) {
	$action = $_REQUEST["action"];
	
    if ($action == "insert") {
    	if (!$haserror) {
    	    
    	    if($RSVP > 0){
        	    $firstname = $_POST["firstname"];
        	    $lastname = $_POST["lastname"];
        		$stmt = $smarty->dbh()->prepare("INSERT INTO {$opt["table_prefix"]}rsvp_info(userid,firstname,lastname) VALUES(?, ?, ?)");
        		$stmt->bindParam(1, $userid, PDO::PARAM_STR);
        		$stmt->bindParam(2, $firstname, PDO::PARAM_STR);
        		$stmt->bindParam(3, $lastname, PDO::PARAM_STR);
        		$stmt->execute();
        		
                header("Location: " . getFullPath("rsvp.php?message=RSVP+added."));
                exit;
            }else{
                header("Location: " . getFullPath("rsvp.php?message=Could not add reservation."));
            }
            
    	}
    }else if($action == "delete"){
    	if (!$haserror) {
    	       $stmt = $smarty->dbh()->prepare("SELECT userid FROM {$opt["table_prefix"]}rsvp_info WHERE rsvpid = ?");
    	       $stmt->bindValue(1, (int) $_GET["rsvpid"], PDO::PARAM_INT);
               $stmt->execute();
               if($row = $stmt->fetch()){
                   if($row[0] == $userid || $_SESSION["admin"] ){
                        $stmt = $smarty->dbh()->prepare("DELETE FROM {$opt["table_prefix"]}rsvp_info WHERE rsvpid = ?");
                        $stmt->bindValue(1, (int) $_GET["rsvpid"], PDO::PARAM_INT);
                        $stmt->execute();
                        header("Location: " . getFullPath("rsvp.php?message=RSVP+deleted."));
                        exit;
                   }else{
                    header("Location: " . getFullPath("rsvp.php?message=Unauthorized delete attempted"));
                   }
               }
               
    	}
    }
    
}

$smarty->assign('action', $action);
$smarty->assign('RSVP', $RSVP);
$smarty->assign('RSVPinfo', $RSVPinfo);
$smarty->assign('userid', $userid);

if (isset($message)) {
	$smarty->assign('message', $message);
}
$smarty->assign('haserror', $haserror);
$smarty->display('rsvp.tpl');

?>