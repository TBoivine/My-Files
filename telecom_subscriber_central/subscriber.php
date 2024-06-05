<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="sidebar">
            <img src="assets/logo2-removebg-preview.png" alt="" class="logo">
            <ul>
                <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> &nbsp; DASHBOARD</a></li>
                <li><a href="services.php"><i class="fas fa-concierge-bell"></i> &nbsp; SERVICES</a></li>
                <li><a href="report.php"><i class="fas fa-chart-bar"></i> &nbsp; REPORTS</a></li>
                <li><a href="subscriber.php"><i class="fas fa-users"></i> &nbsp; SUBSCRIBERS</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> &nbsp; LOGOUT</a></li>
            </ul>
        </section>

        <section class="main-content">
            <nav class="navbar">
                <span class="logo-text"><i class="fas fa-users"></i> &nbsp;Subscriber</span>
                <div>
                    <i class="bi-moon"></i>
                    <i class="bi-gear"></i>
                    <i class="bi-person"></i>
                </div>
            </nav>

            <div class="sub-container">
                <h2>Add Subscriber</h2>
                <form action="php/add_subscriber.php" method="POST">
                    <div>
                        <label for="First_Name">First Name:</label>
                        <input type="text" name="First_Name" required>
                    </div>
                        <lable for = "Last_Name">Last Name:</lable>
                        <input type = "text" id = "Last_Name" name = "Last_Name" required><br>
                    </div>
                    <div>
                        <label for="Phone_number">Phone Number:</label>
                        <input type="text" name="Phone_number" required>
                    </div>
                    <div>
                        <label for="Address">Address:</label>
                        <input type="text" name="Address" required>
                    </div>

                    <div class="form-group">
                        <label for="service">Service Type:</label>
                        <select id="service" name="service_id" class="form-control" required>
                            <?php include 'php/fetch_services_options.php'; ?>
                        </select>
                    </div>

                    <button class="add-subscriber" type="submit">Add Subscriber</button>
                </form>
            </div>

            <p class="see-sub">See subscribers list</p>

            <div class="subscriber-list">
                <h2>Subscribers list</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'php/fetch_subscribers.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
