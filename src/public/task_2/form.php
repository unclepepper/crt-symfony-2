<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" >
            <!-- form start -->
            <form method="POST" action="index.php">
                <div class="mb-3 form-group">
                    <label for="id" class="form-label">ID </label>
                    <input type="number" name="id" class="form-control" id="id" value="<?=$data['id'];?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="name" class="form-label">First name</label>
                    <input type="text" name="name" class="form-control" id="name"
                     value="<?php echo isset($data['name']) ? $data['name']:NULL?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" name="age" class="form-control" id="age" 
                    value="<?php echo isset($data['age']) ? $data['age']:NULL?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" 
                    value="<?php echo isset($data['email']) ? $data['email']:NULL?>">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- form end -->

        </div>
    </div>
</div>
</body>
</html>