<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController
{
    public function store(Request $request)
    {
        // Validate data, required at least phone or email
        try {
            $data = $request->validate([
                'phone_number' => 'required_without:email',
                'email'        => 'required_without:phone_number',
            ]);
        } catch (\Exception $e) {
            session()->flash('message', 'Yêu cầu điền email hoặc số điện thoại!');
            return redirect()->back();
        }

        $contact = Contact::create($data);

        if ($contact) {
            session()->flash('message', 'Thông tin liên hệ của bạn đang được xử lý. Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!');
        } else {
            session()->flash('message', 'Có lỗi xảy ra, vui lòng thử lại sau!');
        }

        return redirect()->back();
    }
}
