<?php
$aliaie = array('organisemybiz.com', 'govnews.info', 'globetravelsearch.com', 'vapedirectory.co', 'orgmy.biz');

echo '<div class="container black no-padding">
<div class="row">';

foreach ($aliaie as $alias) {
    echo '<div>
   <div class="container">
      <div class="col"><iframe src="https://' . $alias . '"width="800" height="600" frameborder="0"></iframe>
        </div>
        </div>';
}
echo '</div></div>';
