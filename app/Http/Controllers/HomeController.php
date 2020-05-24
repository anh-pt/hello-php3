<?php
    //Đây chỉ là một ví dụ nhỏ, bạn chưa cần để ý đến controller này nhiều
class HomeController extends Controller {
    public function getFirst(){
        return 'this is First action';
    }
    public function getSecond(){
        return 'this is Second action';
    }
    public function postThird(){
        return 'this is Third action';
    }
}