<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
$payload = json_decode($HTTP_RAW_POST_DATA, true);
if ($payload) {
  if($payload['ref'] == "refs/heads/master") {
   $output = shell_exec( 'cd cd /var/www/claritycreative.com/ && git reset --hard origin/master && git pull' );
    echo "<pre>$output</pre>";
  }
  else if($payload['ref'] == "refs/heads/staging") {
    $output = shell_exec( 'cd /var/www/staging.claritycreative.com/ && git reset --hard origin/staging && git pull' );
    echo "<pre>$output</pre>";
  }
  else {
    echo "<pre>Sorry this branch ".$payload['ref']." is not a valid push</pre>";
  }
}
else {
  header('This is not the page you are looking for', true, 404);
  exit();
}
?>
