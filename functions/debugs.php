<?php

function get_caller(){
  if(DEBUG) {
    $backtrack = debug_backtrace();
    if(isset($backtrack[0]['file'])) : ?>
      <h5>
        <?php echo basename($backtrack[0]['file'])?>
      </h5>
    <?php endif;
  }
}