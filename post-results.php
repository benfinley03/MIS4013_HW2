<?php
$pageTitle = "Post result";
include "view-header";
?>
<h1>Post result</h1>
<?php
if (isset($_POST['my-name'])) {
?>
  <p>The value sent is:</p>
<?php
  echo $_POST['my-name'];
} else {
?>
  <php>Nothing posted to the page.</php>
<?php
}
include "view-footer";
?>
