<?
$short_desc = "Slides";
$long_desc = "Slides that were presented in the meeting";
$file = "slides.php";
include_once("subpage.php");

$slide_dir = "slides";

$slides[] = "MPI_Count";
$slides[] = "Fortran-tickets";
$slides[] = "2010-10-mpiforum-piggyback";

show_slides($slide_dir, $slides);

include_once("$topdir/include/footer.php");
