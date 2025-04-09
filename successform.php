<div class='error'>Application sent successfully!</div>
<form action="" method="GET">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required id="name" placeholder="John Doe" disabled value="<?= htmlspecialchars($_SESSION['form_submit']['name']) ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder='example@gmail.com' required id="email" disabled value="<?= htmlspecialchars($_SESSION['form_submit']['email']) ?>">
    </div>

    <div class="form-group">
        <label for="number">Number</label>
        <input type="tel" name="number" class="form-control" required id="number" placeholder="1 800 937 8997" disabled value="<?= htmlspecialchars($_SESSION['form_submit']["number"]) ?>">
    </div>

    <div class="form-group">
        <label for="description">Your offer</label>
        <textarea type="text" name="description" class="form-control" disabled id="description"><?= htmlspecialchars($description) ?></textarea>
    </div>
    <div class="col-12 text-center mt-4">
        <p><a class="reset-btn" href="index.php">Submit again</a></p>
    </div>
</form>