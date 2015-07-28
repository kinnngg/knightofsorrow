<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test',function(){
    dd($accuracy);
});

Route::get('/', ['as' => 'home', function () {

    /*$countries = App\Country::paginate(30);

    return view('statistics.countries',['countries' => $countries]);*/
/*
    $data1 = '{"0":"DUYFu8ao","1":"1.0.0","2":"10480","3":"1437386880","4":"11cc6f19","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19371","16":"569","17":"900","19":"1","21":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"86","11":"1","17":"1","38":"4"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"71","8":"1","9":"1","15":"1","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"66","38":"2"}]}';

    $data2 = '{"0":"AIq1F3LG","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19301","16":"499","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"19"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"4"}]}';

    $data3 = '{"0":"FTuq4Tox","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19331","16":"529","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"48","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"33","38":"1"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"28","38":"1"}]}';

    $data4 = '{"0":"aoCjMXOs","1":"1.0.0","2":"10480","3":"1437386940","4":"6512549a","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19457","16":"656","17":"900","19":"1","20":"11","21":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","2":"1","5":"YUG_X_Gmr","7":"98","11":"1","17":"1","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"154","8":"1","9":"1","11":"1","14":"2","15":"1","17":"1","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"149","8":"10","13":"2","16":"2","38":"2"},{"0":"6","1":"182.181.184.161","5":"YUG_X_Gmr","7":"58","8":"1","9":"1","15":"1","38":"2"}]}';

    $data5 = '{"0":"gZzV5JGQ","1":"1.0.0","2":"10480","3":"1437386880","4":"11cc6f19","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19362","16":"560","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"77","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"62","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"58","38":"2"}]}';

    $data6 = '{"0":"hdr5q4FG","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19343","16":"541","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"60","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"44","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"40","38":"2"}]}';

    $data6 = '{"0":"jWO6l3xa","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19339","16":"537","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"56","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"40","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"36","38":"2"}]}';

    $data7 = '{"0":"kZ4Jk2DK","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19334","16":"532","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"51","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"36","38":"2"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"32","38":"2"}]}';

    $data8 = '{"0":"yTuq4Toy","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19331","16":"529","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"48","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"33","38":"1"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"28","38":"1"}]}';

    $data9 = '{"0":"gcqo6buP","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19331","16":"529","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"48","38":"2"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"33","38":"1"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo","7":"28","38":"1"}]}';

    $data10 = '{"0":"rTjAGcAF","1":"1.0.0","2":"10480","3":"1437386820","4":"481b525e","6":"1.0","7":"[c=FFFF00]WWW.KNIGHTofSORROW.TK (Antics)","11":"3","12":"12","13":"1","14":"5","15":"19301","16":"499","17":"900","19":"1","22":"0","27":[{"0":"0","1":"182.185.80.115","2":"1","5":"YUG_X_Gmr","7":"67","38":"2"},{"0":"1","1":"182.185.83.84","2":"1","5":"YUG_X_Gmr","7":"139"},{"0":"2","1":"182.181.216.180","2":"1","5":"||KhaN||Namo(VIEW)","7":"247","11":"1","17":"1","38":"4"},{"0":"3","1":"182.181.184.161","5":"YUG_X_Gmr","7":"20"},{"0":"4","1":"182.185.27.16","5":"RainBoW","6":"1","7":"4"},{"0":"5","1":"182.181.216.180","5":"||KhaN||_Namo"}]}';


    $s1 = new App\Server\ServerTracker(json_decode($data1,true));
    $s2 = new App\Server\ServerTracker(json_decode($data2,true));
    $s3 = new App\Server\ServerTracker(json_decode($data3,true));
    $s4 = new App\Server\ServerTracker(json_decode($data4,true));
    $s5 = new App\Server\ServerTracker(json_decode($data5,true));
    $s6 = new App\Server\ServerTracker(json_decode($data6,true));
    $s7 = new App\Server\ServerTracker(json_decode($data7,true));
    $s8 = new App\Server\ServerTracker(json_decode($data8,true));
    $s9 = new App\Server\ServerTracker(json_decode($data9,true));
    $s10 = new App\Server\ServerTracker(json_decode($data10,true));
    $s1->track();
    $s2->track();
    $s3->track();
    $s4->track();
    $s5->track();
    $s6->track();
    $s7->track();
    $s8->track();
    $s9->track();
    $s10->track();
    */

    $topPlayers = App\PlayerTotal::orderBy('position')->limit(10)->get();
    $latestGames = App\Game::orderBy('created_at','desc')->limit(5)->get();

    //return (Carbon\Carbon::now()->subYears(100));

    $player = App\Player::first();

    $AllTime = new \Illuminate\Support\Collection();
    $PastWeek = new \Illuminate\Support\Collection();
    $PastMonth = new \Illuminate\Support\Collection();
    $PastYear = new \Illuminate\Support\Collection();

    $AllTime->totalScore = $player->getBestIn('SUM(score) as totalscore','totalscore');
    $AllTime->highestScore = $player->getBestIn('MAX(score) as highestscore','highestscore');
    $AllTime->totalArrests = $player->getBestIn('SUM(arrests) as totalarrests','totalarrests');
    $AllTime->totalArrested = $player->getBestIn('SUM(arrested) as totalarrested','totalarrested');
    $AllTime->totalKills = $player->getBestIn('SUM(kills) as totalkills','totalkills');
    $AllTime->totalDeaths = $player->getBestIn('SUM(deaths) as totaldeaths','totaldeaths');
    $AllTime->bestArrestStreak = $player->getBestIn('MAX(arrest_streak) as best_arrest_streak','best_arrest_streak');
    $AllTime->bestKillStreak = $player->getBestIn('MAX(kill_streak) as best_kill_streak','best_kill_streak');
    $AllTime->bestDeathStreak = $player->getBestIn('MAX(death_streak) as best_death_streak','best_death_streak');
    $AllTime->totalTeamKills = $player->getBestIn('SUM(team_kills) as totalteamkills','totalteamkills');
    $AllTime->totalTimePlayed = $player->getBestIn('SUM(time_played) as totaltimeplayed','totaltimeplayed');
    $AllTime->bestScorePerMin = $player->getBestIn('SUM(score)/SUM(time_played)*60 as scorepermin','scorepermin');

    $pastWeekDate = \Carbon\Carbon::now()->subWeek(1);
    $PastWeek->totalScore = $player->getBestIn('SUM(score) as totalscore','totalscore',$pastWeekDate);
    $PastWeek->highestScore = $player->getBestIn('MAX(score) as highestscore','highestscore',$pastWeekDate);
    $PastWeek->totalArrests = $player->getBestIn('SUM(arrests) as totalarrests','totalarrests',$pastWeekDate);
    $PastWeek->totalArrested = $player->getBestIn('SUM(arrested) as totalarrested','totalarrested',$pastWeekDate);
    $PastWeek->totalKills = $player->getBestIn('SUM(kills) as totalkills','totalkills',$pastWeekDate);
    $PastWeek->totalDeaths = $player->getBestIn('SUM(deaths) as totaldeaths','totaldeaths',$pastWeekDate);
    $PastWeek->bestArrestStreak = $player->getBestIn('MAX(arrest_streak) as best_arrest_streak','best_arrest_streak',$pastWeekDate);
    $PastWeek->bestKillStreak = $player->getBestIn('MAX(kill_streak) as best_kill_streak','best_kill_streak',$pastWeekDate);
    $PastWeek->bestDeathStreak = $player->getBestIn('MAX(death_streak) as best_death_streak','best_death_streak',$pastWeekDate);
    $PastWeek->totalTeamKills = $player->getBestIn('SUM(team_kills) as totalteamkills','totalteamkills',$pastWeekDate);
    $PastWeek->totalTimePlayed = $player->getBestIn('SUM(time_played) as totaltimeplayed','totaltimeplayed',$pastWeekDate);
    $PastWeek->bestScorePerMin = $player->getBestIn('SUM(score)/SUM(time_played)*60 as scorepermin','scorepermin',$pastWeekDate);

    $pastMonthDate = \Carbon\Carbon::now()->subMonth(1);
    $PastMonth->totalScore = $player->getBestIn('SUM(score) as totalscore','totalscore',$pastMonthDate);
    $PastMonth->highestScore = $player->getBestIn('MAX(score) as highestscore','highestscore',$pastMonthDate);
    $PastMonth->totalArrests = $player->getBestIn('SUM(arrests) as totalarrests','totalarrests',$pastMonthDate);
    $PastMonth->totalArrested = $player->getBestIn('SUM(arrested) as totalarrested','totalarrested',$pastMonthDate);
    $PastMonth->totalKills = $player->getBestIn('SUM(kills) as totalkills','totalkills',$pastMonthDate);
    $PastMonth->totalDeaths = $player->getBestIn('SUM(deaths) as totaldeaths','totaldeaths',$pastMonthDate);
    $PastMonth->bestArrestStreak = $player->getBestIn('MAX(arrest_streak) as best_arrest_streak','best_arrest_streak',$pastMonthDate);
    $PastMonth->bestKillStreak = $player->getBestIn('MAX(kill_streak) as best_kill_streak','best_kill_streak',$pastMonthDate);
    $PastMonth->bestDeathStreak = $player->getBestIn('MAX(death_streak) as best_death_streak','best_death_streak',$pastMonthDate);
    $PastMonth->totalTeamKills = $player->getBestIn('SUM(team_kills) as totalteamkills','totalteamkills',$pastMonthDate);
    $PastMonth->totalTimePlayed = $player->getBestIn('SUM(time_played) as totaltimeplayed','totaltimeplayed',$pastMonthDate);
    $PastMonth->bestScorePerMin = $player->getBestIn('SUM(score)/SUM(time_played)*60 as scorepermin','scorepermin',$pastMonthDate);

    $pastYearDate = \Carbon\Carbon::now()->subYear(1);
    $PastYear->totalScore = $player->getBestIn('SUM(score) as totalscore','totalscore',$pastYearDate);
    $PastYear->highestScore = $player->getBestIn('MAX(score) as highestscore','highestscore',$pastYearDate);
    $PastYear->totalArrests = $player->getBestIn('SUM(arrests) as totalarrests','totalarrests',$pastYearDate);
    $PastYear->totalArrested = $player->getBestIn('SUM(arrested) as totalarrested','totalarrested',$pastYearDate);
    $PastYear->totalKills = $player->getBestIn('SUM(kills) as totalkills','totalkills',$pastYearDate);
    $PastYear->totalDeaths = $player->getBestIn('SUM(deaths) as totaldeaths','totaldeaths',$pastYearDate);
    $PastYear->bestArrestStreak = $player->getBestIn('MAX(arrest_streak) as best_arrest_streak','best_arrest_streak',$pastYearDate);
    $PastYear->bestKillStreak = $player->getBestIn('MAX(kill_streak) as best_kill_streak','best_kill_streak',$pastYearDate);
    $PastYear->bestDeathStreak = $player->getBestIn('MAX(death_streak) as best_death_streak','best_death_streak',$pastYearDate);
    $PastYear->totalTeamKills = $player->getBestIn('SUM(team_kills) as totalteamkills','totalteamkills',$pastYearDate);
    $PastYear->totalTimePlayed = $player->getBestIn('SUM(time_played) as totaltimeplayed','totaltimeplayed',$pastYearDate);
    $PastYear->bestScorePerMin = $player->getBestIn('SUM(score)/SUM(time_played)*60 as scorepermin','scorepermin',$pastYearDate);

    $array = [
        'topPlayers' => $topPlayers,
        'latestGames' => $latestGames,
        'AllTime' => $AllTime,
        'PastWeek' => $PastWeek,
        'PastMonth' => $PastMonth,
        'PastYear' => $PastYear
    ];
    return view('home',$array);
}]);


Route::get('api/server-chats/get',function(){
    $chats = App\Chat::orderBy('created_at','DESC')->limit(35)->get();
    foreach($chats as $chat)
    {
        print($chat->message)."<br>";
    }
});
Route::get('api/server-query/get',function(){
    $data = new Kinnngg\Swat4query\Server('knightofsorrow.tk',10483);
    $data->query();
    return $data;
});

/**
 * Statistics Route Controllers
 */
Route::group(['prefix' => 'statistics'],function(){
    Route::get('/',['as' => 'statistics-home', 'uses' => 'StatisticsController@getTopPlayers']);
    Route::get('round-reports',['as' => 'round-reports', 'uses' => 'StatisticsController@getRoundReports']);
    Route::get('top-players',['as' => 'top-players', 'uses' => 'StatisticsController@getTopPlayers']);
    Route::get('player/{id?}/{name}/',['as' => 'player-detail', 'uses' => 'StatisticsController@getPlayerDetails']);
    Route::get('round-reports/detail/{id}',['as' => 'round-detail', 'uses' => 'StatisticsController@getRoundDetails']);

    Route::get('ajax/round-player/{id}',['as' => 'ajax-round-player', 'uses' => 'StatisticsController@getRoundPlayerWithAjax']);
});


Route::group(['prefix' => 'servertracker'], function(){
    /**
     * Server round end Controller
     *
     * This route will handle the posting and storage of all data coming from
     * server to the website as a POST request
     */
    Route::post('rounds/{key}/',['as' => 'server-tracker', function($key){
        if($key != env('SERVER_QUERY_KEY')) {
            Log::error("Error! Server key invalid. Can't save round record to Database.");
        }
        else {
            $game = new App\Server\ServerTracker($_POST);
            $game->track();
        }
    }]);

    /**
     * Server Chat messages Controller
     *
     * This route will handle the posting and storage of all chats from server
     * to the website db as a GET request
     */
    Route::get('chats/{key}/',['as' => 'chat-tracker',function($key){
        if($key != env('SERVER_QUERY_KEY')) {
            Log::error("Error! Server key invalid. Can't save chat record to Database.");
        }
        else {
            $chat = new App\Server\ChatTracker($_GET);
            $chat->track();
        }
    }]);
});