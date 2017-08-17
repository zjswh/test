<?php
    namespace app\schoolapp\controller;

    use app\schoolapp\model\User;
    use think\cache\driver\Memcache;
    // use think\cache\driver\Redis;
    class Demo
    {
        public function show()
        {
            // $user = User::all();
            // print_r($user);
            return view('',['name'=>'hello'],['__PUBLIC__'=>'public']);
        }

        public function save()
        {
            // $memcache = new Memcache;
            $user = User::all();
            // $memcache->set('db','schoolapp');
            // echo $memcache->get('db');
            $redis = new \Redis();
            $redis->connect('127.0.0.1',6379);
            foreach($user as $key=>$value){
                $redis->hset($key,'id',$value->id);
                $redis->hset($key,'nickname',$value->nickname);
            }
            // echo $redis->hmGet(0,array('id','nickname'));
            // echo $redis->hget(0,'id');
           print_r($redis->hgetall(0));
        }
    }
?>