<?php

namespace App\Notifications;

use Lang;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications;

class ResetPassword extends Notifications\ResetPassword {

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        return (new MailMessage)
            ->subject(Lang::getFromJson('Reset Password Notification'))
            ->line(Lang::getFromJson('You are receiving this email because we received a password reset request for your account.'))
            ->action(Lang::getFromJson('Reset Password'), url(config('app.url').route('public.password.reset', $this->token, false)))
            ->line(Lang::getFromJson('If you did not request a password reset, no further action is required.'));
    }
}
