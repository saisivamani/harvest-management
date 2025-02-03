<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Generate Reports</h1>
    
    <!-- Example of report filter -->
    <form action="generateReport.php" method="POST">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date">
        
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date">
        
        <button type="submit" class="btn">Generate Report</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
