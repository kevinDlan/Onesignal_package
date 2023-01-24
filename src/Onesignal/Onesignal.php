<?php

namespace Kevin\Onesignal;

use Illuminate\Support\Facades\Http;

class Onesignal
{

    public static function sendNotification(String $heading,String $playerId, String $notif)
    {
        try
        {
            $content = array("fr" => $notif);

            $headings = array("fr" => $heading);

            $field = array(
                'app_id' => env("APP_ID"),
                'included_segments' => array('included_player_ids'),
                'include_player_ids' => array($playerId),
                'data' => array("foo" => "bar"),
                'content_available' => true,
                'small_icon' => "ic_notification_icon",
                'contents' => $content,
                'headings' => $headings,
            );

            Http::withHeaders(
                [
                    "Content-type" => "application/json; charset=utf-8",
                    "Authorization" => "Basic " . env("APP_API_KEY"),
                ]
            )->post("https://onesignal.com/api/v1/notifications", $field);
        }catch(\Throwable $th)
        {
            throw $th->getMessage();
        }
    }
}