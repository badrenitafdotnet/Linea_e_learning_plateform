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
        <div style ="text-align:center;margin-left: auto;margin-right: auto;"><span class="page-title">Settings</span></div>
    </header>

    <!-- Sidebar - Light Yellow -->
    <nav class="sidebar">
        <ul class="sidebar-menu">
            <li>
               <span class="menu-icon"><a class= 'child' href= "dashboard.php">🎯</a></span>
               <span class="menu-label"><a class= 'child' href= "dashboard.php">Dashboard</a></span>
            </li>
            <li>
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
            <li  class="active">
                <span class="menu-icon"><a class= 'child' href= "settings.php">⚙️</a></span>
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
        <div class="row">
            <div class="table-container half"><h2 class="dashboard-title">General Settings</h2></div>
            <div class="table-container half"><h2 class="dashboard-title">Site Parametres</h2></div>
        </div>
        <div class="row">
            <div class="table-container half"><h2 class="dashboard-title">Accounts Settings</h2></div>
            <div class="table-container half"><h2 class="dashboard-title">Personalisation</h2></div>
         </div>    
    </main>
</body>
</html>
