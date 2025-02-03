<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Generate Bill</h1>
    
    <form action="processBill.php" method="POST">
        <label for="operator">Operator:</label>
        <input type="text" id="operator" name="operator" required>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        
        <button type="submit" class="btn">Generate Bill</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
