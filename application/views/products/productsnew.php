<!doctype html>
<html>
    <head>
    </head>
    <body>

        <?php if($this->session->flashdata("login_errors"))
              echo $this->session->flashdata("login_errors"); ?>
        
        <h1>Add A New Product</h1>
        <form action="/Products/create" method="post">
        	Name:<input type="text" name="name"><br>
        	Description:<input type="text" name="description"><br>
        	Price:<input type="text" name="price"><br>
        	<input type="submit" value="Create">
        </form>
    </body>
</html>