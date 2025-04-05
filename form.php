<?php
error_reporting(E_ERROR | E_PARSE);
require_once("formhandler.php");
$errors = formEditor();
$description = descriptionHandler();
?>

<section>
    <div class="my-4">
      <div class="py-4">
        <h2 class="text-center">Contact Me</h2>
      </div>

      <div class="w-50 m-auto">
        <?php foreach ($errors as $error): ?>
          <div class='error'><?= $error ?></div>
        <?php endforeach; ?>
        <?php if (empty($errors) && !empty($_POST['submit'])): ?>
          <div class='error'>Application sent successfully!</div>
        <?php endif; ?>
        <form action="" method="post">

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required id="name" placeholder="John Doe" value="<?= htmlspecialchars($_POST["name"]) ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder='example@gmail.com' required id="email" value="<?= htmlspecialchars($_POST["email"]) ?>">
          </div>

          <div class="form-group">
            <label for="number">Number</label>
            <input type="text" name="number" class="form-control" required id="number" placeholder="1 800 937 8997" value="<?= htmlspecialchars($_POST["number"]) ?>">
          </div>

          <div class="form-group">
            <label for="description">Your offer</label>
            <textarea type="text" name="description" class="form-control" id="description"><?= htmlspecialchars($description) ?></textarea>
          </div>
          <div class="col-12 text-center filters-btns">
            <input type="submit" name="submit" value="Send" class="btn btn-primary">
            <input type="submit" name="clearFilter" value="Clear" class="btn btn-danger">
            <?php echo $_POST['submit']; ?>
          </div>
        </form>

      </div>
    </div>
  </section>