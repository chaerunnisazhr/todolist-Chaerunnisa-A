<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Idul Fitri',
            'description'    => 'Yey lebaran',
            'finished_at'    => "2022-05-02-23:59",
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'title' => 'Idul Adha',
            'description'    => 'Potong kambing apa potong kamu',
            'finished_at'    => "2022-07-10-23:59",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);

        $data = [
            'title' => 'My birthday',
            'description'    => 'Semoga banyak duit Aamiin',
            'finished_at'    => "2023-01-02-23:59",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}