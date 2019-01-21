<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('users');

        //eliminamos los direcctorios con lo que hay dentro y los volvemos a crear
        Storage::makeDirectory('posts');
        Storage::makeDirectory('users');

        //ahora creamos los roles
        factory(\App\Role::class, 1)->create(['name'=>'admin']);
        factory(\App\Role::class, 1)->create(['name'=>'freelance']);
        factory(\App\Role::class, 1)->create(['name'=>'company']);
        factory(\App\Role::class, 1)->create(['name'=>'invited']);


        factory(\App\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'jotaefe006@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => \App\Role::ADMIN
        ])
            ->each(function(\App\User $u){
                //funcion anonima
                factory(\App\Invitado::class, 1)->create(['user_id'=>$u->id ]);
             });

        factory(\App\User::class, 50)->create()
            ->each( function (\App\User $u){
                factory(\App\Invitado::class, 1)->create(['user_id'=> $u->id]);
            });

        factory(\App\User::class, 50)->create()
            ->each( function (\App\User $u){
                factory(\App\Invitado::class, 1)->create(['user_id'=> $u->id]);
                factory(\App\Freelance::class, 1)->create(['user_id'=> $u->id]);
            });

        factory(\App\Level::class, 1)->create(['name'=>'Beginner']);
        factory(\App\Level::class, 1)->create(['name'=>'Intermediate']);
        factory(\App\Level::class, 1)->create(['name'=>'Advanced']);
        factory(\App\Category::class, 5)->create();// creamos tres categorias aleatorias
        factory(\App\Post::class, 50)->create();

        /*factory(\App\Post::class, 50)
            ->create()
            ->each(function(\App\Post $p){
                $p->goals()->saveMany(factory(\App\Goal::class,2)->create());
                $p->requirements()->saveMany(factory(\App\Requirement::class,4)->create());
            });*/

    }
}
