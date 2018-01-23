<?php

use Illuminate\Database\Seeder;
use App\mahasiswa;
use App\wali;
use App\dosen;
use App\hobi;
class relasitableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswa')->delete();
        DB::table('wali')->delete();
        DB::table('dosen')->delete();
        DB::table('hobi')->delete();
        DB::table('mahasiswa_hobi')->delete();
        //
        $dosen=dosen::create(array(
            'nama'=>'Yuliana','nipd'=>'121212421'));

        $this->command->info('data dosen telah diisi!');

        $a=mahasiswa::create(array(
        	'nama'=>'Ferdiansyah Akbar Fauzi',
        	'nim'=>'161710109','id_dosen'=>$dosen->id));

        $b=mahasiswa::create(array(
        	'nama'=>'Lalapoo',
        	'nim'=>'10101414','id_dosen'=>$dosen->id));

        $c=mahasiswa::create(array(
        	'nama'=>'Dipsy',
        	'nim'=>'1021011','id_dosen'=>$dosen->id));

        $this->command->info('mahasiswa telah diisi!');

        wali::create(array(
        	'nama'=>'Joseph A',
        	'id_mahasiswa'=>$a->id
        ));

        wali::create(array(
        	'nama'=>'Junet D',
        	'id_mahasiswa'=>$b->id
        ));

        wali::create(array(
        	'nama'=>'Dulloh B',
        	'id_mahasiswa'=>$c->id
        ));

        $this->command->info('data mahasiswa dan wali telah diisi!');

        //
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

        $a->hobi()->attach($mandi_hujan->id);
        $a->hobi()->attach($baca_buku->id);
        $b->hobi()->attach($mandi_hujan->id);
        $c->hobi()->attach($baca_buku->id);

        $this->command->info('Mahasiswa beserta Hobi telah diisi!');

    }
}
?>
