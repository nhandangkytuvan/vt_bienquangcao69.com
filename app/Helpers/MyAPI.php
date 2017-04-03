<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Term;
use Session;
class MyAPI {
    public static function getUrlPost($post_id){
        $post = Post::find($post_id);
        if($post){
        	return url($post->post_alias.'/'.$post->id.'.htm');
        }else{
        	return url('/');
        }
    }
    public static function getUrlTerm($term_id){
        $term = Term::find($term_id);
        if($term){
        	return url($term->term_alias.'/'.$term->id);
        }else{
        	return url('/');
        }
    }
    public static function limitWord($text, $limit) {
        $words = explode(" ",$text);
        return implode(" ",array_splice($words,0,$limit));
    }
    public static function getPost($post_id){
        return Post::find($post_id);
    }
    public static function getTerm($term_id){
        return Term::find($term_id);
    }
    public static function getRandomeName(){
        $benhs = ['Viêm tuyến tiền liệt','U nang tuyến tiền liệt','Tăng sinh tuyến tiền liệt','Phì đại tuyến tiền liệt','Rối loạn chức năng sinh dục','Liệt dương','Rối loạn cương dương','Xuất tinh sớm','Dài bao quy đầu','Viêm nhiễm hệ thống sinh dục','Viêm quy đầu','Viêm bàng quang','Viêm niệu đạo','Viêm tinh hoàn','Vô sinh nam','Tinh trùng ít','Xuất tinh ra máu','Vô tinh','Tinh trùng yếu','Sùi mào gà','Giang mai','Bệnh lậu','Mụn rộp sinh dục','Yếu sinh lý'];
        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $names = [
            'AN','ANH','BÁCH','BẢO','CÔNG','CƯỜNG','ĐỨC','DŨNG','DƯƠNG','ĐẠT','DUY','GIA','HẢI','HIẾU','HOÀNG','HUY','HÙNG','KHẢI','KHANG','KHÁNH','KHÁNH','KHOA','KHÔI','KIÊN','LÂM','LONG','LỘC','MINH','NAM','NGHĨA','NGỌC','NGUYÊN','NHÂN','PHI','PHONG','PHÚC','QUÂN','QUANG','QUỐC','TÂM','THÁI','THÀNH','THIÊN','THỊNH','TRUNG','TUẤN','TÙNG','SƠN','VIỆT','VINH','UY'];
        $phones = ['098','097','096','0169','0168','0167','0166','0165','0164','0163','0162','091','094','0123','0124','0125','0127','0129','090','093','0120','0121','0122','0126','0128'];
        
        $html = '';
        $name_rands = array_rand($names,6);
        $phone_start_rands = array_rand($phones,1);
        foreach ($name_rands as $key => $value) {
            $phone_start_rands = array_rand($phones,1);
            $phone_end_rands = implode('',array_rand($numbers,3));
            $benh_rands = array_rand($benhs,1);
            $html = $html.'<p><span>Anh '.ucfirst($names[$value]).'</span><span>: '.$phones[$phone_start_rands].'****'.$phone_end_rands.' </span><span>'.$benhs[$benh_rands].'</span></p>';
        }
        //Session::put('random_names',$html);
        return $html;
    }
}