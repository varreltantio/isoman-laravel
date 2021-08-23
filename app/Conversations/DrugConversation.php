<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class DrugConversation extends Conversation
{
    public function askDrug()
    {
        $this->say("Varian Alfa (B.1.1.7) yang pada awalnya ditemukan di Inggris sejak September 2020. <br>
        Varian Beta (B.1.351/B.1.351.2/B.1.351.3) yang pada awalnya ditemukan di Afrika Selatan sejak Mei 2020. <br>
        Varian Gamma (P.1/P.1.1/P.1.2) yang pada awalnya ditemukan di Brazil sejak November 2020. <br>
        Varian Delta (B.1.617.2/AY.1/AY.2/AY.3) yang pada awalnya ditemukan di India sejak Oktober 2020. <br>
        Varian Eta (B.1.525) yang penyebarannya ditemukan di banyak negara sejak Desember 2020. <br>
        Varian Iota (B.1526) yang pada awalnya ditemukan di Amerika sejak November 2020. <br>
        Varian Kappa (B.1617.1) yang pada awalnya ditemukan di India sejak Oktober 2020. <br>
        Varian Lamda (c.37) yang pada awalnya ditemukan di Peru sejak Desember 2020.");
    }
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askDrug();
    }
}
