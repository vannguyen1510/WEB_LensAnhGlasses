<?php
    // Connect to database
    include ('Connection.php');
    header('Content-Type: text/html; charset=utf-8');
    
    // Kiểm tra thanh tìm kiếm bỏ trống
    if(isset($_REQUEST['search']))
    {
        // Ngăn ngừa SQL Injection
        $search = addslashes($_GET['want']);
        if(empty($search))
        {
            echo "Sorry we can't find";
        }
        else
        {
            $query = "SELECT * FROM products WHERE Name_Pro LIKE '%$search%'";
            $results = mysqli_query($conn, $query);
            $num = mysqli_num_rows($results);
            //Nếu có kết quả thì hiển thị
            if($num > 0 && $search != "")
            {
                echo "$num Kết quả trả về với từ khóa <b> $search </b>";
                echo '<table border="1" celspacing="0" cellpadding="10">';
                while ($row = mysqli_fetch_assoc($results))
                {
                    echo '<tr>';
                        echo "<td>{$row['ID_Pro']}</td>";
                        echo "<td>{$row['Name_Pro']}</td>";
                        echo "<td>{$row['QuantityPerUnit']}</td>";
                        echo "<td>{$row['UnitPrice']}</td>";
                    echo '</tr>';
                }
                echo '</table>';
            }
            else
                echo "Sorry we can't find";
        }
    }
?>