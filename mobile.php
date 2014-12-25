<?
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) 
{
        header('Location: index2.html');
}
 
// Any tablet device.
if( $detect->isTablet() )
{
    header('Location: index2.html');
 
}
 
?>