<?
if (!isset($topdir)) {
    $meeting_top = ".";
    $topdir = "../../..";
}
if (!isset($long_desc)) {
    $long_desc = $short_desc;
}
include_once("$meeting_top/top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2013/09/$file");

$head_title = "MPI Forum meeting September '13: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("September 11-13, 2013",
               "Madrid, Spain");
