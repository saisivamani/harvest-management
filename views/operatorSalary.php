<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Manage Operator Salaries</h1>
    <button class="btn" onclick="window.location.href='addOperator.php'">Add New Operator</button>
    
    <table class="table">
        <thead>
            <tr>
                <th>Operator Name</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example operator salary list -->
            <?php
                // Example data for illustration
                $operators = [
                    ['name' => 'John Doe', 'salary' => 3000],
                    ['name' => 'Jane Smith', 'salary' => 3500],
                ];

                foreach ($operators as $operator) {
                    echo "<tr>
                            <td>{$operator['name']}</td>
                            <td>{$operator['salary']}</td>
                            <td><a href='editOperator.php?name={$operator['name']}' class='btn'>Edit</a></td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
