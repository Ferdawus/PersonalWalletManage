<?php
    $view = $_REQUEST['view'];

    include('Views/header.php');

    switch ($view) {
        case 'income_category':
            include('Views/income_category.php');
            break;
        case 'income':
            include('Views/income.php');
            break;    
        case 'expense_category':
            include('Views/expense_category.php');
            break;    
        
        default:
            include('Views/home.php');
            break;
    }

    include('Veiws/footer.php');
