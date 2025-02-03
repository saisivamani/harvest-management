<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Select Language</h1>
    <form action="setLanguage.php" method="POST">
        <button type="submit" name="language" value="english" class="btn">English</button>
        <button type="submit" name="language" value="telugu" class="btn">Telugu</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
