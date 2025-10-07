<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        $videoModel = Video::find($id);
        if (!$videoModel) {
            abort(404);
        }
        $video = $videoModel->toArray();
        foreach ($video['url_hosts'] as &$host) {
            if (isset($host['source']) && strtolower($host['source']) == 'youtube') {
                $host['links'] = $this->youtubeEmbed($host['links']);
            }
            if (isset($host['source']) && strtolower($host['source']) == 'vk') {
                $host['links'] = $this->vkEmbed($host['links']);
            }
            if (isset($host['source']) && strtolower($host['source']) == 'rutube') {
                $host['links'] = $this->rutubeEmbed($host['links']);
            }
        }
        return view('video', compact('video'));
    }

    private function youtubeEmbed($url)
    {
        if (strpos($url, 'embed') !== false)
            return $url;
        if (preg_match('/v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        return $url;
    }

    private function vkEmbed($url)
    {
        if (preg_match('~vk\.com/video(-?\d+)_(\d+)~', $url, $matches)) {
            $oid = $matches[1];
            $id = $matches[2];
            return "https://vk.com/video_ext.php?oid=$oid&id=$id&hd=2";
        } elseif (preg_match('~(?:vk\.com|vkvideo\.ru)/video(-?\d+)_(\d+)~', $url, $matches)) {
            $oid = $matches[1];
            $id = $matches[2];
            return "https://vk.com/video_ext.php?oid=$oid&id=$id&hd=2";
        }
        return $url;
    }

    private function rutubeEmbed($url)
    {
        if (preg_match('~rutube\.ru/video/([a-zA-Z0-9]+)~', $url, $matches)) {
            $id = $matches[1];
            return "https://rutube.ru/play/embed/$id/?skinColor=0e8dee";
        }
        return $url;
    }
}
