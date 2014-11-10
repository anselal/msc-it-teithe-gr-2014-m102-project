<div class="jumbotron">
    <div class="container">
        <h1>TAMALITA</h1>
    </div>
</div>

<?php
if(isset($posts)) {
    foreach($posts as $post) : ?>

        <h1><?=$post->title;?></h1>
        <h3><?=$post->post;?></h3>

    <?php endforeach; } ?>