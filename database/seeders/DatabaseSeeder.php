<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Pulau;
use App\Models\WisataList;
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
        Pulau::create([
            'nama_pulau'=> 'Tua Pejat',
        ]);

        Pulau::create([
            'nama_pulau'=> 'Siberut Daya',
        ]);
        
        Pulau::create([
            'nama_pulau'=> 'Pagai Selatan',
        ]);

        User::create([
            'name'=> 'Elvi Saputri',
            'email'=> 'elvi@gmail.com',
            'password'=> bcrypt('12345678'),
            'role_as'=> '1',
        ]);

        User::create([
            'name'=> 'Roni',
            'email'=> 'roni21@gmail.com',
            'password'=> bcrypt('12345678'),
            'role_as'=> '0',
        ]);

        WisataList::create([
            'pulau_id'=> '1',
            'nama_wisata'=> 'Air Terjun Pujujurung'
        ]);
        WisataList::create([
            'pulau_id'=> 1,
            'nama_wisata'=> 'Katiet'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Awera'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Pantai Jati'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Pantai Mapadegat'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Umat Siteu'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Sport Surfing'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Taman Patung Sikerei'
        ]);
        WisataList::create([
            'pulau_id'=>1,
            'nama_wisata'=> 'Taman Kimia'
        ]);
        WisataList::create([
            'pulau_id'=>2,
            'nama_wisata'=> 'Pantai Masilok'
        ]);
        WisataList::create([
            'pulau_id'=>2,
            'nama_wisata'=> 'Pantai Karambajat'
        ]);
        WisataList::create([
            'pulau_id'=>2,
            'nama_wisata'=> 'Nyang Nyang'
        ]);
        WisataList::create([
            'pulau_id'=>2,
            'nama_wisata'=> 'Teluk Katurai'
        ]);

        WisataList::create([
            'pulau_id'=>3,
            'nama_wisata'=> 'Air Terjun Bagat Saumang'
        ]);
        WisataList::create([
            'pulau_id'=>3,
            'nama_wisata'=> 'Bagat Simarabuk'
        ]);
        WisataList::create([
            'pulau_id'=>3,
            'nama_wisata'=> 'Goa Pamintaijat'
        ]);
        
        WisataList::create([
            'pulau_id'=>3,
            'nama_wisata'=> 'Pantai Pittojat'
        ]);
        
        WisataList::create([
            'pulau_id'=>3,
            'nama_wisata'=> 'Siruso'
        ]);
        
        
    }

    
}
