<?php if($this->session->userdata('userID')) { ?>
    <p>
        <a href="users/logout">Logout</a>, <?=$this->session->userdata('username'); ?>
        <?php if($this->session->userdata('userType')=='admin') { ?>
            <a href="users/admin">Visit admin panel</a>
        <? } ?>
    </p>
<? } else { ?>
    <p><a href="users/login">Login</a></p>
<? } ?>
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