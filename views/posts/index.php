<p>Posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?><br/>
    <?php echo $post->content; ?><br/>
    <?php echo $post->date; ?><br/>
  </p>
<?php } ?>