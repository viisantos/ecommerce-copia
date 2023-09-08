<?php

namespace Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //1
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Bakery',
			'order' 	 => null,
			'table' 	 => null,
			'origin'  => 1,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);

        //2
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Butchers',
			'order' 	 => null,
			'table' 	 => null,
			'origin'  => 2,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);

         //3
         DB::table('product_groceries')->insert([
			'name' 	 	 => 'Cereals',
			'order' 	 => null,
			'table' 	 => null,
			'origin'  => 3,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);

        
        //4
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Drinks',
			'order' 	 => null,
			'table' 	 => null,
			'origin'  => 4,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);

        //5
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Hortifrutti',
			'order' 	 => null,
			'table' 	 => null,
			'origin'  => 5,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);

        //Filhos - Padaria
        //5
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Pão Francês',
			'order' 	 => 1,
			'table' 	 => 1,
			'origin'  => 1,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);      
        
        //6
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Pão Doce',
			'order' 	 => 2,
			'table' 	 => 1,
			'origin'  => 1,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);   

        //7
        DB::table('product_groceries')->insert([
			'name' 	 	 => 'Pão Italiano',
			'order' 	 => 3,
			'table' 	 => 1,
			'origin'  => 1,
			'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]);  

        //Filhos - Açougue
        //8
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Patinho',
            'order' 	 => 1,
            'table' 	 => 2,
            'origin'  => 2,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //9
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Filé Mignon',
            'order' 	 => 2,
            'table' 	 => 2,
            'origin'  => 2,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

         //10
         DB::table('product_groceries')->insert([
            'name' 	 	 => 'Carré',
            'order' 	 => 3,
            'table' 	 => 2,
            'origin'  => 2,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

         //11
         DB::table('product_groceries')->insert([
            'name' 	 	 => 'Picanha',
            'order' 	 => 4,
            'table' 	 => 2,
            'origin'  => 2,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //filhos - cereais
        //12
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Arroz',
            'order' 	 => 1,
            'table' 	 => 3,
            'origin'  => 3,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

          //13
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Aveia',
            'order' 	 => 2,
            'table' 	 => 3,
            'origin'  => 3,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

          //14
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Feijão',
            'order' 	 => 3,
            'table' 	 => 3,
            'origin'  => 3,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //filhos - bebidas
          //15
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Refrigerante',
            'order' 	 => 1,
            'table' 	 => 4,
            'origin'  => 4,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

          //16
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Vinhos',
            'order' 	 => 2,
            'table' 	 => 4,
            'origin'  => 4,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

          //17
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Energéticos',
            'order' 	 => 3,
            'table' 	 => 4,
            'origin'  => 4,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

          //18
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Cerveja',
            'order' 	 => 4,
            'table' 	 => 4,
            'origin'  => 4,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //filhos - hortifrutti
        //19
          DB::table('product_groceries')->insert([
            'name' 	 	 => 'Banana',
            'order' 	 => 1,
            'table' 	 => 5,
            'origin'  => 5,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //20
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Maçã',
            'order' 	 => 2,
            'table' 	 => 5,
            'origin'  => 5,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //21
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Maçã',
            'order' 	 => 2,
            'table' 	 => 5,
            'origin'  => 5,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //22
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Melancia',
            'order' 	 => 3,
            'table' 	 => 5,
            'origin'  => 5,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 

        //23
        DB::table('product_groceries')->insert([
            'name' 	 	 => 'Uva',
            'order' 	 => 4,
            'table' 	 => 5,
            'origin'     => 5,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s")
        ]); 
    }

}
