<?php 
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class DynamoInsertCommand extends Command {

    protected $name = 'dynamoInsert';

    protected $description = "Insert records from users table of dynamodb";

    public function fire()
    {
    }

}