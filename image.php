<?PHP
require_once 'class.textPainter.php';
if(!isset($_GET['naam'])) {
    $naam = 'demo';
} else {
    $naam = $_GET['naam'];
}
$img = new textPainter('./achtergrond.jpg', $naam, './Franklin.ttf', 14);
$img->setPosition("center", 130);
$img->setTextColor(0,0,0);
$img->show();
?>
