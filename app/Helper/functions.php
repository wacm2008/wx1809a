<?php
    use Illuminate\Support\Facades\Redis;
    //获取access_token
    function getAccessToken(){
        $key='wx_access_token';
        $token=Redis::get($key);
        if($token){
            return $token;
        }else{
            $url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.env('WX_APPID').'&secret='.env('WX_APPSECRET');
            $response=file_get_contents($url);
            $arr=json_decode($response,true);
            if(isset($arr['access_token'])){
                Redis::set($key,$arr['access_token']);
                Redis::expire($key,3600);
                $toke=$arr['access_token'];
                return $token;
            }else{
                return false;
            }
        }
    }
    //获取jsapi_ticket
    function getJsapiTicket(){
        $key='wx_jsapi_ticket';
        $ticket=Redis::get($key);
        if($ticket){
            return $ticket;
        }else{
            $token=getAccessToken();
            $url='https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='.$token.'&type=jsapi';
            $response=file_get_contents($url);
            $arr=json_decode($response,true);
            if(isset($arr['ticket'])){
                Redis::set($key,$arr['ticket']);
                Redis::expire($key,3600);
                $ticket=$arr['ticket'];
                return $ticket;
            }else{
                return false;
            }
        }
    }