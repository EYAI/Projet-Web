<?php if(empty($_POST['mot'])): ?>
  <form action="" method="post">
    <label for="mot">Valeur à crypter: <input type="text" name="mot"></label>
    <input type="submit" value="OK">
  </form>
<?php else: ?>
  <p class="center">Le md5 de <?php echo $_POST['mot']; ?> est : <b><?php echo md5($_POST['mot']); ?></b></p>
<?php endif; ?>
