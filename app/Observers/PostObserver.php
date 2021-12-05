<?php

namespace App\Observers;

use App\Models\post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\post  $post
     * @return void
     */
    public function creating(post $post)
    {
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\post  $post
     * @return void
     */
    public function deleting(post $post)
    {
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }

}
