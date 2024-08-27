<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallbackController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'type' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Отправка письма владельцу сайта
        Mail::send([], [], function ($message) use ($data) {
            $message->from('remontpodkluch.24@yandex.com', 'remontpodkluch24')
                ->to('glavzaim.oem@gmail.com')
                ->subject('Новое сообщение с формы')
                ->html('У вас новое сообщение на сайте:<br>Имя: ' . $data['name'] . '<br>Телефон: ' . $data['phone'] . '<br>Тип замера: ' . $data['type'] . '<br>Сообщение: ' . $data['message']);
        });




        return response()->json(['message' => 'Ваше сообщение успешно отправлено!']);
    }
}
// glavzaim.oem@gmail.com
