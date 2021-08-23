<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\IntroductionConversation;
use App\Conversations\DrugConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function symptoms(BotMan $bot)
    {
        $bot->startConversation(new IntroductionConversation());
    }

    public function drug(BotMan $bot)
    {
        $bot->startConversation(new DrugConversation());
    }
}
