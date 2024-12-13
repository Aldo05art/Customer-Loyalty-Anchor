<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="transaction.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Transaction Records</h1>
        </header>
        
        <main class="main-content">
            <table class="transaction-table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Customer Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TRX001</td>
                        <td contenteditable="false">John Doe</td>
                        <td contenteditable="false">2024-12-08</td>
                        <td contenteditable="false">$250.00</td>
                        <td contenteditable="false">Completed</td>
                        <td>
                            <button class="edit-btn" onclick="editRow(this)">Edit</button>
                            <button class="save-btn" onclick="saveRow(this)" style="display: none;">Save</button>
                            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>TRX002</td>
                        <td contenteditable="false">Jane Smith</td>
                        <td contenteditable="false">2024-12-07</td>
                        <td contenteditable="false">$120.00</td>
                        <td contenteditable="false">Pending</td>
                        <td>
                            <button class="edit-btn" onclick="editRow(this)">Edit</button>
                            <button class="save-btn" onclick="saveRow(this)" style="display: none;">Save</button>
                            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="action-buttons">
                <button class="add-btn" onclick="addTransaction()">Add New Transaction</button>
            </div>
        </main>
    </div>

    <script>
        // Enable editing for the selected row
        function editRow(button) {
            const row = button.closest('tr');
            const cells = row.querySelectorAll('td[contenteditable="false"]');
            
            cells.forEach(cell => {
                cell.contentEditable = "true";
                cell.style.backgroundColor = "#f0f8ff"; // Highlight editable fields
            });

            // Toggle visibility of Edit and Save buttons
            button.style.display = "none";
            row.querySelector('.save-btn').style.display = "inline-block";
        }

        // Save edited data for the row
        function saveRow(button) {
            const row = button.closest('tr');
            const cells = row.querySelectorAll('td[contenteditable="true"]');
            
            cells.forEach(cell => {
                cell.contentEditable = "false";
                cell.style.backgroundColor = ""; // Reset background
            });

            // Toggle visibility of Edit and Save buttons
            button.style.display = "none";
            row.querySelector('.edit-btn').style.display = "inline-block";
        }

        // Delete a row
        function deleteRow(button) {
            const row = button.closest('tr'); // Select the closest row for the button
            if (confirm("Are you sure you want to delete this transaction?")) {
                row.remove(); // Remove the row from the table
            }
        }

        // Add a new transaction row
        function addTransaction() {
            const table = document.querySelector('.transaction-table tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>TRX${Math.floor(1000 + Math.random() * 9000)}</td>
                <td contenteditable="true">New Customer</td>
                <td contenteditable="true">${new Date().toISOString().slice(0, 10)}</td>
                <td contenteditable="true">$0.00</td>
                <td contenteditable="true">Pending</td>
                <td>
                    <button class="edit-btn" onclick="editRow(this)">Edit</button>
                    <button class="save-btn" onclick="saveRow(this)" style="display: none;">Save</button>
                    <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                </td>
            `;
            table.appendChild(newRow);
        }
    </script>
</body>
</html>
