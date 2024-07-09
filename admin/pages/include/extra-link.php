<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Input Boxes</title>
    <style>
        .input-container {
            margin-top: ;
        }
        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .input-box {
            margin-right: 10px;
        }
        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
    <script>
        function addInputBox() {
            const container = document.getElementById('input-container');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group';

            const inputBox = document.createElement('input');
            inputBox.type = 'text';
            inputBox.placeholder = 'Item';
            inputBox.className = 'input-box';

            const priceBox = document.createElement('input');
            priceBox.type = 'text';
            priceBox.placeholder = 'Price';
            priceBox.className = 'input-box';

            const deleteBtn = document.createElement('button');
            deleteBtn.innerHTML = '✖';
            deleteBtn.className = 'delete-btn';
            deleteBtn.onclick = function() {
                container.removeChild(inputGroup);
            };

            inputGroup.appendChild(inputBox);
            inputGroup.appendChild(priceBox);
            inputGroup.appendChild(deleteBtn);
            container.appendChild(inputGroup);
        }

        function deleteInputBox(inputGroup) {
            const container = document.getElementById('input-container');
            container.removeChild(inputGroup);
        }
    </script>
</head>