<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
    <style>
        h2 {
            text-align: center;
        }

        .table {
            display: flex;
            justify-content: center;
        }

        table {
            width: 90%;
            border-collapse: collapse;
        }

        thead th,
        tbody td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tbody td img {
            max-width: 100px;
        }

        .action-btn {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        .action-btn.view {
            background-color: #28a745;
        }

        .action-btn.edit {
            background-color: #ffc107;
        }

        .action-btn.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <button>Posts</button>
    <h2>Danh Sách Sở Thích</h2>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Favorite_Id</th>
                    <th>Favorite_Name</th>
                    <th>Favorite_Description</th>
                   
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user) --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</body>
</html>