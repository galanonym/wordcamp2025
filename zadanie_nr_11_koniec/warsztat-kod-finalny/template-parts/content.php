<?php
$content = get_the_content();
if (!$content) {
	return;
}
?>

<style>
  .content h2, .content h3 {
    margin-top: 40px;
    margin-bottom: 10px;
  }

  .content p {
    margin-bottom: 20px;
  }

  .content ul {
    padding-left: 20px;
    margin-bottom: 20px;
  }

  .content li {
    margin-bottom: 10px;
  }

  .content hr {
    border: none;
    border-top: 2px solid #ccc;
    margin: 40px 0;
  }
</style>
<main class="content">
  <?php echo $content; ?>
</main>
