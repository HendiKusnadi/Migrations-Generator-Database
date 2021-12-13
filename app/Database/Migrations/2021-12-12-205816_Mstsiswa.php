<?php 
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Mstsiswa extends Migration{
      public function up(){
         $this->forge->addField([
      		'id_siswa'	=> [
			'type'	=> 'INT',
			'constraint'	=> '11',
			'auto_increment'	=> TRUE,
		],
		'nis'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '20',
			'null'	=> TRUE,
		],
		'nisn'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '20',
			'null'	=> TRUE,
		],
		'nama_siswa'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '200',
			'null'	=> TRUE,
		],
		'jenis_kelamin'	=> [
			'type'	=> 'ENUM',
			'constraint'	=> ['Laki-Laki','Perempuan'],
			'null'	=> TRUE,
		],
		'tempat_lahir'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '100',
			'null'	=> TRUE,
		],
		'tanggal_lahir'	=> [
			'type'	=> 'DATE',
			'null'	=> TRUE,
		],
		'agama'	=> [
			'type'	=> 'ENUM',
			'constraint'	=> ['Islam','Katolik','Protestan','Budha','Hindu','Konghucu'],
			'null'	=> TRUE,
		],
		'alamat_jalan'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '200',
			'null'	=> TRUE,
		],
		'kelurahan'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '100',
			'null'	=> TRUE,
		],
		'kecamatan'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '100',
			'null'	=> TRUE,
		],
		'kode_pos'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'telepon'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '20',
			'null'	=> TRUE,
		],
		'hp'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'email'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '60',
			'null'	=> TRUE,
		],
		'foto'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '150',
			'null'	=> TRUE,
		],
		'angkatan'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '4',
			'null'	=> TRUE,
		],
		'id_kelas'	=> [
			'type'	=> 'INT',
			'constraint'	=> '11',
			'null'	=> TRUE,
		],
		'password'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '100',
			'null'	=> TRUE,
		],
		'nama_ayah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '50',
			'null'	=> TRUE,
		],
		'pendidikan_ayah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'pekerjaan_ayah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'no_hp_ayah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'nama_Ibu'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '50',
			'null'	=> TRUE,
		],
		'pendidikan_ibu'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'pekerjaan_ibu'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'no_hp_ibu'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'nama_wali'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '50',
			'null'	=> TRUE,
		],
		'pendidikan_wali'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'pekerjaan_wali'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '25',
			'null'	=> TRUE,
		],
		'no_hp_wali'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'nama_sekolah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '50',
			'null'	=> TRUE,
		],
		'status_sekolah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '15',
			'null'	=> TRUE,
		],
		'alamat_sekolah'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '250',
			'null'	=> TRUE,
		],
		'tahun_lulus'	=> [
			'type'	=> 'VARCHAR',
			'constraint'	=> '4',
			'null'	=> TRUE,
		],
		'aktif_siswa'	=> [
			'type'	=> 'CHAR',
			'constraint'	=> '1',
			'null'	=> TRUE,
			'default'	=> '1',
		],
         ]);
         $this->forge->addKey('id_siswa', TRUE);
         $this->forge->createTable('mst_siswa');
      }

      public function down(){$this->forge->dropTable('mst_siswa');}
      
}