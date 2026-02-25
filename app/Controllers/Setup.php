<?php

namespace App\Controllers;

use Exception;

    class Setup extends BaseController
    {
        public function index(){
            $migration = service('migrations');
            try {
                $migration->latest();
                echo "Migration setup Successfully";
            } catch (Exception $e) {
                echo "Error in creating Database".$e->getMessage();
            }
        }
        public function dropTable(){
            $migration = service('migrations');
            try {
                $migration->regress(0);
                echo "Migration drop Successfully";
            } catch (Exception $e) {
                echo "Error in dropping Database".$e->getMessage();
            }
        }
        public function userSeed(){
            $seeder = \Config\Database::Seeder();
            try {
                $seeder->call('userSeeder');
                echo "Seeding setup successfully";
            } catch (Exception $e) {
                echo "Error in inserting data in database";
            }
        }
    }
?>