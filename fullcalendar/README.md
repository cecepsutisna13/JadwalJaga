jQuery FullCalendar CRUD
========================
Basic CRUD (Create - Read - Update - Delete) functionality on jQuery FullCalendar using Codeigniter 3.0.3.

Dependencies (Included)
=======================
1. Twitter Bootstrap
2. <a href="https://github.com/jdewit/bootstrap-timepicker">Timepicker for Twitter Bootstrap</a>
3. <a href="https://github.com/mjolnic/bootstrap-colorpicker/">Bootstrap Colorpicker 2.0 for Twitter Bootstrap</a>

Instructions
============
 Use calendar.sql to build your database.

<h2>Proyek</h2>
crud-ci-versi-3-bootrstrap-versi-3-modals-ajax
<h2>Pemilik</h2>
Gita Citra Puspita
<h2>Dibuat Pada</h2>
Selasa, 15 Nov 2016

<h2>Perubahan</h2>
TIDAK ADA

<h2>Informasi tentang proyek ini</h2>
<ul>
	<li>Proyek ini menggunakan database mysql (kamu bisa mengecek file sql pada folder database).</li>
	<li>Dikembangkan dengan menggunakan CodeIgniter Versi 3.1.2</li>
	<li>Menggunakan modal dialog untuk form tambah, ubah, dan hapus.</li>
	<li>Menggunakan Ajax untuk proses penerimaan dan pengiriman data ke server.</li>
	<li>Alert menggunakan sweetalert.js.</li>
	<li>Menampilkan data pada tabel menggunakan datatables server side.</li>
	<li>Sebelum memasukan data kedalam datatables, data diubah dalam bentu json.</li>
	<li>Proyek ini menggunakan template bootstrap dan adminLTE.</li>
</ul>

<h2>Struktur file dan folder pada proyek ini</h2>
<ul>
	<li>application
		<ul>
			<li>cache</li>
			<li>config
				<ul>
					<li><b>autoload.php</b> : file pengaturan library apa saja yang secara otomatis akan di load saat sistem berjalan.</li>
					<li><b>config.php</b> : file pengaturan sistem untuk base url, dsb.</li>
					<li>constants.php</li>
					<li><b>database.php</b> : file pengaturan koneksi dengan database.</li>
					<li>doctypes.php</li>
					<li>foreign_chars.php</li>
					<li>hooks.php</li>
					<li>index.html</li>
					<li>memcached.php</li>
					<li>migration.php</li>
					<li>mimes.php</li>
					<li>profiler.php</li>
					<li><b>routes.php</b> : file pengaturan routing sistem.</li>
					<li>smileys.php</li>
					<li>user_agents.php</li>
				</ul>
			</li>
			<li>controllers
				<ul>
					<li><b>Anggota.php</b> : file controller yang mengatur proses / logic dari proses CRUD data pada tabel anggota</li>
					<li>index.html</li>
				</ul>
			</li>
			<li>core</li>
			<li>helpers</li>
			<li>hooks</li>
			<li>index.html</li>
			<li>language</li>
			<li>libraries</li>
			<li>logs</li>
			<li>models
				<ul>
					<li><b>Anggota_model.php</b> : file model Anggota yang berisi fungsi insert, update, select, dan delete data pada tabel anggota.</li>
					<li>index.html</li>
				</ul>
			</li>
			<li>third_party</li>
			<li>views
				<ul>
					<li><b>anggota_view.php</b> : file view yang berisi tampilan user interface untuk CRUD data anggota.</li>
					<li>errors</li>
					<li>index.html</li>
				</ul>
			</li>
		</ul>
	</li>
	<li><b>assets</b> : folder ini berisi file-file css dan js yang digunakan oleh sistem.
		<ul>
			<li>bootstrap</li>
			<li>dist</li>
			<li>plugins</li>
		</ul>
	</li>
	<li>database
		<ul>
			<li><b>db_anggota.sql</b> : file database yang digunakan oleh sistem.</li>
		</ul>
	</li>
	<li>index.php</li>
	<li>README.md</li>
	<li>system</li>
	<li>.htaccess</li>
</ul>

<h2>Perhatian!</h2>
<p>Pada project ini ada file .htaccess yang harus kalian buat. Posisi file .htaccess dapat kalian lihat pada struktur file dan folder.
	Berikut isi dari file .htaccess tersebut:
	<pre>
		RewriteEngine on
		RewriteCond $1 !^(assets)
		RewriteRule ^(.*)$ index.php [L]
		RewriteCond $1 !^(index.php|assets)
		RewriteRule ^(.*)$ index.php/$1 [L]
	</pre>
</p>	
<h2>FQA</h2>
<h3>Apa yang harus saya lakukan untuk mencoba project ini?</h3>
<p>
	<ul>
		<li>Kamu harus download project ini, ekstrak dan simpan di dalam folder htdocs/www.</li>
		<li>Buat database dengan nama db_anggota.</li>
		<li>Import file database db_anggota.sql yang ada pada folder database.</li>
		<li>Buat file .htaccess pada root project.</li>
		<li>Berikut isi dari file .htaccess tersebut:
			<pre>
				RewriteEngine on
				RewriteCond $1 !^(assets)
				RewriteRule ^(.*)$ index.php [L]
				RewriteCond $1 !^(index.php|assets)
				RewriteRule ^(.*)$ index.php/$1 [L]
			</pre>
		</li>
		<li>Ubah setting koneksi database pada file database.php yang ada pada path /application/config/. Ubah pada poin:
			<pre>
				'hostname' => 'localhost',
				'username' => 'root',
				'password' => '',
				'database' => 'db_anggota',
			</pre>
		</li>
		<li>Jika kamu mengubah nama folder project ini silahkan ganti setting base_url pada file config.php yang letaknya di path /application/config/
			<pre>
				$config['base_url'] = 'localhost/CRUD_CI_Bootrstrap_Modals_AJAX/';
			</pre>
		</li>
	</ul>
</p>

<h3>Hal-hal apa saja yang harus saya perhatikan untuk memahami project ini?</h3>
<p>
	<ul>
		<li>Kamu harus tahu apa itu codeIgniter.</li>
		<li>Kamu harus tahu apa itu metode MVC.</li>
		<li>Kamu harus tahu bagaimana cara menggunakan/menginstall codeIgniter.</li>
	</ul>
</p>
<h3>Apa itu CodeIgniter?</h3>
<p>
	<b>CodeIgniter</b> adalah sebuah framework php yang bersifat open source dan menggunakan metode MVC (Model, View, Controller). 
</p>
<h3>Apa itu metode MVC?</h3>
<p>
	<b>MVC</b> adalah sebuah metode pembagian proses menjadi tiga bagian Model, View, dan Controller. 
	<ul>
		<li>Model merupakan sekumpulan modul yang berisi fungsi membaca data, mengubah data, menambah data, dan menghapus data.</li>
		<li>View merupakan sekumpulan modul yang berisi tampilan user interface dari suatu sistem.</li>
		<li>Controller merupakan sekumpulan modul yang berisi logic / proses dari suatu sistem.</li>
	</ul>
</p>
<h3>Bagaimana cara menggunakan/menginstall CodeIgniter?</h3>
<p>
	Cara menggunakan/menginstall CodeIgniter sangat mudah. 
	<ul>
		<li>Download project <a href="https://codeload.github.com/bcit-ci/CodeIgniter/zip/3.1.2">ini</a>.</li>
		<li>Lalu ekstrak dan ubah nama folder menjadi CI agar mudah diakses nama projectnya pada browser.</li>
		<li>Setelah itu pindahkan project / folder CI ke dalam folder htdocs atau www.</li>
		<li>Akses project pada browser dengan mengetik <i>http://localhost/CI</i></li>
	</ul>
</p>
