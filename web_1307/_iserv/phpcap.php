<?php 
// relative path where "_iserv" directory is located (don't end with any "/")
$relativePath=".";
// use hardcode dir names or scan & retreive directory names
$useHardcodeDirNames = FALSE;
// set the list of our "iserv" directory content  to $aDirs
if( $useHardcodeDirNames ) {
  $aDirs = array("blog", "common", "form2mail", "mailinglist");
} else {
  $aDirs = array();
  $handler = opendir($relativePath);
  while( $file = readdir($handler) ) {
    if( $file != '.' && $file != '..' && is_dir($file) )
      $aDirs[] = $file;
}
closedir($handler);
}
// display directory permissions
foreach ($aDirs as $i => $value) {
  echo $aDirs[$i]. " = ".substr(sprintf('%o', fileperms($relativePath."/".$aDirs[$i])), -4)."<br>";
}
?>