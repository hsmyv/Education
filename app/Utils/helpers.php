<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Video;

function getError()
{
    return response()->json([
        'error' => $validator->errors()
    ], 400);
}


function sendUserEmail($user, $password, $template)
{

    $mailConfig = Contact::find(1);

    Config::set('mail.mailers.smtp.host', $mailConfig->host);
    Config::set('mail.mailers.smtp.port', $mailConfig->port);
    Config::set('mail.mailers.smtp.encryption', $mailConfig->encryption);
    Config::set('mail.mailers.smtp.username', $mailConfig->username);
    Config::set('mail.mailers.smtp.password', $mailConfig->password);
    Config::set('mail.from.address', $mailConfig->email);
    Config::set('mail.from.name', $mailConfig->name);

    try {
        $find = array("{name}", "{email}", "{password}");
        $replace = array($user->name, $user->email, $password);

        $body = str_replace($find, $replace, $template->body);

        Mail::raw($body, function ($message) use ($template, $user) {
            $message->to($user->email)
                //						->cc([$mailConfig->info_mail])
                ->subject($template->subject);
        });
    } catch (\Exception $e) {
        print_r($template);
        print_r($e->getMessage());
        die();
    }
    return true;
}


function words($value, $words = 100, $end = '...')
{
    return Str::limit($value, $words, $end);
}

function getTotalDuration($id)
{

    $total_duration_in_hours = Video::selectRaw('CEIL(SUM(TIME_TO_SEC(duration)) / 3600) as total_duration_in_hours')
        ->where('course_id', $id)
        ->first()
        ->total_duration_in_hours;
    return "{$total_duration_in_hours} hours";
}
