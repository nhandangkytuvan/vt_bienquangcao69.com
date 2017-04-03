<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Term;
use View;
use Response;
use BrowserDetect;
class TestController extends Controller{
	public function db_pluck(Request $request){
		//$terms = Term::pluck('term_name')->toArray();
		//var_dump(implode(',',$terms));
		//MyAPI::getRandomeName();
		$benhs = ['Viêm tuyến tiền liệt','U nang tuyến tiền liệt','Tăng sinh tuyến tiền liệt','Phì đại tuyến tiền liệt','Rối loạn chức năng sinh dục','Liệt dương','Rối loạn cương dương','Xuất tinh sớm','Dài bao quy đầu','Viêm nhiễm hệ thống sinh dục','Viêm quy đầu','Viêm bàng quang','Viêm niệu đạo','Viêm tinh hoàn','Vô sinh nam','Tinh trùng ít','Xuất tinh ra máu','Vô tinh','Tinh trùng yếu','Sùi mào gà','Giang mai','Bệnh lậu','Mụn rộp sinh dục','Yếu sinh lý'];
        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $names = [
            'AN','ANH','BÁCH','BẢO','CÔNG','CƯỜNG','ĐỨC','DŨNG','DƯƠNG','ĐẠT','DUY','GIA','HẢI','HIẾU','HOÀNG','HUY','HÙNG','KHẢI','KHANG','KHÁNH','KHÁNH','KHOA','KHÔI','KIÊN','LÂM','LONG','LỘC','MINH','NAM','NGHĨA','NGỌC','NGUYÊN','NHÂN','PHI','PHONG','PHÚC','QUÂN','QUANG','QUỐC','TÂM','THÁI','THÀNH','THIÊN','THỊNH','TRUNG','TUẤN','TÙNG','SƠN','VIỆT','VINH','UY'];
        $phones = ['098','097','096','0169','0168','0167','0166','0165','0164','0163','0162','091','094','0123','0124','0125','0127','0129','090','093','0120','0121','0122','0126','0128'];
        
        $name_rands = array_rand($names,6);
        $phone_start_rands = array_rand($phones,1);
        $html = '';
        foreach ($name_rands as $key => $value) {
        	$phone_start_rands = array_rand($phones,1);
        	$phone_end_rands = implode('',array_rand($numbers,3));
        	$benh_rands = array_rand($benhs,1);
            $html = $html.'<p><span>Anh '.$names[$value].'</span><span>: '.$phones[$phone_start_rands].'****'.$phone_end_rands.' </span><span>'.$benhs[$benh_rands].'</span></p>';
        }
        return $html;
	}
}