<?php


class ExpenseTrack{
    private $file;
    private $categories = [
        "income" => ["salary","freelance","business"],
        "expense" => ["food","housing","transportation","pocketmoney"]
    ];

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function run(){
        while(true){
            $this->Menu();

            $choice = (int) readline("Enter your option:");

            if($choice == 1){
                $this->addIncome();
            }else if($choice == 2){
                $this->addExpense();
            }else if($choice == 3){
                $this->displayEntries("Income:");
            }else if($choice == 4){
                $this->displayEntries("Expense:");
            }else if($choice == 5){
                $this->calculateSavings();
            }else if($choice == 6){
                $this->viewCategories();
            }else if($choice == 7){
               
                break;
            }else {
                printf("Invalid option");
            }
        }

    }

    private function Menu(){
        printf("1. Add income\n");
        printf("2. Add expense\n");
        printf("3. View income\n");
        printf("4. View expense\n");
        printf("5. View savings\n");
        printf("6. View categories\n");
        printf("7. Exit\n");
        
    }

    private function addIncome(){
        $income = (double) readline("Enter income amount: ");
        $maincategory = $this->selectCategory("income");
        $entry = "Income: $income($maincategory)";
        $this->saveEntry($entry);
    }

    private function addExpense(){
        $expense = (double) readline("Enter expense amount: ");
        $maincategory = $this->selectCategory("expense");
        $entry = "Expense: $expense($maincategory)";
        $this->saveEntry($entry);
    }


    private function calculateSavings(){
        $contents = file_get_contents($this->file);
        $lines = explode("\n", $contents);
        $incomeTotal = 0;
        $expenseTotal = 0;
        
        foreach($lines as $line){
            if(strpos($line, "Income:") === 0){
                $incomeTotal += (double)explode(" ", $line)[1];
            } else if(strpos($line, "Expense:") === 0){
                $expenseTotal += (double)explode(" ", $line)[1];
            }
        }
        
        $savings = $incomeTotal - $expenseTotal;
        printf("Savings: $savings\n");
    }
    

    

    private function saveEntry($entry){
            file_put_contents($this->file,$entry.PHP_EOL,FILE_APPEND);
        }

    private function displayEntries($type){
        $contents = file_get_contents($this->file);
        $lines = explode("\n", $contents);
        foreach($lines as $line){
            if(strpos($line,$type) === 0){
                printf($line."\n");
            }
        }
    }

    private function viewCategories(){
        printf("Pre-existing Categories:\n");
        $mainIndex = 1;
        foreach($this->categories as $index => $category){
            printf("$mainIndex. $category\n");
            foreach($category as $subIndex=> $subcategory){
                printf("$index.$subIndex.$subcategory\n");
                $subIndex = 1;
            }
            $mainIndex = 1;
        }
    }

    private function selectCategory($type){
        $this->viewCategoryOptions($type);
        $index = (int)readline("Select a Category: ");
        $maincategory = array_keys($this->categories[$type])[$index-1];
        return $maincategory;

    }

    private function viewCategoryOptions($type){
        printf("Avaviable Categories for $type:\n");
        foreach($this->categories[$type] as $index=>$category){
            printf("$index.$category\n");
        }
    }

    
}

$file = 'content.txt';
$etracker = new ExpenseTrack($file);
$etracker->run();