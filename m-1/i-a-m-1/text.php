<?php

// class expense{
//     public $income ;
//     public $expens ;
// }

// $filename = 'data.txt';

// while (true) {
//     echo "Menu:\n";
//     echo "1. Add income\n";
//     echo "2. Add expense\n";
//     echo "3. View incomes\n";
//     echo "4. View expenses\n";
//     echo "5. View savings\n";
//     echo "6. View categories\n";
//     echo "7. Quit\n";

//     $choice = (int)readline("Enter your choice: ");

//     switch ($choice) {
//         case 1:
//             $income = (float)readline("Enter income amount: ");
//             file_put_contents($filename, "Income: $income\n", FILE_APPEND);
//             break;

//         case 2:
//             $expense = (float)readline("Enter expense amount: ");
//             file_put_contents($filename, "Expense: $expense\n", FILE_APPEND);
//             break;

//         // case 3:
//         //     echo "Incomes:\n";
//         //     echo file_get_contents($filename);
//         //     break;

//         // case 4:
//         //     echo "Expenses:\n";
//         //     echo file_get_contents($filename);
//         //     break;


//         case 3:
//             echo "Incomes:\n";
//             $contents = file_get_contents($filename);
//             $lines = explode("\n", $contents);
//             foreach ($lines as $line) {
//                 if (strpos($line, "Income:") === 0) {
//                     echo $line . "\n";
//                 }
//             }
//             break;

//         case 4:
//             echo "Expenses:\n";
//             $contents = file_get_contents($filename);
//             $lines = explode("\n", $contents);
//             foreach ($lines as $line) {
//                 if (strpos($line, "Expense:") === 0) {
//                     echo $line . "\n";
//                 }
//             }
//             break;

//         case 5:
//             // Calculate and display savings
//             $contents = file_get_contents($filename);
//             $lines = explode("\n", $contents);
//             $totalIncome = 0;
//             $totalExpense = 0;

//             foreach ($lines as $line) {
//                 if (strpos($line, "Income:") === 0) {
//                     $totalIncome += (float)str_replace("Income: ", "", $line);
//                 } elseif (strpos($line, "Expense:") === 0) {
//                     $totalExpense += (float)str_replace("Expense: ", "", $line);
//                 }
//             }

//             $savings = $totalIncome - $totalExpense;
//             echo "Total Savings: $savings\n";
//             break;

//         case 6:
//             // Implement viewing categories if needed
//             echo "View Categories: Not implemented\n";
//             break;

//         case 7:
//             exit; // Quit the program
//             break;

//         default:
//             echo "Invalid choice. Please try again.\n";
//     }
// }

// $filename = 'content.txt';
// $categories = ["income", "expense"]; // Example pre-existing categories

// while (true) {
//     echo "Menu:\n";
//     echo "1. Add income\n";
//     echo "2. Add expense\n";
//     echo "3. View incomes\n";
//     echo "4. View expenses\n";
//     echo "5. View savings\n";
//     echo "6. View categories\n";
//     echo "7. Quit\n";

//     $choice = (int)readline("Enter your choice: ");

//     switch ($choice) {
//         case 1:
//             // Add income
//             $income = (float)readline("Enter income amount: ");
//             $category = readline("Enter income category: ");
//             // Save income to file with a format like "Income: {amount} ({category})"
//             $entry = "Income: $income ($category)";
//             file_put_contents($filename, $entry . PHP_EOL, FILE_APPEND);
//             break;

//         case 2:
//             // Add expense
//             $expense = (float)readline("Enter expense amount: ");
//             $category = readline("Enter expense category: ");
//             // Save expense to file with a format like "Expense: {amount} ({category})"
//             $entry = "Expense: $expense ($category)";
//             file_put_contents($filename, $entry . PHP_EOL, FILE_APPEND);
//             break;

//         case 3:
//             echo "Incomes:\n";
//             displayEntries($filename, "Income:");
//             break;

//         case 4:
//             echo "Expenses:\n";
//             displayEntries($filename, "Expense:");
//             break;

//         case 5:
//             // Calculate and display savings
//             calculateSavings($filename);
//             break;

//         case 6:
//             // View pre-existing categories
//             echo "Pre-existing Categories:\n";
//             foreach ($categories as $index => $category) {
//                 echo ($index + 1) . ". $category\n";
//             }
//             break;

//         case 7:
//             exit; // Quit the program

//         default:
//             echo "Invalid choice. Please try again.\n";
//     }
// }

// function displayEntries($filename, $type)
// {
//     $contents = file_get_contents($filename);
//     $lines = explode("\n", $contents);
//     foreach ($lines as $line) {
//         if (strpos($line, $type) === 0) {
//             echo $line . "\n";
//         }
//     }
// }

// function calculateSavings($filename)
// {
//     $contents = file_get_contents($filename);
//     $lines = explode("\n", $contents);
//     $incomeTotal = 0;
//     $expenseTotal = 0;
//     foreach ($lines as $line) {
//         if (strpos($line, "Income:") === 0) {
//             $incomeTotal += (float)explode(" ", $line)[1];
//         } elseif (strpos($line, "Expense:") === 0) {
//             $expenseTotal += (float)explode(" ", $line)[1];
//         }
//     }
//     $savings = $incomeTotal - $expenseTotal;
//     echo "Savings: $savings\n";
// }


// class ExpenseTracker
// {
//     private $filename;
//     private $categories = ["income", "expense"];

//     public function __construct($filename)
//     {
//         $this->filename = $filename;
//     }

//     public function run()
//     {
//         while (true) {
//             $this->showMenu();
//             $choice = (int)readline("Enter your choice: ");

//             switch ($choice) {
//                 case 1:
//                     $this->addIncome();
//                     break;

//                 case 2:
//                     $this->addExpense();
//                     break;

//                 case 3:
//                     $this->displayEntries("Income:");
//                     break;

//                 case 4:
//                     $this->displayEntries("Expense:");
//                     break;

//                 case 5:
//                     $this->calculateSavings();
//                     break;

//                 case 6:
//                     $this->viewCategories();
//                     break;

//                 case 7:
//                     exit; // Quit the program

//                 default:
//                     echo "Invalid choice. Please try again.\n";
//             }
//         }
//     }

//     private function showMenu()
//     {
//         echo "Menu:\n";
//         echo "1. Add income\n";
//         echo "2. Add expense\n";
//         echo "3. View incomes\n";
//         echo "4. View expenses\n";
//         echo "5. View savings\n";
//         echo "6. View categories\n";
//         echo "7. Quit\n";
//     }

//     private function addIncome()
//     {
//         $income = (float)readline("Enter income amount: ");
//         $category = readline("Enter income category: ");
//         $entry = "Income: $income ($category)";
//         $this->saveEntry($entry);
//     }

//     private function addExpense()
//     {
//         $expense = (float)readline("Enter expense amount: ");
//         $category = readline("Enter expense category: ");
//         $entry = "Expense: $expense ($category)";
//         $this->saveEntry($entry);
//     }

//     private function saveEntry($entry)
//     {
//         file_put_contents($this->filename, $entry . PHP_EOL, FILE_APPEND);
//     }

//     private function displayEntries($type)
//     {
//         $contents = file_get_contents($this->filename);
//         $lines = explode("\n", $contents);
//         foreach ($lines as $line) {
//             if (strpos($line, $type) === 0) {
//                 echo $line . "\n";
//             }
//         }
//     }

//     private function calculateSavings()
//     {
//         $contents = file_get_contents($this->filename);
//         $lines = explode("\n", $contents);
//         $incomeTotal = 0;
//         $expenseTotal = 0;
//         foreach ($lines as $line) {
//             if (strpos($line, "Income:") === 0) {
//                 $incomeTotal += (float)explode(" ", $line)[1];
//             } elseif (strpos($line, "Expense:") === 0) {
//                 $expenseTotal += (float)explode(" ", $line)[1];
//             }
//         }
//         $savings = $incomeTotal - $expenseTotal;
//         echo "Savings: $savings\n";
//     }

//     private function viewCategories()
//     {
//         echo "Pre-existing Categories:\n";
//         foreach ($this->categories as $index => $category) {
//             echo ($index + 1) . ". $category\n";
//         }
//     }
// }

// $filename = 'content.txt';
// $tracker = new ExpenseTracker($filename);
// $tracker->run();

class ExpenseTracker
{
    private $filename;
    private $categories = [
        "income" => ["salary", "freelance", "other"],
        "expense" => ["food", "housing", "transportation", "entertainment", "other"]
    ];

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function run()
    {
        while (true) {
            $this->showMenu();
            $choice = (int)readline("Enter your choice: ");

            switch ($choice) {
                case 1:
                    $this->addIncome();
                    break;

                case 2:
                    $this->addExpense();
                    break;

                case 3:
                    $this->displayEntries("Income:");
                    break;

                case 4:
                    $this->displayEntries("Expense:");
                    break;

                case 5:
                    $this->calculateSavings();
                    break;

                case 6:
                    $this->viewCategories();
                    break;

                case 7:
                    exit; // Quit the program

                default:
                    echo "Invalid choice. Please try again.\n";
            }
        }
    }

    private function showMenu()
    {
        echo "Menu:\n";
        echo "1. Add income\n";
        echo "2. Add expense\n";
        echo "3. View incomes\n";
        echo "4. View expenses\n";
        echo "5. View savings\n";
        echo "6. View categories\n";
        echo "7. Quit\n";
    }

    private function addIncome()
    {
        $income = (float)readline("Enter income amount: ");
        $mainCategory = $this->selectCategory("income");
        $entry = "Income: $income ($mainCategory)";
        $this->saveEntry($entry);
    }

    private function addExpense()
    {
        $expense = (float)readline("Enter expense amount: ");
        $mainCategory = $this->selectCategory("expense");
        $entry = "Expense: $expense ($mainCategory)";
        $this->saveEntry($entry);
    }

    private function saveEntry($entry)
    {
        file_put_contents($this->filename, $entry . PHP_EOL, FILE_APPEND);
    }

    private function displayEntries($type)
    {
        $contents = file_get_contents($this->filename);
        $lines = explode("\n", $contents);
        foreach ($lines as $line) {
            if (strpos($line, $type) === 0) {
                echo $line . "\n";
            }
        }
    }

    private function calculateSavings()
    {
        $contents = file_get_contents($this->filename);
        $lines = explode("\n", $contents);
        $incomeTotal = 0;
        $expenseTotal = 0;
        foreach ($lines as $line) {
            if (strpos($line, "Income:") === 0) {
                $incomeTotal += (float)explode(" ", $line)[1];
            } elseif (strpos($line, "Expense:") === 0) {
                $expenseTotal += (float)explode(" ", $line)[1];
            }
        }
        $savings = $incomeTotal - $expenseTotal;
        echo "Savings: $savings\n";
    }

    private function viewCategories()
    {
        echo "Pre-existing Categories:\n";
        foreach ($this->categories as $index => $category) {
            echo ($index + 1) . ". $index\n";
            foreach ($category as $subIndex => $subcategory) {
                echo "   $index.$subIndex. $subcategory\n";
            }
        }
    }

    private function selectCategory($type)
    {
        $this->viewCategoryOptions($type);
        $index = (int)readline("Select a category: ");
        $mainCategory = array_keys($this->categories[$type])[$index];
        return $mainCategory;
    }

    private function viewCategoryOptions($type)
    {
        echo "Available Categories for $type:\n";
        foreach ($this->categories[$type] as $index => $category) {
            echo "  $index. $category\n";
        }
    }
}

$filename = 'content.txt';
$tracker = new ExpenseTracker($filename);
$tracker->run();

