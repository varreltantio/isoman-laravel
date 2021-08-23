<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class IntroductionConversation extends Conversation
{
    public function askName()
    {
        $this->ask('Siapa nama kamu?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'name' => $answer->getText()
            ]);

            $this->say('Halo ' . $answer->getText());

            $this->askAddress();
        });
    }

    public function askAddress()
    {
        $this->ask('dimana alamat rumahmu?', function (Answer $answer) {
            // save answer to storage
            $this->bot->userStorage()->save([
                'address' => $answer->getText()
            ]);

            $this->askMobile();
        });
    }

    public function askMobile()
    {
        $this->ask('berapa nomor telepon kamu?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'mobile' => $answer->getText()
            ]);

            $this->say('Terimakasih');

            // move to another conversation
            $this->askFever();
        });
    }

    public function askFever()
    {
        $question = Question::create('Apakah anda demam (suhu tubuh di atas 38 derajat Celsius)?')->callbackId('select_symptoms1')->addButtons([
            Button::create('YA')->value('ya'),
            Button::create('TIDAK')->value('tidak')
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'fever' => $answer->getValue()
                ]);

                $this->askDryCough();
            } else {
                return $this->repeat('Mohon maaf harap pilih sesuai pilihan diatas.');
            }
        });
    }

    public function askDryCough()
    {
        $question = Question::create('Apakah anda memiliki gejala batuk kering?')->callbackId('select_symptoms2')->addButtons([
            Button::create('YA')->value('ya'),
            Button::create('TIDAK')->value('tidak')
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'dryCough' => $answer->getValue()
                ]);

                $this->askHardToBreathe();
            } else {
                return $this->repeat('Mohon maaf harap pilih sesuai pilihan diatas.');
            }
        });
    }

    public function askHardToBreathe()
    {
        $question = Question::create('Apakah anda merasakan sesak napas?')->callbackId('select_symptoms3')->addButtons([
            Button::create('YA')->value('ya'),
            Button::create('TIDAK')->value('tidak')
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'hardToBreathe' => $answer->getValue()
                ]);

                $this->confirmSymptoms();
            } else {
                return $this->repeat('Mohon maaf harap pilih sesuai pilihan diatas.');
            }
        });
    }

    public function confirmSymptoms()
    {
        $user = $this->bot->userStorage()->find();

        $message = '---------------------------- <br>';
        $message .= 'Nama : ' . $user->get('name') . '<br>';
        $message .= 'Alamat : ' . $user->get('address') . '<br>';
        $message .= 'No HP : ' . $user->get('mobile') . '<br>';
        $message .= 'Apakah anda demam (suhu tubuh di atas 38 derajat Celsius)? ' . $user->get('fever') . '<br>';
        $message .= 'Apakah anda memiliki gejala batuk kering? ' . $user->get('dryCough') . '<br>';
        $message .= 'Apakah anda merasakan sesak napas? ' . $user->get('hardToBreathe') . '<br>';

        $this->say('Terimakasih, telah mengisi beberapa pertanyaan. Berikut detail informasi : <br>' . $message);
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askName();
    }
}
