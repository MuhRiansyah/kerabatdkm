<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';

 * |
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//$route['default_controller'] = "c_loginPeserta";//untuk halaman login
$route['default_controller'] = "c_login";//untuk halaman login
$route['404_override'] = '';

/* grocery crud tidak memudahkan kita untuk membuat routes
 * karena banyaknya fungsi dalam satu fungsi crud-render(), antara lain
 * add,export,print,search,list,delete dan lain-lain yg klo kita buat routes berarti 
 * kita harus membuat routes untuk masing masing fungsi tadi
 * jadi sebaiknya sesuaikan nama di fungsi contoller dgn nama url (bentuk defaultnya)
 */

//$route['kegiatan'] = 'kegiatan_controller/index';
//$route['berita'] = 'berita_controller/index';
//$route['penulis'] = 'penulis_controller/index';

$route['login'] = "c_login";
$route['ceklogin'] = "c_login/ceklogin";
$route['peserta/logout'] = "c_login/logout";

// danar & gugun ROUTES
$route['administrasi'] = "c_pengelola_usulan";
$route['administrasi/login'] = "c_login";
$route['administrasi/logout'] = "c_login/logout";
$route['administrasi/ceklogin'] = "c_login/ceklogin";

//nanti kalau udah paham pewarisan baru dipisah-pisah menjadi profil, curhat, kegiatan dll...
//$route['administrasi/beranda'] = "c_beranda/index";
$route['administrasi/beranda'] = "c_pengelola_profil/beranda";

$route['administrasi/gantisandi'] = "c_pengelola_profil/ganti_sandi";
$route['administrasi/gantisandi/:any'] = "c_pengelola_profil/ganti_sandi";



$route['administrasi/usulan'] = "c_pengelola_usulan/index";

$route['administrasi/profil'] = "c_pengelola_profil/index";

$route['administrasi/profil/ubahprofil'] = "c_pengelola_profil/ubah_profil";
$route['administrasi/profil/ubahprofil/:any'] = "c_pengelola_profil/ubah_profil";
$route['administrasi/profil/saudaraku'] = "c_pengelola_profil/profil_saudaraku";
$route['administrasi/profil/saudaraku/:num'] = "c_pengelola_profil/profil_saudaraku";

$route['administrasi/profil/saudariku'] = "c_pengelola_profil/profil_saudaraku";
$route['administrasi/profil/saudariku/:num'] = "c_pengelola_profil/profil_saudaraku";

$route['administrasi/curhat'] = "c_pengelola_curhat/index";
$route['administrasi/kegiatan'] = "c_pengelola_kegiatan/index";

$route['administrasi/statistikpresensipertemuan/:any'] = "c_pengelola_usulan/listStatistikPresensi";

/* End of file routes.php */
/* Location: ./application/config/routes.php */