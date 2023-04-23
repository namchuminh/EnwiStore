<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'index/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin 
$route['admin'] = 'admin/index';

$route['admin/dang-nhap'] = 'admin/DangNhap/index';
$route['admin/dang-xuat'] = 'admin/DangNhap/DangXuat';

$route['admin/san-pham'] = 'admin/SanPham/index';
$route['admin/them-san-pham'] = 'admin/SanPham/ThemSanPham';
$route['admin/sua-san-pham/(:any)'] = 'admin/SanPham/SuaSanPham/$1';
$route['admin/xoa-san-pham/(:any)'] = 'admin/SanPham/XoaSanPham/$1';

$route['admin/chuyen-muc'] = 'admin/ChuyenMuc/index';
$route['admin/them-chuyen-muc'] = 'admin/ChuyenMuc/ThemChuyenMuc';
$route['admin/sua-chuyen-muc/(:any)'] = 'admin/ChuyenMuc/SuaChuyenMuc/$1';
$route['admin/xoa-chuyen-muc/(:any)'] = 'admin/ChuyenMuc/XoaChuyenMuc/$1';

$route['admin/don-hang'] = 'admin/DonHang/index';
$route['admin/don-hang/(:any)'] = 'admin/DonHang/ChiTiet/$1';
$route['admin/xu-ly-don/(:any)/(:any)'] = 'admin/DonHang/XuLyDon/$1/$2';
$route['admin/don-hang-huy'] = 'admin/DonHang/DonDaHuy';
$route['admin/khoi-phuc-don/(:any)/(:any)'] = 'admin/DonHang/KhoiPhucDon/$1/$2';


$route['admin/ca-nhan'] = 'admin/CaNhan/index';


$route['admin/khach-hang'] = 'admin/KhachHang/index';
$route['admin/xu-ly-khach-hang/(:any)/(:any)'] = 'admin/KhachHang/XuLyKhachHang/$1/$2';
$route['admin/khach-hang-chan'] = 'admin/KhachHang/KhachHangChan';

$route['admin/doanh-thu'] = 'admin/index/ThongKeDoanhThu';

//Khach hang

$route['san-pham/(:any)'] = 'SanPham/index/$1';
$route['chuyen-muc/(:any)/(:any)'] = 'ChuyenMuc/ChuyenMucSanPham/$1/$2';
$route['chuyen-muc/(:any)'] = 'ChuyenMuc/ChuyenMuc/$1';
$route['dang-nhap'] = 'DangNhap/DangNhap';
$route['dang-ky'] = 'DangNhap/DangKy';
$route['dang-xuat'] = 'DangNhap/DangXuat';

$route['tim-kiem'] = 'SanPham/TimKiem';
$route['khach-hang'] = 'KhachHang/index';

$route['don-hang/(:any)'] = 'KhachHang/DonHang/$1';
$route['don-hang/huy/(:any)'] = 'KhachHang/HuyDon/$1';
$route['don-hang/giao/(:any)'] = 'KhachHang/GiaoDon/$1';

$route['gio-hang'] = 'GioHang/index';
$route['them-gio-hang'] = 'GioHang/ThemSanPham';
$route['gio-hang/sua'] = 'GioHang/SuaSanPham';
$route['gio-hang/xoa/(:any)'] = 'GioHang/XoaSanPham/$1';

$route['kiem-tra-thanh-toan/(:any)'] = 'ThanhToan/KiemTraThanhToan/$1';
$route['thanh-toan'] = 'ThanhToan/ThanhToanSanPham';
$route['xu-ly-thanh-toan'] = 'ThanhToan/XuLyThanhToan';
