<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Manage Bills</h1>
    <button class="btn" onclick="window.location.href='generateBill.php'">Generate New Bill</button>
    
    <table class="table">
        <thead>
            <tr>
                <th>Bill ID</th>
                <th>Operator</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through bills from the database -->
            <?php
                // Example bill array for illustration
                $bills = [
                    ['id' => 1, 'operator' => 'John Doe', 'amount' => 1000, 'date' => '2025-02-03'],
                    ['id' => 2, 'operator' => 'Jane Smith', 'amount' => 1500, 'date' => '2025-02-02'],
                ];

                foreach ($bills as $bill) {
                    echo "<tr>
                            <td>{$bill['id']}</td>
                            <td>{$bill['operator']}</td>
                            <td>{$bill['amount']}</td>
                            <td>{$bill['date']}</td>
                            <td><a href='viewBill.php?id={$bill['id']}' class='btn'>View</a></td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
