<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sells Records</title>
    <link rel="stylesheet" href="sells.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Sells Records</h1>
        </header>
        
        <main class="main-content">
            <table class="sells-table">
                <thead>
                    <tr>
                        <th>Sell ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SELL001</td>
                        <td contenteditable="false">Smartphone</td>
                        <td contenteditable="false">2</td>
                        <td contenteditable="false">$500.00</td>
                        <td contenteditable="false">$1000.00</td>
                        <td contenteditable="false"><span class="status success">Completed</span></td>
                        <td>
                            <button class="edit-btn" onclick="editRow(this)">Edit</button>
                            <button class="save-btn" onclick="saveRow(this)" style="display: none;">Save</button>
                            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>SELL002</td>
                        <td contenteditable="false">Laptop</td>
                        <td contenteditable="false">1</td>
                        <td contenteditable="false">$1200.00</td>
                        <td contenteditable="false">$1200.00</td>
                        <td contenteditable="false"><span class="status pending">Pending</span></td>
                        <td>
                            <button class="edit-btn" onclick="editRow(this)">Edit</button>
                            <button class="save-btn" onclick="saveRow(this)" style="display: none;">Save</button>
                            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="action-buttons">
                <button class="add-btn" onclick="addSell()">Add New Sell</button>
            </div>
        </main>
    </div>

    <script>
        // Function to enable editing for a selected row
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

        // Function to save edited data for the row
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

        // Function to delete a row
        function deleteRow(button) {
            const row = button.closest('tr');
            if (confirm("Are you sure you want to delete this sell record?")) {
                row.remove(); // Remove the row from the table
            }
        }

        // Function to add a new sell row
        function addSell() {
            const table = document.querySelector('.sells-table tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>SELL${Math.floor(1000 + Math.random() * 9000)}</td>
                <td contenteditable="true">New Product</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">$0.00</td>
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
