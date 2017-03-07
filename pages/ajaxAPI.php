<?php
//Include database configuration file
include('mysql.php');
include('update.php');
include('contactreg.php');
include('logon.php');
include('residentupdate.php');
include('officeupdate.php');
include('updatesocial.php');
include('checkbox.php');
if (isset($_POST["action"])) {
				//G	et all state data
				$action = $_POST["action"];
				if ($action == "login") {
								header('Content-Type: application/json');
								$db = connect_db();
								login();
				}
} elseif (isset($_POST["basic"])) {
				//G	et all state data
				$basic = $_POST["basic"];
				if ($basic == "basicinfo") {
								header('Content-Type: application/json');
								$db = connect_db();
								basic();
				}
} elseif (isset($_POST["contactus"])) {
				//G	et all state data
				$action = $_POST["contactus"];
				if ($action == "contact") {
								header('Content-Type: application/json');
								$db = connect_db();
								contact();
				}
} elseif (isset($_POST["rdent"])) {
				//G	et all state data
				$action = $_POST["rdent"];
				if ($action == "resident") {
								header('Content-Type: application/json');
								$db = connect_db();
								resident();
				}
} elseif (isset($_POST["Office"])) {
				//G	et all state data
				$action = $_POST["Office"];
				if ($action == "office") {
								header('Content-Type: application/json');
								$db = connect_db();
								office();
				}
} elseif (isset($_POST["social"])) {
				//G	et all state data
				$action = $_POST["social"];
				if ($action == "Social") {
								header('Content-Type: application/json');
								$db = connect_db();
								social();
				}
} elseif (isset($_POST["member"])) {
				//Get all state data
				$action = $_POST["member"];
				if ($action == "Member") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
elseif (isset($_POST["volunteer"])) {
				//Get all state data
				$action = $_POST["volunteer"];
				if ($action == "Volunteer") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
elseif (isset($_POST["sponsor"])) {
				//Get all state data
				$action = $_POST["sponsor"];
				if ($action == "Sponsor") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
elseif (isset($_POST["mentor"])) {
				//Get all state data
				$action = $_POST["mentor"];
				if ($action == "Mentor") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
elseif (isset($_POST["partner"])) {
				//Get all state data
				$action = $_POST["partner"];
				if ($action == "Partner") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
elseif (isset($_POST["terms"])) {
				//Get all state data
				$action = $_POST["terms"];
				if ($action == "Terms") {
								header('Content-Type: application/json');
								$db = connect_db();
								membership();
				}
}
?>