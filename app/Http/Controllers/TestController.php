<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store1(Request $req) {
        $req->session()->put('age', $req->input('age'));

        return view('Q2');
    }

    public function store2(Request $req) {

        $req->session()->put('Q2', $req->input('num'));

        return view('Q3');
    }

    public function store3(Request $req) {

        $req->session()->put('Q3', $req->input('num'));

        return view('Q4');
    }

    public function store4(Request $req) {

        $req->session()->put('Q4', $req->input('num'));

        return view('Q5');
    }

    public function store5(Request $req) {

        $req->session()->put('trip', $req->input('trip'));

        return view('Q6');
    }

    public function store6(Request $req) {
        // $age = 0;
        // $trip = 0;
        // $trend = 0;
        // $num1 = 0;
        // $num2 = 0;
        // $num3 = 0;
        // $resultnum = 0;

        $req->session()->put('trend', $req->input('trend'));

        $age = session()->get('age');
        $trip = session()->get('trip');
        $trend = session()->get('trend');
        $num1 = session()->get('Q2');
        $num2 = session()->get('Q3');
        $num3 = session()->get('Q4');

        // intval($num1);
        // intval($num2);
        // intval($num3);

        $resultnum = $num1 + $num2 + $num3;

        // session()->put('result', $resultnum);
        // return view('Q1');
        // 1=teen 2=middle 3=high
        // 1=domestic 2=foreign
        // 1=major 2=minor

        // intval($age);
        // intval($trip);
        // intval($trend);
        // stringval($resultnum);

        // $resultnum->session()->put('result');


        if($age == 'teen') {
            if($trip == 'domestic') {
                if($trend == 'major') {
                    // 10代、国内、メジャー
                    if(intval($resultnum) < 2) {
                        return view('result_aimer');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_sakamichi');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_lisa');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_uverworld');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_yoasobi');
                    }
                }
                elseif($trend == 'minor') {
                    // 10代、国内、マイナー
                    if($resultnum < 2) {
                        return view('result_fripside');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_blueencount');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_heartbeat');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_alia');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_alia');
                    }
                }
            }
            elseif ($trip == 'foreign') {
                if($trend == 'major') {
                    // 10代、海外、メジャー
                    if($resultnum < 2) {
                        return view('result_theoffspring');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_bmth');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_patd');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_theoffspring');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_trf');
                    }
                }
                elseif($trend == "minor") {
                    // 10代、海外、マイナー
                    if($resultnum < 2) {
                        return view('result_btb');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_btb');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_tonightalive');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_amaranthe');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_atc');
                    }
                }
            }
            else {
                return view('Q1');
            }
        }
        elseif($age == 'middle') {
            if($trip == 'domestic') {
                if($trend == 'major') {
                    // 20代、国内、メジャー
                    if(intval($resultnum) < 2) {
                        return view('result_eiraoi');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_yorushika');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_mwam');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_yoasobi');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_kobukuro');
                    }
                }
                elseif($trend == 'minor') {
                    // 20代、国内、マイナー
                    if(intval($resultnum) < 2) {
                        return view('result_wagakkiband');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_claris');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_eiraoi');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_reol');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_reol');
                    }
                }
            }
            elseif($trip == 'foreign') {
                if($trend == 'major') {
                    // 20代、海外、メジャー
                    if(intval($resultnum) < 2) {
                        return view('result_bmth');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_heartbeat');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_skillet');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_queen');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_atc');
                    }
                }
                if($trend == 'minor') {
                    // 20代、海外、マイナー
                    if(intval($resultnum) < 2) {
                        return view('result_palewaves');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_palewaves');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_btb');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_atc');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_amaranthe');
                    }
                }
            }
        }
        elseif($age == 'high') {
            if($trip == 'domestic') {
                if($trend == 'major') {
                    // 30代、国内、メジャー
                    if(intval($resultnum) < 2) {
                        return view('result_jamproject');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_shiinaringo');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_thealfee');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_tmrevolution');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_kinggnu');
                    }
                }
                elseif($trend == 'minor') {
                    // 30代、国内、マイナー
                    if(intval($resultnum) < 2) {
                        return view('result_wagakkiband');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_deco27');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_bish');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_garnidelia');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_spyair');
                    }
                }
            }
            elseif($trip == 'foreign') {
                if($trend == 'major') {
                    // 30代、海外、メジャー
                    if(intval($resultnum) < 2) {
                        return view('result_theoffspring');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_queen');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_bmth');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_patd');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_tonightalive');
                    }
                }
                elseif($trend == 'minor') {
                    // 30代、海外、マイナー
                    if(intval($resultnum) < 2) {
                        return view('result_amaranthe');
                    }
                    elseif($resultnum >= 2 && $resultnum < 4) {
                        return view('result_amaranthe');
                    }
                    elseif($resultnum >= 4 && $resultnum < 6) {
                        return view('result_palewaves');
                    }
                    elseif($resultnum >= 6 && $resultnum < 8) {
                        return view('result_theoffspring');
                    }
                    elseif($resultnum >= 8) {
                        return view('result_atc');
                    }
                }
            }
        }
        // else {
        //     return view('Q1');
        // }

        // $this->result();
    }
}

    // public function result() {
    //     $age = session()->get('age');
    //     $trip = session()->get('trip');
    //     $trend = session()->get('trend');
    //     $num1 = session()->get('Q2');
    //     $num2 = session()->get('Q3');
    //     $num3 = session()->get('Q4');

    //     $resultnum = $num1 + $num2 + $num3;

    //     if($age == 'teen') {
    //         if($trip == 'domestic') {
    //             if($trend == 'major') {
    //                 // 10代、国内、メジャー
    //                 if($resultnum < 2) {
    //                     return view('result_aimer');
    //                 }
    //                 elseif($resultnum >= 2 && $resultnum < 4) {
    //                     return view('result_sakamichi');
    //                 }
    //                 elseif($resultnum >= 4 && $resultnum < 6) {
    //                     return view('result_lisa');
    //                 }
    //                 elseif($resultnum >= 6 && $resultnum < 8) {
    //                     return view('result_uverworld');
    //                 }
    //                 elseif($resultnum >= 8) {
    //                     return view('result_yoasobi');
    //                 }
    //             }
    //             elseif($trend == 'minor') {
    //                 // 10代、国内、マイナー
    //                 if($resultnum < 2) {
    //                     return view('result_fripside');
    //                 }
    //                 elseif($resultnum >= 2 && $resultnum < 4) {
    //                     return view('result_blueencount');
    //                 }
    //                 elseif($resultnum >= 4 && $resultnum < 6) {
    //                     return view('result_heartbeat');
    //                 }
    //                 elseif($resultnum >= 6 && $resultnum < 8) {
    //                     return view('result_alia');
    //                 }
    //                 elseif($resultnum >= 8) {
    //                     return view('result_alia');
    //                 }
    //             }
    //         }
    //         elseif ($trip == 'foreign') {
    //             if($trend == 'major') {
    //                 // 10代、海外、メジャー
    //                 if($resultnum < 2) {
    //                     return view('result_theoffspring');
    //                 }
    //                 elseif($resultnum >= 2 && $resultnum < 4) {
    //                     return view('result_bmth');
    //                 }
    //                 elseif($resultnum >= 4 && $resultnum < 6) {
    //                     return view('result_patd');
    //                 }
    //                 elseif($resultnum >= 6 && $resultnum < 8) {
    //                     return view('result_theoffspring');
    //                 }
    //                 elseif($resultnum >= 8) {
    //                     return view('result_trf');
    //                 }
    //             }
    //             elseif($trend == 'minor') {
    //                 // 10代、海外、マイナー
    //                 if($resultnum < 2) {
    //                     return view('result_btb');
    //                 }
    //                 elseif($resultnum >= 2 && $resultnum < 4) {
    //                     return view('result_btb');
    //                 }
    //                 elseif($resultnum >= 4 && $resultnum < 6) {
    //                     return view('result_tonightalive');
    //                 }
    //                 elseif($resultnum >= 6 && $resultnum < 8) {
    //                     return view('result_alia');
    //                 }
    //                 elseif($resultnum >= 8) {
    //                     return view('result_alia');
    //                 }
    //             }
    //         }
    //     }
    // }
