<?php

namespace App\Http\Controllers;

use App\Models\FeedText;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TextFeedController extends Controller
{
    public function show(string $type): Response
    {

        return response(FeedText::ofType($type)->inRandomOrder()->firstOrFail()->text);
    }

    public function store(Request $request): Response
    {
        if (! $request->hasValidSignature()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return response(FeedText::factory()->create());
    }
}
