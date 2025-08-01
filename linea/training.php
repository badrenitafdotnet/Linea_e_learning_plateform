<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="style_dark.css"/>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="linea.png" alt="Company Logo">
            <!--span >Dashboard</span-->
        </div>
        <div style ="text-align:center;margin-left: auto;margin-right: auto;"><span class="page-title">Training</span></div>
    </header>

    <!-- Sidebar - Light Yellow -->
    <nav class="sidebar">
        <ul class="sidebar-menu">
          <li>
               <span class="menu-icon"><a class= 'child' href= "dashboard.php">🎯</a></span>
               <span class="menu-label"><a class= 'child' href= "dashboard.php">Dashboard</a></span>
            </li>
            <li class="active">
              <span class="menu-icon"><a class= 'child' href= "training.php">🏋️</a></span>  
              <span class="menu-label"> <a class= 'child' href= "training.php">Training</a></span>
            </li>
            <li>
                <span class="menu-icon"><a class= 'child' href= "quiz.php">🧠</a></span>
                <span class="menu-label"> <a class= 'child' href= "quiz.php">Quiz</a></span>
            </li>
            <li>
                <span class="menu-icon"><a class= 'child' href= "scores.php">📋</a></span>
                <span class="menu-label"> <a class= 'child' href= "scores.php">Scores</a></span>
            </li>
            <li>
                <span class="menu-icon"><a class= 'child' href= "reports.php">📊</a></span>
                <span class="menu-label"> <a class= 'child' href= "reports.php">Reports</a></span>
            </li>
            <li><span class="menu-icon"><a class= 'child' href= "settings.php">⚙️</a></span>
                <span class="menu-label"> <a class= 'child' href= "settings.php">Settings</a></span>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Operations -->
        <div class="operations-bar">
            <!--button class="btn btn-primary">Add New</button>
            <button class="btn btn-secondary">Export</button>
            <button class="btn btn-secondary">Filter</button>
            <input type="text" placeholder="Search..." style="flex-grow: 1; padding: 8px 12px; border: 1px solid #e0e0e0; border-radius: 5px; min-width: 200px;"-->
        </div>

        <!-- Table -->
        <!--div class="row"-->
            <div class="table-container row">
                <h2 class="dashboard-title" > Last Added Training </h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>Sample Product</td>
                        <td>Active</td>
                        <td>2023-06-15</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Premium Service</td>
                        <td>Pending</td>
                        <td>2023-06-10</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>Basic Plan</td>
                        <td>Active</td>
                        <td>2023-06-05</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            <div class="table-container row"><h2 class="dashboard-title" > Training of the day </h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>Sample Product</td>
                        <td>Active</td>
                        <td>2023-06-15</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Premium Service</td>
                        <td>Pending</td>
                        <td>2023-06-10</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>Basic Plan</td>
                        <td>Active</td>
                        <td>2023-06-05</td>
                        <td>
                            <button class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8rem; margin-right: 6px;">Edit</button>
                            <button class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>
            <!--/div-->
        <!--div class="row">
            <div class="table-container half"><h2 class="dashboard-title">👥 Online Users</h2></div>
            <div class="table-container half"><h2 class="dashboard-title">🏆 Scoreboard</h2></div>
         </div-->    
    </main>
</body>
</html>
