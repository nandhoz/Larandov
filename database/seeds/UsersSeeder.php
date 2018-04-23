<?php
use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       // DB::table('users')->truncate();
       // $professions = DB::select('SELECT * FROM Professions');
       //$professions = DB::table('professions')->select()->get();
       $professions = Profession::select()->get();
       //dd($professions);
        for($i=0;$i<=5;$i++){

        User::create([
            
            'name'=>'Nandhoz'.$i,
            'email'=>$i.'@Nandhoz.com',
            'password'=>bcrypt($i.$i),
            'profession_id'=>$professions[$i]->id,
            
           ]);
        }
    }
}
