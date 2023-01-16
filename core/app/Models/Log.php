<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 'user_id', 'type'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function addLog($message, $type = 'info') {
        Log::create([
            'message' => $message,
            'user_id' => Auth::user() ? Auth::user()->id : null,
            'type' => $type
        ]);
    }

    public static function addInfoLog($message) {
        self::addLog($message, 'info');
    }

    public static function addErrorLog($message) {
        self::addLog($message, 'error');
    }

    public static function addWarningLog($message) {
        self::addLog($message, 'warning');
    }
}
