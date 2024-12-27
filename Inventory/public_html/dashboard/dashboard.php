<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/dashboard.css">

</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Brand</h1>
        </div>
        <ul>
            <li><img src="" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="" alt="">&nbsp; <span>Stock-level</span></li>
            <li><img src="" alt="">&nbsp; <span>Sold-out</span></li>
            <li><img src="" alt="">&nbsp; <span>Profit</span></li>
            <li><img src="" alt="">&nbsp; <span>User</span></li>
            <li><img src="" alt="">&nbsp; <span>Details</span></li>
            <li><img src="" alt="">&nbsp; <span>Setting</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search..">
                    <button type="submit"><img src="../images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"> Add new</a>
                    <img src="../images/alarm.png" alt="">
                    <div class="img-case">
                        <img src="../images/user.jpeg" alt="user.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Stock on hand</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../images/" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Cost of goods</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../images/" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Total stock-value</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../images/" alt="">
                    </div>
                </div>
                
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                         <h2>Stock status</h2>
                         <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Item</th>
                            <th>Entry-date</th>
                            <th>Cost-price</th>
                            <th>status</th>
                        </tr>
                        <tr>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td><a href="#" class="btn">view</a></td>
                        </tr>
                        <tr>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td><a href="#" class="btn">view</a></td>
                        </tr>
                        <tr>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td>john doe</td>
                            <td><a href="#" class="btn">view</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                <div class="title">
                         <h2>Users</h2>
                         <a href="#" class="btn">view</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td><img src="../images/user.jpeg"></td>
                            <td>john</td>
                            <td><img src="" alt="info"></td>
                        </tr>
                        <tr>
                            <td><img src="../images/user.jpeg"></td>
                            <td>john</td>
                            <td><img src="" alt="info"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>