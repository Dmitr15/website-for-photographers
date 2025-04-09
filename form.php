<?php
error_reporting(E_ERROR | E_PARSE);
require_once("formhandler.php");
$errors = formEditor();
$description = descriptionHandler();
?>

<section id="form">
    <div class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact Me</h2>
        </div>

        <div class="w-50 m-auto">
            <?php if (empty($errors) && !empty($_POST['submit'])): ?>
                <?php require_once("successform.php"); ?>
            <?php else: ?>
                <?php foreach ($errors as $error): ?>
                    <div class='error'><?= $error ?></div>
                <?php endforeach; ?>


                <form method="POST">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required id="name" placeholder="John Doe" value="<?= htmlspecialchars($_SESSION['form_submit']['name']) ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder='example@gmail.com' required id="email" value="<?= htmlspecialchars($_SESSION['form_submit']['email']) ?>">
                    </div>

                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="tel" name="number" class="form-control" required id="number" placeholder="1 800 937 8997" value="<?= htmlspecialchars($_SESSION['form_submit']["number"]) ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Your offer</label>
                        <textarea type="text" name="description" class="form-control" id="description"><?= htmlspecialchars($description) ?></textarea>
                    </div>
                    <div class="col-12 text-center filters-btns">
                        <input type="submit" name="submit" value="Send" class="btn btn-primary">
                        <input type="submit" name="clearFilter" value="Clear" class="btn btn-danger">
                    </div>
                </form>
            <?php endif; ?>

        </div>
    </div>
</section>