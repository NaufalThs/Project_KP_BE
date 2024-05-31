<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppController extends Controller
{
    public function showMessages()
    {
        return view('send-message', ['messages' => Message::all()]);
    }
    
    public function lihatpesan()
    {
        // Ambil semua data kontak dari database
        $Messagers = Message::all();

        // Kembalikan view 'kontak' dan kirim data kontak
        return view('percakapan', ['Messagers' => $Messagers]);
    }

    public function getMessages(Request $request)
    {
        $phone = $request->query('phone');
        if ($phone) {
            // Fetch messages for a specific phone number
            $messages = Message::where('phone', $phone)->get();
        } else {
            // Fetch all messages
            $messages = Message::all();
        }
        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $phone = $request->input('phone');
        $message = $request->input('message');

        Log::info("Sending message to $phone: $message");

        // Save the message to the database
        Message::create([
            'phone' => $phone,
            'message' => $message,
        ]);

        // Send HTTP request to Node.js server
        $response = Http::withOptions([
            'proxy' => ''
        ])->get('http://localhost:3000', [
            'phone' => $phone,
            'message' => $message,
        ]);

        if ($response->successful()) {
            Log::info('Message sent successfully.');
            return response()->json(['status' => 'Message sent successfully']);
        } else {
            Log::error('Failed to send message. Response: ' . $response->body());
            return response()->json(['status' => 'Failed to send message. Check logs for details.'], 500);
        }
    }
}