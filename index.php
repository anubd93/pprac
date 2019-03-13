<?php
    include 'inc/header.php';
    include 'lib/User.php';

    $user = new User();

?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    User List
                    <span class="pull-right">
                        <strong>Welcome!!!</strong>
                    </span>
                </h2>
                <div class="panel-body">
                    <table class="table">
                        <th width="20%">Serial</th>
                        <th width="20%">Name</th>
                        <th width="20%">Username</th>
                        <th width="20%">Email Address</th>
                        <th width="20%">Action</th>
                        <tr>
                            <td>01</td>
                            <td>ABC</td>
                            <td>abc</td>
                            <td>abc@abc.com</td>
                            <td><a href="profile.php">View</a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>XYZ</td>
                            <td>xyz</td>
                            <td>xyz@xyz.com</td>
                            <td><a href="profile.php">View</a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>PQR</td>
                            <td>pqr</td>
                            <td>pqr@pqr.com</td>
                            <td><a href="profile.php">View</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

<?php
include 'inc/footer.php'
?>