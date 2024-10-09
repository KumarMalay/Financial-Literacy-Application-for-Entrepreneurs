<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Literacy Application for Entrepreneurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="CSS/style.css" type="text/css" />
    <link rel="stylesheet" href="CSS/courses.css" type="text/css" />
    <!-- Bootstrap 5 for Modern Styling -->
    
</head>
<body>
<header id="navigation-vw">
      <nav class="navigation-bar container">
        <div class="logo">
          <a href="#home" class="logo">
            <img src="image/1.png" alt="" />
          </a>
        </div>
        <div class="navigations">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Courses</a></li>
            <li><a href="index.php">Contact Us</a></li>
          </ul>
        </div>
        <div id="menu-btn" class="fas fa-bars"></div>
      </nav>
</header>

<div class="container mt-5">
    <h1>Learn it your own way</h1>

    <!-- Business Planning Section -->
    <h2 class="my-4">Business Planning</h2>

    <!-- Lectures Section with YouTube Links and Status Buttons -->
    <div class="lectures">
        <h3 class="mb-4">Lectures</h3>

        <!-- Lecture 1 -->
        <div class="lecture-item card mb-3 p-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <iframe width="100%" height="200" src="https://www.youtube.com//embed/Fqch5OrUPvA" title="Business Planning Lecture 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Business Planning Lecture 1</h5>
                        <p class="card-text">Learn the fundamentals of business planning and how to create a successful business strategy.</p>
                        <form method="POST" action="update_status.php">
                            <input type="hidden" name="lecture_id" value="1">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" class="form-select" id="status">
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <button type="submit" class="btn btn-secondary mt-2">Update Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lecture 2 -->
        <div class="lecture-item card mb-3 p-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/1nOkRNC9Lco" title="Business Planning Lecture 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Business Planning Lecture 2</h5>
                        <p class="card-text">Explore advanced techniques for refining and implementing your business plan.</p>
                        <form method="POST" action="update_status.php">
                            <input type="hidden" name="lecture_id" value="2">
                            <label for="status2" class="form-label">Status:</label>
                            <select name="status" class="form-select" id="status2">
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <button type="submit" class="btn btn-secondary mt-2">Update Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lecture 3 -->
        <div class="lecture-item card mb-3 p-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/YwlEcmkTzbo" title="Business Planning Lecture 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Business Planning Lecture 3</h5>
                        <p class="card-text">Learn how to assess the market, competitors, and financial projections for your business plan.</p>
                        <form method="POST" action="update_status.php">
                            <input type="hidden" name="lecture_id" value="3">
                            <label for="status3" class="form-label">Status:</label>
                            <select name="status" class="form-select" id="status3">
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <button type="submit" class="btn btn-secondary mt-2">Update Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS for Interactivity -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
