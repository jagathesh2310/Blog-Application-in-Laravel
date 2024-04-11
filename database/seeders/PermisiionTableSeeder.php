<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermisiionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions =[
            [
                'name' => 'artical_create'
            ],
            [
                'name' => 'artical_edit',
            ],
            [
                'name' => 'artical_delete',
            ],
            [
                'name' => 'artical_list',
            ],
        ];
        foreach($permissions as $key => $value){
            $per = new Permission;
            $per->name = $value['name'];
            $per->save();
        }
        echo "permission seeded";
    }
}
