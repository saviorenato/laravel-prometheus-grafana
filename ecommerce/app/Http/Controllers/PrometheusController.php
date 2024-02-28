<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class PrometheusController extends Controller
{
    public function metrics()
    {


        // $user = Redis::get('user:profile:10');
        // return $user;

    }

    // public function registry($group = 'sendgrid', $name = 'solicitacao_aprovacao_default', $requester = 'sisar')
    // {
    //     $registry = CollectorRegistry::getDefault();
    //     $gauge = $registry->getOrRegisterGauge($group, $name, $group.'_'.$name, ['requester']);
    //     $gauge->set(1, [$requester]);
    // }

}
