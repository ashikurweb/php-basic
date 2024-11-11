<?php
$totalPages = 4400;
$itemsperPage = 20;
$pageCount = ceil($totalPages / $itemsperPage);

// Get the current page from the URL, defaulting to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Pagination</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Background styling */
        body {
            background: linear-gradient(135deg, #e3f2fd, #90caf9);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Pagination container styling */
        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            overflow-x: auto;
            white-space: nowrap;
        }

        /* Pagination link styling */
        .pagination a {
            display: inline-block;
            padding: 10px 16px;
            margin: 0 4px;
            color: #007bff;
            text-decoration: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.3);
            box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.5), 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            font-weight: bold;
        }

        /* Hover effect */
        .pagination a:hover {
            background: rgba(255, 255, 255, 0.5);
            color: #007bff;
            box-shadow: inset 0 0 8px rgba(255, 255, 255, 0.7), 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        /* Active page styling */
        .pagination a.active {
            background: rgba(0, 123, 255, 0.7);
            color: #fff;
            box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.8), 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Ellipsis for hidden pages */
        .pagination .dots {
            padding: 10px 0;
            margin: 0 6px;
            color: #007bff;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .pagination a {
                padding: 8px 12px;
                margin: 0 2px;
            }
        }
    </style>
</head>
<body>

<div class="pagination-container">
    <div class="pagination">
        <?php
        if ($current_page > 1) {
            echo '<a href="?page=' . ($current_page - 1) . '">&laquo;</a>';
        }

        if ($current_page > 3) {
            echo '<a href="?page=1">1</a>';
            if ($current_page > 4) {
                echo '<span class="dots">...</span>';
            }
        }

        for ($i = max(1, $current_page - 2); $i <= min($pageCount, $current_page + 2); $i++) {
            $active_class = ($i == $current_page) ? 'active' : '';
            echo '<a href="?page=' . $i . '" class="' . $active_class . '">' . $i . '</a>';
        }

        if ($current_page < $pageCount - 2) {
            if ($current_page < $pageCount - 3) {
                echo '<span class="dots">...</span>';
            }
            echo '<a href="?page=' . $pageCount . '">' . $pageCount . '</a>';
        }

        if ($current_page < $pageCount) {
            echo '<a href="?page=' . ($current_page + 1) . '">&raquo;</a>';
        }
        ?>
    </div>
</div>

</body>
</html>
