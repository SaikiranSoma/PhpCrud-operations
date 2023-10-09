<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './components/connections.php';  ?>
</head>
<body>

<table class="table">
        <thead>
            <tr>
                
                <th scope="col">Id </th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>

            </tr>

            


        </thead>

        <tbody>
            <?php
            include './components/connections.php';
            $sql = "SELECT * FROM `Contact`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $Id = $row['Id'];
                    $Email = $row['Email'];
                    $Phone = $row['Phone'];
                    $Message = $row['Message'];
                    echo '<tr>
         <td scope="row">' . $Id . '</td>
             <td>' . $Email . '</td>
             <td>' . $Phone . '</td>
             <td>' . $Message . '</td>
             </tr>';
                }
            }
            ?>
        </tbody>
    </table>
                    



        

</body>
</html>