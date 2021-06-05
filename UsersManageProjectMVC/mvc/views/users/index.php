<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .custom-select {
            width: auto !important;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div style="margin: 20px">

                <a href="create.php" class="btn btn-info">Thêm mới người dùng</a>
                <?php echo $abc ?>
                <h2> <?php echo $dateNow ?></h2>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Sinh nhật</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if (is_array($users) && !empty($users)) {
                    foreach($users as $keyUser => $user) {
                        // $student
                        ?>

                        <tr>
                            <td><?php echo $user->user_id ?></td>
                            <td><?php echo $user->user_name ?></td>
                            <td><?php echo $user->user_phone ?></td>
                            <td><?php echo $user->user_email ?></td>
                            <td><?php echo $user->user_birthday ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $user->user_id ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $user->user_id ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    } // end foreach
                } // end if
                ?>



                </tbody>
            </table>



        </div>
    </div>
</div>

</body>
</html>
