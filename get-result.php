<?php
$pageTitle = "Get result";
include "view-header";
?>
<h1>Get result</h1>
<?php
if (isset($_GET['my-name'])) {
?>
  <p>The value sent is:</p>
<?php
  echo $_GET['my-name'];
} else {
?>
  <php>Nothing sent to the page.</php>
<?php
}
include "view-footer";
?>
