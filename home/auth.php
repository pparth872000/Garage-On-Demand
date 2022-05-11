<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./auth.css">

 <nav class="navbar" style="background-color: deepskyblue">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard" style="font-size:38px; color:#000000;"><strong style="text-transform:uppercase;">Garage On Demand</strong></a>
            </div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				
            </div>
        </div>
    </nav>
 
<div class="container">
    <h2>Login/Signup</h2>

    <div class="card">
        <div class="form-row">
            <div class="col-md-6">
                <form action="http://localhost/admin.garageondemand.com/customer.php">
                    <div class="alert alert-primary">
                        Login
                    </div>
                    <div class="form-group">
                         <label>Type Of User</label>
                        <select class="form-control" required>
                        <option>Customer</option>
                             <option>Gagare</option>
                        </select>
                        <label>Email</label>
                        <input type="email" class="form-control" id="uemail" required>
                        <label>Password</label>
                        <input type="password" class="form-control" id="upass" required><br>
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="alert alert-warning">
                        Signup
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="uname" required>
                        <label>Email</label>
                        <input type="email" class="form-control" id="uemail" required>
                        <label>Password</label>
                        <input type="password" class="form-control" id="upass" required>
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="cupass" required>
                        <label>Type Of User</label>
                        <select class="form-control" required>
                        <option>Customer</option>
                             <option>Gagare</option>
                        </select>
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" id="umnumber" required>
                       
                        <br>
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>