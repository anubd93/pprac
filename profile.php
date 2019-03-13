<?php
include 'inc/header.php'
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
                User Profile
                <span class="pull-right">
                    <a class="btn btn-primary" href="index.php">Back</a>
                </span>
            </h2>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" id="name" name="name" class="form-control" value="ABC"/>
                    </div>
                    <div class="form-group">
                        <label for="username">
                            Username
                        </label>
                        <input type="text" id="username" name="username" class="form-control" value="abc"/>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email Address
                        </label>
                        <input type="text" id="email" name="email" class="form-control" value="abc@abc.com"/>
                    </div>

                    <button type="submit" name="update" class="btn btn-success">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>

<?php
include 'inc/footer.php'
?>